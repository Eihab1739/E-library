@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-5">
        {{-- search form  --}}
        <div class="col-md-4">
            <form action="{{route('search')}}" method="get">
                @csrf
                <div class="input-group">
                    <input type="search"  name="search" placeholder="Search book" class="form-control">
                    <span class="input-group-prepend">
                    <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                </div>
            </form>
        </div>

        <div class="row mx-sm-0 mx-md-auto mt-4">
            <div class="col-sm-12 col-md-3 col-lg-2">
                <div class="categories mb-4" style="overflow-x:hidden ">
                    @if (count($allCategories)>0)
                    <ul class="p-0">
                        @foreach ($allCategories as $category )
                            <li class=" px-2 my-1 primary-gradient"><a class="nav-link text-left text-white" href="{{route('category',$category->id)}}"> {{$category->name}}</a></li>
                        @endforeach
                    </ul>
                @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-10">
                <div class="card bg-transparent border-0">
                    <div class="card-deck" style="display: grid;gap:.3rem;grid-template-columns: repeat(auto-fit,minmax(230px,1fr))">
                        @foreach ($books as $book )
                            <div class="card shadow-sm mb-3">
                                <img class="card-img-top" height="200px" src="{{asset('storage/thumbnails/'.$book->image)}}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{$book->title}}</h5>
                                    <h6 class="card-subtitle text-muted">{{$book->author}}</h6>
                                </div>
                                <div class="card-footer bg-white p-2">
                                    <a class="btn btn-block primary-gradient text-white mt-3" href="{{route('book',$book->id)}}">More Details</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
