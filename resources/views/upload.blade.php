@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header">Upload File</div>

                <div class="card-body">
                    @include('partials.alerts')
                   <form action="{{route('upload.save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                    <button type="submit" name="upload" class="btn btn-block">Upload Book</button>




                </div>
            </form>
            </div>


@endsection
