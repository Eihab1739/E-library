@extends('layouts.admin')

@section('title')

@section('content')
    <div class="container pb-4 dashboard-container">
        @include('partials.alerts')

        <div class="card bg-dark rounded-0 border-0">
            <h3 class="card-header h5 rounded-0 bt"><i class="fa fa-box-open"></i> {{__('web.add_project')}}</h3>
            <div class="card-body">
                @include('partials.alerts')
               <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <div class="row">
                        {{-- idont think we shold upload an image for the project will have a default icon instead ?!  --}}
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
                                    <label for="exam">{{__('web.add_project')}} (doc)</label>
                                    <input type="file" name="projectfile" id="projectfile"
                                    class="form-control border-0 pl-0">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- again idont know if the project should have an isbn --}}
                    {{-- <div class="form-group">
                        <input type="number" name="ISBN" id="ISBN" class="form-control" placeholder="Exam ISBN">
                    </div> --}}
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="title" id="title" placeholder="{{__('web.title')}}"
                                class="form-control">
                            </div>
                        </div>
                        {{-- idont know about this maby the teacher who made the project ??!! maby not --}}
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="maker" id="subject" placeholder="{{__('web.makers')}}"
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
