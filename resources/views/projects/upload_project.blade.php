@extends('adminlte::page')

@section('title')

@section('content')
    <div class="container pb-4" style="max-width: 800px">
        <div class="card" style="border-top: 5px solid var(--indigo)">
            <div class="card-header h5"><i class="fa fa-file-alt"></i> Project Upload</div>
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
                                    <label for="exam">Add Project (doc)</label>
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
                                <input type="text" name="title" id="title" placeholder="Project Title"
                                class="form-control">
                            </div>
                        </div>
                        {{-- idont know about this maby the teacher who made the project ??!! maby not --}}
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="maker" id="subject" placeholder="Project Makers"
                                class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="info" id="info" class="form-control" placeholder="Project Description"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Project Year</label>
                        <input type="number" name="year" id="year" class="form-control">

                    </div>

                    <button type="submit" name="upload" class="btn bg-indigo btn-block">Upload Project</button>
                 </form>
            </div>
        </div>
    </div>

@endsection
