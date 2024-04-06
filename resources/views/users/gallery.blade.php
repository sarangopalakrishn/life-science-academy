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
   
    <!--====== FAQ SECTION PART START ======-->
    
    
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url( {{ asset('/image/page-banner-1.jpg') }} )">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Image Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== FAQ PART START ======-->
    <section class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row gallery">
                <div class="row">
                    @foreach ($galleries as $index => $gallerie)
                        @if ($index % 4 == 0)
                </div>
                        <div class="row">
                        @endif
                        <div class="col-md-3 col-xs-6 thumb">
                            <a href="{{ asset('images/' . $gallerie->image) }}">
                                <figure>
                                    <img class="img-fluid img-thumbnail" src="{{ asset('images/' . $gallerie->image) }}" alt="Gallery Image">
                                </figure>
                            </a>
                        </div>
                    @endforeach
                </div>            
            </div>
        </div>
    </section>

    <!--====== FAQ PART ENDS ======-->
   
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
