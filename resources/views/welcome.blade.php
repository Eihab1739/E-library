@extends('layouts.app')

@section('content')
    <!-------------------------------------------- 
        show case section  
    --------------------------------------------->    
    <section  id="particles-js" class="showcase text-center d-flex align-items-center justify-content-center" style="background: url('images/showcase-2.jpg');background-position:left">                                            
            <div>
                <h2 class="mt-2 animated fadeInDownBig">
                    Welcome To The <b class="text-primary"> Library </b> Home of Books                
                </h2>
                <p class="px-2 lead animated fadeInUp">Get Access To Hundreds of Books Online</p>
                <div class="mt-6 w-full mb-4 animated zoomIn">
                    <button class="btn btn-primary shadow rounded-0"> Browse Now !</button>             
                </div>
            </div>                
        <img src="images/shapes/shape-a3.png" alt="">
    </section>
    <!-------------------------------------------- 
        section services  
    --------------------------------------------->
    <section class="services bg-white text-center py-5">    
        <h4 class="mb-5 d-inline-block bb">Services </h4>    
        <div class="row container mx-auto mb-5">            
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card card-outline shadow-sm">                    
                    <div class="card-header bt bg-white text-center">
                        <img src="images/icons/Book pen.svg" alt="" width="40px">
                        <h5 class="mt-2">Read Books</h5>
                    </div>                    
                    <div class="card-body text-justify">                        
                        <p>You can access hundreds of books online without going to the library</p>
                    </div>                    
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card card-outline shadow-sm">                    
                    <div class="card-header bt bg-white text-center">
                        <img src="images/icons/Test.svg" alt="" width="40px">
                        <h5 class="mt-2">Old Exams</h5>
                    </div>                    
                    <div class="card-body text-justify">                        
                        <p>You can now get access to old exams in the library website</p>
                    </div>                    
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card card-outline shadow-sm">                    
                    <div class="card-header bt bg-white text-center">
                        <img src="images/icons/Certificate.svg" alt="" width="40px">
                        <h5 class="mt-2">Projects</h5>
                    </div>                    
                    <div class="card-body text-justify">                        
                        <p>Get access to other student graduation projects online </p>
                    </div>                    
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card card-outline shadow-sm">                    
                    <div class="card-header bt bg-white text-center">
                        <img src="images/icons/Bag.svg" alt="" width="40px">
                        <h5 class="mt-2">Borrow Books</h5>
                    </div>                    
                    <div class="card-body text-justify">                                                
                        <p>You found an interesting book you can come to the library and borrow it</p>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------- 
        Book Request section  
    --------------------------------------------->
    <section class="request py-5 text-center">
        <div class="container my-5">
            <h4 class="d-inline-block bb mb-4">Request a Book</h4>
            <div class="card p-5 rounded-0 w-50 mx-auto shadow-sm">
                <form action="" class="spacer">                                        
                    <div class="form-group d-flex">
                        <i class="ion-md-mail mr-3"></i>
                        <input class="form-control" id="email" type="email" placeholder="E-Mail Address">                                        
                    </div>
                    <div class="form-group d-flex">
                        <i class="ion-md-text mr-3"></i>
                        <input class="form-control" type="text" placeholder="Name">
                    </div>
                    <div class="form-group d-flex">
                        <i class="ion-md-document mr-3"></i>
                        <input class="form-control" type="text" placeholder="Book Name">
                    </div>
                    <div class="form-group d-flex">
                        <i class="ion-md-create mr-3"></i>
                        <input class="form-control" type="text" placeholder="Author Name">
                    </div>
                    <button class="btn btn-block btn-primary rounded-0 shadow-sm">REQUEST <i class="ion-md-send"></i></button>
                </form>
            </div>
        </div>        
    </section>
    <!-------------------------------------------- 
        Contact section  
    --------------------------------------------->
    <section class="contact">
        <div class="contact-header text-center py-5 bg-dark">
            <h3 class="my-5 text-white">Get In Touch</h3>
        </div>
        <div class="contact-content">
            <div class="row container-fluid mx-auto">
                <div class="col-sm-12 col-md-6 col-lg-7">
                    <div class="card pt-5 px-5 pb-4 shadow">
                        <h5>Send Us a Message</h5>
                        <p>Feel free to send us a message fill the form below</p>
                        <form action="" class="spacer">
                            <div class="form-group d-flex">
                                <i class="ion-md-person mr-3"></i>
                                <input class="form-control" type="text" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group d-flex">
                                <i class="ion-md-mail mr-3"></i>
                                <input class="form-control" id="email" type="email" placeholder="E-Mail Address">                                        
                            </div>                            
                            <div class="form-group d-flex">
                                <i class="ion-md-text mr-3"></i>
                                <input class="form-control" type="text" placeholder="Subject">
                            </div>
                            <div class="form-group d-flex">
                                <i class="ion-md-text mr-3"></i>
                                <textarea class="form-control" type="text" placeholder="Message"></textarea>
                            </div>
                            <button class="btn btn-block btn-primary rounded-0 shadow-sm">SEND <i class="ion-md-send"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <div class="card bg-primary p-5 text-white shadow">
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
                                <p class="lead"><i class="ion-md-clock"></i> <b> Working Hours :</b> 7:00 am ---> 3:00 pm</p>
                            </li>
                            <li class="d-flex">
                                <p class="lead"><i class="ion-md-calendar"></i> <b> Working Days :</b> Sunday ---> Tuseday</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>  
        </div>
    </section>
@endsection
