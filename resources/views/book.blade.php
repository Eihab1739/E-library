@extends('layouts.app')
@section('content')
<div class="single-book container pt-5">
    <div class="card mb-3 w-100 shadow">
        <div class="row">
            <div class="col-md-4">
                <img class="card-img" src="{{asset('storage/thumbnails/'.$book->image)}}" alt="book cover">
            </div>
            <div class="col-md-8">
            <div class="card-body spacer">
                <h3 class="card-title text-uppercase mb-3">
                    <b>{{$book->title}}</b>
                </h3>
                <h4 class="card-subtitle text-muted text-uppercase">
                    {{$book->author}}
                </h4>

                <div class="rating">
                    <div class="d-flex py-2 primary-text-gradient">
                        <i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i>
                    </div>
                </div>



                <h5 class="my-4 lead"><b class="bb primary-text-gradient">ISBN:</b> {{$book->ISBN}}</h5>
                <h5 class="my-4 lead"><b class="bb primary-text-gradient">Avilable Copies:</b> {{$book->copies}}</h5>
                <h5 class="my-4 lead"><b class="bb primary-text-gradient">Description :- </b> <br> <br> {{$book->info}}</h5>
                <div class="link mt-4 d-flex flex-wrap justify-content-start">
                    <a href="{{asset('storage/books/'.$book->bookfile)}}" class="m-1 btn primary-gradient text-white">Read Online <i class="ion-md-laptop ml-1"></i></a>
                    <a href="{{asset('storage/books/'.$book->bookfile)}}" class="m-1 btn bg-gradient-green text-white border-0">Download <i class="ion-md-download ml-1"></i></a>
                    <a href="#!" class="m-1 btn bg-gradient-dark text-white">Borrow <i class="ion-md-log-out ml-1"></i></a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="card p-4 shadow">
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

    <div class="card p-md-4 mt-4 shadow">
        <div class="card-header bg-white">
            <h3 class="card-title"><i class="ion-md-text"></i> Reviews</h3>
        </div>
        <div class="card-body px-2">
            @include('commentbox')
        </div>
    </div>
</div>
@endsection
