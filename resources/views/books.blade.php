
@extends('adminlte::page')
@section('title')
@section('content')

            <div class="card">
                <div class="card-header text-center">All Books</div>

                <div class="card-body">
                    @foreach ($books as$book )
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('storage/thumbnails/'.$book->image)}}" class=" img-responsive" width="300px" height="200px"/>

                        </div>
                        <div class="col-md-9 text-center">
                            ISBN:{{$book->ISBN}} <br/>
                            <h2>Title:{{$book->title}}</h2>
                            <p>{{$book->info}}</p>
                            <br/>
                            Author : {{$book->author}}  <br/>
                            <tr><a href="{{route('book',$book->id)}}" class="btn btn-info">More info</a>
                           <form class="" action="{{route('books.destroy',$book->id)}}" method="POST">
                               @csrf
                               @method('delete')

                               <button class="btn btn-danger btn-sm">Delete</button>
                               <a href="{{route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a>





                           </form>


                            COPIES:{{$book->copies}}


                        </div>
                    </div>
                    <hr>

                    @endforeach






                </div>

            </div>


@endsection
