@extends('layouts.app')

@section('content')
<div id="category">
    <nav class="breadcrumb mt-4 px-1 px-sm-4 py-5 navbar-white primary-gradient">
        <a class="breadcrumb-item nav-link text-white" href="/">Home</a>
        <a class="breadcrumb-item nav-link text-white" href="/books">Categoreis</a>
        <span class="breadcrumb-item active nav-link text-white">{{$category->name}}</span>
        {{-- search form  --}}
        <div class="card mb-4 p-2 shadow-sm">
            <form action="">
                <div class="input-group">
                    <input class="form-control d-inline-block" type="search" placeholder="Search ..."> <a href="" class="btn primary-gradient mx-2 text-white"><i class="ion-md-search"></i></a>
                </div>                
            </form>
        </div>        
    </nav>

    <div class="container pt-5">                 

        <div class="row">            
            @if (count($books)>0)
                @foreach ($books as$book)
                    <div class="col-sm-6 col-md-4 col-lg-3">                        
                        <div id="book" class="card shadow-sm mb-4">                            
                            <div class="card-header">
                                <div class="header">
                                    <img class="card-img-top" height="200px" src="{{asset('storage/thumbnails/'.$book->image)}}" alt="">                            
                                    <div class="card-overlay">
                                        <h5 class="card-title">{{$book->title}}</h5>
                                        <h6 class="card-subtitle ">Teacher: {{$book->author}}</h6>                                                        
                                        <a class="btn primary-gradient rounded-0 text-white mt-4" href="{{route('book',$book->id)}}">More Details</a>                                                
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">{{$book->title}}</h5>
                                <h6 class="card-subtitle text-muted">Teacher: {{$book->author}}</h6>                                                        
                            </div>
                        </div>
                    </div>
                @endforeach                
            @endif
        </div>                                                                                
    </div>
</div>
@endsection
