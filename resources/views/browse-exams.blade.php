@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        {{-- search form  --}}
        <div class="card p-2 shadow-sm">
            <form action="">
                <div class="input-group">
                    <input class="form-control d-inline-block" type="search" placeholder="Search ..."> <a href="" class="btn primary-gradient text-white mx-2"><i class="ion-md-search "></i></a>
                </div>                
            </form>
        </div>

        <div class="row mt-4">        
            @foreach ($allExams as $exam )                                
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">                        
                    <div id="book" class="card shadow-sm mb-4">
                        <div class="card-header primary-gradient">
                         <div class="header">
                            <img class="card-img-top" src="{{asset('images/icons/flat/Test.svg')}}" alt="">                                    
                            <div class="card-overlay">
                                <h5 class="card-title">{{$exam->title}}</h5>
                                <h6 class="card-subtitle">Teacher: {{$exam->author}}</h6>                                                        
                                <a class="btn primary-gradient text-white mt-4" href="{{route('exams.show',$exam->id)}}">More Details</a>                                                
                            </div>
                        </div>
                        </div>
                        <div class="card-footer">
                            <h5 class="card-title">{{$exam->title}}</h5>
                            <h6 class="card-subtitle text-muted">Teacher: {{$exam->author}}</h6>                                                        
                        </div>                                                                                                                                                                    
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection