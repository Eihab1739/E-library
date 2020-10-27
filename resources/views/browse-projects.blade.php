@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        {{-- search form  --}}
        <div class="col">
            <form action="{{route('searchproject')}}" method="get">
                @csrf
                <div class="input-group">
                    <input type="search"  name="search" placeholder="{{__('web.search')}}" class="form-control">
                    <span class="input-group-prepend">
                    <button class="btn btn-primary" type="submit"><i class="ion-md-search"></i></button>
                        </span>
                </div>
            </form>
        </div>

        <div class="row my-2 my-md-3">
            @foreach ($projects as $project )
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div id="book" class="card shadow-sm mb-4">
                        <div class="card-header bg-secondary text-white">
                            <div class="my-3"><svg style="width:100%;height:100%" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg"><g id="Clipboard-Management-Project-Setting-List"><path d="m56 15v42a4 4 0 0 1 -4 4h-34a4 4 0 0 1 -2.4-.8 3.774 3.774 0 0 1 -.73-.71 4.026 4.026 0 0 1 -.87-2.49v-42a4 4 0 0 1 4-4h34a4 4 0 0 1 4 4z" fill="#a97c50"/><path d="m52 16v33h-6a2.006 2.006 0 0 0 -2 2v6h-25a1 1 0 0 1 -1-1v-40a1 1 0 0 1 1-1h32a1 1 0 0 1 1 1z" fill="#e6e7e8"/><path d="m38.83 43.51-.71 3.54-2.12 2.12a2.016 2.016 0 0 0 0 2.83 2 2 0 0 0 2.83 0l2.12-2.12 3.54-.71.7-.71 6.81-6.81v-11.3z" fill="#d8d7da"/><path d="m56 26.35-4 3.998v11.302l4-4z" fill="#8b5e3c"/><path d="m27.68 52.47a9.8 9.8 0 0 1 -1.09 2.62l1.43 1.91h-9.02a1 1 0 0 1 -1-1v-19h2l.47 3.32a9.8 9.8 0 0 1 2.62 1.09l2.69-2.02 2.83 2.83-2.02 2.69a9.8 9.8 0 0 1 1.09 2.62l3.32.47v4z" fill="#d8d7da"/><path d="m60.16 23.84a3.986 3.986 0 0 0 -2.82-1.18 3.825 3.825 0 0 0 -1.34.24 3.924 3.924 0 0 0 -1.49.94l-1.42 1.41 2.91 2.91 2.75 2.75 1.41-1.42a3.978 3.978 0 0 0 0-5.65z" fill="#e6e7e8"/><path d="m56 28.16-2.91-2.91-1.09 1.09v.01l-1.03 1.02 1.03 1.03 1.8 1.8 2.2 2.2.63.63 2.12-2.12z" fill="#ffa733"/><path d="m52 49-8 8v-6a2.006 2.006 0 0 1 2-2z" fill="#d1d3d4"/><path d="m52 49v7a1 1 0 0 1 -1 1h-7z" fill="#e6e7e8"/><path d="m38.95 47.88-2.12 2.12a2 2 0 0 1 -3.41-1.42 1.983 1.983 0 0 1 .58-1.41l2.12-2.12z" fill="#787680"/><path d="m43.19 46.46-.7.71-3.54.71-2.83-2.83.71-3.54.71-.7 2.82 2.83h.01z" fill="#898890"/><path d="m52 28.4-1.03-1.03-13.43 13.44 2.82 2.83h.01l11.63-11.64 1.8-1.8z" fill="#00ccb3"/><path d="m56 32.4-2.2-2.2-1.8 1.8-11.63 11.64 2.82 2.82 8.81-8.81 4-4 .63-.62z" fill="#00b39d"/><path d="m31.28 26.72a4 4 0 1 1 -3.28-1.72 4.009 4.009 0 0 1 3.28 1.72z" fill="#ff5023"/><path d="m24 16h22v3h-22z" fill="#ffa733"/><path d="m44.64 11a4 4 0 0 0 -2.64-1h-3v-3a4 4 0 1 0 -8 0v3h-3a4.009 4.009 0 0 0 -4 4v2h22v-2a3.984 3.984 0 0 0 -1.36-3z" fill="#ff9811"/><path d="m28.61 57.78-1.22 1.22-1.61 1.61-2.14-1.61-.55-.41a8.141 8.141 0 0 1 -.77.41 9.492 9.492 0 0 1 -1.85.68l-.19 1.32h-2.28a4 4 0 0 1 -2.4-.8l-.07-.52c-.22-.06-.45-.12-.66-.19a4.026 4.026 0 0 1 -.87-2.49v-16.14a8.956 8.956 0 0 1 1.53-.54l.47-3.32h2v19a1 1 0 0 0 1 1h9.02z" fill="#8b5e3c"/><path d="m25.68 50.47a9.8 9.8 0 0 1 -1.09 2.62l2.02 2.69-1.22 1.22-1.61 1.61-2.14-1.61-.55-.41a8.141 8.141 0 0 1 -.77.41 9.492 9.492 0 0 1 -1.85.68l-.47 3.32h-4l-.47-3.32a9.8 9.8 0 0 1 -2.62-1.09l-2.69 2.02-2.83-2.83 2.02-2.69a9.8 9.8 0 0 1 -1.09-2.62l-3.32-.47v-4l3.32-.47a9.8 9.8 0 0 1 1.09-2.62l-2.02-2.69 2.83-2.83 2.69 2.02a9.8 9.8 0 0 1 2.62-1.09l.47-3.32h4l.47 3.32a9.8 9.8 0 0 1 2.62 1.09l2.69-2.02 2.83 2.83-2.02 2.69a9.8 9.8 0 0 1 1.09 2.62l3.32.47v4z" fill="#ff9811"/><path d="m18 43.41a5.083 5.083 0 0 0 -4 0 5.011 5.011 0 0 0 0 9.18 5.083 5.083 0 0 0 4 0 5.011 5.011 0 0 0 0-9.18z" fill="#ffd422"/><path d="m34 6h2v2h-2z" fill="#cc7400"/><g fill="#ee8700"><path d="m15 38h2v2h-2z"/><path d="m8.636 40.636h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -26.619 19.009)"/><path d="m6 47h2v2h-2z"/><path d="m8.636 53.364h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -35.619 22.737)"/><path d="m15 56h2v2h-2z"/><path d="m21.364 53.364h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -31.891 31.737)"/><path d="m24 47h2v2h-2z"/><path d="m21.364 40.636h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -22.891 28.009)"/></g><path d="m26.964 26.5h7.071v2h-7.071z" fill="#d80027" transform="matrix(.707 -.707 .707 .707 -10.512 29.621)"/><path d="m35 26h2v2h-2z" fill="#c6c5ca"/><path d="m39 26h4v2h-4z" fill="#c6c5ca"/><path d="m35 30h6v2h-6z" fill="#c6c5ca"/></g></svg></div>
                            <h5 class="card-title text-center">{{$project->title}}</h5>
                        </div>
                        <div class="card-footer px-4">
                            <h5 class="card-title text-uppercase">{{$project->title}}</h5>
                            <p class="card-subtitle"><i class="fa fa-users mx-1 text-primary"></i> {{$project->maker}}</p>                                    
                            <a class="btn rounded-0 btn-primary text-white mt-4" href="{{route('projects.show',$project->id)}}">{{__('web.more')}}</a>                                                                    
                        </div>        
                        
                    </div>                            
                </div>
            @endforeach

        </div>
        <div class="my-4 d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li class="page-item disabled"><a class="page-link" href="#">{{__('web.first')}}</a></li>
                  <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="">{{__('web.prev')}}</span>
                    </a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span class="">{{__('web.next')}}</span>
                      <span aria-hidden="true">&raquo;</span>                        
                    </a>
                  </li>
                  <li class="page-item "><a class="page-link" href="#">{{__('web.last')}}</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
