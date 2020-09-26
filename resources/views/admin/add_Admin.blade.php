@extends('adminlte::page')

@section('title')

@section('content')

    <div class="container">
        <div class="card w-75 mx-auto bg-dark">
          <div class="card-header" style="border-top: 4px solid var(--danger) ">
            <h3>Add a new admin</h3>
            <p>Please fill the form below to add a new user</p>
          </div>
          <div class="card-body">
            <form  method="POST" action="{{route('storeAdmin')}}" >
              @csrf
              <div class="form-group">
                <label for="name"><b>Name</b></label>
                <input class="form-control" type="text" placeholder="Enter your name" name="name" id="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" placeholder="Enter Email" name="email" id="email" required>
              </div>
              <div class="form-group">
                <label for="psw">Password</label>
                <input class="form-control" type="password" placeholder="Enter Password" name="password" id="password" required>
              </div>
              <div class="form-group">
                <label for="psw-repeat">Repeat Password</label>
                <input class="form-control" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
              </div>

              <div class="form-group">
                <label for="psw-repeat">Role</label>
                <select name="role" id="" class="form-control">
                    @foreach ($roles as $role )

                    <option value="{{$role->id}}">{{$role->name}}</option>

                    @endforeach
                </select>

              </div>

              <button type="submit" class="registerbtn btn btn-block bg-danger">Register</button>
            </form>
          </div>
        </div>
    </div>
 @endsection
