@extends('adminlte::page')
@section('title','Add Category')

@section('content')
<div class="box">
    <div class="box-header with-border">

      <div class="box-tools pull-right">
          <a href="{{route('categories.index')}}" class="btn btn-primary pull-right m-auto">view Categories</a>

      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">



    <!-- /.box-body -->

   
   <form action="{{route('categories.store')}}" method="POST">
       @csrf
    <h4 class="box-title">Add new Category</h4>

        <div class="form-group">
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name">


        </div>
        <div class="form-group">
            <button type="submit" name="add" class="btn btn-primary btn-block">Add Category</button>


        </div>












   </form>
</div>

  <!-- /.box -->







@stop
