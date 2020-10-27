@extends('layouts.admin')

@section('title')

@section('content')
    <div class="container dashboard-container">
            <div class="card bg-dark my-3 border-0 rounded-0 mx-md-5 mx-auto">
                <div class="card-header rounded-0 bt">{{__('web.edit_book')}}</div>


                <div class="card-body">
                        <form action="{{route('upload.update',$book->id)}}" method="Post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label for="ISBN">{{__('web.isbn')}} </label>
                        <input type="number" name="ISBN" id="ISBN" min="1" max="100" value="{{$book->ISBN}}"
                        class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="title">{{__('web.title')}}</label>
                        <input type="text" name="title" id="title" value="{{$book->title}}"
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="author">{{__('web.author')}}</label>
                        <input type="text" name="author" id="author" value="{{$book->author}}"
                        class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="info">{{__('web.desc')}}</label>
                        <textarea name="info" id="info" class="form-control"  >
                            {{$book->info}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <select name="category" id="category" class="form-control">
                            @if (count($allCategories)>0)
                            @foreach ($allCategories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach

                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">{{__('web.cover')}}</label>
                        <input type="file" name="image" id="image"
                        class="form-control" value="old()">

                    </div>
                    <div class="form-group">
                        <label for="book">{{trans_choice('web.book',1)}}</label>
                        <input type="file" name="book" id="book"
                        class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="copies">{{__('web.copies')}} </label>
                        <input type="number" name="copies" id="copies" min="1" max="100"
                        class="form-control" value="{{$book->copies}}">

                    </div>

                    <button type="submit" name="upload" class="btn bg-danger btn-block">{{__('web.submit')}}</button>




                </div>
            </form>
            </div>

        </div>
@endsection
