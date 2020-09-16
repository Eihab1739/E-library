@extends('adminlte::page')

@section('title')

@section('content')
    <div class="container pb-4" style="max-width: 800px">
        <div class="card" style="border-top: 5px solid var(--indigo)">
            <div class="card-header h5"><i class="fa fa-file-alt"></i> Project Update</div>
            <div class="card-body">
                @include('partials.alerts')
                 <form action="{{route('projects.update',$project->id)}}" enctype="multipart/form-data" method="POST" >

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
                                    <label for="exam">Add Exam (doc)</label>
                                    <input type="file" name="projectfile" id="projectfile"
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
                                <input type="text" name="title" id="title" placeholder="Project Title"
                                class="form-control" value="{{$project->title}}">
                            </div>
                        </div>
                        {{-- idont know about this maby the teacher who wrote the exam ??!! maby not --}}
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="maker" id="maker" placeholder="Project Maker"
                                class="form-control"  value="{{$project->maker}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="info" id="info" class="form-control" placeholder="Project Description"> {{$project->info}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Exam Year</label>
                        <input type="number" name="year" id="year" class="form-control"  value="{{$project->projectyear}}">


                    </div>

                    <button type="submit" name="upload" class="btn bg-indigo btn-block">Update Project</button>
                </form>
            </div>
        </div>
    </div>

@endsection
