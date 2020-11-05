@extends('layouts.admin')
@section('title')

@section('content')
    <div class="container pb-4 dashboard-container">
      @include('partials.alerts')
    <div class="card bg-dark rounded-0 border-0">
      <div class="card-header mb-4 bt rounded-0">
        <h4><i class="mr-1 fa fa-list"></i> {{__('web.categories')}}</h4>
      </div>


      {{-- search form  --}}
    {{--  <div class="col-md-4">
        <form action="{{route('searchforcategories')}}" method="get">
          @csrf
          <div class="input-group">
            <input type="search"  name="search" placeholder="{{__('web.search')}}" class="form-control">
            <span class="input-group-prepend">
              <button class="btn btn-primary" type="submit"><i class="ion-md-search"></i></button>
            </span>
          </div>
        </form>
      </div>  --}}



          <a href="{{route('categories.create')}}" class="btn bg-danger shadow-sm mx-5">{{__('web.add_category')}}</a>
          <hr>
          <div class="card-body">
            @if (count($categories)>0)
                <div class="table-responsive">
                    <table class="table table-dark text-center">
                            <thead class="thead bg-primary">
                                <tr>
                                    <th scope="col">{{__('web.category')}}</th>
                                    <th scope="col">{{__('web.goto')}}</th>
                                    <th scope="col">{{__('web.delete')}}</th>
                                </tr>
                            </thead>
                        @foreach ($categories as $category )
                            <tbody>
                                <tr>
                                    <td><div class="text-white"> {{$category->name}} </div></td>
                                    <td><a href="/category/{{$category->id}}" class="btn btn-success mx-2"><i class="fa fa-sign-out-alt"></i></a></td>
                                    <td>
                                        <form  action="{{route('categories.destroy',$category->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger mx-2"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            @endif
          </div>
      </div>
  </div>
  @stop
@endsection
