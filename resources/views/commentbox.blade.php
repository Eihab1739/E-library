<div class="uk-card"> 
    @include('partials.alerts')
    <form action="{{route('comment',$book->id)}}" method="POST">
        @csrf
        <div class="uk-margin">
            <h5 class="uk-text-bold" for="form-stacked-text">Leave a Review <i class="fa fa-comment-alt ml-1"></i></h5>
            <div class="uk-form-controls">
                <textarea class="uk-textarea" id="form-stacked-text" type="text" placeholder="Enter your review ..."></textarea>
            </div>
        </div>
        <button type="submit" name="addcomment" class="uk-button uk-button-primary">Submit</button>
    </form>

    <hr class="uk-margin-medium">

    {{-- review list  --}}
    <ul class="uk-comment-list">
        @foreach ($book->comments as $comment )
            <li>
                <article class="uk-comment uk-visible-toggle" tabindex="-1">
                    <header class="uk-comment-header uk-position-relative">
                        <div class="uk-grid-medium uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                {{-- <img class="uk-comment-avatar" src="" width="80" height="80" alt=""> --}}
                                <h2 data-uk-icon="user"></h2>
                            </div>
                            <div class="uk-width-expand">
                                <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">{{$comment->user->name}}</a></h4>
                                <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">{{$comment->created_at}}</a></p>
                            </div>
                        </div>                    
                    </header>
                    <div class="uk-comment-body">
                        <p>{{$comment->comment}}</p>
                    </div>
                </article>
            </li>            
        </article>
        @endforeach
        <li>
            <article class="uk-comment-primary">
                <header class="uk-comment-header uk-position-relative">
                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            {{-- <img class="uk-comment-avatar" src="" width="80" height="80" alt=""> --}}
                            <h2 class="fa fa-user fa-4x"></h2>
                        </div>
                        <div class="uk-width-expand">
                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Jhon Doe</a></h4>
                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">22/8/2020</a></p>
                        </div>
                    </div>                    
                </header>
                <div class="uk-comment-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quo aspernatur ipsum enim commodi saepe architecto unde ut iure consequatur?
                        ectetur adipisicing elit. Vitae quo aspernatur ipsum enim commodi saepe architecto unde ut iure consequatur?
                    </p>
                </div>
            </article>
        </li>
        <li>
            <article class="uk-comment-primary">
                <header class="uk-comment-header uk-position-relative">
                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            {{-- <img class="uk-comment-avatar" src="" width="80" height="80" alt=""> --}}
                            <h2 class="fa fa-user-ninja fa-4x"></h2>
                        </div>
                        <div class="uk-width-expand">
                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Kong Foo</a></h4>
                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">2/9/2020</a></p>
                        </div>
                    </div>                    
                </header>
                <div class="uk-comment-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quo aspernatur ipsum enim commodi saepe architecto unde ut iure consequatur?
                        ectetur adipisicing elit. Vitae quo aspernatur ipsum enim commodi saepe architecto unde ut iure consequatur?
                    </p>
                </div>
            </article>
        </li>
    </ul>
</div>





