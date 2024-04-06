
<!doctype html>
<html lang="en">


<head>
   
   
@include('users.template.topbar')

</head>

<style>
     /* Style for hiding and showing content */
    .moretext 
    {
        display: none;
    }
    
    .category-text h2 
    {
        white-space: nowrap;
    }

    img.logo 
    {
        width: 360px;
        height: auto;
    }
    .offline, .scholarship
    {
        height:200px;
    }
    .courseimages
    {
        height:300px;
    }
</style>

<body>
   
    <!--====== PRELOADER PART START ======-->

    <!-- <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div> -->

    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
  
        @include('users.template.header')


    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->

    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== SLIDER PART START ======-->

    <section id="slider-part" class="slider-active">
        <div class="single-slider bg_cover pt-100" style="background-image: url( {{ asset('/image/slider/s-1.jpg') }} )" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="fadeInLeft" data-delay="1s">CSIR NET/JRF ONLINE CLASS</h1>
                            <p style="text-align: justify;" data-animation="fadeInUp" data-delay="1.3s">Designed to provide comprehensive and effective preparation for aspiring candidates. Our program is tailored to cover the key topics and subjects essential for success in the CSIR NET/JRF examination.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="btn btn-primary" href="{{ route('users.about') }}">Read More</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="btn btn-primary" href="{{ route('users.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-100" style="background-image: url( {{ asset('/image/slider/s-3.jpg') }} )" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="fadeInLeft" data-delay="1s">CSIR NET/JRF OFFLINE CLASS</h1>
                            <p style="text-align: justify;" data-animation="fadeInUp" data-delay="1.3s">With our offline classes, meticulously designed to provide you with a focused and personalized learning experience. Our offline program is structured to cover the entire syllabus, ensuring that you are well-prepared for the upcoming examination.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="btn btn-primary" href="{{ route('users.about') }}">Read More</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="btn btn-primary" href="{{ route('users.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-100" style="background-image: url( {{ asset('/image/slider/s-2.jpg') }} )" data-overlay="4">
            <div class="container">
                <div class="row">

                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="fadeInLeft" data-delay="1s">KPSC SCIENTIFIC OFFICER </h1>
                            <p style="text-align: justify;" data-animation="fadeInUp" data-delay="1.3s">Prepare for the KPSC Scientific Officer examination with our comprehensive and result-oriented study program. Our dedicated courses are designed to help you succeed in this competitive exam and secure a position as a Scientific Officer in the Kerala Public Service Commission (KPSC).</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="btn btn-primary" href="{{ route('users.about') }}">Read More</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="btn btn-primary" href="{{ route('users.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
      

       
    </section>
    
    <!--====== SLIDER PART ENDS ======-->

    <!--====== CATEGORY PART START ======-->
    
    <section id="category-part">
        <div class="container">
            <div class="category">
                <div class="row">
                    <div class="col-lg-12" style="text-align: center;">
                        <div class="category-text pt-40">
                            <h2>Results at a Glance</h2>
                        </div>
                    </div>
                   
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                          
                            <div class="carousel-inner">
                               
                                <div class="carousel-item  active">
                                    <span class="single-category text-center">
                                        <span class="icon">
                                            <img src="{{ asset('/image/firsttime/01.png') }}" width="200px" height="240px" alt="">
                                            <!-- <h2 style="color: #fff;">2022 February</h2> -->
                                        </span>
                                    </span> <!-- single category -->
                                </div>

                                <div class="carousel-item">
                                    <span class="single-category text-center">
                                        <span class="icon">
                                            <img src="{{ asset('/image/firsttime/02.png') }}" width="200px" height="240px" alt="">
                                            <!-- <h2 style="color: #fff;">2022 February</h2> -->
                                        </span>
                                    </span> <!-- single category -->  
                                </div>

                                <div class="carousel-item">
                                    <span class="single-category text-center">
                                        <span class="icon">
                                            <img src="{{ asset('/image/firsttime/03.png') }}" width="200px" height="240px" alt="">
                                            <!-- <h2 style="color: #fff;">2022 February</h2> -->
                                        </span>
                                    </span> <!-- single category -->
                                </div>

                                <div class="carousel-item">
                                    <span class="single-category text-center">
                                        <span class="icon">
                                            <img src="{{ asset('/image/firsttime/04.png') }}"  width="200px" height="240px" alt="">
                                            <!-- <h2 style="color: #fff;">2022 February</h2> -->
                                        </span>
                                    </span> <!-- single category -->
                                </div>
                            </div>
                          
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                        </div>

                      
                       
                    </div>
                </div> <!-- row -->
            </div> <!-- category -->
        </div> <!-- container -->
    </section>
    
    <!--====== CATEGORY PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
  
    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ asset('/image/about/about-2.jpg') }}" alt="About">
                    </div>  <!-- about image -->
                </div> 
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to Life Science Academy </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p id="courseContent0" style="text-align: justify;">Life Science Academy is an oracle in coaching students for competitive examinations in lifesciences. Our vision is to indulge research interest in scholars and explore the craft within them. Life Science Academy was established in 2016, located in Koothuparamba, Kannur and Pathanamthitta. We focus primarly on CSIR/UGC - JRF/NET examinations in lifescience and also giving at most importance to all other competitive examinations in lifescience.  </p>
                        <!-- <p id="courseMoreText0"  style="text-align: justify; display: none;">A well-qualified, dedicated and experienced faculty is available beside a motivating environment. Our team of talented faculties have prepared the study material in a lucid, concise and easy way to understand. These study materials act as a catalyst in the preparation. Detailed information about each of our courses is given alongside. Please feel free to contact us for any queries regarding the above courses.</p> -->
                        <a class="btn btn-primary" href="{{ route('users.about') }}">Read More</a> 
                       
                    </div>
                   
                </div> <!-- about cont -->
               
        
            </div> <!-- row -->
        </div> <!-- container -->
        <!-- <div class="about-bg">
            <img src="{{ asset('/image/about/bg-1.png') }}" alt="About">
        </div> -->
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
   

    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Online Admission Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Your form goes here -->
                    <form id="myForm">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">  
                            <label for="phone">Phone:</label> <br>
                            <input id="phone" type="tel"  name="name" required>
                            <span id="valid-msg" class="hide">Valid</span>
                            <span id="error-msg" class="hide">Invalid number</span>
                        </div>
                        <br>
                        

                        <div class="dropdown">
                            <label for="course">Courses:</label>
                            <select class="form-control" id="courses" required>
                                <option value="default" disabled selected>Select a course</option>
                                <option value="Kerala Set Coaching">Kerala Set Coaching</option>
                                <option value="CSIR/UGC-NET/JRF LIFESCIENCES">CSIR/UGC-NET/JRF LIFESCIENCES</option>
                                <option value="ICMR - JRF">ICMR - JRF</option>
                                <option value="TIFR/JGEEBILS">TIFR/JGEEBILS</option>
                                <option value="GATE">GATE</option>
                                <option value="DBT - JRF">DBT - JRF</option>
                                <option value="IIT JAM - Biotech">IIT JAM - Biotech</option>
                                <option value="ICAR">ICAR</option>
                                <option value="⁠CUET PG">⁠CUET PG</option>
                                <option value="⁠NEET BIOLOGY">⁠NEET BIOLOGY</option>
                                <option value="⁠COLLEGIATE BOTANY/ZOOLOGY">COLLEGIATE BOTANY/ZOOLOGY</option>
                              

                            </select>

                           
                        </div>
                    
                     
                        <br><br><br>
                       
                        <button type="button" class="btn btn-primary" onclick="validateAndSubmit()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== APPLY PART START ======-->
    
    
    <section id="apply-aprt" class="pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                 
                 
                  
                    <div class="col-lg-12">
                        <div class="about-event mt-50">
                            <div class="event-title" id="eventfacility">
                                <h3>Our Facilities</h3>
                            </div> <!-- event title -->
                            <ul>
                            
                            <li>
                                <div class="single-event">
                                  
                                    <h4>Global Certificate</h4>
                                    <span><i class="fa fa-certificate"></i> ISO Certified First ISO 9001 : 2015 Certified CSIR NET Coaching Centre in Kerala.</span>
                                    <!-- <span><i class="fa fa-map-marker"></i> Rc Auditorim</span> -->
                                </div>
                            </li>
                            <li>
                                <div class="single-event">
                            
                                    <h4>Alumini Support</h4>
                                    <span><i class="fa fa-rocket"></i>START UP INDIA RECOGNISED COACHING CENTRE</span>
                                    <!-- <span><i class="fa fa-map-marker"></i> Rc Auditorim</span> -->
                                </div>
                            </li>
                            <li>
                                <div class="single-event">
                               
                                    <h4>Library Facility</h4>
                                    <span><i class="fa fa-book"></i> The library provides diverse resources and services.</span>
                                    <!-- <span><i class="fa fa-map-marker"></i> Rc Auditorim</span> -->
                                </div>
                            </li>

                            <li>
                                <div class="single-event">
                               
                                    <h4>Hostel Facility</h4>
                                    <span><i class="fa fa-bed"></i> The hostel offers accommodation and amenities for residents.</span>
                                    <!-- <span><i class="fa fa-map-marker"></i> Rc Auditorim</span> -->
                                </div>
                            </li>

                            <li>
                                <div class="single-event">
                               
                                    <h4>Class Timings</h4>
                                    <span><i class="fa fa-clock-o"></i> 6 AM TO 11 PM Class Room Discussion</span>
                                    <!-- <span><i class="fa fa-map-marker"></i> Rc Auditorim</span> -->
                                </div>
                            </li>
                            


                            </ul> 
                        </div> <!-- about event -->
                    </div>
                </div>
             
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


    
    <!--====== APPLY PART ENDS ======-->
   
    <!--====== COURSE PART START ======-->
    
    <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Our Courses</h5>
                        <h2>Featured Courses </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slide mt-30">

                <div class="col-lg-4">
                    <div class="single-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('/image/course/img2.jpg') }}" class="courseimages" alt="Course">
                            </div>
                        </div>
                        <div class="cont">
                           <h6>CSIR/UGC-NET/JRF LIFESCIENCES</h6>
                            <a style="text-decoration: none; color: #000;">
                                <p id="courseContent2" style="text-align: justify; line-height: 1.5;">
                                    We are a reputed name for offering result oriented & effective NET (National Eligibility Test) tutorials to the
                                    students of Lifesciences. We provide six month course for CSIR/UGC-NET/JRF aspirants We have well maintained, updated library and online examination facility. Our dedicated faculty provides coaching to prepare students for exams.
                                </p>
                                <p id="courseMoreText2" class="moretext" style="text-align: justify; line-height: 1.5; display: none;">
                                  
                                </p>
                            </a>
                            <!-- <a class="moreless-button" data-target="#courseContent2" data-more="#courseMoreText2">Read More</a>  -->
                            <br>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Enquire Now
                                </button>
                        </div>
                    </div> <!-- single course -->
                </div>

                <div class="col-lg-4">
                    <div class="single-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('/image/course/img1.jpg') }}" class="courseimages" alt="Course">
                            </div>
                            
                        </div>
                        <!-- First Course Section -->
                        <div class="cont">
                            <h6>KERALA SET COACHING</h6> 

                            <a  style="text-decoration: none; color: #000;">
                                <p id="courseContent1" style="text-align: justify; line-height: 1.5;">
                                    Kerala's No. 1 CSIR NET Coaching academy now started Online coaching classes for SET.
                                    We provide live online classes, recorded videos, and PDF notes for your better result.
                                    Group discussions are also a part of this curriculum and fostering a collaborative learning environment that enhances 
                                    your understanding and knowledge retention.
                                </p>
                                <p id="courseMoreText1" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; display: none;">
                                        
                                </p>
                            </a>
                            <!-- <a class="moreless-button" data-target="#courseContent1" data-more="#courseMoreText1">Read More</a> -->
                            <br>
                            <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                Enquire Now
                            </button> -->

                                                        <!-- Button to open modal on another page -->
                            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
                                Enquire Now
                            </button>
                        </div>
                    </div> <!-- single course -->
                </div>

                <div class="col-lg-4">
                    <div class="single-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('/image/course/img11.jpeg') }}" class="courseimages" alt="Course">
                            </div>
                            
                        </div>
                        <!-- First Course Section -->
                        <div class="cont">
                            <h6>COLLEGIATE BOTANY/ZOOLOGY</h6> 

                            <a  style="text-decoration: none; color: #000;">
                                <p id="courseContent1" style="text-align: justify; line-height: 1.5;">
                                The study of plant and animal life at the college or university level. It typically involves academic courses, laboratory work, and field studies focused on understanding the principles and complexities of plant and animal biology.
                                <!-- Collegiate botany/zoology encompasses the comprehensive exploration of plant and animal life higher education setting.    -->
                                Collegiate botany/zoology explores plant and animal life in higher education. 
                            </p>
                                <p id="courseMoreText1" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; display: none;">
                                        
                                </p>
                            </a>
                            <!-- <a class="moreless-button" data-target="#courseContent1" data-more="#courseMoreText1">Read More</a> -->
                            <br>
                            <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                Enquire Now
                            </button> -->

                                                        <!-- Button to open modal on another page -->
                            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
                                Enquire Now
                            </button>
                        </div>
                    </div> <!-- single course -->
                </div>
             
                <div class="col-lg-4">
                    <div class="single-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('/image/course/img3.jpg') }}" class="courseimages" alt="Course">
                            </div>
                           
                        </div>
                        <div class="cont">
                         
                            <h6>  ICMR - JRF</h6>
                            <a style="text-decoration: none; color: #000;">
                                <p id="courseContent3" style="text-align: justify; line-height: 1.5;">
                                    We provide best tutorials for ICMR JRF. Learn from our professionals and get good marks. Enroll yourself now. ICMR holds a national level examination for determining the eligibility of Indian National candidates for 
                                    the award of Junior Research Fellowships (JRF) through Indian Council of Medical Research. 
                                     

                                </p>
                                <h6 id="courseMoreText3" class="moretext" style="text-align: justify; line-height: 1.5; display: none;">
                                   
                                </h6>
                            </a> <br>
                            <!-- <a class="moreless-button" data-target="#courseContent3" data-more="#courseMoreText3">Read More</a>  <br> <br> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Enquire Now
                                </button>
                        </div>
                    </div> <!-- single course -->
                </div>

                <div class="col-lg-4">
                    <div class="single-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('/image/course/img4.jpg') }}" class="courseimages" alt="Course">
                            </div>
                            
                        </div>
                        <div class="cont">
                            <h6>
                                TIFR/JGEEBILS</h6>
                            <a  style="text-decoration: none; color: #000;">
                                <p id="courseContent4" style="text-align: justify; line-height: 1.5;">

                                The JGEEBILS test is a shared entrance test for graduate programmes in Biology and interdisciplinary lifesciences. The test originated from the TIFR annual entrance test for Biology, which was used by DBS/TIFR as 
                                well as NCBS/TIFR. JGEEBILS is intended to serve as a common point for students from any science discipline or engineering to start the process. </p>
                                <h6 id="courseMoreText4" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; margin-bottom: 10px; display: none;">
                                    
                                </h6>
                            </a>
                            <!-- <a class="moreless-button" data-target="#courseContent4" data-more="#courseMoreText4">Read More</a>  <br> <br> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Enquire Now
                                </button>
                        </div>
                    </div> <!-- single course -->
                </div>

                <div class="col-lg-4">
                    <div class="single-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('/image/course/img5.jpg') }}" class="courseimages"  alt="Course">
                            </div>

                        </div>
                        <div class="cont">
                          

                            <h6>
                                GATE</h6>
                            <a  style="text-decoration: none; color: #000;">
                                <p id="courseContent5" style="text-align: justify;  line-height: 1.5;">

                                We offer tutorials for Graduate Aptitude Test in Engineering. Qualifying in GATE is a mandatory requirement for seeking admission and/or financial assistance to: (i) Master's programs and direct Doctoral 
                                programs in Engineering/ Technology/ Architecture and (ii) Doctoral programs in relevant branches of Science, in the institutions supported by the MHRD.
                                </p>

                                <h6 id="courseMoreText5" class="moretext" style="text-align: justify;  line-height: 1.5; display: none;">
                                    
                                </h6>
                            </a><br>
                            <!-- <a class="moreless-button" data-target="#courseContent5" data-more="#courseMoreText5">Read More</a>  <br> <br> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Enquire Now
                                </button>
                        </div>
                    </div> <!-- single course -->
                </div>

                <div class="col-lg-4">
                    <div class="single-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('/image/course/img6.jpg') }}"  class="courseimages" alt="Course">
                            </div>
                            
                        </div>
                        <div class="cont">
                            <h6>
                                DBT - JRF</h6>
                            <a style="text-decoration: none; color: #000;">
                                <p id="courseContent6" style="text-align: justify;  line-height: 1.5; margin-bottom: 10px;">

                                    Our tutorials will help you to clear DBT - JRF exam with a high rank. DBT-JRF program was initiated in 2004 to provide fellowships for biotech students pursuing research in universities and / or research institutions in 
                                    the country. Students are selected through online Biotechnology Eligibility Test (BET) undergo a rigorous admission process.
                                </p>

                               <h6 id="courseMoreText6" class="moretext" style="text-align: justify; line-height: 1.5; display: none;">
                                
                               </h6>
                            
                            </a> <br>
                            <!-- <a class="moreless-button" data-target="#courseContent6" data-more="#courseMoreText6">Read More</a>  <br> <br> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Enquire Now
                                </button>
                            
                        </div>
                    </div> <!-- single course -->
                </div>



                <div class="col-lg-4">
                    <div class="single-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('/image/course/img7.jpg') }}" class="courseimages" alt="Course">
                            </div>
                            
                        </div>
                        <div class="cont">
                            <h6>
                                IIT JAM - Biotech</h6>
                            <a  style="text-decoration: none; color: #000;">
                            
                            <p id="courseContent7" style="text-align: justify;  line-height: 1.5;">
                            We provide best tutorials for IIT JAM Biotech entrance exam, learn from professionals and be a top scorer. IIT JAM M.Sc. Biotechnology is in huge demand these days. Many Private and the Government Sectors offer job 
                            opportunities. IIT JAM Biotechnology is the gateway for those aspirants who pursue Masters in Biotechnology.
                                </p></a> <br>
                            <h6 id="courseMoreText7" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; margin-bottom: 10px; display: none;">
                               
                            </h6>

                            <!-- <a class="moreless-button" data-target="#courseContent7" data-more="#courseMoreText7">Read More</a>  <br> <br> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Enquire Now
                            </button>
                        </div>
                    </div> <!-- single course -->
                </div>

                <div class="col-lg-4">
                    <div class="single-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('/image/course/img8.jpg') }}" class="courseimages" alt="Course">
                            </div>
                            
                        </div>
                        <div class="cont">
                            <h6>
                                ICAR</h6>
                            <a  style="text-decoration: none; color: #000;">
                                <p id="courseContent8" style="text-align: justify; line-height: 1.5;">

                                Preparation for ICAR can be difficult. Don't worry We offer the best and easy
                                tutorials for ICAR. The Indian Council of Agricultural
                                Research (ICAR) has been entrusted of
                                conducting All India Entrance Examinations for admission to UG, PG & Ph.D Courses in AUS, and award of scholarships and fellowships to the NTA from 2019 onwards.</p>
                           
                                
                                <h6 id="courseMoreText8" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; display: none;">
                                    
                                </h6>
                            </a> <br>
                                <!-- <a class="moreless-button" data-target="#courseContent8" data-more="#courseMoreText8">Read More</a>  <br> <br> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Enquire Now
                                </button>
                        </div>
                    </div> <!-- single course -->
                </div>


                <div class="col-lg-4">
                    <div class="single-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('/image/course/img12.jpeg') }}" class="courseimages" alt="Course">
                            </div>
                            
                        </div>
                        <div class="cont">
                            <h6>
                            ⁠   NEET BIOLOGY
                            </h6>
                            <a style="text-decoration: none; color: #000;">
                                <p id="courseContent9" style="text-align: justify; line-height: 1.5;">

                                In NEET, the biology section covers topics essential for undergraduate and postgraduate medical courses in government or private medical colleges in India.
                                <!-- In this the biology section of the National Eligibility cum Entrance Test (NEET), an entrance examination in India for students who wish to pursue undergraduate medical courses (MBBS), dental courses (BDS), or postgraduate courses (MD / MS) in government or private medical colleges in India. -->
                                "NEET Biology" covers a wide range of topics including genetics, physiology, ecology, and microbiology, crucial for students aspiring to enter the medical field in India. 
                            </p>

                                <h6 id="courseMoreText9" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; margin-bottom: 10px; display: none;">
                                   
                                </h6>
                            </a> <br>
                                <!-- <a class="moreless-button" data-target="#courseContent9" data-more="#courseMoreText9">Read More</a>  <br> <br> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Enquire Now
                                </button>
                        </div>
                        
                    </div> <!-- single course -->
                </div>

                <div class="col-lg-4">
                    <div class="single-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('/image/course/img13.jpeg') }}" class="courseimages" alt="Course">
                            </div>
                            
                        </div>
                        <div class="cont">
                            <h6>
                            ⁠CUET PG</h6>
                            <a  style="text-decoration: none; color: #000;">
                                <p id="courseContent10" style="text-align: justify; line-height: 1.5;">
                                CUET PG stands for "Common University Entrance Test for Postgraduate." It is an entrance exam conducted for admission to various pg programs offered by participating universities.
                                CUET PG is a standardized test designed to assess the academic aptitude of candidates seeking admission to postgraduate programs across multiple universities   
                            </p>

                               <h6 id="courseMoreText10" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; margin-bottom: 10px; display: none;">
 
                                  
                            </h6>
                            </a>  <br>

                                <!-- <a class="moreless-button" data-target="#courseContent10" data-more="#courseMoreText10">Read More</a>  <br> <br> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Enquire Now
                                </button>
                        </div>
                    </div> <!-- single course -->
                </div>

            </div> <!-- course slide -->
        </div> <!-- container -->
    </section>
     
    <!--====== COURSE PART ENDS ======-->
   
    <!--====== VIDEO FEATURE PART START ======-->
    
    <section id="video-feature" class="bg_cover pb-135 pt-420" style="background-image: url( {{ asset('/image/bg-1.jpg') }} )">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                   
                </div>
            
            </div> <!-- row -->
        </div> <!-- container -->
      
    </section>
  
      
    <!--====== VIDEO FEATURE PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    <section id="teachers-part" class="pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mt-50">
                        <h5>Our Directors</h5>
                        <h2>Meet Our Directors</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slide mt-30">
                <div class="col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                       
                            <div class="image">
                                <img src="{{ asset('/image/teachers/t-4.jpg') }}" alt="Teachers">
                            </div>
                        
                        <!-- First Course Section -->
                        <div class="cont">
                            <h6>Kiran Kumar R</h6>
                                        <!-- <span>Aerobics head</span> -->
                        </div>
                    </div> <!-- single course -->
                </div>

                <div class="col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                      
                            <div class="image">
                                <img src="{{ asset('/image/teachers/t-1.jpg') }}" alt="Teachers">
                            </div>
                      
                        <div class="cont">
                            <h6>Deepak MS</h6>
                         
                        </div>
                    </div> <!-- single course -->
                </div>

                <div class="col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                       
                            <div class="image">
                                <img src="{{ asset('/image/teachers/t-1.jpg') }}" alt="Teachers">
                            </div>
                       
                        <div class="cont">
                            <h6>Sruthy Unnikrishnan</h6>
                         
                        </div>
                    </div> <!-- single course -->
                </div>
                <div class="col-sm-6">
                    <div class="single-teachers mt-30 text-center">
              
                            <div class="image">
                                <img src="{{ asset('/image/teachers/t-1.jpg') }}" alt="Teachers">
                            </div>
                      
                        <div class="cont">
                            <h6>Jubisha Balakrishnan</h6>
                        </div>
                    </div> <!-- single course -->
                </div>

                <div class="col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                        
                            <div class="image">
                                <img src="{{ asset('/image/teachers/t-1.jpg') }}" alt="Teachers">
                            </div>
                    
                        <div class="cont">
                            <h6>Sarath Ramesan</h6>
                        </div>
                    </div> <!-- single course -->
                </div>

                <div class="col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                     
                            <div class="image">
                                <img src="{{ asset('/image/teachers/t-1.jpg') }}" alt="Teachers">
                            </div>
                   
                        <div class="cont">
                            <h6>Akhil sajan</h6>
                        </div>
                    </div> <!-- single course -->
                </div>

                <div class="col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                      
                            <div class="image">
                                <img src="{{ asset('/image/teachers/t-1.jpg') }}" alt="Teachers">
                            </div>
                      
                        <div class="cont">
                            <h6>Shinoj Mathew</h6>
                        </div>
                    </div> <!-- single course -->
                </div>
               
                <div class="col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                    
                            <div class="image">
                                <img src="{{ asset('/image/teachers/t-1.jpg') }}" alt="Teachers">
                            </div>
                    
                        <div class="cont">
                            <h6>Mithuna VM</h6>
                        </div>
                    </div> <!-- single course -->
                </div>
                <div class="col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                    
                            <div class="image">
                                <img src="{{ asset('/image/teachers/t-1.jpg') }}" alt="Teachers">
                            </div>
          
                        <div class="cont">
                            <h6>Megha M</h6>
                        </div>
                    </div> <!-- single course -->
                </div>
            
            </div> <!-- course slide -->
        </div> <!-- container -->
    </section>

    <!--====== TEACHERS PART ENDS ======-->
   
    <section id="publication-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title pb-60">
                        <!-- <h5>Results</h5> -->
                        <h2>How LSA Help You?</h2>
                    </div> <!-- section title -->
                </div>
               
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-publication mt-30 text-center">
                        <div class="image">
                            <img class="offline" src="{{ asset('/image/lsaicons/offline-class-512.jpg') }}" alt="Publication">
                            
                        </div>
                        <div class="content pt-10">
                            <h5 class="book-title"><a>Best Offline Classes</a></h5>  
                        </div>
                    </div> <!-- single publication -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-publication mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/lsaicons/group.jpg') }}" alt="Publication">
                            
                        </div>
                        <div class="content pt-10">
                            <h5 class="book-title"><a>6am - 11pm Peer Group Discussion</a></h5>
                           
                        </div>
                    </div> <!-- single publication -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-publication mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/lsaicons/scholarship.png') }}" class="scholarship" alt="Publication">
                           
                        </div>
                        <div class="content pt-10">
                            <h5 class="book-title"><a>LSA Scholarship</a></h5>
                    
                           
                        </div>
                    </div> <!-- single publication -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-publication mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/lsaicons/ambasidor.png') }}" alt="Publication">
                            
                        </div>
                        <div class="content pt-10">
                            <h5 class="book-title"><a>Campus Ambassador Programme </a></h5>

                          
                        </div>
                    </div> <!-- single publication -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PUBLICATION PART START ======-->
    
    <section id="publication-part" class="pt-115 pb-120">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title pb-60">
                        <h5>Results</h5>
                        <h2>Latest Result</h2>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5">
                    <div class="products-btn text-right pb-60">
                        <!-- <a href="#" class="main-btn">All Products</a> -->
                    </div> <!-- products btn -->
                </div>
            </div> <!-- row -->
            <div class="row course-slide justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-publication mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/publication/p-1.jpg') }}" alt="Publication">
                            
                        </div>
                        <div class="content pt-10">
                            <h5 class="book-title"><a href="#">Stones The Road </a></h5>
                            <p class="writer-name"><span>By</span> Scott Trench</p>
                           
                        </div>
                    </div> <!-- single publication -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-publication mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/publication/p-2.jpg') }}" alt="Publication">
                            
                        </div>
                        <div class="content pt-10">
                            <h5 class="book-title"><a href="#">The Stranded </a></h5>
                            <p class="writer-name"><span>By</span> Scott Trench</p>
                            <div class="price-btn d-flex align-items-center justify-content-between">
                              
                            </div>
                        </div>
                    </div> <!-- single publication -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-publication mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/publication/p-3.jpg') }}" alt="Publication">
                           
                        </div>
                        <div class="content pt-10">
                            <h5 class="book-title"><a href="#">The Sicario </a></h5>
                            <p class="writer-name"><span>By</span> Scott Trench</p>
                           
                        </div>
                    </div> <!-- single publication -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-publication mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('/image/publication/p-4.jpg') }}" alt="Publication">
                            
                        </div>
                        <div class="content pt-10">
                            <h5 class="book-title"><a href="#">There Were None </a></h5>
                            <p class="writer-name"><span>By</span> Scott Trench</p>
                          
                        </div>
                    </div> <!-- single publication -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PUBLICATION PART ENDS ======-->

    

    <!--====== TEASTIMONIAL PART START ======-->
    
    <section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8" style="background-image: url( {{ asset('/image/bg-2.jpg') }} )">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>What they say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slide mt-40">
                <div class="col-lg-6">
                    <div class="single-testimonial">
                        <!-- <div class="testimonial-thum"> -->
                            <!-- <img src="images/testimonial/t-1.jpg" alt="Testimonial"> --> 
                            <!-- <div class="quote"> -->
                                <!-- <i class="fa fa-quote-right"></i> -->
                            <!-- </div> -->
                        <!-- </div> -->
                        <div class="testimonial-cont">
                            <p>LSA is the best institute for CSIR aspirants. I am grateful to be a part of the LSA family. It has excellent faculties and offers convenient hostel accommodations. 
                            </p>
                            <h6>GANGA KR </h6>
                            <span>JRF</span>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="single-testimonial">
                        <!-- <div class="testimonial-thum"> -->
                            <!-- <img src="images/testimonial/t-2.jpg" alt="Testimonial"> -->
                            <!-- <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div> -->
                        <!-- </div> -->
                        <div class="testimonial-cont">
                            <p> 
                                They gave me the opportunity to learn many things and explore my own interest in learning. 
                                The group discussion component of the LSA curriculum is a particularly noteworthy feature that has enabled me to conquer my dream. 
                                I am thankful to all
                                faculties, seniors, and my friends. </p>
                            <h6>Rubina Helen</h6>
                            <span>TIFR</span>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="single-testimonial">
                        <!-- <div class="testimonial-thum"> -->
                            <!-- <img src="images/testimonial/t-3.jpg" alt="Testimonial"> -->
                            <!-- <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div> -->
                        <!-- </div> -->
                        <div class="testimonial-cont">
                            <p>The supportive environment and dedicated faculty fostered an atmosphere of growth and discovery. I am grateful for the invaluable knowledge, skills, and experiences I gained during my time here.</p>
                            <h6>Aiswarya Pradeep</h6>
                            <span>IIT-JAM Biotech</span>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- testimonial slide -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
   
    <!--====== NEWS PART START ======-->

    
    <!--====== NEWS PART ENDS ======-->
    

  <!-- <span class="float" onclick="gotowhatsapp()"> -->

    <div class="whatsapp-chat" style="bottom:10px; left:10px; position:fixed;">

   
        <a href=" https://wa.me/+919207572712?text=I'm%20interested%20in%20your%20academy%20for%20study" target="_blank">  
            <img src="{{ asset('/image/whatsapp.png') }}" alt="" width="60px" height="60px" />
        </a>
      
        <!-- <span class="label" id="chat">How can I help you? Chat with us</span> -->
    </div>
  

    

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



   <script>
       // -----Country Code Selection
        $("#phone").intlTelInput({
            initialCountry: "in",
            separateDialCode: true,
            // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
        });
   </script>

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
    

