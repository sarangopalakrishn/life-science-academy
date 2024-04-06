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
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url( {{ asset('/image/page-banner-1.jpg') }} )">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>News</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('users.home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   



    <!--====== BLOG PART START ======-->
    
    <section id="blog-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
               <div class="col-lg-8">
                   <div class="single-blog mt-30">
                       <div class="blog-thum">
                           <img src="{{ asset('/image/blog/b-3.webp') }}" alt="Blog">
                       </div>
                       <div class="blog-cont">
                           <h3>CSIR NET/JRF ONLINE CLASS</h3>
                          
                           <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> CLASS STARTS ON MARCH 1 2024</i></p>
                           <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> LIVE & RECORDED CLASS</i></p>
                           <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> PDF NOTES</i></p>
                           <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> GROUP DISCUSSIONS</i></p>
                           <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> AFFORDABLE TIMING</i></p>
                           <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> FEE : 22000+ GST </i></p>
                           <br>
                           <button type="button" class="btn btn-primary">
                            Book Now
                           </button>
                           
                       </div>
                   </div> <!-- single blog -->
                   <div class="single-blog mt-30">
                       <div class="blog-thum">
                           <img src="{{ asset('/image/blog/course2.webp') }}" alt="Blog">
                       </div>
                       <div class="blog-cont">
                           <h3>CSIR NET/JRF OFFLINE CLASS</h3>

                           <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> GROUP DISCUSSIONS</i></p>
                           <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> STRESS FREE ATMOSPHERE</i></p>
                           <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> TOP RATED CLASSES WITH MOST NO OF RESULTS</i></p>
                           <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> CSIR MODEL EXAMINATIONS</i></p>
                           <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> HOSTEL FACILITY</i></p>
                           <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> FEE : 35000+ GST</i></p>
                           <br>
                          <button type="button" class="btn btn-primary">
                            Book Now
                          </button>
                    
                       </div>
                   </div> <!-- single blog -->

                   <div class="single-blog mt-30">
                    <div class="blog-thum">
                        <img src="{{ asset('/image/blog/course3.webp') }}" alt="Blog">
                    </div>
                    <div class="blog-cont">
                        <h3>KPSC SCIENTIFIC OFFICER</h3>
                        

                        <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> LIVE & RECORDED CLASSES</i></p>
                        <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> PDF NOTES</i></p>
                        <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> GROUP DISCUSSIONS</i></p>
                        <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> 7:00PM-9.30 PM CLASS TIME</i></p>
                        <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"> TEST PAPERS & MOCK EXAMINATIONS</i></p>
                        <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true">  FEE : 8000/-</i></p>  
                        
                         <br>

                        <button type="button" class="btn btn-primary">
                            Book Now
                        </button>
                    </div>
                </div>
                
                <!-- single blog -->


                   <!-- <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-lg-end justify-content-center">
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
                    </nav>   -->
                    <!-- courses pagination -->
               </div>
               <div class="col-lg-4">
                   <div class="sidebar">
                       <div class="row">
                           <div class="col-lg-12 col-md-6">
                              
                               <div class="categories mt-30">
                                   <h4>Courses</h4>
                                    <ul>
                                        <li>CSIR/UGC-NET/JRF LIFESCIENCES</li>
                                        <li>KERALA SET COACHING</li>
                                        <li>ICMR - JRF</li>
                                        <li>TIFR/JGEEBILS</li>
                                        <li>GATE</li>
                                        <li>DBT - JRF</li>
                                        <li>IIT JAM - Biotech</li>
                                        <li>ICAR</li>
                                        <li>Collegiate Botany/Zoology</li>
                                        <li>NEET Biology</li>
                                        <li>⁠CUET PG</li>
                                    </ul>
                               </div>
                           </div> <!-- categories -->
                           
                       </div> <!-- row -->
                   </div> <!-- sidebar -->
               </div>
           </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== BLOG PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    

    @include('users.template.footer')
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    
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
