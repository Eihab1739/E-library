@extends('layouts.app')

@section('content')
<div id="swup" class="transition-fade">

    <!--------------------------------------------
        show case section
    --------------------------------------------->

    <section class="showcase text-center d-flex flex-column align-items-center justify-content-center">

        <div class="text d-flex align-items-center justify-content-center flex-column">
        <h5 class="my-2 animated fadeInLeft w-100">{{__('web.better')}}</h5>
            <h1 class="mt-2 animated fadeInDown">
                {{__('web.welcome')}} <b class="text-yellow"> {{__('web.library')}} </b> {{__('web.hob')}}
            </h1>
            <h5 class="my-2 animated fadeInRight w-100">{{__('web.access')}}</h5>
            <div class="animated zoomIn my-4">
            <a href="/books" class="btn btn-primary text-white"> {{__('web.browse')}}</a>
            </div>
        </div>
        <img class="effect-1" width="100%" src="images/shapes/effect-1.svg" alt="">
        <img class="effect-2" width="100%" src="images/shapes/effect-2.svg" alt="">
        <div class="overlay"></div>
        {{-- <img class="shape" src="images/shapes/shape-l2.png" width="100%" height="250px"  alt=""> --}}
    </section>
    <!--------------------------------------------
        section services
    --------------------------------------------->
    <section class="services text-center py-5">
        <h3 class="mb-5 d-inline-block text-white py-1 bb" >{{__('web.services')}} </h3>
            <div class="card-deck container-fluid mx-auto">
                <div class="card shadow-sm p-4 mt-4">
                    <div class="card-header text-center">
                        <i class="fa fa-book fa-4x"></i>
                        <h5 class="mt-2 text-center">{{__('web.read_books')}}</h5>
                    </div>
                    <div class="card-body text-justify">
                        <p>{{__('web.read_books_text')}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/books" class="btn btn-block btn-primary">{{__('web.more')}}</a>
                    </div>
                </div>
                <div class="card shadow-sm p-4">
                    <div class="card-header text-center">
                        <i class="fa fa-file-alt fa-4x"></i>
                        <h5 class="mt-2 text-center">{{__('web.old_exams')}}</h5>
                    </div>
                    <div class="card-body text-justify">
                        <p>{{__('web.old_exams_text')}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/exams" class="btn btn-block btn-primary">{{__('web.more')}}</a>
                    </div>
                </div>
                <div class="card shadow-sm p-4">
                    <div class="card-header text-center">
                        <i class="fa fa-graduation-cap fa-4x"></i>
                        <h5 class="mt-2 text-center">{{trans_choice('web.project',10)}}</h5>
                    </div>
                    <div class="card-body text-justify">
                        <p>{{__('web.projects_text')}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/projects" class="btn btn-block btn-primary">{{__('web.more')}}</a>
                    </div>
                </div>
                <div class="card shadow-sm p-4 mt-4">
                    <div class="card-header text-center">
                        <i class="fa fa-suitcase fa-4x"></i>
                    <h5 class="mt-2 text-center">{{__('web.borrow_books')}}</h5>
                    </div>
                    <div class="card-body text-justify">
                    <p>{{__('web.borrow_books_text')}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/books" class="btn btn-block btn-primary">{{__('web.more')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------------
        Book Request section
    --------------------------------------------->
    <section class="request py-sm-5 text-center" id="req-book" style="background: url({{asset('images/shapes/bg-testimonials.svg')}})">
        <div class="container my-5">
            <h4 class="text-center bb text-white py-2 mb-4">{{__('web.request_books')}}</h4>
            <div class="alert">@include('partials.alerts')</div>
            <div class="card py-4 px-sm-5 rounded-0  mx-auto shadow col-sm-12 col-md-8">
                <form action="{{route('requestBook')}}" method="POST" class="spacer">
                    @csrf
                    <div class="form-group d-flex">
                    <input class="form-control form-control-lg form-control-lg" id="email" type="email" name="email" placeholder="{{__('web.email')}}">
                    </div>
                    <div class="form-group d-flex">
                        <input class="form-control form-control-lg" name="name" type="text" placeholder="{{__('web.name')}}">
                    </div>
                    <div class="form-group d-flex">
                        <input class="form-control form-control-lg" name="book_name" type="text" placeholder="{{__('web.book_name')}}">
                    </div>
                    <div class="form-group d-flex">
                        <input class="form-control form-control-lg" name="author" type="text" placeholder="{{__('web.author_name')}}">
                    </div>
                    <button class="btn btn-block btn-primary text-white">{{__('web.request')}} <i class="ion-md-send"></i></button>
                </form>
            </div>
        </div>
    </section>
    <!--------------------------------------------
        Contact section
    --------------------------------------------->
    <section id="contact" class="contact mb-5">
        <div class="contact-header text-center py-5 bg-dark">
            <h3 class="my-sm-5 text-white bb pb-2 text-center font-weight-bold">{{__('web.get_in_touch')}}</h3>
            <div class="overlay"></div>
        </div>
        <div class="contact-content">
            <div class="card-deck container-fluid mx-auto">
             {{--   <div class="card bg-secondary py-4 px-4 shadow">

                      <h5>{{__('web.send_message')}}</h5>
                    <p>{{__('web.feel_free')}}</p>
                    <form action="" class="spacer">
                        <div class="form-group d-flex">
                            <input class="form-control form-control-lg" type="text" placeholder="{{__('web.name')}}">
                        </div>
                        <div class="form-group d-flex">
                            <input class="form-control form-control-lg" id="email" type="email" placeholder="{{__('web.email')}}">
                        </div>
                        <div class="form-group d-flex">
                            <input class="form-control form-control-lg" type="text" placeholder="{{__('web.subject')}}">
                        </div>
                        <div class="form-group d-flex">
                            <textarea class="form-control form-control-lg" type="text" placeholder="{{__('web.message')}}"></textarea>
                        </div>
                        <button class="btn btn-block btn-primary text-white">{{__('web.send')}} <i class="ion-md-send"></i></button>
                    </form>
                </div> --}}
                <div class="card bg-primary p-3 p-sm-5 text-white text-center shadow" style="background: url({{asset('images/shapes/effect-2.svg')}}) top /cover">
                    <h5 class="text-center">{{__('web.contact_info')}}</h5>
                    <p class="lead mb-2 text-center">{{__('web.useful_info')}}</p>
                    <div class="mt-3 mx-auto row text-justify">
                        <div class="col-12 col-md-6">
                            <div class="">
                                <p class="lead mx-4"><i class="ion-md-map"></i> <b> {{__('web.address')}} :</b> {{__('web.address_text')}}  </p>
                                <p class="lead mx-4"><i class="ion-md-mail"></i> <b> {{__('web.email')}} :</b> info@library.com</p>
                                <p class="lead mx-4"><i class="ion-md-calendar"></i> <b> {{__('web.working_days')}} :</b> {{__('web.days_text')}}</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="">
                                <p class="lead mx-4"><i class="ion-md-call"></i> <b> {{__('web.phone')}} :</b> 100 -1020 -21221</p>
                                <p class="lead mx-4"><i class="ion-md-clock"></i> <b> {{__('web.working_hours')}} :</b> {{__('web.hours_text')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
