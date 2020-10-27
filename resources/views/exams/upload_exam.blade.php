@extends('layouts.admin')

@section('title')

@section('content')
    <div class="container pb-4 dashboard-container">
        <div class="card bg-dark rounded-0 border-0">
            <div class="card-header bt rounded-0 h5"><i class="fa fa-file-alt"></i> {{__('web.add_exam')}}</div>
            <div class="card-body">
                @include('partials.alerts')
                 <form action="{{route('exams.store')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <div class="row">                        
                        <div class="col-sm-12">
                            <div class="border px-4 py-2 mb-3 rounded">
                                <div class="form-group">
                                    <label for="exam">{{__('web.add_exam')}} (doc)</label>
                                    <input type="file" name="examfile" id="exam"
                                    class="form-control border-0 pl-0">
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="title" id="title" placeholder="{{__('web.title')}}"
                                class="form-control">
                            </div>
                        </div>                        
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="author" id="subject" placeholder="{{__('web.teacher')}}"
                                class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="info" id="info" class="form-control" placeholder="{{__('web.desc')}}"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="number" name="year" id="year" placeholder="{{__('web.date')}}" class="form-control">


                    </div>

                    <button type="submit" name="upload" class="btn bg-primary btn-block">{{__('web.add')}}</button>
                </form>
            </div>
        </div>
    </div>

@endsection
