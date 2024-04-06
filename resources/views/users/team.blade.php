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
                        <h2>Teachers</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Teachers</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    <section id="teachers-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
               <div class="col-lg-3 col-sm-6">
                   <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/teachers/t-1.jpg') }}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <h6>MarkMark Alen</h6>
                            <span>Vice Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
               </div>
               <div class="col-lg-3 col-sm-6">
                   <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/teachers/t-2.jpg') }}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <h6>David card </h6>
                            <span>Pro Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
               </div>
               <div class="col-lg-3 col-sm-6">
                   <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/teachers/t-3.jpg') }}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <h6>Rebeka Alig</h6>
                            <span>Pro Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
               </div>
               <div class="col-lg-3 col-sm-6">
                   <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/teachers/t-4.jpg') }}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <h6>Hanna Bein</h6>
                            <span>Aerobics head</span>
                        </div>
                    </div> <!-- single teachers -->
               </div>
               <div class="col-lg-3 col-sm-6">
                   <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/teachers/t-5.jpg') }}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <h6>David Card </h6>
                            <span>Pro Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
               </div>
               <div class="col-lg-3 col-sm-6">
                   <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/teachers/t-6.jpg') }}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <h6>Mark Alen</h6>
                            <span>Vice Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
               </div>
               <div class="col-lg-3 col-sm-6">
                   <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/teachers/t-7.jpg') }}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <h6>Rebeka alig</h6>
                            <span>Pro chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
               </div>
               <div class="col-lg-3 col-sm-6">
                   <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/teachers/t-8.jpg') }}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <h6>Hanna Bein</h6>
                            <span>Aerobics head</span>
                        </div>
                    </div> <!-- single teachers -->
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
            <!-- </div>   --> 
            <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
    @include('users.template.footer')
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
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
