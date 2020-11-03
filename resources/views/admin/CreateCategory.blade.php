@extends('layouts.admin')
@section('title','Add Category')

@section('content')
    <div class="container dashboard-container">
        <div class="card w-100 bg-dark rounded-0" style="border-top: 4px solid var(--danger)">
            <div class="card-header">
                <a href="{{route('categories.index')}}" class="btn bg-danger"><i class="fa fa-list mr-1"></i> {{__('web.view_categories')}}</a>
            </div>
            <div class="card-body">
                <form action="{{route('categories.store')}}" method="POST">

                    @csrf

                    <h4 class="box-title">{{__('web.add_category')}}</h4>

                    <input type="text" name="name" id="name" class="form-control" placeholder="{{__('web.category_name')}}">

                    <button type="submit" name="add" class="btn bg-danger btn-block my-4">{{__('web.add')}}</button>
                </form>
            </div>
        </div>
    </div>
@stop
