@extends('layouts.admin')

@section('title')

@section('content')
    <div class="container pb-4 dashboard-container" style="max-width: 800px">
        <div class="card bg-dark rounded-0 border-0">
            <div class="card-header h5 bt rounded-0"><i class="fa fa-book"></i> {{__('web.add_book')}}</div>
            <div class="card-body">
                @include('partials.alerts')
                <form action="{{route('upload.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="border px-4 py-2 mb-3 rounded">
                                <div class="form-group">
                                    <label for="image">{{__('web.cover')}}</label>
                                    <input type="file" name="image" id="image"
                                    class="form-control border-0 pl-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="border px-4 py-2 mb-3 rounded">
                                <div class="form-group">
                                    <label for="book">{{__('web.book_file')}} (pdf)</label>
                                    <input type="file" name="book" id="book"
                                    class="form-control border-0 pl-0">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="number" name="ISBN" id="ISBN" class="form-control" placeholder="{{__('web.isbn')}}">
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="title" id="title" placeholder="{{__('web.title')}}"
                                class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="author" id="author" placeholder="{{__('web.author')}}"
                                class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="info" id="info" class="form-control" placeholder="{{__('web.desc')}}"></textarea>
                    </div>

                    <div class="form-group">
                        <label>{{__('web.category')}}</label>
                        <select name="category" id="category" class="form-control">
                            @if (count($allCategories)>0)
                            @foreach ($allCategories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach

                            @endif
                        </select>
                    </div>


                    <div class="form-group">
                        <input type="number" name="copies" id="copies" min="1" max="100"
                        class="form-control" placeholder="{{__('web.copies')}}">
                    </div>
                    <!--
                        avilability should not be here it shold have a defualt value of avilable
                        and then it will be calculated from a function
                    -->

                    <button type="submit" name="upload" class="btn bg-danger btn-block">{{__('web.add_book')}}</button>
                </form>
            </div>
        </div>
    </div>

@endsection
