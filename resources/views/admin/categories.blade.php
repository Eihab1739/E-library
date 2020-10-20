@extends('adminlte::page')
@section('title')

@section('content')
  <div class="container pb-4">
      <div class="card bg-dark" style="border-top: 4px solid var(--danger)">          
          <div class="card-header mb-4">
            <h4><i class="mr-1 fa fa-list"></i> Categories</h4>
          </div>
          <a href="{{route('categories.create')}}" class="btn bg-danger shadow-sm mx-5">Add Category</a>          
          <hr>    
          <div class="card-body">                                  
            <h5 class="mb-4"><i class="mr-1 fa fa-list"></i> All Categoreis</h5>          
            @if (count($categories)>0)            
              <div class="row">
                @foreach ($categories as $category )
                  <div class="col-sm-6 col-md-4 col-lg-3">                  
                    <a href="/category/{{$category->id}}">
                      <div class="card bg-secondary text-center rounded-0" style="border-top: 4px solid var(--danger)">                    
                        <div class="card-body text-white">
                          <div class="card-title">
                            #{{$category->id}}
                          </div>
                          {{$category->name}}
                        </div>
                      </div>
                    </a>
                  </div>              
                @endforeach
              </div>
            @endif
          </div>
      </div>
  </div>  
  @stop
@endsection