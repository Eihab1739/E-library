@extends('layouts.app')

@section('content')
    <div id="books" class="">
        

        <div class="row mx-sm-0 mx-md-auto pt-4">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-2 bg-white pt-5 px-4 shadow d-none d-md-block">
                <div  class="categories" style="height: 100%;overflow:auto">
                    @if (count($allCategories)>0)           
                        <h5 class="text-dark mb-4"><i class="ion-md-list"></i> Categotries</h5>
                        <ul class="px-2 navbar-nav">
                            @foreach ($allCategories as $category )
                            <a class="text-dark" href="{{route('category',$category->id)}}"><li class="nav-item px-1 my-1"> {{$category->name}}</li>  </a>
                            @endforeach
                        </ul>
                    @endif
                </div>                
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-10 pt-5 px-4">                    

                <div class="category-nav mb-4 d-md-none">
                    <button class="navbar-toggler rounded-0 bg-white" data-toggle="collapse" data-target="#category" aria-controls="category" aria-expanded="false">
                        <i class="ion-md-list"></i> Categories <i class="ion-md"></i>
                    </button>
                    <div class="collapse p-2 bg-white navbar-collapse" id="category">
                        @if (count($allCategories)>0)           
                            <ul class="d-flex navbar-nav nav collpase">
                                @foreach ($allCategories as $category )
                                <a class="text-dark" href="{{route('category',$category->id)}}"><li class="nav-item px-2 py-1"> {{$category->name}}</li>  </a>
                                @endforeach
                            </ul>
                        @endif             
                    </div>
                    
                </div>

                {{-- search form  --}}
                <div class="card container p-2 mb-4  shadow-sm">
                    <form action="">
                        <div class="input-group">
                            <input class="form-control d-inline-block" type="search" placeholder="Search ..."> <a href="" class="btn primary-gradient mx-2 text-white"><i class="ion-md-search "></i></a>
                        </div>                
                    </form>
                </div>
                <div class="card bg-transparent border-0">
                    <div class="card-deck mt-4">
                        @foreach ($allBooks as $book )                                                        
                            <div id="book" class="card shadow-sm mb-3">
                                <div class="card-header">
                                    <div class="header">
                                        <img class="card-img-top" src="{{asset('storage/thumbnails/'.$book->image)}}" alt="">                                                                        
                                        <div class="card-overlay">
                                            <h5 class="card-title">{{$book->title}}</h5>
                                            <h6 class="card-subtitle">{{$book->author}}</h6>        
                                            <a class="btn border-0 rounded-0 primary-gradient text-white mt-3" href="{{route('book',$book->id)}}">More Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <h5 class="card-title text-dark">{{$book->title}}</h5>
                                    <h6 class="card-subtitle text-muted">{{$book->author}}</h6>
                                </div>
                            </div>
                        @endforeach
                    </div>                    
                </div>
            </div>            
        </div>
    </div> 
@endsection