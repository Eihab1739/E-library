@extends('layouts.admin')
@section('title')
@section('content')
    <div class="container dashboard-container">
        <div class="card bg-dark rounded-0" style="border-top: 5px solid var(--danger)">
            <div class="card-header">
                <h4><i class="fa fa-book mr-1"></i> {{trans_choice('web.book',10)}}</h4>
            </div>

            <div class="card-body">
                <a href="/upload" class="btn btn-block bg-danger mb-4 shadow-sm">{{__('web.add_book')}}</a>
                <hr class="bg-white">

                {{-- search form --}}
                <div class="col mb-4">
                    <form action="{{route('searchbook')}}" method="get">
                        @csrf
                        <div class="input-group">
                            <input type="search"  name="search" placeholder="{{__('web.search')}}" class="form-control">
                            <button class="btn btn-primary input-group-prepend" type="submit"><i class="ion-md-search"></i></button>
                        </span>
                        </div>
                    </form>
                </div>

                <table class="table table-default table-responsive text-center">
                    <thead class="thead-default bg-danger">
                        <tr>
                            <th>{{__('web.cover')}}</th>
                            <th>{{__('web.isbn')}}</th>
                            <th>{{__('web.title')}}</th>
                            <th>{{__('web.author')}}</th>
                            <th>{{__('web.copies')}}</th>
                            <th>{{__('web.edit')}}</th>
                            <th>{{__('web.delete')}}</th>
                            <th>{{__('web.goto')}}</th>
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
                                    <form class="" action="{{route('books.destroy',$book->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-warning text-white rounded-0"><i class="fa fa-edit"></i></a></td>
                                        <td><button class="btn btn-danger rounded-0" onclick="confirm('Are You Sure You Want To Delete This ?')"><i class="fa fa-trash"></i></button></td>
                                    </form>
                                    <td><a href="{{route('book',$book->id)}}" class="btn bg-success rounded-0"><i class="fa fa-sign-out-alt"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
</div>


@endsection
