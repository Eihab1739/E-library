@extends('layouts.admin')
@section('title')

@section('content')
  <div class="container pb-4 dashboard-container">
      <div class="card bg-dark rounded-0 border-0">          
          <div class="card-header mb-4 bt rounded-0">
            <h4><i class="mr-1 fa fa-list"></i> {{__('web.categories')}}</h4>
          </div>
          <a href="{{route('categories.create')}}" class="btn bg-danger shadow-sm mx-5">{{__('web.add_category')}}</a>          
          <hr>    
          <div class="card-body">                                  
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