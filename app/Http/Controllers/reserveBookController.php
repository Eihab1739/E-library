<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book ;
use App\Reserve ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Mail\ReserveMail;




class reserveBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserve=Reserve::latest()->get();
        return view('reservation.showreservation')->with('reserve',$reserve);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Mail::to('eihabo@gmail.com')->send(new WelcomeMail());
        return redirect()->back();


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
        $book= Book::find($id);
        // return $book;
        return view('reservation.reservebook')->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        $reserve=Reserve::find($id);
        // $books = DB::table('books')->where('title', $borrow->book_name)->first();
        //    $books->copies+=1;

        // $affectedRows = Book::where('title',$borrow->book_name)->update(array('copies' => $books->copies+=1));

        //    $affectedRows->save();


        //    dd($books);


        // return $book ;
        // $book->copies =  $book->copies+=1 ;
        //  $book->save();

            $reserve->delete();


            return redirect(route('reserve.index'))->with('msg', 'Delete Done');
    }
    public function reserve(Request $request,$id){
        $this->validate($request,[
            'phone'=>'required',
            'email'=>'required',
             ]);

$book=Book::find($id);

               $reserve= new Reserve();



            $reserve->user_id=Auth::user()->id;
            $reserve->user_name=Auth::user()->name ;




          $reserve->book_id=$book->id;
          $reserve->book_name=$book->title ;



            $reserve->email=$request->input('email');

             $reserve->phone=$request->input('phone');

             $reserve->save();
             return redirect()->back();






    }
    public function notification($id)
    {
        $ress=Reserve::find($id);
        $result=$ress->email ;


        Mail::to($result)->send(new ReserveMail());
       // return redirect()->back();
        return redirect(route('reserve.index'))->with('msg','Notification sent successfully');

    }
}
