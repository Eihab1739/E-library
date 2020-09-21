@extends('layouts.app')
@section('content')
<div class="single-book py-1 py-md-4 bg-white">        
    <div class="header bg-transparent border-0 mb-5 primary-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="card-img shadow" src="{{asset('storage/thumbnails/'.$book->image)}}" alt="book cover">        
                </div>
                <div class="col-md-8">
                <div class="card-body spacer">                                        
                    <h3 class="card-title text-uppercase mb-3">
                        <b>{{$book->title}}</b>
                    </h3>                    
                    <h4 class="card-subtitle text-white d-inline-block text-uppercase">                
                        {{$book->author}}
                    </h4>                  
                                            
                    <hr class="bg-white">
                        <div class="details d-flex justify-content-between flex-wrap">
                            <span class="lead my-1"><b class="text-white">ISBN:</b> {{$book->ISBN}}</span>
                            <span class="lead my-1"><b class="text-white">Avilable Copies:</b> {{$book->copies}}</span>
                            <span class="rating d-inline-block">
                                <div class="text-yellow my-1">
                                    <i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star-outline h2"></i>
                                </div>            
                            </span>
                        </div>
                    <hr class="bg-white">

                    <h5 class="my-4 lead"><b class="text-white">Description :- </b> <br> <br> {{$book->info}}</h5>
                    
                    <hr class="bg-white">

                    <div class="link mt-4 d-flex flex-wrap justify-content-start">
                        <a href="{{asset('storage/books/'.$book->bookfile)}}" class="m-1 btn bg-yellow text-primary border-0 rounded-pill">Download <i class="ion-md-download mx-1"></i></a>
                        <a href="#!" class="m-1 btn bg-dark text-white rounded-pill">Borrow <i class="ion-md-log-out mx-1"></i></a>                    
                    </div>
                </div>
                </div>
            </div>
        </div>
        <img class="shape d-none d-md-block" src="{{asset('images/shapes/shape-r1.png')}}" alt="" width="100%">
    </div>    
    <br>
    <div class="container">
        <div class="card p-4">
            <h4><i class="ion-md-star"></i> Rating :-</h4>            
            <hr>
            <h4 class=""> Rate This Book</h4>
            <br>
            <span class="rating d-inline-block">
                <div class="text-yellow">
                    <i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i>
                </div>            
            </span>
        </div>

        <div class="mt-4 mt-md-5 pt-md-4">
            @include('commentbox')
        </div>        
            
        
    </div>    
</div>

@endsection