
@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header text-center">{{$category->name}}</div>

                <div class="card-body">
                    @if (count($books)>0)
                    @foreach ($books as$book )
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('storage/thumbnails/'.$book->image)}}" class=" img-responsive" width="300px" height="200px"/>

                        </div>
                        <div class="col-md-9 text-center">
                            <h2>{{$book->title}}</h2>
                            <p>{{$book->info}}</p>
                            <br/>
                            Author : {{$book->author}}  <br/>
                            <a href="{{asset('storage/books/'.$book->bookfile)}}" class="btn btn-primary">Download </a>
                            <a href="{{route('book',$book->id)}}" class="btn btn-info">More info</a>
                        </div>
                    </div>
                    <hr>

                    @endforeach

                    @endif





                </div>

            </div>


@endsection
