@extends('layouts.app')
@section('content')
<div class="single-book py-1 py-md-4 bg-black">
    <div class="header bg-transparent border-0 mb-5" style="background: url({{asset('storage/thumbnails/'.$book ->image)}})">
        <div class="overlay-dark"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="card-img shadow" src="{{asset('storage/thumbnails/'.$book ->image)}}" alt="book cover">
                </div>
                <div class="col-md-8">
                <div class="card-body spacer">
                    <h3 class="card-title text-white text-uppercase mb-3">
                        <b>{{$book ->title}}</b>
                    </h3>
                    <h4 class="card-subtitle text-white d-inline-block text-uppercase">
                        {{$book ->author}}
                    </h4>

                    <hr class="bg-white">
                        <div class="details text-white d-flex justify-content-between flex-wrap">
                            <span class="lead my-1"><b class="text-white">{{__('web.isbn')}} :</b> {{$book->ISBN}}</span>
                            <span class="lead my-1"><b class="text-white">{{__('web.available_copies')}} :</b> {{$book->copies}}</span>
                            <span class="rating d-inline-block">
                                <div class="text-yellow my-1">
                                    <i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star-outline h2"></i>
                                </div>
                            </span>
                        </div>
                    <hr class="bg-white">
                    <h5 class="text-white">{{__('web.desc')}} :- </h5>
                    <p class="my-4 lead text-white"> {{$book->info}}</p>
                    
                    <hr class="bg-white">

                    <div class="link mt-4 d-flex flex-wrap justify-content-start">
                        <a href="{{asset('storage/books/'.$book->bookfile)}}" class="m-1 btn btn-lg btn-success text-white border-0 rounded-0">{{__('web.download')}} <i class="ion-md-download mx-1"></i></a>
                        <a href="#!" class="m-1 btn btn-lg bg-blue text-white rounded-0">{{__('web.borrow')}} <i class="ion-md-log-out mx-1"></i></a>                    
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="card rateing-box p-4">
            <h4><i class="ion-md-star"></i> {{__('web.rating')}} :-</h4>            
            <hr class="bg-white">
            <h4 class=""> {{__('web.rtb')}}</h4>
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
