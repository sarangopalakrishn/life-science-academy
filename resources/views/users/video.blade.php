<!doctype html>
<html lang="en">



<head>
   
@include('users.template.topbar')
  
  
</head>

<style>
 
 .container .heading {
    font-size: 48px;
    color: #000;
    padding-top: 10px;
    margin: 2rem 0;
    text-transform: capitalize;
    letter-spacing: .2rem;
    text-align: center;
}

.video-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
   
}

.video-container .video {
    width: 25%; /* Adjust the width as needed */
    margin: 2rem;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .5);
    overflow: hidden;
    border-radius: 1rem;
}

.video-container .video iframe {
    width: 100%;
    height: 100%;
    object-fit: cover;
    outline: none;
    border: none;
    cursor: pointer;
}

.video-container .video iframe:hover {
    transition: .2s linear;
    transform: scale(1.3);
}

.video-container .video .active {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: auto;
    width: 80%;
    box-shadow: 0 0 0 100vh rgba(0, 0, 0, .7);
    z-index: 1;
}

.video-container .video .active:hover {
    transition: none;
    transform: translate(-50%, -50%) scale(1);
}

</style>
<body>

        <!--====== HEADER PART START ======-->
    
        @include('users.template.header')
    
        
        <!--====== HEADER PART ENDS ======-->
            <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url( {{ asset('/image/page-banner-1.jpg') }} )">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Video Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Video Gallery</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== PAGE BANNER PART ENDS ======-->
  
    
    <section class="pt-90 pb-120 gray-bg">
        <div class="container">
            @php $count = 0 @endphp
            <div class="row">
                @foreach ($videos as $video)
                    <div class="col-md-4 col-xs-6 thumb">
                        <figure>
                            <video style="width: 100%; height: auto;" controls>
                                <source src="{{ asset('upload/' . $video->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </figure>
                    </div>
                    @php $count++ @endphp
                    @if ($count % 3 == 0) {{-- Check if 3 videos have been shown --}}
                        </div><div class="row"> {{-- Close current row and open a new one --}}
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    
    <!--====== FOOTER PART START ======-->
   
    @include('users.template.footer')

    <!--====== FOOTER PART ENDS ======-->
    <script>

        var video = document.querySelectorAll('video')

        video.forEach(play => play.addEventListener('click', () => {

            play.classList.toggle('active');

            if(play.paused){
                play.play();
            }else{
                play.pause();
                play.currentTime = 0;
            }
        }))

    </script>

     <!--====== BACK TO TOP PART START ======-->
    
     <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
     <!--====== BACK TO TOP PART ENDS ======-->
 
     
     <!--====== jquery js ======-->
     <script src="{{ asset('/js/vendor/modernizr-3.6.0.min.js') }}"></script>
     <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
 
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