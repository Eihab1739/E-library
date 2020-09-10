<div class="uk-card">
    @include('partials.alerts')
    <form action="{{route('comment',$book->id)}}" method="POST">
        @csrf
        <div class="uk-margin">
            <h5 class="uk-text-bold" for="form-stacked-text">Leave a Review <i class="fa fa-comment-alt ml-1"></i></h5>
            <div class="uk-form-controls">
                <textarea name="comment" class="uk-textarea" id="form-stacked-text" type="text" placeholder="Enter your review ..."></textarea>
            </div>
        </div>
        <button type="submit" name="addcomment" class="uk-button uk-button-primary">Submit</button>
    </form>

    <hr class="uk-margin-medium">

    {{-- review list  --}}
    <ul class="uk-comment-list">
        @foreach ($book->comments as $comment )


        <li>
            <article class="uk-comment-primary">
                <header class="uk-comment-header uk-position-relative">
                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            {{-- <img class="uk-comment-avatar" src="" width="80" height="80" alt=""> --}}
                            <h2 class="fa fa-user fa-4x"></h2>
                        </div>
                        <div class="uk-width-expand">
                            <h4 class="uk-comment-title uk-margin-remove">{{$comment->user->name}}</h4>
                            <p class="uk-comment-meta uk-margin-remove-top">{{$comment->created_at}}</p>
                        </div>

                    </div>
                </header>
                <div class="uk-comment-body">
                    <p>{{$comment->comment}}
                    </p>
                </div>
            </article>
        </li>
        @endforeach

    </ul>
</div>