<!-- Include jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <!-- popup modal -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <!-- popup modal -->
    
    
    
    <!-- Include SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    
    <script>
        function validateAndSubmit() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var coursesDropdown = document.getElementById("courses");
            var selectedCourse = coursesDropdown.options[coursesDropdown.selectedIndex].value;
    
            if (name === "" || email === "" || phone === "" || selectedCourse === "default") {
                // Show a SweetAlert error message
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill out all fields before submitting!',
                });
            } else {
                // Show a SweetAlert confirmation message
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Are you sure you want to submit the form?',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, submit it!',
                    cancelButtonText: 'No, cancel!',
                }).then((result) => {
                    if (result.isConfirmed) {
                       // Call gotowhatsapp() function
                        gotowhatsapp();
                    }
                });
            }
        }

        function gotowhatsapp() {
        // Your existing gotowhatsapp() function code goes here
        var name = document.getElementById("name").value;
        var phone = document.getElementById("phone").value;
        var email = document.getElementById("email").value;
        var service = document.getElementById("courses").value;

        var url = "https://wa.me/+919072762286?text="
            + "Name: " + name + "%0a"
            + "Phone: " + phone + "%0a"
            + "Email: " + email + "%0a"
            + "Service: " + service;

        window.open(url, '_blank').focus();
    }
    </script>

    <script>
        
var telInput = $("#phone"),
  errorMsg = $("#error-msg"),
  validMsg = $("#valid-msg");

// initialise plugin
telInput.intlTelInput({

  allowExtensions: true,
  formatOnDisplay: true,
  autoFormat: true,
  autoHideDialCode: true,
  autoPlaceholder: true,
  defaultCountry: "auto",
  ipinfoToken: "yolo",

  nationalMode: false,
  numberType: "MOBILE",
  //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
  preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],
  preventInvalidNumbers: true,
  separateDialCode: true,
  initialCountry: "auto",
  geoIpLookup: function(callback) {
  $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    var countryCode = (resp && resp.country) ? resp.country : "";
    callback(countryCode);
  });
},
   utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
});

var reset = function() {
  telInput.removeClass("error");
  errorMsg.addClass("hide");
  validMsg.addClass("hide");
};

// on blur: validate
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      validMsg.removeClass("hide");
    } else {
      telInput.addClass("error");
      errorMsg.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
telInput.on("keyup change", reset);



       
        
        
        
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

