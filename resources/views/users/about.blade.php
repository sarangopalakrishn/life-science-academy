<!doctype html>
<html lang="en">


<head>
   
        @include('users.template.topbar')
  
    
        <!-- readmore and readless -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  
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
                        <h2>About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('users.home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to Life Science Academy</h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p id="courseContent11" style="text-align: justify;">Life Science Academy is an oracle in coaching students for competitive examinations in lifesciences. Our vision is to indulge research interest in scholars and explore the craft within them. Life Science Academy was established in 2016, located in Koothuparamba, Kannur and Pathanamthitta. We focus primarly on CSIR/UGC - JRF/NET examinations in lifescience and also giving at most importance to all other competitive examinations in lifescience. </p>
                        <p id="courseMoreText11"  style="text-align: justify; display: none;">
                            Our painstakings is being directly reflected in the bafling results we have produced. We value the productivity and creativity in youth and mould them to the paramount. 
                            A well-qualified, dedicated and experienced faculty is available beside a motivating environment. Our team of talented faculties have prepared the study material in a lucid, concise and easy way to understand. These study materials act as a catalyst in the preparation. Detailed information about each of our courses is given alongside. Please feel free to contact us for any queries regarding the above courses.</p>
                        <a class="moreless-button btn btn-primary" data-target="#courseContent11" data-more="#courseMoreText11">Read More</a> 
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ asset('/image/about/about-2.jpg') }}" alt="About">
                    </div>  <!-- about image -->
                </div> 
            </div> <!-- row -->
            <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>01</span>
                            <h4>Why Choose us</h4>
                            <p id="whychooseus">Kerala's No. 1 CSIR NET Coaching academy. We are a reputed name for offering result oriented & effective NET (National Eligibility Test) tutorials to the students of Lifesciences. ur academy boasts a team of experienced and dedicated faculty members who are experts in the field of life sciences. They bring a wealth of knowledge and real-world experience to provide students with a comprehensive understanding of the subject matter.</p>
                        </div> <!-- about single -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>02</span>
                            <h4>Our Mission</h4>
                            <p id="whychooseus">At Life Science Academy, we are on a mission to empower aspiring minds with the knowledge, skills, and passion that needed to excel in the dynamic and ever-evolving field of life sciences. Through innovative and immersive educational experiences, we are dedicated to nurturing inquisitive minds, fostering critical thinking, and cultivating a deep appreciation for the wonders of life.  Our commitment extends to shaping well-rounded individuals prepared to the advancements.</p>
                        </div> <!-- about single -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>03</span>
                            <h4>Our vision</h4>
                            <p id="whychooseus">The mission of our Life Science Academy for Lifelong Learning Sciences is to foster a passion for scientific inquiry, discovery, and application within the realm of life sciences. We are committed to providing comprehensive and dynamic educational experiences that empower individuals to explore, understand, and contribute to the ever-evolving world of life sciences. Feel free to modify this based on the specific goals and values of your life science academy. </p>
                        </div> <!-- about single -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>
    
    <!--====== ABOUT PART ENDS ======-->

    <!--====== COUNTER PART START ======-->
    
    <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url( {{ asset('/image/bg-2.jpg') }} )">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">30,000</span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">41,000</span>+</span>
                        <p>Courses Uploaded</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">11,000</span>+</span>
                        <p>People certificate</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">39,000</span>+</span>
                        <p>Global Teachers</p>
                    </div> <!-- single counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
    <!--====== COUNTER PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    <section id="teachers-part" class="pt-65 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50 pb-35">
                        <h5>Our Teachers</h5>
                        <h2>Meet Our teachers</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/teachers/t-1.jpg') }}" alt="Teachers">
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
                            <img src="{{ asset('/image/teachers/t-2.jpg') }}" alt="Teachers">
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
                            <img src="{{ asset('/image/teachers/t-3.jpg') }}" alt="Teachers">
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
                            <img src="{{ asset('/image/teachers/t-4.jpg') }}" alt="Teachers">
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
                            <img src="{{ asset('/image/teachers/t-5.jpg') }}" alt="Teachers">
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
                            <h6>Mark Alen</h6>
                            <span>Vice Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/teachers/t-8.jpg') }}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <h6>Mark Alen</h6>
                            <span>Vice Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== TEASTIMONIAL PART START ======-->
    
   
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
   

   
    <!--====== FOOTER PART START ======-->
    
     
    @include('users.template.footer')

    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
<script>
    // Add your JavaScript code here
    $('.moreless-button').click(function () {
        var targetContent = $($(this).data('target'));
        var targetMoreText = $($(this).data('more'));

        targetMoreText.slideToggle();

        if ($(this).text() == "Read More") {
            $(this).text("Read Less");
        } else {
            $(this).text("Read More");
        }
    });
</script>


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
