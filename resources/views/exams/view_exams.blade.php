@extends('layouts.admin')
@section('title')
@section('content')
    <div class="container dashboard-container">
        @include('partials.alerts')

        <div class="card bg-dark rounded-0" style="border-top: 5px solid var(--primary)">
            <h4 class="card-header"><i class="fa fa-file-alt mr-1"></i> {{trans_choice('web.exam',10)}}</h4>

            <div class="card-body">
                <a href="/admin/exams/create" class="btn btn-block bg-primary mb-4">{{__('web.add_exam')}}</a>

                <div class="table-responsive">
                    <table class="table table-default text-center">
                        <thead class="thead-default bg-primary border-0">
                            {{-- search form  --}}
                            <div class="col mb-4">
                                <form action="{{route('searchexamsinadmin')}}" method="get">
                                    @csrf
                                    <div class="input-group">
                                        <input type="search"  name="search" placeholder="{{__('web.search')}}" class="form-control">
                                        <span class="input-group-prepend">
                                            <button class="btn btn-primary" type="submit"><i class="ion-md-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
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
                                            <td><button class="btn btn-danger rounded-0"><i class="ion-md-trash"></i></button></td>
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
