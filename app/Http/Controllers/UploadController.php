<?php

namespace App\Http\Controllers;
use App\Category ;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload');
    }
    public function upload(Request $request){
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
            return redirect(route('upload'));











    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
         $book->ISBN=$request->input('ISBN');

         $book->title=$request->input('title');
         $book->author=$request->input('author');
         $book->info=$request->input('info');
         $book->copies=$request->input('copies');

         $book->image=$imageName;
         $book->bookfile=$bookName;
         $book->user_id=Auth::user()->id ;
         $book->category_id=$request->input('category') ;


         $book->save();
         return redirect(route('books.index'))->with('msg','Upload Done');

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
            $book->ISBN=$request->ISBN ;
            $book->title=$request->title;
            $book->author=$request->author;
            $book->info=$request->info;
            $book->copies=$request->copies;

            $book->image=$imageName;
            $book->bookfile=$bookName;
            $book->user_id=Auth::user()->id ;
            $book->category_id=$request->category ;


            $book->save();
            return redirect(route('books.index'))->with('msg','Update Done');

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
}
