@extends('layouts.admin')
@section('title')
@section('content')
    <div class="container dashboard-container">
        @include('partials.alerts')
        <div class="card bg-dark rounded-0" style="border-top: 5px solid var(--danger)">
            <div class="card-header">
                <h4><i class="ion-md-calendar mr-1"></i> {{__('web.reservation')}}</h4>
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
                                <th>{{__('web.date')}}</th>
                                <th>{{__('web.send_notification')}}</th>
                                <th>{{__('web.delete')}}</th>
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
                                    <td><a href="{{route('notification',$res->id)}}" class="btn btn-warning text-white rounded-0">Send Notification</a></td>
                                    <td>
                                        <form class="" action="{{route('reserve.destroy',$res->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <td><button class="btn btn-danger rounded-0" onclick="confirm('Are You Sure You Want To Delete This Book ?')">Return</button></td>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>


@endsection
