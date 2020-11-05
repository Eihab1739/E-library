@extends('layouts.app')
@section('content')
<div class="single-book py-1 py-md-4 bg-black">
    <div class="header bg-transparent border-0 mb-5">
        <div class="overlay-dark" style="background: url({{asset('storage/thumbnails/'.$book ->image)}}) center /cover;filter:blur(10px)"></div>
        <div class="overlay"></div>
        <div class="container">
            @include('partials.alerts')
            <div class="row">
                <div class="col-md-4">
                    <img class="card-img shadow" src="{{asset('storage/thumbnails/'.$book ->image)}}" alt="book cover">
                </div>
                <div class="col-md-8">
                <div class="card-body spacer">


                    <h3 class="card-title text-white text-uppercase mb-3">
                        <b>{{$book ->title}}</b>
                    </h3>
                    <h4 class="card-subtitle text-white d-inline-block text-uppercase">
                        {{$book ->author}}
                    </h4>

                    <hr class="bg-white">
                        <div class="details text-white d-flex justify-content-between flex-wrap">
                            <span class="lead my-1"><b class="text-white">{{__('web.isbn')}} :</b> {{$book->ISBN}}</span>
                            <span class="lead my-1"><b class="text-white">{{__('web.available_copies')}} :</b> {{$book->copies}}</span>

                            <span class="rating d-inline-block">
                                <div class="text-yellow my-1">
                                    @if (($book->Rate)==1)
                                    <i class="ion-md-star h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i>
                                    @elseif (($book->Rate)==2)
                                    <i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i>
                                    @elseif (($book->Rate)==3)
                                    <i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star-outline h2"></i>
                                    @elseif (($book->Rate)==4)
                                    <i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star-outline h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star-outline h2"></i>
                                    @elseif (($book->Rate)==5)
                                    <i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i><i class="ion-md-star h2"></i>
                                    @endif
                                </div>
                            </span>
                        </div>
                    <hr class="bg-white">
                    <h5 class="text-white">{{__('web.desc')}} :- </h5>
                    <p class="my-4 lead text-white"> {{$book->info}}</p>

                    <hr class="bg-white">

                    <div class="link mt-4 d-flex flex-wrap justify-content-start">
                        <a href="{{asset('storage/books/'.$book->bookfile)}}" class="m-1 btn btn-lg btn-success text-white border-0 rounded-0">{{__('web.download')}} <i class="ion-md-download mx-1"></i></a>
                        @if (($book->copies)>0)
                        <a href="{{route('borroww.show',$book->id)}}" class="m-1 btn btn-lg bg-blue text-white rounded-0">{{__('web.borrow')}} <i class="ion-md-log-out mx-1"></i></a>
                        @else
                        <a href="{{route('reserve.show',$book->id)}}" class="m-1 btn btn-lg bg-black text-white rounded-0">{{__('Reserve')}} <i class="ion-md-log-out mx-1"></i></a>
                        @endif

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">



        <div class="card rateing-box p-4">
            <h4 class=""> {{__('web.rtb')}}</h4>
            <br>
           {{-- @ dd($request->all()) --}}
            <span class="rating d-flex">
                <form action="{{route('rate',$book->id)}}"  method="POST">
                    @csrf
                <div class="star-rating">
                    {{-- <input type="hidden" value="{{$book->id}}"> --}}
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                    <br>
                    <button class="btn btn-primary mt-3" type="submit">submit</button>

                </div>
            </form>
            </span>
            <script>
                $('#addStar').change('.star', function(e) {
                    $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                      }
                    });
                    $.ajax({
                      type: 'POST',
                      cache: false,
                      dataType: 'JSON',
                      url: $(this).attr('action'),
                      data: $(this).serialize(),
                      success: function(data) {
                        console.log(data);
                      }
                    });
                  });
            </script>
        </div>

        <div class="mt-4 mt-md-5 pt-md-4">
            @include('commentbox')
        </div>


    </div>
</div>

@endsection
