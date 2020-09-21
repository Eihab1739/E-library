@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        {{-- search form  --}}
        <div class="card p-2 mb-4 shadow-sm">
            <form action="">
                <div class="input-group">
                    <input class="form-control d-inline-block" type="search" placeholder="Search ..."> <a href="" class="btn primary-gradient text-white mx-2"><i class="ion-md-search "></i></a>
                </div>                
            </form>
        </div>

        <div class="row my-2 my-md-3">
            @foreach ($allProjects as $project )                                            
                <div class="col-sm-12 col-md-4 col-lg-3">                
                    <div class="card shadow-sm mb-4">
                        <div class="card-header primary-gradient">
                            <img class="card-img-top" src="{{asset('images/icons/flat/Certificate.svg')}}" alt="">                                    
                        </div>                                    
                        <div class="card-body px-4">
                            <h5 class="card-title">{{$project->title}}</h5>
                            <p class="card-subtitle text-muted">By: {{$project->maker}}</p>                                    
                            
                        </div>        
                        <div class="card-footer bg-white">
                            <a class="btn primary-gradient text-white mt-2" href="{{route('projects.show',$project->id)}}">More Details</a>                                        
                        </div>                                                                                                        
                    </div>                            
                </div>
            @endforeach                
        </div>
    </div>
@endsection