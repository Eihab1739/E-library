@extends('layouts.admin')
@section('title')
@section('content')
    <div class="container dashboard-container">
        <div class="card bg-dark rounded-0" style="border-top: 5px solid var(--danger)">
            <div class="card-header">
                <h4 class="text-white"><i class="fa fa-book mr-1"></i> Borrowes</h4>

            </div>
            <div class="card-body">
                <hr class="bg-white">
                <h4 class="my-4 text-white"><i class="fa fa-book"></i> All Borrowes</h4>

                <table class="table table-default table-responsive text-center">
                    {{--  search form --}}
                    <div class="col mb-4">
                        <form action="#" method="get">
                            @csrf
                            <div class="input-group">
                                <input type="search"  name="search" placeholder="{{__('web.search')}}" class="form-control">
                                <span class="input-group-prepend">
                        <button class="btn btn-primary" type="submit"><i class="ion-md-search text-white"></i></button>
                            </span>
                            </div>
                        </form>
                    </div>
                    <thead class="thead-default bg-danger">
                        <tr class="text-white">

                            <th>Name</th>
                            <th>Book Name</th>
                            <th>Email</th>
                            <th>phone</th>


                            <th>Time Left</th>


                            <th>Send Notification</th>
                            <th>Return Book</th>



                        </tr>
                    </thead>
                        <tbody>

                            {{-- loop throw the books table to view all the books  --}}
                            @foreach($borrow as $bor )
                            <tr class="text-white">
                                <td>{{$bor->user_name}}</td>
                                <td>{{$bor->book_name}}</td>
                                <td>{{$bor->email}}</td>
                                <td>{{$bor->phone}}</td>
                                <td>
                                    <p id="demo" data-time="{{ $bor->end_date }}"></p>
                                </td>

                                <td><a href="#" class="btn btn-warning text-white rounded-0">Send Notification</a></td>
                                <form class="" action="{{route('borroww.destroy',$bor->id)}}" method="POST">
                                    @csrf
                                   @method('delete')
                                    <td><button class="btn btn-danger rounded-0" onclick="confirm('Are You Sure You Want To Return This Book ?')">Return</button></td>
                                </form>






                                {{-- <td>{{$book->avilability}}</td> will be added later \|\(^_^)/|/ --}}

                            </tr>
                            @endforeach
                        </tbody>

                </table>
            </div>
        </div>
</div>


@endsection
