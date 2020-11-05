@extends('layouts.app')
@section('content')
<div class="single-exam">
    <div class="container d-flex justify-content-center">
        @include('partials.alerts')

        <div class="card w-100 my-5 bg-secondary text-white mx-auto shadow">
            <div class="card-header bg-primary">
                <img class="card-img-top" width="100px" height="150px" src="{{asset('images/icons/flat/Test.svg')}}" alt="book cover">
            </div>
            <div class="card-body spacer">
                <h3 class="card-title text-uppercase mb-4">{{$exam->title}}</h3>
                <h5 class="card-subtitle lead my-2 ">
                <b>{{__('web.teacher')}} :</b>
                {{$exam->author}}</h5>
                <p class="card-text  lead"><b>{{__('web.date')}} :</b> {{$exam->examyear}}</p>
                <p class="lead mt-4"><strong>{{__('web.desc')}} :- </strong><br> {{$exam->info}}</p>
                <div class="link mt-4 d-flex flex-wrap justify-content-start">
                    <a href="{{asset('storage/books/'.$exam->examfile)}}" class="mx-1 btn btn-success text-white border-0 shadow">{{__('web.download')}} <i class="ion-md-download ml-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
