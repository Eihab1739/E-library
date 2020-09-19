@extends('layouts.app')

@section('content')
    <!-------------------------------------------- 
        show case section  
    --------------------------------------------->    
    <section class="showcase text-center d-flex align-items-center justify-content-center" style="background: url('images/showcase-2.jpg');background-position: left">
        <div class="text">
            <h2 class="mt-2 animated fadeInDownBig">
                Welcome To The <b class="primary-text-gradient"> Library </b> Home of Books                
            </h2>
            <p class="px-2 lead animated fadeInUp">Get Access To Hundreds of Books Online</p>
            <div class="mt-6 w-full mb-4 animated zoomIn">
                <a href="/books" class="primary-gradient text-white border-0 btn btn-primary shadow rounded-0"> Browse Now !</a>             
            </div>
        </div>                
        <div class="animation-area">
            <ul class="box-area">
                <li class="primary-gradient">
                    {{-- <svg style="fill: var(--primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><title>Open Book</title><g id="Open_Book" data-name="Open Book"><path d="M63,12H60V9a1,1,0,0,0-1-1H41.66A14.54,14.54,0,0,0,32,11.65,14.54,14.54,0,0,0,22.34,8H5A1,1,0,0,0,4,9v3H1a1,1,0,0,0-1,1V55a1,1,0,0,0,1,1H63a1,1,0,0,0,1-1V13A1,1,0,0,0,63,12Zm-5-2V50H41.66A14.53,14.53,0,0,0,33,52.83V13.42A12.56,12.56,0,0,1,41.66,10ZM6,10H22.34A12.56,12.56,0,0,1,31,13.42V52.83A14.53,14.53,0,0,0,22.34,50H6ZM2,14H4V51a1,1,0,0,0,1,1H22.34a12.54,12.54,0,0,1,6.82,2H2ZM62,54H34.84C39,51.33,41.08,52,59,52a1,1,0,0,0,1-1V14h2Z"/><path d="M12,16c10.73,0,12.35-.33,15.59,1.14a1,1,0,0,0,.82-1.82C24.56,13.57,22.1,14,12,14A1,1,0,0,0,12,16Z"/><path d="M28.41,20.32A14.5,14.5,0,0,0,23.05,19a1,1,0,0,0-.1,2,12.54,12.54,0,0,1,4.64,1.12A1,1,0,0,0,28.41,20.32Z"/><path d="M9,21H19a1,1,0,0,0,0-2H9A1,1,0,0,0,9,21Z"/><path d="M9,26c13.91,0,15.27-.37,18.59,1.14a1,1,0,0,0,.82-1.82C24.58,23.58,22.7,24,9,24A1,1,0,0,0,9,26Z"/><path d="M28.41,30.32C25,28.78,22.57,29,19,29a1,1,0,0,0,0,2c3.45,0,5.6-.22,8.59,1.14A1,1,0,0,0,28.41,30.32Z"/><path d="M9,31h6a1,1,0,0,0,0-2H9A1,1,0,0,0,9,31Z"/><path d="M9,36c13.91,0,15.27-.37,18.59,1.14a1,1,0,0,0,.82-1.82C24.58,33.58,22.7,34,9,34A1,1,0,0,0,9,36Z"/><path d="M28.41,40.32C24.65,38.61,22,39,15,39a1,1,0,0,0,0,2c7.28,0,9.4-.31,12.59,1.14A1,1,0,0,0,28.41,40.32Z"/><path d="M9,41h2a1,1,0,0,0,0-2H9A1,1,0,0,0,9,41Z"/><path d="M9,46H22.34a1,1,0,0,0,0-2H9A1,1,0,0,0,9,46Z"/><path d="M41.66,16H55a1,1,0,0,0,0-2H41.66A1,1,0,0,0,41.66,16Z"/><path d="M36,22.23A16.66,16.66,0,0,1,41.66,21H55a1,1,0,0,0,0-2c-14,0-15.67-.38-19.41,1.32A1,1,0,0,0,36,22.23Z"/><path d="M55,24H49a1,1,0,0,0,0,2h6A1,1,0,0,0,55,24Z"/><path d="M36,27.23A16.66,16.66,0,0,1,41.66,26H45a1,1,0,0,0,0-2c-3.59,0-6-.22-9.41,1.32A1,1,0,0,0,36,27.23Z"/><path d="M36,32.23A16.66,16.66,0,0,1,41.66,31H55a1,1,0,0,0,0-2c-14,0-15.67-.38-19.41,1.32A1,1,0,0,0,36,32.23Z"/><path d="M55,34H54a1,1,0,0,0,0,2h1A1,1,0,0,0,55,34Z"/><path d="M36,37.23A16.66,16.66,0,0,1,41.66,36H50a1,1,0,0,0,0-2c-8.17,0-10.73-.36-14.41,1.32A1,1,0,0,0,36,37.23Z"/><path d="M55,39H47a1,1,0,0,0,0,2h8A1,1,0,0,0,55,39Z"/><path d="M36,42.23A16.66,16.66,0,0,1,41.66,41H43a1,1,0,0,0,0-2,15.79,15.79,0,0,0-7.41,1.32A1,1,0,0,0,36,42.23Z"/><path d="M36,47.23A16.66,16.66,0,0,1,41.66,46H52a1,1,0,0,0,0-2c-11,0-12.77-.34-16.41,1.32A1,1,0,0,0,36,47.23Z"/></g></svg> --}}
                </li>
                <li class="primary-gradient">
                    {{-- <svg style="fill: var(--primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><title>Book pen</title><g id="Book_pen" data-name="Book pen"><path d="M49,0H5A5,5,0,0,0,0,5V59a5,5,0,0,0,5,5H49a1,1,0,0,0,1-1V1A1,1,0,0,0,49,0ZM48,54H8V2H48ZM2,5A3,3,0,0,1,5,2H6V54a5.93,5.93,0,0,0-3.88.92C1.94,55.05,2,58.77,2,5ZM5,62a3,3,0,0,1,0-6H48v2H5a1,1,0,0,0,0,2H48v2Z"/><path d="M13,27H43a1,1,0,0,0,1-1V12a1,1,0,0,0-1-1H13a1,1,0,0,0-1,1V26A1,1,0,0,0,13,27Zm1-14H42V25H14Z"/><path d="M40,41H16a1,1,0,0,0,0,2H40A1,1,0,0,0,40,41Z"/><path d="M38,46H18a1,1,0,0,0,0,2H38A1,1,0,0,0,38,46Z"/><path d="M63.73,14.54,60,10.6V9a1,1,0,0,0-1-1V5a3,3,0,0,0-6,0V8a1,1,0,0,0-1,1V53c0,.23-.13-.23,2,6.32A1,1,0,0,0,55,60v1a1,1,0,0,0,2,0V60a1,1,0,0,0,1-.68c2.18-6.56,2-6.09,2-6.32V13.51l2,2.12V24a1,1,0,0,0,2,0C64,14.6,64.12,15,63.73,14.54ZM58,16H54V10h4ZM55,5a1,1,0,0,1,2,0V8H55Zm3,47.84L56.28,58h-.56L54,52.84V18h4Z"/></g></svg> --}}
                </li>
                <li class="primary-gradient">
                    {{-- <svg style="fill: var(--primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><title>Atom</title><g id="Atom"><path d="M39,32a7,7,0,1,0-7,7A7,7,0,0,0,39,32Zm-7,5a5,5,0,1,1,5-5A5,5,0,0,1,32,37Z"/><path d="M51,32c15.87-13.92,10.6-23.27-9.5-16.44a51.69,51.69,0,0,0-1.3-5.22,4,4,0,0,0-3.27-7.17C35.43,1.07,33.78,0,32,0c-4,0-7.55,5.8-9.49,15.56C2.51,8.77-2.95,18,13,32a53.51,53.51,0,0,0-3.87,3.73,4,4,0,0,0-3.79.11h0a4,4,0,0,0-.79,6.31C3.5,44.5,3.4,46.47,4.28,48c2.76,4.79,13,2.22,18.23.44,4.13,20.8,14.86,20.72,19,0,6.35,2.16,4.9.81,5.3,2.29a4,4,0,0,0,7.72,0c3.17-.31,4.59-1.6,5.21-2.68C61.73,44.5,58.47,38.56,51,32Zm7-15c1.46,2.53-2,8-8.53,13.69a80.48,80.48,0,0,0-6.66-4.93,80,80,0,0,0-.94-8.21C50.09,14.71,56.53,14.47,58,17Zm-18,28.75c-1.87-.7-3.78-1.51-5.71-2.43C36.78,42,38.4,41,40.69,39.59,40.51,41.72,40.26,43.78,39.94,45.75Zm-15.88,0c-.32-2-.57-4-.75-6.16C25.6,41,27.23,42,29.77,43.32,27.84,44.24,25.93,45.05,24.06,45.75Zm0-27.5c1.87.7,3.78,1.51,5.71,2.43C27.22,22,25.6,23,23.31,24.41,23.49,22.28,23.74,20.22,24.06,18.25Zm-3,17.49q-2.64-1.83-5-3.74,2.33-1.91,5-3.74C21,31.07,21,32.93,21.08,35.74Zm2.07,1.38a87.46,87.46,0,0,1,0-10.24A89.91,89.91,0,0,1,32,21.78a90.53,90.53,0,0,1,8.85,5.1,87.46,87.46,0,0,1,0,10.24A89.91,89.91,0,0,1,32,42.22,90.53,90.53,0,0,1,23.15,37.12ZM39.94,18.25c.32,2,.57,4,.75,6.16C38.4,23,36.77,22,34.23,20.68,36.16,19.76,38.07,19,39.94,18.25Zm3,10q2.64,1.83,5,3.74-2.32,1.91-5,3.74C43,32.93,43,31.07,42.92,28.26ZM40,7a2,2,0,1,1-2-2A2,2,0,0,1,40,7ZM35.18,4.17A4,4,0,0,0,38.29,11a51.43,51.43,0,0,1,1.3,5.27A77.94,77.94,0,0,0,32,19.54a79,79,0,0,0-7.59-3.3C26,8,30.18-2.6,35.18,4.17ZM6,17c1.45-2.53,7.89-2.29,16.13.55a80,80,0,0,0-.94,8.21,80.48,80.48,0,0,0-6.66,4.93C8,25,4.56,19.53,6,17Zm-.6,21.79A2,2,0,1,1,8.35,41,2,2,0,0,1,5.42,38.79Zm.88,4.37a4,4,0,0,0,4.34-6.1,50.62,50.62,0,0,1,3.91-3.75,80.48,80.48,0,0,0,6.66,4.93,80,80,0,0,0,.94,8.21C14.19,49.19,3,50.89,6.3,43.16ZM32,62c-2.92,0-5.93-5.69-7.59-14.24A77.94,77.94,0,0,0,32,44.46a79,79,0,0,0,7.59,3.3C37.93,56.31,34.92,62,32,62ZM52.38,50.7a2,2,0,1,1,.2-1.52A2,2,0,0,1,52.38,50.7Zm2.14-2A4,4,0,0,0,47.06,48a51.43,51.43,0,0,1-5.21-1.52,80,80,0,0,0,.94-8.21,80.48,80.48,0,0,0,6.66-4.93C55.81,38.84,62.87,47.73,54.52,48.68Z"/></g></svg> --}}
                </li>
                <li class="primary-gradient">
                    {{-- <svg style="fill: var(--primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><title>Online LEarning</title><g id="Online_LEarning" data-name="Online LEarning"><path d="M57,6H56V5a1,1,0,0,0-1-1H52V1a1,1,0,0,0-1-1C42,0,37.12-.86,32,3.65,26.85-.88,22,0,13,0a1,1,0,0,0-1,1V4H9A1,1,0,0,0,8,5V6H7a5,5,0,0,0-5,5V47a5,5,0,0,0,5,5H24.92l-.62,7.92A2.31,2.31,0,0,1,22,62H20a1,1,0,0,0,0,2H44a1,1,0,0,0,0-2H42a2.3,2.3,0,0,1-2.3-2.07L39.08,52H57a5,5,0,0,0,5-5V11A5,5,0,0,0,57,6ZM54,6V36H34.84c3.95-2.54,6.81-2,16.16-2a1,1,0,0,0,1-1V6ZM50,2V32c-8.16,0-12.26-.66-17,2.83V5.42A12.56,12.56,0,0,1,41.66,2ZM14,2c7.83,0,12.48-.82,17,3.42V34.83C26.16,31.27,21.91,32,14,32ZM10,6h2V33a1,1,0,0,0,1,1c9.28,0,12.21-.54,16.16,2H10ZM7,8H8V37a1,1,0,0,0,1,1H55a1,1,0,0,0,1-1V8h1a3,3,0,0,1,3,3V42H4V11A3,3,0,0,1,7,8ZM38.35,62H25.64c.77-1.21.61-1.38,1.29-10H37.08C37.68,59.84,37.52,60.69,38.35,62ZM60,47a3,3,0,0,1-3,3H7a3,3,0,0,1-3-3V44H60Z"/><path d="M31,48h2a1,1,0,0,0,0-2H31A1,1,0,0,0,31,48Z"/><path d="M18,8h9a1,1,0,0,0,0-2H18A1,1,0,0,0,18,8Z"/><path d="M18,13h9a1,1,0,0,0,0-2H18A1,1,0,0,0,18,13Z"/><path d="M18,18h9a1,1,0,0,0,0-2H18A1,1,0,0,0,18,18Z"/><path d="M18,23h9a1,1,0,0,0,0-2H18A1,1,0,0,0,18,23Z"/><path d="M18,28h9a1,1,0,0,0,0-2H18A1,1,0,0,0,18,28Z"/><path d="M37,8h9a1,1,0,0,0,0-2H37A1,1,0,0,0,37,8Z"/><path d="M37,13h9a1,1,0,0,0,0-2H37A1,1,0,0,0,37,13Z"/><path d="M37,18h9a1,1,0,0,0,0-2H37A1,1,0,0,0,37,18Z"/><path d="M37,23h9a1,1,0,0,0,0-2H37A1,1,0,0,0,37,23Z"/><path d="M37,28h9a1,1,0,0,0,0-2H37A1,1,0,0,0,37,28Z"/></g></svg>     --}}
                </li>
                <li class="primary-gradient">
                    {{-- <svg style="fill: var(--primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><title>Bag</title><g id="Bag"><path d="M32,8A18.79,18.79,0,0,0,13.17,26.1L12.82,35a1,1,0,0,0,2,.08l.35-8.86a16.84,16.84,0,0,1,33.66,0L49.18,35a1,1,0,0,0,2-.08l-.35-8.86A18.79,18.79,0,0,0,32,8Z"/><path d="M32,31c.57,0,.35.06,5.71-5.29a1,1,0,0,0,0-1.42l-5-5a1,1,0,0,0-1.42,0l-5,5a1,1,0,0,0,0,1.42C31.53,30.94,31.41,31,32,31Zm0-9.59L35.59,25,32,28.59,28.41,25Z"/><path d="M43,40H21a5,5,0,0,0-5,5V55a5,5,0,0,0,5,5H43a5,5,0,0,0,5-5V45A5,5,0,0,0,43,40Zm3,15a3,3,0,0,1-3,3H21a3,3,0,0,1-3-3V45a3,3,0,0,1,3-3H43a3,3,0,0,1,3,3Z"/><path d="M59,38H55.29C54,6,54,36.94,54,5a3,3,0,0,0-3-3H45a3,3,0,0,0-3,3V6.31A22.17,22.17,0,0,0,38.69,5,7,7,0,0,0,25.31,5,22.17,22.17,0,0,0,22,6.31V5a3,3,0,0,0-3-3H13a3,3,0,0,0-3,3c0,32,0,1-1.29,33H5a1,1,0,0,0-1,1V55a5,5,0,0,0,5.08,5A8,8,0,0,0,16,64H48c4.91,0,6.79-4,7-4a5,5,0,0,0,5-5V39A1,1,0,0,0,59,38ZM44,5a1,1,0,0,1,1-1h6a1,1,0,0,1,1,1V15.8a22.79,22.79,0,0,0-8-8.4Zm-7.74-.6a22.81,22.81,0,0,0-8.52,0A5,5,0,0,1,36.26,4.4ZM12,5a1,1,0,0,1,1-1h6a1,1,0,0,1,1,1V7.4a22.79,22.79,0,0,0-8,8.4ZM6,55V40H8.63C8,57.14,7.86,56.36,8.23,57.89A3,3,0,0,1,6,55Zm42,7H16a6,6,0,0,1-5.4-3.38c-.87-2.1-.73.75.58-32.6a20.84,20.84,0,0,1,41.64,0c3,75.86-2-51.24,1.18,30A6,6,0,0,1,48,62Zm10-7a3,3,0,0,1-2.24,2.89c.39-1.6.27-1-.39-17.89H58Z"/></g></svg> --}}
                </li>
                <li class="primary-gradient">
                    {{-- <svg style="fill: var(--primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><title>Certificate</title><g id="Certificate"><path d="M63,5H1A1,1,0,0,0,0,6V54a1,1,0,0,0,1,1H28v3a1,1,0,0,0,1.55.83L32,57.2c2.5,1.67,2.79,2,3.47,1.68S36,57.89,36,55H63a1,1,0,0,0,1-1V6A1,1,0,0,0,63,5ZM27,44a5,5,0,1,1,5,5A5,5,0,0,1,27,44Zm5-7a7,7,0,0,0-4.89,12H9.9A5,5,0,0,0,6,45.1V14.9A5,5,0,0,0,9.9,11H54.1A5,5,0,0,0,58,14.9V45.1A5,5,0,0,0,54.1,49H36.89A7,7,0,0,0,32,37Zm2,19.13c-2.29-1.53-1.73-1.51-4,0V50.71a7,7,0,0,0,4,0ZM62,53H36V51H55a1,1,0,0,0,1-1,3,3,0,0,1,3-3,1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,3,3,0,0,1-3-3,1,1,0,0,0-1-1H9a1,1,0,0,0-1,1,3,3,0,0,1-3,3,1,1,0,0,0-1,1V46a1,1,0,0,0,1,1,3,3,0,0,1,3,3,1,1,0,0,0,1,1H28v2H2V7H62Z"/><path d="M49,15H15a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1H49a1,1,0,0,0,1-1V16A1,1,0,0,0,49,15Zm-1,6H16V17H48Z"/><path d="M49,27H15a1,1,0,0,0,0,2H49A1,1,0,0,0,49,27Z"/><path d="M49,32H15a1,1,0,0,0,0,2H49A1,1,0,0,0,49,32Z"/><path d="M21,42H15a1,1,0,0,0,0,2h6A1,1,0,0,0,21,42Z"/><path d="M49,42H43a1,1,0,0,0,0,2h6A1,1,0,0,0,49,42Z"/></g></svg> --}}
                </li>
            </ul>
        </div>
        <img src="images/shapes/shape-a3.png" alt="">
    </section>
    <!-------------------------------------------- 
        section services  
    --------------------------------------------->
    <section class="services bg-white text-center py-5">            
        <h4 class="mb-5 d-inline-block bb" >Services </h4>            
        <div class="row container mx-auto mb-5 spacer">            
            <div class="col-sm-12 col-md-4 col-lg-3 mt-3">
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
    <section class="request py-sm-5 text-center">
        <div class="container my-5">
            <h4 class="d-inline-block bb mb-4">Request a Book</h4>
            <div class="card py-4 px-sm-5 rounded-0  mx-auto shadow-sm col-sm-12 col-md-8">
                <form action="" class="spacer">                                        
                    <div class="form-group d-flex">
                        <i class="ion-md-mail mr-3 d-none d-sm-inline-block"></i>
                        <input class="form-control" id="email" type="email" placeholder="E-Mail Address">                                        
                    </div>
                    <div class="form-group d-flex">
                        <i class="ion-md-text mr-3 d-none d-sm-inline-block"></i>
                        <input class="form-control" type="text" placeholder="Name">
                    </div>
                    <div class="form-group d-flex">
                        <i class="ion-md-document mr-3 d-none d-sm-inline-block"></i>
                        <input class="form-control" type="text" placeholder="Book Name">
                    </div>
                    <div class="form-group d-flex">
                        <i class="ion-md-create mr-3 d-none d-sm-inline-block"></i>
                        <input class="form-control" type="text" placeholder="Author Name">
                    </div>
                    <button class="btn btn-block primary-gradient text-white rounded-0 shadow-sm">REQUEST <i class="ion-md-send"></i></button>
                </form>
            </div>
        </div>        
    </section>
    <!-------------------------------------------- 
        Contact section  
    --------------------------------------------->
    <section class="contact">
        <div class="contact-header text-center py-5 bg-dark">
            <h3 class="my-sm-5 text-white">Get In Touch</h3>
        </div>
        <div class="contact-content">
            <div class="card-deck container-fluid mx-auto">
                <div class="card py-4 px-4 shadow">
                    <h5>Send Us a Message</h5>
                    <p>Feel free to send us a message fill the form below</p>
                    <form action="" class="spacer">
                        <div class="form-group d-flex">
                            <i class="ion-md-person mr-3 d-none d-sm-inline-block"></i>
                            <input class="form-control" type="text" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group d-flex">
                            <i class="ion-md-mail mr-3 d-none d-sm-inline-block"></i>
                            <input class="form-control" id="email" type="email" placeholder="E-Mail Address">                                        
                        </div>                            
                        <div class="form-group d-flex">
                            <i class="ion-md-text mr-3 d-none d-sm-inline-block"></i>
                            <input class="form-control" type="text" placeholder="Subject">
                        </div>
                        <div class="form-group d-flex">
                            <i class="ion-md-text mr-3 d-none d-sm-inline-block"></i>
                            <textarea class="form-control" type="text" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-block primary-gradient text-white rounded-0 shadow-sm">SEND <i class="ion-md-send"></i></button>
                    </form>
                </div>                
                <div class="card primary-gradient p-3 p-sm-5 text-white shadow">
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
    </section>    
@endsection
