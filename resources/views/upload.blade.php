@extends('adminlte::page')

@section('title')

@section('content')

            <div class="card">
                <div class="card-header">Upload File</div>

                <div class="card-body">
                    @include('partials.alerts')
                   <form action="{{route('upload.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="ISBN">Enter ISBN </label>
                        <input type="number" name="ISBN" id="ISBN"
                        class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" placeholder="Enter Title"
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="author">author</label>
                        <input type="text" name="author" id="author" placeholder="Enter the name of author"
                        class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="info">information</label>
                        <textarea name="info" id="info" placeholder="Enter some information"
                        class="form-control"> </textarea>
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
                        class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="book">Add Book </label>
                        <input type="file" name="book" id="book"
                        class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="copies">Copies </label>
                        <input type="number" name="copies" id="copies" min="1" max="100"
                        class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="available">Availability </label>
                        <select  name="available" id="available"
                        class="form-control">
                        <option value="available">Available</option>
                        <option value="unavailable">Un Available</option>
                        </select>



                    </div>

                    <button type="submit" name="upload" class="btn btn-block">Upload Book</button>




                </div>
            </form>
            </div>


@endsection
