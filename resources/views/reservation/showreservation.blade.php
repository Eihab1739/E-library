@extends('layouts.admin')
@section('title')
@section('content')
    <div class="container dashboard-container">
        <div class="card bg-dark rounded-0" style="border-top: 5px solid var(--danger)">
            <div class="card-header">
                <h4><i class="fa fa-book mr-1"></i>{{__('web.reservation')}}</h4>
            </div>
            <div class="card-body">
                <hr class="bg-white">
                <h4 class="my-4"><i class="fa fa-book"></i> All reservations</h4>

                <table class="table table-default table-responsive text-center">
                    <thead class="thead-default bg-danger">
                        {{--  search form --}}
                        <div class="col mb-4">
                            <form action="#" method="get">
                                @csrf
                                <div class="input-group">
                                    <input type="search"  name="search" placeholder="{{__('web.search')}}" class="form-control">
                                    <span class="input-group-prepend">
                            <button class="btn btn-primary" type="submit"><i class="ion-md-search"></i></button>
                                </span>
                                </div>
                            </form>
                        </div>
                        <tr class="text-white">

                            <th>{{__('web.name')}}</th>
                            <th>Book Name</th>
                            <th>{{__('web.email')}}</th>
                            <th>{{__('web.phone')}}</th>
                            <th>Created_At</th>
                            <th>Send Notification</th>




                        </tr>
                    </thead>
                        <tbody>
                            {{-- loop throw the books table to view all the books  --}}
                            @foreach($reserve as $res )
                            <tr>
                                <td>{{$res->user_name}}</td>
                                <td>{{$res->book_name}}</td>
                                <td>{{$res->email}}</td>
                                <td>{{$res->phone}}</td>
                                <td>{{$res->created_at}}</td>




                                <td><a href="#" class="btn btn-warning text-white rounded-0">Send Notification</a></td>







                                {{-- <td>{{$book->avilability}}</td> will be added later \|\(^_^)/|/ --}}

                            </tr>
                            @endforeach
                        </tbody>

                </table>
            </div>
        </div>
</div>


@endsection
