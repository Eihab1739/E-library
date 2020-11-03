<?php

namespace App\Http\Controllers;
use App\Rating;
//use willvincent\Rateable\Rating;


use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Auth;
use App\Category;
use Illuminate\Support\Facades\DB;


class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::latest()->get();

        return view('books')->with('books',$books);

    }


public function search(Request $request)

{
    $search = $request->get('search');
    $books= DB::table('books')->where('title','like','%'.$search.'%')
        ->orWhere('id','like','%'.$search.'%')
        ->orWhere('ISBN','like','%'.$search.'%')
        ->orWhere('author','like','%'.$search.'%')
        ->paginate(10);
    return view('browse-books' , compact('books'));


}










    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('updatebook')->with('book',$book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validate($request,[
            'title'=>'required',
            'author'=>'required',
            'info'=>'required',
            'copies'=>'required',
            'image'=>'required|image',
            'book'=>'required|mimes:pdf'

               ]);
               if ($request->hasFile('image')) {
                   $imageExt=$request->file('image')->getClientOriginalExtension();
                  $imageName=time().'thumbnails'.$imageExt;
                  $request->file('image')->storeAs('thumbnails',$imageName);
               }
               if ($request->hasFile('book')) {
                $bookExt=$request->file('book')->getClientOriginalExtension();
               $bookName=time().'book.'.$bookExt;
               $request->file('book')->storeAs('books',$bookName);

            }
            $book = new Book();
            $book->title=$request->input('title');
            $book->author=$request->input('author');
            $book->info=$request->input('info');
            $book->copies=$request->input('copies');

            $book->image=$imageName;
            $book->bookfile=$bookName;
            $book->user_id=Auth::user()->id ;
            $book->category_id=$request->input('category') ;


            $book->save();
            return redirect(route('upload'))->with('msg','Update Done');

        return redirect(route('books'));






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect(route('books.index'))->with('msg','Delete Done');
    }


    public function searchbook(Request $request)

    {
        $search = $request->get('search');
        $books= DB::table('books')->where('title','like','%'.$search.'%')
            ->orWhere('ISBN','like','%'.$search.'%')
            ->orWhere('author','like','%'.$search.'%')
            ->paginate(10);
        return view('books' , compact('books'));


    }
//     public function rate(Request $request, $book_id)
// {

//     $book = Book::find($book_id)->where('user_id', auth()->user()->id)->first();

//     $rating = new Rating();

//     if(is_null($book)){
//         $rating->rating =  $request['rating'];
//         $rating->user_id = auth()->user()->id;
//         $book->ratings()->save($rating);
//         return redirect()->back();

//     }
//     else{
//         return redirect()->back()->with("You already made a review");
//      }
     public function rate(Request $request,$book_id)
     {



        $book = Book::find($book_id);
        // $Rate = Rating::first();
        // dd(Rating::first()->ratings);


        // now lets check if the currently authenticated user
        // has already created a ratings for this book:
        // $book->ratings() will query all ratings for on current book
        // ->where(...) will additionally reduce the result set to those ratings
        // provided by the currently authenticated user
        // ->first() will simply pick the first result if it exists
        $rating = $book->ratings()->where('user_id', auth()->user()->id)->first();
        //  dd( $rating->ratingPercent(10));
// dd($rating);
        // in case there is no rating allocated to the user and the book
        // we can continue creating the new rating
        if(is_null($rating)){
            // $rating = Rating::first();
            $rating = new Rating();

          //   $rating=Rating::first()->ratings();
            $rating->rating = $request->input('rate');
            $rating->user_id = auth()->user()->id;
            $book->ratings()->save($rating);
            $avgStar = Rating::avg('rating');


            $book->Rate=$avgStar;
    $book->save();

            // $rating->save();
           // $book->ratings()->save($rating);
        //    $rating->rateOnce(5);
//dd($rating->rateOnce(5));

            return redirect()->back();
        }
        else{
//            // dd  ( $rating->averageRating(5));
//             // dd($rating->averageRating());
// //return $rating->averageRating();
//             // dd($rating->averageRating(5));

             return redirect()->back()->with("You already made a review");



//             // return redirect(route('books'));

        }


      //  dd($avgStar);
        // $rating = new Rating;
        // $rating->user_id = \Auth::id();
        // dd($rating);
        // $rating->rating = $request->input('star');
        // $food = Rating::find($request->input('id'));
        // dd($food);
        // $food->ratings()->save($rating);
        // return response()->json(['rating' => $rating->rating]);

     }



}

