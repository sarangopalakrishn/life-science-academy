<!doctype html>
<html lang="en">



<head>
   
    @include('users.template.topbar')
  
  
</head>

<body>
  
    <!--====== PRELOADER PART START ======-->
    
 
    
    <!--====== PRELOADER PART START ======-->
   
    <!--====== HEADER PART START ======-->
    
    @include('users.template.header')
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->

    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url( {{ asset('/image/page-banner-1.jpg') }} )">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Events</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('users.home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== EVENTS PART START ======-->
    
    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
               <div class="col-lg-6">
                   <div class="single-event-list mt-30">
                       <div class="event-thum">
                           <img src="{{ asset('/image/event/e-1.jpg') }}" alt="Event">
                       </div>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                            <h4>Tech Summit</h4>
                            <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                            <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-6">
                   <div class="single-event-list mt-30">
                       <div class="event-thum">
                           <img src="{{ asset('/image/event/e-2.jpg') }}" alt="Event">
                       </div>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                            <h4>Tech Summit</h4>
                            <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                            <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-6">
                   <div class="single-event-list mt-30">
                       <div class="event-thum">
                           <img src="{{ asset('/image/event/e-3.jpg') }}" alt="Event">
                       </div>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                            <h4>Tech Summit</h4>
                            <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                            <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-6">
                   <div class="single-event-list mt-30">
                       <div class="event-thum">
                           <img src="{{ asset('/image/event/e-4.jpg') }}" alt="Event">
                       </div>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                            <h4>Tech Summit</h4>
                            <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                            <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-6">
                   <div class="single-event-list mt-30">
                       <div class="event-thum">
                           <img src="{{ asset('/image/event/e-1.jpg') }}" alt="Event">
                       </div>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                            <h4>Tech Summit</h4>
                            <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                            <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-6">
                   <div class="single-event-list mt-30">
                       <div class="event-thum">
                           <img src="{{ asset('/image/event/e-2.jpg') }}" alt="Event">
                       </div>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                            <h4>Tech Summit</h4>
                            <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                            <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
                       </div>
                   </div>
               </div>
           </div> <!-- row -->
            <!-- <div class="row">
                <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="#">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>  <!-- courses pagination -->
                <!-- </div> -->
            <!-- </div>  -->

            <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== EVENTS PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
   
    @include('users.template.footer')
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6602a817a0c6737bd124e79f/1hpt617fq';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
<!--End of Tawk.to Script-->
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="{{ asset('/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{ asset('/js/slick.min.js') }}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
    
    <!--====== Counter Up js ======-->
    <script src="{{ asset('/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
    
    <!--====== Nice Select js ======-->
    <script src="{{ asset('/js/jquery.nice-select.min.js') }}"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{ asset('/js/jquery.nice-number.min.js') }}"></script>
    
    <!--====== Count Down js ======-->
    <script src="{{ asset('/js/jquery.countdown.min.js') }}"></script>
    
    <!--====== Validator js ======-->
    <script src="{{ asset('/js/validator.min.js') }}"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('/js/ajax-contact.js') }}"></script>
    
    <!--====== Main js ======-->
    <script src="{{ asset('/js/main.js') }}"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{ asset('/js/map-script.js') }}"></script>

</body>



</html>
