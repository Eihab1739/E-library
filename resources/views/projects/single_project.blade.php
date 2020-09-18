@extends('layouts.app')
@section('content')
<div class="container py-5">    
    <div class="card my-5 w-75 mx-auto shadow-sm">        
            <div class="card-header">
                <img height="150px" class="w-100 card-img-top" src="{{asset('images/icons/flat/Certificate.svg')}}" alt="project cover">        
            </div>            
            <div class="card-body spacer">
                <h3 class="card-title text-uppercase mb-5">{{$project->title}}</h3>
                <h5 class="card-subtitle lead my-2 ">
                <h5 class="card-subtitle">Project Makers : <small> {{$project->maker}} </small></h5>
                <p class="card-text  lead"><b>Date:</b> {{$project->projectyear}}</p>                
                <p class="lead mt-5"><strong>Description :- </strong><br> {{$project->info}}</p>
                <div class="link mt-5 d-flex flex-wrap justify-content-start">
                    <a href="{{asset('storage/projects/'.$project-> projectfile)}}" class="m-1 btn btn-outline-primary">Read Online <i class="ion-md-laptop ml-1"></i></a>                
                    <a href="{{asset('storage/projects/'.$project-> projectfile)}}" class="m-1 btn btn-outline-success">Download <i class="ion-md-download ml-1"></i></a>                    
                </div>
            </div>                    
    </div>    
</div>
@endsection