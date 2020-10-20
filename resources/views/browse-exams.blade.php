@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        {{-- search form  --}}
        <div class="card p-2 shadow-sm bg-secondary mt-4">
            <form action="/results" method="GET">
                @csrf
                <div class="input-group"><input class="form-control d-inline-block" type="search" name="examsearch" placeholder="Search ..."> <a href="" class="btn btn-primary text-white mx-2"><i class="ion-md-search "></i></a></div>
            </form>
        </div>

        <div class="row mt-4">
            @foreach ($allExams as $exam )
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <div id="book" class="card shadow-sm border-0 mb-4">                        
                        <div class="card-header  bg-secondary">
                        <img class="card-img-top" src="{{asset('images/icons/flat/Test.svg')}}" alt="">                                                    
                        <h5 class="card-title text-center text-white">{{$exam->title}}</h5>
                        </div>
                        <div class="card-footer">
                            <h4 class="card-title text-uppercase">{{$exam->title}}</h4>
                            <h5 class="card-subtitle"><i class="ion-md-person fa-lg text-primary mx-1"></i> {{$exam->author}}</h5>
                            <br>
                            <h5 class="card-subtitle mt-2"><i class="ion-md-calendar fa-lg text-primary mx-1"></i>  {{$exam->examyear}}</h5>                            
                            <a class="btn rounded-0 btn-primary text-white d-block mt-4" href="{{route('exams.show',$exam->id)}}">More Details</a> 
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
