@extends('layouts.admin')
@section('title', 'Users')

@section('content')
<div class="container dashboard-container">
    <div class="card bg-dark rounded-0 border-0">
      <h3 class="card-header bt rounded-0"><i class="fa fa-users mr-1"></i> {{__('web.users')}}</h3>

      <div class="card-body">
          <div class="row d-flex justify-content-center">
            <a href="{{route('createAdmin')}}" class="btn btn-block bg-primary mx-4 mb-2"><i class="fa fa-user-plus"></i> {{__('web.add_user')}}</a>
          </div>

          <div class="table-responsive">

            <table class="table mt-4 text-center">
              <thead class="thead bg-primary">
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
                      <td>{{$user->id}}</td>
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
