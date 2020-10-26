@extends('layouts.admin')
@section('title', 'Users')

@section('content')
<div class="container dashboard-container">
    <div class="card bg-dark rounded-0 border-0">
      <h3 class="card-header bt rounded-0"><i class="fa fa-users mr-1"></i> {{__('web.users')}}</h3>

      <div class="card-body">
          <div class="row d-flex justify-content-center">
            <a href="{{route('createuser.create')}}" class="btn bg-danger mb-2">{{__('web.add_user')}}</a>
            <a href="{{route('createAdmin')}}" class="btn bg-danger mx-4 mb-2">{{__('web.add_admin')}}</a>
          </div>
          <hr class="bg-white">
          <div class="table-responsive">
            
            <table class="table mt-4">
              <thead class="thead bg-danger">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">{{__('web.name')}}</th>
                      <th scope="col">{{__('web.email')}}</th>
                      <th scope="col">{{__('web.delete')}}</th>
                    </tr>
              </thead>
              <tbody>
                @if (count($users)>0)
                  @foreach ($users as $user )
                    <tr>
                      <th scope="row">{{$user->id}}</th>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td><form class="" action="{{route('createuser.destroy',$user->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger rounded-0"><i class="fa fa-trash"></i></button>
                      </td>
                    </form>
                      </td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
        </div>
      </div>
    </div>

        {{-- @if (count($users)>0)
          @foreach ($users as $user )

            {{$user->id}}
            {{$user->name}}
            {{$user->email}}
         --}}

          {{-- @endforeach
        @endif --}}
</div>







@stop
