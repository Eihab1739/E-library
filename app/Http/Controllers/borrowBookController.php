<?php

namespace App\Http\Controllers;
use App\Book ;
use App\borrow ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\WelcomeMail ;
use App\Mail\ReserveMail ;


use Illuminate\Http\Request;

class borrowBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book=new Book();
        $borrow=borrow::latest()->get();

        return view('displayBorrowers')->with('borrow',$borrow,'book',$book);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book=App\Book::all();
               return view('borrowbook');

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
            'phone'=>'required|min:10|max:10',
            'email'=>'required',
            'trip-end'=>'required',

               ]);
      //  $book=Book::where('id', $id)->first();
   $book = DB::table('books')->pluck('copies','id');

               $borrow = new borrow();


$sub=1;
//$tot=Book::decrement('copies', $sub) ;
            $borrow->user_id=Auth::user()->id;
               $books= $book->copies ;
                 $book->save();
               $borrow->book_id=$book->id ;

           //     dd($book->id);


            $borrow->email=$request->input('email');

             $borrow->phone=$request->input('phone');
             $borrow->start_date=$request->input('trip-start');
             $borrow->end_date=$request->input('trip-end');

             $borrow->save();
             return redirect()->back();




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id )
    {
        $book= Book::find($id);
        // return $book;
        return view('borrowbook')->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=Book::find($id);
        $borrow=borrow::latest()->get();

        return view('displayBorrowers')->with('borrow',$borrow,'book',$book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
       // $book=Book::where('book_id',$id);
       $borrow=borrow::find($id);
       $books = DB::table('books')->where('title', $borrow->book_name)->first();
    //    $books->copies+=1;

       $affectedRows = Book::where('title',$borrow->book_name)->update(array('copies' => $books->copies+=1));

    //    $affectedRows->save();


    //    dd($books);


      // return $book ;
        // $book->copies =  $book->copies+=1 ;
         //  $book->save();

           $borrow->delete();


           return redirect(route('borroww.index'))->with('msg', 'Return Done');

    }
    public function borrow(Request $request,$id){


// return $request;
        $this->validate($request,[
            'phone'=>'required|min:10|max:10',
            'email'=>'required',
            'trip-end'=>'required', ]);

$book=Book::find($id);

               $borrow = new borrow();


$sub=1;
//$tot=Book::decrement('copies', $sub) ;
            $borrow->user_id=Auth::user()->id;
            $borrow->user_name=Auth::user()->name;




          $book->copies =  $book->copies-=1 ;
          $borrow->book_id=$book->id;
          $borrow->book_name=$book->title ;



            $borrow->email=$request->input('email');

             $borrow->phone=$request->input('phone');
             $borrow->end_date=$request->input('trip-end');

             $book->save();
             $borrow->save();
            //  return redirect(route(''.$request->id));
             return redirect('/book/'.$request->id)->with('msg','Borrow Done Successfuly');
    }
    public function returnBook($id)
    {


$book=Book::find($id);









          $book->copies =  $book->copies-=1 ;






             $book->save();

             return redirect()->back();




    }
    public  function borrowNotification($id){

        $ress=borrow::find($id);
       // dd($ress);
        // dd($ress);
         $result=$ress->email ;


        Mail::to($result)->send(new WelcomeMail());
       // return redirect()->back();
        return redirect(route('borroww.index'))->with('msg','Notification sent successfully');

    }

}
