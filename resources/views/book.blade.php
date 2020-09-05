


@extends('layouts.app')

@section('content')

            <div class="card">


                <div class="card-body">

                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('storage/thumbnails/'.$book->image)}}" class=" img-responsive" width="300px" height="200px"/>

                        </div>
                        <div class="col-md-9 text-center">
                            <h2>{{$book->ISBN}}</h2>
                            <h2>{{$book->title}}</h2>
                            <p>{{$book->info}}</p>
                            <br/>
                            Author : {{$book->author}}  <br/>
                            <a href="{{asset('storage/books/'.$book->bookfile)}}" class="btn btn-primary">Download </a>
                            <p>{{$book->copies}}</p>
                        </div>
                    </div>
                    <hr>







                </div>

            </div>
            <hr>
            @include('commentbox')


@endsection

