@extends('adminlte::page')
@section('title')

@section('content')
<div class="container">
    <div class="card">
      <h3 class="card-header"><i class="fa fa-user mr-1"></i> Users</h3>

      <div class="card-body">
          <a href="{{route('createuser.create')}}" class="btn bg-indigo">Add User</a>
          <div class="table-responsive">
            <h5 class="my-4"><i class="fa fa-users mr-1"></i>All Users</h5>
            <table class="table table-hover mt-4">
              <thead class="thead bg-indigo">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Delete</th>
                    </tr>
              </thead>
              <tbody>
                @if (count($users)>0)
                  @foreach ($users as $user )
                    <tr>
                      <th scope="row">{{$user->id}}</th>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>          <form class="" action="{{route('createuser.destroy',$user->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <td><button class="btn btn-danger rounded-0" onclick="confirm('Are You Sure You Want To Delete This ?')">Delete</button></td>
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
