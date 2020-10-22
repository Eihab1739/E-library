@extends('layouts.app')

@section('content')
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
        <h3 class="mb-5 d-inline-block text-white py-1 bb" >Services </h3>
            <div class="card-deck container-fluid mx-auto">        
                <div class="card shadow-sm p-4 mt-4">
                    <div class="card-header text-center">                       
                        <i class="fa fa-book fa-4x"></i>
                        <h5 class="mt-2">Read Books</h5>
                    </div>
                    <div class="card-body text-justify">
                        <p>You can access hundreds of books online without going to the library</p>                        
                    </div>
                    <div class="card-footer">
                        <a href="/books" class="btn btn-block btn-primary">More</a>
                    </div>                    
                </div>
                <div class="card shadow-sm p-4">
                    <div class="card-header text-center">
                        <i class="fa fa-file-alt fa-4x"></i>
                        <h5 class="mt-2">Old Exams</h5>
                    </div>
                    <div class="card-body text-justify">
                        <p>You can now get access to old exams in the library website</p>                        
                    </div>
                    <div class="card-footer">
                        <a href="/exams" class="btn btn-block btn-primary">More</a>
                    </div>
                </div>
                <div class="card shadow-sm p-4">
                    <div class="card-header text-center">
                        <i class="fa fa-graduation-cap fa-4x"></i>
                        <h5 class="mt-2">Projects</h5>
                    </div>
                    <div class="card-body text-justify">
                        <p>Get access to other student graduation projects online </p>                        
                    </div>
                    <div class="card-footer">
                        <a href="/projects" class="btn btn-block btn-primary">More</a>
                    </div>
                </div>
                <div class="card shadow-sm p-4 mt-4">
                    <div class="card-header text-center">
                        <i class="fa fa-suitcase fa-4x"></i>
                        <h5 class="mt-2">Borrow Books</h5>
                    </div>
                    <div class="card-body text-justify">
                        <p>You found an interesting book you can come to the library and borrow it</p>                        
                    </div>
                    <div class="card-footer">
                        <a href="/books" class="btn btn-block btn-primary">More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------------
        Book Request section
    --------------------------------------------->
    <section class="request py-sm-5 text-center">
        <div class="container my-5">
            <h4 class="d-inline-block text-white py-2 bb mb-4">Request a Book</h4>
            <div class="card py-4 px-sm-5 rounded-0  mx-auto shadow col-sm-12 col-md-8">
                <form action="" class="spacer">
                    <div class="form-group d-flex">
                        <input class="form-control form-control-lg form-control-lg" id="email" type="email" placeholder="E-Mail Address">
                    </div>
                    <div class="form-group d-flex">
                        <input class="form-control form-control-lg" type="text" placeholder="Name">
                    </div>
                    <div class="form-group d-flex">
                        <input class="form-control form-control-lg" type="text" placeholder="Book Name">
                    </div>
                    <div class="form-group d-flex">
                        <input class="form-control form-control-lg" type="text" placeholder="Author Name">
                    </div>
                    <button class="btn btn-block btn-primary text-white">REQUEST <i class="ion-md-send"></i></button>
                </form>
            </div>
        </div>
    </section>
    <!--------------------------------------------
        Contact section
    --------------------------------------------->
    <section id="contact" class="contact mb-5">        
        <div class="contact-header text-center py-5 bg-dark">
            <h3 class="my-sm-5 text-white font-weight-bold">Get In Touch</h3>
            <div class="overlay"></div>
        </div>
        <div class="contact-content">
            <div class="card-deck container-fluid mx-auto">
                <div class="card bg-secondary py-4 px-4 shadow">
                    <h5>Send Us a Message</h5>
                    <p>Feel free to send us a message fill the form below</p>
                    <form action="" class="spacer">
                        <div class="form-group d-flex">
                            <input class="form-control form-control-lg" type="text" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group d-flex">
                            <input class="form-control form-control-lg" id="email" type="email" placeholder="E-Mail Address">
                        </div>
                        <div class="form-group d-flex">
                            <input class="form-control form-control-lg" type="text" placeholder="Subject">
                        </div>
                        <div class="form-group d-flex">
                            <textarea class="form-control form-control-lg" type="text" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-block btn-primary text-white">SEND <i class="ion-md-send"></i></button>
                    </form>
                </div>
                <div class="card bg-primary p-3 p-sm-5 text-white shadow">
                    <h5>Contact Info</h5>
                    <p class="lead mb-2">Useful information about our workflow and location</p>
                    <ul class="navbar-nav mt-3">
                        <li class="d-flex">
                            <p class="lead"><i class="ion-md-map"></i> <b> Address :</b> Khartoum north  </p>
                        </li>
                        <li class="d-flex">
                            <p class="lead"><i class="ion-md-mail"></i> <b> Email :</b>: info@library.com</p>
                        </li>
                        <li class="d-flex">
                            <p class="lead"><i class="ion-md-call"></i> <b> Phone :</b> 100 -1020 -21221</p>
                        </li>
                        <li class="d-flex">
                            <p class="lead"><i class="ion-md-clock"></i> <b> Working Hours :</b> 7:00 am -- 3:00 pm</p>
                        </li>
                        <li class="d-flex">
                            <p class="lead"><i class="ion-md-calendar"></i> <b> Working Days :</b> Sunday -- Tuseday</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
