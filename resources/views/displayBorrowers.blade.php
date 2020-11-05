@extends('layouts.admin')
@section('title')
@section('content')
    <div class="container-fluid dashboard-container">
        @include('partials.alerts')

        <div class="card bg-dark rounded-0" style="border-top: 5px solid var(--danger)">
            <div class="card-header">
                <h4 class="text-white"><i class="fa fa-sign-out-alt mr-1"></i> {{__('web.borrowes')}}</h4>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="thead-default bg-danger">
                            <tr class="text-white">
                                <th>{{__('web.name')}}</th>
                                <th>{{__('web.book_name')}}</th>
                                <th>{{__('web.email')}}</th>
                                <th>{{__('web.phone')}}</th>
                                <th>{{__('web.return_time')}}</th>
                                <th>{{__('web.send_notification')}}</th>
                                <th>{{__('web.return')}}</th>
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
                                <td>{{$bor->end_date}}</td>
                                <td><a href="{{route('notification',$bor->id)}}" class="btn btn-warning text-white rounded-0">{{__('web.send_notification')}}</a></td>
                                <form class="" action="{{route('borroww.destroy',$bor->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <td><button class="btn btn-danger rounded-0">{{__('web.return')}}</button></td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
