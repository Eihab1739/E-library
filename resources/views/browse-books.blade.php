@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        {{-- search form  --}}
        <div class="card mx-auto p-2 shadow-sm">
            <form action="">
                <div class="input-group">
                    <input class="form-control d-inline-block" type="search" placeholder="Search ..."> <a href="" class="btn btn-outline-primary mx-2"><i class="ion-md-search "></i></a>
                </div>                
            </form>
        </div>

        <div class="row mx-auto my-5">
            <div class="col-sm-5 col-md-4 col-lg-3" style="height: 85vh;overflow:auto ">
                @if (count($allCategories)>0)                                
                    <ul class="">
                        @foreach ($allCategories as $category )
                            <li class="card shadow-sm border-0 rounded-0 text-center px-2 my-1"><a href="#!" class="nav-link text-left">{{$category->name}}</a></li>                                                
                        @endforeach
                    </ul>
                @endif                    
            </div>
            <div class="col-sm-7 col-md-8 col-lg-9">
                <div class="card bg-transparent border-0">
                    <div class="row">
                        @foreach ($allBooks as $book )                                
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">                        
                                <div class="card shadow-sm mb-3">                                    
                                    <img class="card-img-top" height="200px" src="{{asset('storage/thumbnails/'.$book->image)}}" alt="">                                                                        
                                    <div class="card-body">
                                        <h5 class="card-title">{{$book->title}}</h5>
                                        <h6 class="card-subtitle text-muted">Author: {{$book->author}}</h6>                                    
                                        <a class="btn btn-primary mt-2" href="{{route('book',$book->id)}}">More Details</a>                                        
                                    </div>
                                    <div class="card-overlay d-none">
                                        <p class="lead">{{$book->ISBN}}</p>
                                        <p class="lead">{{$book->copies}}</p>
                                        <a class="btn btn-outline-primary" href="{{route('book',$book->id)}}">More Details</a>                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach                        
                    </div>
                </div>
            </div>            
        </div>
    </div>
@endsection