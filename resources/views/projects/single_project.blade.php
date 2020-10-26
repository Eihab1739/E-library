@extends('layouts.app')
@section('content')
<div class="single-project">
    <div class="container py-5">    
        <div class="card bg-secondary text-white mx-auto shadow">        
            <div class="card-header bg-primary">
                <img height="150px" class="w-100 card-img-top" src="{{asset('images/icons/strategy.svg')}}" alt="project cover">        
            </div>            
            <div class="card-body spacer">
                <h3 class="card-title text-uppercase mb-4">{{$project->title}}</h3>
                <h5 class="card-subtitle lead my-2 ">
                <h5 class="card-subtitle">{{__('web.project_makers')}} : <small> {{$project->maker}} </small></h5>
                <p class="card-text  lead"><b>{{__('web.date')}} :</b> {{$project->projectyear}}</p>                
                <p class="lead mt-3"><strong>{{__('web.desc')}} :- </strong><br> {{$project->info}}</p>
                <div class="link mt-4 d-flex flex-wrap justify-content-start">                    
                    <a href="{{asset('storage/books/'.$project-> projectfile)}}" class="mx-1 btn btn-success text-white border-0 shadow">{{__('web.download')}} <i class="ion-md-download ml-1"></i></a>                    
                </div>
            </div>                    
        </div>    
    </div>
</div>
@endsection