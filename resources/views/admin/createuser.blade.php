@extends('adminlte::page')

@section('title')

@section('content')

    <div class="container">
        <div class="card w-75 mx-auto">
          <div class="card-header" style="border-top: 4px solid var(--indigo) ">
            <h3>Add a new user</h3>
            <p>Please fill the form below to add a new user</p>
          </div>
          <div class="card-body">
            <form  method="POST" action="{{route('createuser.store')}}" >
              @csrf
              <div class="form-group">
                <label for="name"><b>your Name</b></label>
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
    
              <button type="submit" class="registerbtn btn btn-block bg-indigo">Register</button>
            </form>            
          </div>          
        </div>
    </div>  
 @endsection
