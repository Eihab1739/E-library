@extends('layouts.admin')

@section('title')

@section('content')
    <div class="container dashboard-container pb-4">
        @include('partials.alerts')

        <div class="card bg-dark rounded-0 border-0">
            <h3 class="card-header h5 bt rounded-0"><i class="fa fa-box-open"></i> {{__('web.edit_project')}}</h3>
            <div class="card-body">
                 <form action="{{route('projects.update',$project->id)}}" enctype="multipart/form-data" method="POST" >

                     @csrf
                     @method('put')

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="border px-4 py-2 mb-3 rounded">
                                <div class="form-group">
                                    <label for="exam">{{trans_choice('web.project',1)}} (doc)</label>
                                    <input type="file" name="projectfile" id="projectfile"
                                    class="form-control border-0 pl-0" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>{{__('web.title')}}</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{$project->title}}">
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>{{__('web.makers')}}</label>
                                <input type="text" name="maker" id="maker" class="form-control"  value="{{$project->maker}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="info" id="info" class="form-control"> {{$project->info}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>{{__('web.date')}}</label>
                        <input type="number" name="year" id="year" class="form-control"  value="{{$project->projectyear}}">


                    </div>

                    <button type="submit" name="upload" class="btn bg-danger btn-block">{{__('web.submit')}}</button>
                </form>
            </div>
        </div>
    </div>

@endsection
