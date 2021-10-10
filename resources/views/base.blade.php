<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
     <link rel="shortcut icon" href="{{asset('assets/images/logo.jpg')}}" type="image/x-icon">  
     <script src="https://kit.fontawesome.com/d7caef51b0.js" crossorigin="anonymous"></script>
     <title>{{config('base.name','Hostel Inquiry System')}}-@yield('title')</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/templatemo-klassy-cafe.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    </head>
    
    <body>
 
        <div class="top-bar text-center">
            <h2 class="bg-text text-center">Hostel Inquiry System of Sabaragamuwa University of Sri Lanka</h2>
        </div>

        <nav class="navbar bg-dark navbar-light navbar-expand-lg  ">
            <div class="container">
              <a class="navbar-brand" href="/"><img src="{{asset('assets/images/susl-logo.png')}}" alt="logo"></a>
             
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item"><a class="nav-link " href="/">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="/contactus">Contact Us</a></li>
                  <li> @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block mt-2">
                      @auth
                        <li class="nav-item nav-link">
                          <x-app-layout>
                           
                          </x-app-layout>
                        </li>
                    
                        
                      @else
                       <li class="nav-item"><a href="{{ route('login') }}" class="text-sm text-gray-700 underline nav-link">Log in</a></li>   
  
                          @if (Route::has('register'))
                           <li class="nav-item"><a href="{{ route('register') }}" class="text-sm text-gray-700 underline nav-link">Register</a></li>   
                          @endif
                      @endauth
                  </div>
              @endif
            </li>
                </ul>
              </div>
            </div>
            </nav>

            @yield('content')

            <footer class=" text-white pt-4 pb-4 bg-color mb-4">
                <div class="container text-center text-md-left">
                    <div class="row text-center text-md-left">
                        <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">
                          <h5 class="text-uppercase mb-4 font-weight-bold text-warning footer-heading ">About University</h5>
                          <p class="para text-white"> The Sabaragamuwa University of Sri Lanka (SUSL) now stands as the present-day link to such tradition of knowledge and wisdom, which is the 12th national university of contemporary Sri Lanka.</p>
                        </div>
                        
                        <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mt-3">
                           <h5 class="text-uppercase mb-4 font-weight-bold text-warning footer-heading">Useful Links</h5>
                           <p class="pb-3">
                               <a href="https://www.sab.ac.lk/about-the-university" class="text-white links" >University Website</a>
                           </p>
                           <p class="pb-3">
                               <a href="https://www.ugc.ac.lk/" class="text-white links">University Grant Commision</a>
                           </p>
                           <p class="pb-3">
                                <a href="https://www.google.com/maps/place/Sabaragamuwa+University+of+Sri+Lanka,+%E0%B7%81%E0%B7%8A%E2%80%8D%E0%B6%BB%E0%B7%93+%E0%B6%BD%E0%B6%82%E0%B6%9A%E0%B7%8F+%E0%B7%83%E0%B6%B6%E0%B6%BB%E0%B6%9C%E0%B6%B8%E0%B7%94%E0%B7%80+%E0%B7%80%E0%B7%92%E0%B7%81%E0%B7%8A%E0%B7%80%E0%B7%80%E0%B7%92%E0%B6%AF%E0%B7%8A%E2%80%8D%E0%B6%BA%E0%B7%8F%E0%B6%BD%E0%B6%BA/@6.7145912,80.7850298,17z/data=!4m5!3m4!1s0x3ae38a5d15e55917:0x92bb8770edf29b53!8m2!3d6.7145912!4d80.7872185" class="text-white links" >Maps & Directions</a>
                           </p>
                        </div>
           
                        <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">
                            <h5 class="text-uppercase mb-4 font-weight-bold text-warning footer-heading">Contacts</h5>
                            <p  class="text-white">
                                <i class="fas fa-home mr-3"></i>&nbsp; Sri Lanka Sabaragamuwa University of Sri Lanka,P.O. Box 02, Belihuloya, 70140, Sri Lanka    
                            </p>
                            <p  class="text-white">
                                <i class="fas fa-phone mr-3"></i>&nbsp; +94-45-2280014 / +94-45-2280087
                            </p>
                            <p class="text-white">
                               <i class="fas fa-envelope mr-3"></i>&nbsp; <a href="emailto:info@sab.ac.lk">info@sab.ac.lk</a> 
                           </p>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-8">
                            <p  class=" text-white pl-5">Copyright &copy;2021 All rights reserved by: <strong class="text-warning">Rachitha Rangana</strong></p>
                        </div>
           
                        <div class="col-md-5 col-lg-4">
                            <div class="text-center text-md-right">
                                <ul class="list-unstyled list-line">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/rachithar.gamage" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                       <a href="https://twitter.com/RachithaRangana" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                                   </li>
                                   <li class="list-inline-item">
                                       <a href="https://www.linkedin.com/in/rachitha-rangana-9952891a1/" class="btn-floating btn-sm text-white" style="font-size: 23px;text-decoration: none;"><i class="fab fa-linkedin"></i></a>
                                   </li>
                                </ul>
                            </div>
                        </div>
                    </div>
           
                </div>
            </footer>

       <!-- jQuery -->
       <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>

       <!-- Bootstrap -->
       <script src="{{asset('assets/js/popper.js')}}"></script>
       <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
   
       <!-- Plugins -->
       <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
       <script src="{{asset('assets/js/accordions.js')}}"></script>
       <script src="{{asset('assets/js/datepicker.js')}}"></script>
       <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
       <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
       <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
       <script src="{{asset('assets/js/imgfix.min.js')}}"></script> 
       <script src="{{asset('assets/js/slick.js')}}"></script> 
       <script src="{{asset('assets/js/lightbox.js')}}"></script> 
       <script src="{{asset('assets/js/isotope.js')}}"></script> 
       
       <!-- Global Init -->
       <script src="{{asset('assets/js/custom.js')}}"></script>
       <script>
   
           $(function() {
               var selectedClass = "";
               $("p").click(function(){
               selectedClass = $(this).attr("data-rel");
               $("#portfolio").fadeTo(50, 0.1);
                   $("#portfolio div").not("."+selectedClass).fadeOut();
               setTimeout(function() {
                 $("."+selectedClass).fadeIn();
                 $("#portfolio").fadeTo(50, 1);
               }, 500);
                   
               });
           });
   
       </script>
     </body>
   </html>     