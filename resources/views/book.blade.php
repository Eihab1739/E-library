@extends('layouts.app')
@section('content')
<div class="uk-container">
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@m uk-margin-medium-bottom uk-margin-medium-top" uk-grid>
        <div class="uk-card-media-left uk-cover-container">
        <img src="{{asset('storage/thumbnails/'.$book->image)}}" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <div class="uk-card-badge uk-label uk-text-capitalize uk-padding-small uk-rounded">{{$book->copies}} copies <i data-uk-icon="copy"></i></div>            
            <h3 class="uk-card-title">Book Title : {{$book->title}}</h3>
            <h5 class="uk-card-subtitle">Book Author : {{$book->author}}</h5>
            <h5 class="uk-card-subtitle">Book Description : -</h5>
            <p class="uk-margin-small-left"> {{$book->info}}</p>
    
            </div>
            <div class="uk-card-footer">
                <p>ISBN : {{$book->ISBN}}</p>
                <p><b>{{$book->avilable}}</b></p>
                <a href="{{asset('storage/books/'.$book->bookfile)}}" class="uk-button uk-button-primary uk-margin-small-bottom">Read Online <i class="fa fa-laptop ml-1"></i></a>                
                <a href="{{asset('storage/books/'.$book->bookfile)}}" class="uk-button uk-button-primary  uk-margin-small-bottom">Download <i class="fa fa-download ml-1"></i></a>
            </div>
        </div>    
    </div>
    <div class="uk-card uk-card-default uk-margin-medium-bottom">
        <div class="uk-card-header">
            <h3 class="uk-card-title"><i data-uk-icon="comments"></i> Reviews</h3>
        </div>
        <div class="uk-card-body">        
            @include('commentbox')
        </div>
    </div>
</div>
@endsection