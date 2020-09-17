@extends('layouts.app')
@section('content')
<div class="container py-5">    
    <div class="card my-5 w-75 mx-auto shadow-sm">
        <div class="row no-gutters">
            <div class="card-header">
            <img class="card-img" src="{{asset('images/icons/flat/Test.svg')}}" alt="book cover">        
            </div>
            <div class="col-md-8">
            <div class="card-body spacer">
                <h3 class="card-title text-uppercase mb-5">{{$exam->title}}</h3>
                <h5 class="card-subtitle lead my-2 ">
                <b>Teacher:</b> 
                {{$exam->author}}</h5>                  
                <p class="card-text  lead"><b>Date:</b> {{$exam->examyear}}</p>                
                <p class="lead mt-5"><strong>Description :- </strong><br> {{$exam->info}}</p>
                <div class="link mt-5 d-flex flex-wrap justify-content-start">
                    <a href="{{asset('storage/exams/'.$exam->examfile)}}" class="m-1 btn btn-outline-primary">Read Online <i class="ion-md-laptop ml-1"></i></a>                
                    <a href="{{asset('storage/exams/'.$exam->examfile)}}" class="m-1 btn btn-outline-success">Download <i class="ion-md-download ml-1"></i></a>                    
                </div>
            </div>
            </div>
        </div>
    </div>    
</div>
@endsection