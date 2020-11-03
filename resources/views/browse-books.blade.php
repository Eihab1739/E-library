@extends('layouts.app')

@section('content')
<div id="swup" class="transition-fade">
    <div id="books" class="">
        <div class="row mx-sm-0 mx-md-auto pt-4">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-2 pt-5 px-4 shadow d-none d-md-block bg-secondary">
                <div  class="categories">
                    @if (count($allCategories)>0)
                        <h5 class="text-white mb-4"><i class="ion-md-list"></i> {{__('web.categories')}}</h5>
                        <ul class="px-2 navbar-nav">
                            @foreach ($allCategories as $category )
                            <a class="text-white" href="{{route('category',$category->id)}}"><li class="nav-item px-1 my-1"> {{$category->name}}</li>  </a>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-10 pt-5 px-4">

                <div class="category-nav mb-4 d-md-none">
                    <button class="navbar-toggler rounded-0 btn-sm btn btn-secondary" data-toggle="collapse" data-target="#category" aria-controls="category" aria-expanded="false">
                        <i class="ion-md-list"></i> {{__('web.categories')}} <i class="ion-md"></i>
                    </button>
                    <div class="collapse p-2 bg-secondary navbar-collapse" id="category">
                        @if (count($allCategories)>0)
                            <ul class="d-flex navbar-nav nav collpase">
                                @foreach ($allCategories as $category )
                                <a class="text-white" href="{{route('category',$category->id)}}"><li class="nav-item px-2 py-1"> {{$category->name}}</li>  </a>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                </div>

                {{-- search form  --}}
                <div class="col">
                    <form action="{{route('search')}}" method="get">
                        @csrf
                        <div class="input-group">
                            <input type="search"  name="search" placeholder="Search book" class="form-control">
                            <span class="input-group-prepend">
                                <button class="btn btn-primary" type="submit"><i class="ion-md-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="card bg-transparent border-0">
                    <div class="row my-4">
                        @foreach ($books as $book )
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div id="book" class="card shadow-sm mb-4">
                                    <div class="card-header">
                                        <img class="card-img-top" src="{{asset('storage/thumbnails/'.$book->image)}}" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-title text-uppercase">{{$book->title}}</h5>
                                        <h6 class="card-subtitle">{{$book->author}}</h6>
                                        <br>
                                        <h5 class="card-title"><i class="fa fa-star text-primary mb-2"></i><br>4.5 / 5</h5>
                                        <a class="btn border-0 rounded-0 btn-primary text-white mt-3" href="{{route('book',$book->id)}}">{{__('web.more')}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="my-4 d-flex justify-content-center">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                          <li class="page-item disabled"><a class="page-link" href="#">{{__('web.first')}}</a></li>
                          <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="">{{__('web.prev')}}</span>
                            </a>
                          </li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span class="">{{__('web.next')}}</span>
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                          <li class="page-item "><a class="page-link" href="#">{{(__('web.last'))}}</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
