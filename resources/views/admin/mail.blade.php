@extends('layouts.admin')
@section('title')
@section('content')
    <div class="container dashboard-container">
        <div class="card bg-dark rounded-0 border-0">
            <h3 class="card-header bt rounded-0 border-0"><i class="ion-md-mail"></i> {{__('web.requests')}}</h3>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="thead bg-primary">
                            <tr>
                                <th scope="col">{{__('web.name')}}</th>
                                <th scope="col">{{__('web.email')}}</th>
                                <th scope="col">{{__('web.book_name')}}</th>
                                <th scope="col">{{__('web.author')}}</th>
                                <th scope="col">{{__('web.delete')}}</th>

                            </tr>
                            </thead>
                            <tbody>
                                @foreach($display as $dis )
                                <tr class="text-white">
                                    <td>{{$dis->email}}</td>
                                    <td>{{$dis->name}}</td>
                                    <td>{{$dis->book_name}}</td>
                                    <td>{{$dis->author}}</td>
                                    <td>
                                        <form class="" action="{{route('delete',$dis->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger rounded-0">delete</button>
                                        </form>
                                    </td>
                                @endforeach

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
