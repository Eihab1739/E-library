@extends('layouts.admin')
@section('title')
@section('content')
  <div class="container dashboard-container">
    @include('partials.alerts')

    <div class="card rounded-0 bg-dark" style="border-top: 5px solid var(--primary)">
      <h4 class="card-header"><i class="fa fa-box-open mr-1"></i> {{trans_choice('web.project',10)}}</h4>
      <div class="card-body">
        <a href="/admin/projects/create" class="btn btn-block bg-primary mb-4">{{__('web.add_project')}}</a>
        {{-- <hr class="bg-white"> --}}
        <div class="table-responsive">
        <table class="table text-center">
          {{-- search form  --}}
          <div class="col mb-4">
            <form action="{{route('searchprojectinadmin')}}" method="get">
                @csrf
                <div class="input-group">
                    <input type="search"  name="search" placeholder="Search project" class="form-control">
                    <span class="input-group-prepend">
                      <button class="btn btn-primary" type="submit"><i class="ion-md-search"></i></button>
                    </span>
                </div>
            </form>
          </div>
          <thead class="thead bg-primary">
            <tr>
              <th scope="col">#</th>
              <th scope="col">{{__('web.title')}}</th>
              <th scope="col">{{__('web.makers')}}</th>
              <th scope="col">{{__('web.edit')}}</th>
              <th scope="col">{{__('web.delete')}}</th>
              <th scope="col">{{__('web.goto')}}</th>
            </tr>
          </thead>
          <tbody>
            {{-- loop throw the books table to view all the books  --}}
            @foreach ($projects as $project)
              <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->maker}}</td>
                <form class="" action="{{route('projects.destroy',$project->id)}}" method="post">
                  @csrf
                  @method('delete')
                  <td><a href="{{route('projects.edit',$project->id)}}" class="btn btn-warning text-white rounded-0"> <i class="fa fa-edit"></i></a></td>
                  <td><button class="btn btn-danger rounded-0" > <i class="fa fa-trash"></i></button></td>
                </form>
                <td><a href="{{route('projects.show',$project->id)}}" class="btn bg-success rounded-0"><i class="fa fa-sign-out-alt"></i></a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
@endsection
