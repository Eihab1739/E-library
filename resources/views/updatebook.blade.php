@extends('adminlte::page')

@section('title')

@section('content')

            <div class="card">
                <div class="card-header">UpdateFile</div>
                @include('partials.alerts')

                <div class="card-body">
                   <form action="{{route('upload.update',$book->id)}}" method="Post" enctype="multipart/form-data">

                       @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="ISBN">ISBN </label>
                        <input type="number" name="ISBN" id="ISBN" min="1" max="100" value="{{$book->ISBN}}"
                        class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" placeholder="Enter Title" value="{{$book->title}}"
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="author">author</label>
                        <input type="text" name="author" id="author" placeholder="Enter the name of author"  value="{{$book->author}}"
                        class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="info">information</label>
                        <textarea name="info" id="info"
                        class="form-control"  >

                        {{$book->info}}
                       </textarea>
                    </div>
                    <div class="form-group">
                        <select name="category" id="category" class="form-control">
                            @if (count($allcategories)>0)
                            @foreach ($allcategories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach

                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image"
                        class="form-control" value="old()">

                    </div>
                    <div class="form-group">
                        <label for="book">Add Book </label>
                        <input type="file" name="book" id="book"
                        class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="copies">Copies </label>
                        <input type="number" name="copies" id="copies" min="1" max="100"
                        class="form-control" value="{{$book->copies}}">

                    </div>
                    <div class="form-group">
                        <label for="available">Availability </label>
                        <select  name="available" id="available"
                        class="form-control">
                        <option value="available">Available</option>
                        <option value="unavailable">Un Available</option>
                        </select>



                    </div>

                    <button type="submit" name="upload" class="btn btn-block">Update Book</button>




                </div>
            </form>
            </div>


@endsection
