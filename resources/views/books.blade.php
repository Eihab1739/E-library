@extends('adminlte::page')
@section('title')
@section('content')
    <div class="container">
        <div class="card bg-dark rounded-0" style="border-top: 5px solid var(--danger)">
            <div class="card-header">
                <h4><i class="fa fa-book mr-1"></i>Books</h4>
            </div>            
                        
            <div class="card-body">
                <a href="/upload" class="btn btn-block bg-danger mb-4 shadow-sm">Add a Book</a>                                
                <hr class="bg-white">
                <h4 class="my-4"><i class="fa fa-book"></i> All Books</h4>
                <table class="table table-default table-responsive text-center">
                    <thead class="thead-default bg-danger">
                        <tr>
                            <th>Cover</th>
                            <th>ISBN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Copies</th>
                            <th>Avilability</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Go To</th>
                        </tr>
                        </thead>
                        <tbody>
                            {{-- loop throw the books table to view all the books  --}}
                            @foreach($books as $book )
                                <tr>
                                    <td scope="row"><img class="rounded-circle" src="{{asset('storage/thumbnails/'.$book->image)}}" width="50px" height="50px" /></td>
                                    <td>{{$book->ISBN}}</td>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->copies}}</td>
                                    <td>-</td>
                                    {{-- <td>{{$book->avilability}}</td> will be added later \|\(^_^)/|/ --}}
                                    <form class="" action="{{route('books.destroy',$book->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-warning text-white rounded-0">Edit</a></td>
                                        <td><button class="btn btn-danger rounded-0" onclick="confirm('Are You Sure You Want To Delete This ?')">Delete</button></td>
                                    </form>
                                    <td><a href="{{route('book',$book->id)}}" class="btn bg-success rounded-0">More</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>    
</div>


@endsection
