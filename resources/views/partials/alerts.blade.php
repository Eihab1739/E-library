@if (session('msg'))
<div class="alert alert-success">
    <button type="button" class="close" data-dissmiss="alert"
    aria-hidden="true" ></button>
    {{session('msg')}}




</div>

@endif















@if (count($errors)>0)
<div class="alert alert-danger">
    <button type="button" class="close" data-dissmiss="alert"
    aria-hidden="true" >$times</button>


        @foreach ($errors->all() as$error )
        <li>{{$error}}</li>

        @endforeach





</div>
@endif
