<div class="">
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
            <div class="card my-2 px-2">                
                <div class="card-header bg-white d-flex p-2 align-items-center">
                    <div class="my-2 mx-3">
                        {{-- <img class="uk-comment-avatar" src="" width="80" height="80" alt=""> --}}
                        <h1 class="primary-text-gradient ion-md-contact"></h1>
                    </div>
                    <div class="ml-3">
                        <h5 class="">{{$comment->user->name}}</h5>
                        <p class="text-muted">{{$comment->created_at}}</p>
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





