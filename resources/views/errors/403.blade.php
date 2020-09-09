@extends('layouts.app')

@section('content')
        <div class="uk-container uk-text-center">
            <div class="uk-section-large uk-section-default">
                <div class="uk-card uk-card-primary uk-card-hover">                    
                    <div>
                        <div class="uk-card-body">
                            <h2 class="uk-heading-small">Error 403</h2>
                            <h4>You Dont Have Permisson To View This Page</h4>
                            <h5>Go Back Home</h5>
                            <div class="uk-button-group uk-margin-small-top">
                                <button  class="uk-button-primary uk-button-default uk-disabled"><span data-uk-icon="home"></span ></button>                    
                                <a href="/"  class="uk-button uk-button-primary uk-button-default">Home page</a>
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection