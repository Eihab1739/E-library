@extends('adminlte::page')
@section('title')

@section('content')
  <div class="container">
      <div class="p-4 card" style="border-top: 4px solid var(--indigo)">
          <h4><i class="mr-1 fa fa-list"></i> Categories</h4>
          <hr>                  
          <a href="{{route('categories.create')}}" class="btn bg-indigo">Add Category</a>          
          <h5 class="my-4"><i class="mr-1 fa fa-list"></i> All Categoreis</h5>          
          @if (count($categories)>0)            
            <div class="row">
              @foreach ($categories as $category )
                <div class="col-sm-6 col-md-4 col-lg-3">                  
                  <div class="text-center card rounded-0" style="border-top: 4px solid var(--indigo)">                    
                    <div class="card-body">
                      <div class="card-title">
                        #{{$category->id}}
                      </div>
                      {{$category->name}}
                    </div>
                  </div>
                </div>              
              @endforeach
            </div>
          @endif
      </div>
  </div>  
  @stop
@endsection