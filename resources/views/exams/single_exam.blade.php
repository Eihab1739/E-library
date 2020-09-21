@extends('layouts.app')
@section('content')
<div class="single-exam">
    <div class="container d-flex justify-content-center">        
        <div class="card w-100 my-5 mx-auto shadow">        
            <div class="card-header primary-gradient">
                <img class="card-img-top" width="100px" height="150px" src="{{asset('images/icons/flat/Test.svg')}}" alt="book cover">        
            </div>            
            <div class="card-body spacer">
                <h3 class="card-title text-uppercase mb-4">{{$exam->title}}</h3>
                <h5 class="card-subtitle lead my-2 ">
                <b>Teacher:</b> 
                {{$exam->author}}</h5>                  
                <p class="card-text  lead"><b>Date:</b> {{$exam->examyear}}</p>                
                <p class="lead mt-4"><strong>Description :- </strong><br> {{$exam->info}}</p>
                <div class="link mt-4 d-flex flex-wrap justify-content-start">
                    <a href="{{asset('storage/books/'.$exam->examfile)}}" class="m-1 btn primary-gradient text-white border-0 shadow">Read Online <i class="ion-md-laptop ml-1"></i></a>                
                    <a href="{{asset('storage/books/'.$exam->examfile)}}" class="m-1 btn bg-gradient-green text-white border-0 shadow">Download <i class="ion-md-download ml-1"></i></a>                    
                </div>
            </div>            
        </div>         
    </div>
</div>
@endsection