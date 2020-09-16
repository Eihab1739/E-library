@extends('adminlte::page')

@section('title')

@section('content')

    <div class="container">
        <form  method="POST" action="{{route('createuser.store')}}" >
            @csrf

      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="name"><b>your Name</b></label>
      <input type="text" placeholder="Enter your name" name="name" id="name" required>


      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
      <hr>


      <button type="submit" class="registerbtn">Register</button>
        </form>
    </div>

    <div class="container signin">
      <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>

 @endsection
