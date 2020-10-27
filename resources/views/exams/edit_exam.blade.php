@extends('layouts.admin')

@section('title')

@section('content')
    <div class="container dashboard-container pb-4">
        <div class="card bg-dark rounded-0 border-0">
            <div class="card-header bt rounded-0 h5"><i class="fa fa-file-alt"></i> {{__('web.edit_exam')}}</div>
            <div class="card-body">
                @include('partials.alerts')
                 <form action="{{route('exams.update',$exam->id)}}" enctype="multipart/form-data" method="POST" >

                     @csrf
                     @method('put')

                    <div class="row">
                        {{-- idont think we shold upload an image for the exam will have a default icon instead ?!  --}}
                        {{-- <div class="col-sm-12 col-md-6">
                            <div class="border px-4 py-2 mb-3 rounded">
                                <div class="form-group">
                                    <label for="image">Exam Cover</label>
                                    <input type="file" name="image" id="image"
                                    class="form-control border-0 pl-0">
                                </div>
                            </div>
                        </div>  --}}
                        <div class="col-sm-12">
                            <div class="border px-4 py-2 mb-3 rounded">
                                <div class="form-group">
                                    <label for="exam">{{trans_choice('web.exam',1)}} (doc)</label>
                                    <input type="file" name="examfile" id="exam"
                                    class="form-control border-0 pl-0" >
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- again idont know if the exam should have an isbn --}}
                    {{-- <div class="form-group">
                        <input type="number" name="ISBN" id="ISBN" class="form-control" placeholder="Exam ISBN">
                    </div> --}}
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>{{__('web.title')}}</label>
                                <input type="text" name="title" id="title" placeholder="{{__('web.title')}}"
                                class="form-control" value="{{$exam->title}}">
                            </div>
                        </div>
                        {{-- idont know about this maby the teacher who wrote the exam ??!! maby not --}}
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>{{__('web.teacher')}}</label>
                                <input type="text" name="author" id="subject" placeholder="{{__('web.teacher')}}"
                                class="form-control"  value="{{$exam->author}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{__('web.desc')}}</label>
                        <textarea name="info" id="info" class="form-control" placeholder="{{__('web.desc')}}"> {{$exam->info}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>{{__('web.date')}}</label>
                        <input type="number" name="year" id="year" class="form-control"  value="{{$exam->examyear}}">


                    </div>

                    <button type="submit" name="upload" class="btn bg-primary btn-block">{{__('web.submit')}}</button>
                </form>
            </div>
        </div>
    </div>

@endsection
