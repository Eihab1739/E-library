@extends('layouts.admin')
@section('title')
@section('content')
    <div class="container dashboard-container">
        <div class="card bg-dark rounded-0" style="border-top: 5px solid var(--danger)">
            <h4 class="card-header"><i clas="fa fa-book mr-1"></i> {{trans_choice('web.exam',10)}}</h4>
            
            <div class="card-body">
                <a href="/admin/exams/create" class="btn btn-block bg-danger mb-4">{{__('web.add_exam')}}</a>
                <hr class="bg-white">
                <div class="">
                    <table class="table table-default table-responsive text-center">
                        <thead class="thead-default bg-danger border-0">
                            <tr>
                                <th>{{__('web.title')}}</th>
                                <th>{{__('web.teacher')}}</th>
                                <th>{{__('web.date')}}</th>
                                <th>{{__('web.edit')}}</th>
                                <th>{{__('web.delete')}}</th>
                                <th>{{__('web.goto')}}</th>
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
                                            <td><a href="{{route('exams.edit',$exam->id)}}" class="btn btn-warning text-white rounded-0"><i class="fa fa-edit"></i></a></td>
                                            <td><button class="btn btn-danger rounded-0" onclick="confirm('Are You Sure You Want To Delete This ?')"><i class="ion-md-trash"></i></button></td>
                                        </form>
                                        <td><a href="{{route('exams.show',$exam->id)}}" class="btn bg-success rounded-0"><i class="fa fa-sign-out-alt"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
