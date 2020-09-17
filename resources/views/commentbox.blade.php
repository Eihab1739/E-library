<div class="uk-card">
    @include('partials.alerts')
    <form action="{{route('comment',$book->id)}}" method="POST">
        @csrf
        <div class="">
            <h5 class="text-bold">Leave a Review <i class="ion-md-text ml-1"></i></h5>            
            <textarea name="comment" class="form-control mb-3" id="form-stacked-text" type="text" placeholder="Enter your review ..."></textarea>            
        </div>
        <button type="submit" name="addcomment" class="btn btn-outline-primary">Submit</button>
    </form>

    <hr class="d-block my-3">

    {{-- review list  --}}
    <ul class="navbar-nav">
        @foreach ($book->comments as $comment )
        <li>
            <div class="card my-2">                
                <div class="card-header d-flex p-2" uk-grid>
                    <div class="my-2 mx-3">
                        {{-- <img class="uk-comment-avatar" src="" width="80" height="80" alt=""> --}}
                        <h2 class="ion-md-contact"></h2>
                    </div>
                    <div class="ml-3">
                        <h4 class="uk-comment-title uk-margin-remove">{{$comment->user->name}}</h4>
                        <p class="uk-comment-meta uk-margin-remove-top">{{$comment->created_at}}</p>
                    </div>
                </div>                
                <div class="card-body">
                    <p class="card-text">{{$comment->comment}}</p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>





