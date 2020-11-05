<?php

namespace App\Http\Controllers;
use App\Category ;
use App\Book;
use App\Comment;

use Illuminate\Http\Request;

class PagesController extends Controller
{



    public function index(){
        $books=Book::latest()->paginate(3);
        return view('welcome')->with('books',$books);




    }

   public function viewCategory($id){
       $category= Category::find($id);
       $books=$category->books;
       return view('viewcategory')->with(['books'=>$books,'category'=>$category]);
   }
   public function viewbook($id){
       $book= Book::findOrfail($id);
       return view('book')->with('book',$book );


   }

 public function addcomment(Request $request,$id){

        $this->validate($request,

            [
                'comment'=>  'required|max:200'
            ]
           );
           $book= Book::findOrfail($id);
           $comment = new Comment();
           $comment->user_id = auth()->user()->id;
           $comment->book_id = $book->id ;
           $comment->comment=$request->input('comment');

           $comment->save();
           return redirect()->back()->with('msg','Your Review submitted successfuly');






   }




}
