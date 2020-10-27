@extends('layouts.admin')

@section('title')

@section('content')

    <div class="container dashboard-container">
        <div class="card bg-dark rounded-0 border-0 mx-auto">
          <div class="card-header rounded-0" style="border-top: 4px solid var(--primary) ">
            <h3>{{__('web.add_user')}}</h3>
            <p>{{__('web.add_user_text')}}</p>
          </div>
          <div class="card-body">
            <form  method="POST" action="{{route('createuser.store')}}" >
              @csrf
              <div class="form-group">
                <label for="name">{{__('web.name')}}</label>
                <input class="form-control" type="text" name="name" id="name" required>
              </div>
              <div class="form-group">
                <label for="email">{{__('web.email')}}</label>
                <input class="form-control" type="text" name="email" id="email" required>
              </div>
              <div class="form-group">
                <label for="psw">{{__('web.password')}}</label>
                <input class="form-control" type="password" name="password" id="password" required>
              </div>
              <div class="form-group">
                <label for="psw-repeat">{{__('web.cpassword')}}</label>
                <input class="form-control" type="password" name="psw-repeat" id="psw-repeat" required>                  
              </div>
    
              <button type="submit" class="registerbtn btn btn-block bg-primary">{{__('web.register')}}</button>
            </form>            
          </div>          
        </div>
    </div>  
 @endsection
