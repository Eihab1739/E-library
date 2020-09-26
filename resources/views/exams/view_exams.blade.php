@extends('adminlte::page')
@section('title')
@section('content')
    <div class="container">
        <div class="card bg-dark rounded-0" style="border-top: 5px solid var(--danger)">
            <h4 class="card-header"><i class="fa fa-book mr-1"></i> All Exams</h4>
            <div class="card-body">
                <a href="/admin/exams/create" class="btn btn-block bg-danger mb-4">Add an Exam</a>
                <hr class="bg-white">
                <table class="table table-default table-responsive text-center">
                    <thead class="thead-default bg-danger">
                       <tr>
                            <th>Title</th>
                            <th>Teacher</th>
                            <th>Year</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Go To</th>
                        </tr>
                        </thead>
                        <tbody>
                            {{-- loop throw the books table to view all the books  --}}
                            @foreach ($exams as $exam )
                                <tr>
                                    <td>{{$exam->title}}</td>
                                    <td>{{$exam->author}}</td>
                                    <td>{{$exam->examyear}}</td>
                                    <form class="" action="{{route('exams.destroy',$exam->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <td><a href="{{route('exams.edit',$exam->id)}}" class="btn btn-warning text-white rounded-0">Edit</a></td>
                                        <td><button class="btn btn-danger rounded-0" onclick="confirm('Are You Sure You Want To Delete This ?')">Delete</button></td>
                                    </form>
                                    <td><a href="{{route('exams.show',$exam->id)}}" class="btn bg-success rounded-0">More</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
