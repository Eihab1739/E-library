@extends('layouts.app')
@section('content')
<div class="container pt-5">    
    <div class="card mb-3 w-100 shadow-sm">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img class="card-img" src="{{asset('storage/thumbnails/'.$book->image)}}" alt="book cover">        
            </div>
            <div class="col-md-8">
            <div class="card-body spacer">
                <h3 class="card-title text-uppercase mb-5">
                {{$book->title}}</h3>
                <h5 class="card-subtitle lead my-2 ">
                <b>Author:</b> 
                {{$book->author}}</h5>                  
                <p class="card-text  lead"><b>ISBN:</b> {{$book->ISBN}}</p>
                <p class="card-text lead"><b>Avilable Copies:</b> {{$book->copies}}</p>
                <p class="lead mt-5"><strong>Description :- </strong><br> {{$book->info}}</p>
                <div class="link mt-5 d-flex flex-wrap justify-content-start">
                    <a href="{{asset('storage/books/'.$book->bookfile)}}" class="m-1 btn btn-outline-primary">Read Online <i class="ion-md-laptop ml-1"></i></a>                
                    <a href="{{asset('storage/books/'.$book->bookfile)}}" class="m-1 btn btn-outline-success">Download <i class="ion-md-download ml-1"></i></a>
                    <a href="#!" class="m-1 btn btn-outline-dark">Borrow <i class="ion-md-log-out ml-1"></i></a>                    
                </div>
            </div>
            </div>
        </div>
    </div>    
    
    <div class="card p-4">
        <h4><i class="ion-md-star"></i> Rating</h4>
        <div class="d-flex p-2">
            <i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i> <i class=" mt-2 ml-4">5 Stars</i>
        </div>
        <hr>
        <h4 class=""> Rate This Book</h4>
        <br>
        <div class="d-flex p-2">
            <i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i>
        </div>
    </div>

    <div class="card p-4 mt-4 shadow-sm">
        <div class="card-header bg-white">
            <h3 class="card-title"><i class="ion-md-text"></i> Reviews</h3>
        </div>
        <div class="card-body">        
            @include('commentbox')
        </div>
    </div>    
</div>
@endsection