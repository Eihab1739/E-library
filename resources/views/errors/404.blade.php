@extends('layouts.app')

@section('content')
        <div class="uk-container uk-text-center">
            <div class="uk-section-large uk-section-default">
                <div class="uk-card uk-card-primary uk-card-hover">                    
                    <div>
                        <div class="uk-card-body">
                            <h4>You Lost Your Way (>_<) ? </h4>
                            <h2 class="uk-heading-small">Error 404 Page Not Found</h2>
                            <h4> Try the link below !!</h4>
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