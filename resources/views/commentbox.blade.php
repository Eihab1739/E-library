



            <div class="card">
                <div class="header text-center">Comments</div>


                <div class="card-body">
                    @include('partials.alerts')
                    <form action="{{route('comment',$book->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                        <textarea class="form-control" name="comment" placeholder="Enter your Comment" ></textarea>


                         </div>
                         <div class="form-group">
                         <button type="submit" name="addcomment" class="btn btn-primary">Add Comment</button>
                        </div>
                    </form>

                             <hr>

                             @foreach ($book->comments as $comment )
                             <div class="row">
                                 <h3>{{$comment->user->name}}</h3>  <span text-muted>{{$comment->created_at}}</span>


                                 <p>{{$comment->comment}}</p>


                             </div>

                             @endforeach





















                </div>

            </div>





