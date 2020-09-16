@extends('layouts.app')
@section('content')
<div class="uk-container">
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@m uk-margin-medium-bottom uk-margin-medium-top" uk-grid>
        <div class="uk-card-media-left uk-cover-container">
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">Project Title : {{$project->title}}</h3>
            <h5 class="uk-card-subtitle">Project Makers : {{$project->maker}}</h5>
            <p class="uk-margin-small-left"> Project Description :{{$project->info}}</p>
            <p class="uk-margin-small-left"> Project Year :{{$project->projectyear}}</p>


            </div>
            <div class="uk-card-footer">
                <a href="{{asset('storage/books/'.$project->projectfile)}}" class="uk-button uk-button-primary uk-margin-small-bottom">Read Online <i class="fa fa-laptop ml-1"></i></a>
                <a href="{{asset('storage/books/'.$project->projectfile)}}" class="uk-button uk-button-primary  uk-margin-small-bottom">Download <i class="fa fa-download ml-1"></i></a>
            </div>
        </div>
    </div>
    <div class="uk-card uk-card-default uk-margin-medium-bottom">
        <div class="uk-card-header">
        </div>
        <div class="uk-card-body">
        </div>
    </div>
</div>
@endsection
