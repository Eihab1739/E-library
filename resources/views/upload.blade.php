@extends('adminlte::page')

@section('title')

@section('content')
    <div class="container pb-4" style="max-width: 800px">
        <div class="card" style="border-top: 5px solid var(--indigo)">
            <div class="card-header h5"><i class="fa fa-book"></i> Book Upload</div>
            <div class="card-body">
                @include('partials.alerts')
                <form action="{{route('upload.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="border px-4 py-2 mb-3 rounded">
                                <div class="form-group">
                                    <label for="image">Book Cover</label>
                                    <input type="file" name="image" id="image"
                                    class="form-control border-0 pl-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="border px-4 py-2 mb-3 rounded">
                                <div class="form-group">
                                    <label for="book">Add Book (pdf)</label>
                                    <input type="file" name="book" id="book"
                                    class="form-control border-0 pl-0">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="number" name="ISBN" id="ISBN" class="form-control" placeholder="Book ISBN">
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="title" id="title" placeholder="Book Title"
                                class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="author" id="author" placeholder="Book Author"
                                class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="info" id="info" class="form-control" placeholder="Book Description"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Book Category</label>
                        <select name="category" id="category" class="form-control">
                            @if (count($allcategories)>0)
                            @foreach ($allcategories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach

                            @endif
                        </select>
                    </div>


                    <div class="form-group">
                        <input type="number" name="copies" id="copies" min="1" max="100"
                        class="form-control" placeholder="Number of Copies">
                    </div>
                    <!--
                        avilability should not be here it shold have a defualt value of avilable
                        and then it will be calculated from a function
                    -->
                    <div class="form-group">
                        <label for="available">Availability </label>
                        <select  name="available" id="available"
                        class="form-control">
                        <option value="available">Available</option>
                        <option value="unavailable">Un Available</option>
                        </select>
                    </div>

                    <button type="submit" name="upload" class="btn bg-indigo btn-block">Upload Book</button>
                </form>
            </div>
        </div>
    </div>

@endsection
