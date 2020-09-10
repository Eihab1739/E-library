@extends('layouts.app')

@section('content')


    <!-- books section  -->
    <div class="uk-section uk-section-small uk-section-muted">        
        <div class="uk-container">             
            <h3 class="uk-heading-line uk-text-center"><span>Featured Books</span></h3>
            <div class="uk-grid uk-grid-small uk-child-width-2-3 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l" uk-height-match="target: > div > .uk-card > .media-top; row: false" data-uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-width-medium">
                        <div class="uk-card-media-top">                            
                            <img class="uk-height-medium uk-width-medium" src="images/4.jpg" alt="">                                                                                                                        
                        </div>
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex uk-flex-middle" data-uk-grid>
                                <div class="uk-width-expand">
                                    <h5 class="uk-margin-remove-bottom">I´m the book title</h5>
                                    <p class="uk-text-meta uk-margin-remove">I'am book author</p>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="uk-inline">
                                        <a data-uk-icon="icon:more-vertical"></a>
                                        <div data-uk-dropdown="mode: click; pos:top-right">
                                            <ul class="uk-nav uk-dropdown-nav">
                                                <li><a href="#"><span class="fa fa-info-circle uk-margin-small-right"></span> More Info</a></li>
                                                <li><a href="#"><span class="fa fa-download uk-margin-small-right"></span> Download</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>        
        </div>
    </div>
@endsection
