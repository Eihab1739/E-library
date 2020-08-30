@extends('adminlte::page')
@section('title')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Categories</h3>

      <div class="box-tools pull-right">
          <a href="{{route('categories.create')}}" class="btn btn-primary pull-right">Add Category</a>
        <!-- Buttons, labels, and many other things can be placed here! -->
        <!-- Here is a label for example -->
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">


    <!-- /.box-body -->
    <table class="table">
        <thead>
            <tr>
                <td># </td>
                <td>Name</td>

            </tr>
        </thead>
        @if (count($categories)>0)
        @foreach ($categories as $category )
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
        </tr>

        @endforeach

        @endif

    </table>
</div>

  <!-- /.box -->







@stop
