<div class="card bg-black text-white comments-box p-2 p-sm-5">
    <h3 class="mb-4"><i class="ion-md-text"></i> Reviews</h3>
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
        <li class="mt-4">
            <div class="card bg-secondary my-2 px-2">              
                <div class="card-header bg-secondary d-flex p-2 align-items-center">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="avatar py-4 px-5 bg-primary rounded">
                            <img class="avatar" src="" alt="">                                
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <div class="ml-3">
                                <h5 class="">{{$comment->user->name}}</h5>
                                <p class=""><i class="ion-md-calendar text-primary mx-1 fa-lg"></i> {{$comment->created_at}}</p>
                            </div>
                        </div>                
                    </div>
                </div>
                <hr class="bg-white m-0">
                <div class="card-body bg-secondary">
                    <p class="card-text">{{$comment->comment}}</p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>





