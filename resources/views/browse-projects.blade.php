@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        {{-- search form  --}}
        <div class="card p-2 mb-4 shadow-sm bg-secondary">
            <form action="">
                <div class="input-group">
                    <input class="form-control d-inline-block" type="search" placeholder="Search ..."> <a href="" class="btn btn-primary text-white mx-2"><i class="ion-md-search "></i></a>
                </div>                
            </form>
        </div>

        <div class="row my-2 my-md-3">
            @foreach ($allProjects as $project )                                            
                <div class="col-sm-12 col-md-4 col-lg-3">                
                    <div id="book" class="card shadow-sm mb-4">
                        <div class="card-header bg-secondary text-white">                            
                            <img class="card-img-top" src="{{asset('images/icons/flat/Certificate.svg')}}" alt="">                                        
                            <h5 class="card-title text-center">{{$project->title}}</h5>                            
                        </div>                                    
                        <div class="card-footer px-4">
                            <h5 class="card-title text-uppercase">{{$project->title}}</h5>
                            <p class="card-subtitle"><i class="fa fa-users mx-1 text-primary"></i> {{$project->maker}}</p>                                    
                            <a class="btn rounded-0 btn-primary text-white mt-4" href="{{route('projects.show',$project->id)}}">More Details</a>                                                                    
                        </div>        
                        
                    </div>                            
                </div>
            @endforeach                            
            
        </div>
        <div class="my-4 d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li class="page-item disabled"><a class="page-link" href="#">First</a></li>
                  <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span class="">Next</span>
                      <span aria-hidden="true">&raquo;</span>                        
                    </a>
                  </li>
                  <li class="page-item "><a class="page-link" href="#">Last</a></li>
                </ul>
            </nav>     
        </div>         
    </div>
@endsection