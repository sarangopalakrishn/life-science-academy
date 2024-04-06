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
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url( {{ asset('/image/page-banner-1.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Our Courses</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('users.home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Courses</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== COURSES PART START ======-->
    
    <section id="courses-part" class="pt-120 pb-120 gray-bg">
        <div class="container">
            
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('/image/course/img1.jpg') }}" alt="Course">
                                    </div>
                                    
                                </div>
                                <div class="cont" id="coursecolor">
                                    <h6>KERALA SET COACHING</h6> <br>
                                    
                                    <p style="text-align: justify;">
                                        Kerala's No. 1 CSIR NET Coaching academy now started Online coaching classes for SET.
                                        We provide live online classes, recorded videos, and PDF notes for your better result.
                                        Group discussions are also a part of this curriculum and fostering a collaborative learning environment that enhances your understanding and knowledge retention.
                                    </p>
                                    <a style="text-decoration: none; color: #000;">
                                        <h6 id="courseContent1" style="text-align: justify; font-family: 'Roboto', sans-serif; font-size: 14px; line-height: 1.5;">
                                           
                                        </h6>
                                        <h6 id="courseMoreText1" class="moretext" style="text-align: justify; font-family: 'Roboto', sans-serif;  font-size: 14px; line-height: 1.5; display: none;">
                                              
                                        </h6>
                                    </a> 

                                </div>
                            </div> <!-- single course -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('/image/course/img2.jpg') }}" alt="Course">
                                    </div>
                                   
                                </div>
                                <div class="cont" id="coursecolor">
                                    <h6>CSIR/UGC-NET/JRF LIFESCIENCES</h6> <br>

                                    <p style="text-align: justify;">
                                    In addition to our six-month CSIR/UGC-NET/JRF course for Lifesciences aspirants, our dedicated faculty provides personalized guidance to achieve academic goals
                                    Our state-of-the-art infrastructure includes a well-maintained library and online examination facilities, ensuring a conducive learning environment for all our students.
                                    </p>
                                    <a style="text-decoration: none; color: #000;">
                                        <h6 id="courseContent2" style="text-align: justify; font-size: 14px; font-family: 'Roboto', sans-serif; line-height: 1.5;">
                                          
                                        </h6>
                                        <h6 id="courseMoreText2" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; display: none;">
                                            
                                        </h6>
                                    </a> 
                                    
                                </div>
                            </div> <!-- single course -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('/image/course/img3.jpg') }}" alt="Course">
                                    </div>
    
                                </div>
                                <div class="cont" id="coursecolor">
                                    <h6>  ICMR - JRF</h6> <br>

                                    <p style="text-align: justify;"> 
                                        We provide best tutorials for ICMR JRF. Learn from our professionals and get good marks. Enroll yourself now. ICMR holds a national level examination for determining the eligibility of Indian National candidates for the award of Junior Research
                                        Fellowships (JRF) through Indian Council of Medical Research.
                                    </p>
                                    <a style="text-decoration: none; color: #000;">
                                        <h6 id="courseContent3" style="text-align: justify; font-size: 14px; font-family: 'Roboto', sans-serif; line-height: 1.5;">
                                          
                                        </h6>
                                        <h6 id="courseMoreText3" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; display: none;">
                                        
                                        </h6>
                                    </a>
                                   
                                  
                                </div>
                            </div> <!-- single course -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('/image/course/img4.jpg') }}" alt="Course">
                                    </div>
                                   
                                </div>
                                <div class="cont" id="coursecolor">
                                    <h6>
                                        TIFR/JGEEBILS</h6>
                                <br>
                                <p style="text-align: justify;"> 
                                   
                                JGEEBILS is a shared entrance test for graduate programs in Biology and interdisciplinary life sciences.                      
                                The test originated from the TIFR annual entrance test for Biology, utilized by DBS/TIFR and NCBS/TIFR as well.
                                JGEEBILS serves as a centralized platform for students from any science or engineering background to initiate the application process for biology graduate programs across India.
                                </p>
                                        <a style="text-decoration: none; color: #000;">
                                            <h6 id="courseContent4" style="text-align: justify; font-size: 14px; line-height: 1.5;">
            
                                           </h6>

                                            <h6 id="courseMoreText4" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; display: none;">
                                                
                                            </h6>
                                        </a>
                                        <!-- <button class="moreless-button" data-target="#courseContent4" data-more="#courseMoreText4">Read More</button> -->
                                    
                                </div>
                            </div> <!-- single course -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('/image/course/img5.jpg') }}" alt="Course">
                                    </div>
                                   
                                </div>
                                <div class="cont" id="coursecolor">
                                    <h6>
                                        GATE</h6> <br>
                                   
                                        <p style="text-align: justify;"> 
                                            We offer tutorials for Graduate Aptitude Test in Engineering. 
                                            Qualifying in GATE is a mandatory requirement for seeking admission and/or financial assistance to: (i) Master's programs and direct Doctoral programs in Engineering/ Technology/ Architecture and 
                                            (ii) Doctoral programs in relevant branches of Science, in the institutions supported by the MHRD and other Government agencies.
                                        </p>

                                        <a style="text-decoration: none; color: #000;">
                                            <h6 id="courseContent5" style="text-align: justify; font-size: 14px; line-height: 1.5;">
            
                                           
                                            </h6>
            
                                            <h6 id="courseMoreText5" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; display: none;">
                                               
                                            </h6>
                                        </a>
                                        <!-- <button class="moreless-button btn-primary" data-target="#courseContent5" data-more="#courseMoreText5">Read More</button> -->

                                  
                                </div>
                            </div> <!-- single course -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('/image/course/img6.jpg') }}" alt="Course">
                                    </div>
                                    
                                </div>
                                <div class="cont" id="coursecolor">
                                    <h6>
                                        DBT - JRF</h6> <br>

                                        <p style="text-align: justify;">
                                        
                                        Our tutorials are tailored to help you excel in the DBT-JRF exam and achieve a high rank.
                                        The DBT-JRF program, established in 2004, aims to offer fellowships to biotechnology students engaged in research within universities or research institutions nationwide. 
                                         Selection for the program is through the online Biotechnology Eligibility Test (BET).
                                        </p>
                                        <a style="text-decoration: none; color: #000;">
                                            <h6 id="courseContent6" style="text-align: justify; font-size: 14px; line-height: 1.5;">
            
                                                
                                           </h6>
            
                                           <h6 id="courseMoreText6" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; margin-bottom: 10px; display: none;">
                                            
                                           </h6>
                                        
                                        </a>
                                        <!-- <button class="moreless-button btn-primary" data-target="#courseContent6" data-more="#courseMoreText6">Read More</button> -->
                                </div>
                            </div> <!-- single course -->
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="single-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('/image/course/img7.jpg') }}" alt="Course">
                                    </div>
                                   
                                </div>
                                <div class="cont" id="coursecolor">
                                    <h6>
                                        IIT JAM - Biotech</h6> <br>
                                        <p style="text-align: justify;">
                                        We provide best tutorials for IIT JAM Biotech entrance exam, learn from professionals and be a top scorer. IIT JAM M.Sc. Biotechnology is in huge demand these days. Many Private and Government Sectors offer job
                                        opportunities.  IIT JAM Biotechnology is the gateway for those aspirants who want to pursue Masters in Biotechnology. </p>
                                        
                                        <a  style="text-decoration: none; color: #000;">
                                            <h6 id="courseContent7" style="text-align: justify; font-size: 14px; line-height: 1.5;">
            
                                            </h6>
                                        </a>
                                        
                                        <h6 id="courseMoreText7" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; margin-bottom: 10px; display: none;">
                                           
                                        </h6>
            
                                        <!-- <button class="moreless-button btn-primary" data-target="#courseContent7" data-more="#courseMoreText7">Read More</button> -->
                                    
                                </div>
                            </div> <!-- single course -->
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="single-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('/image/course/img8.jpg') }}" alt="Course">
                                    </div>
                                   
                                </div>
                                <div class="cont" id="coursecolor">
                                    <h6>
                                        ICAR</h6> <br>
                                  
                                        <p style="text-align: justify;">
                                            Preparation for ICAR can be difficult. But, don't worry. We offer the best and easy
                                            tutorials for ICAR. The Indian Council of Agricultural
                                            Research (ICAR) has entrusted the responsibility of
                                            conducting All India  Entrance Examinations for admission to UG, PG & Ph.D Courses in AUS, and award of scholarships and fellowships to the NTA from 2019 onwards.
                                        </p>
                                        <a href="courses-single.html" style="text-decoration: none; color: #000;">
                                            <h6 id="courseContent8" style="text-align: justify; font-size: 14px; line-height: 1.5;">
            
                                           </h6>
                                       
                                            
                                            <h6 id="courseMoreText8" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; display: none;">
                                               
                                            </h6>
                                        </a>
                                            <!-- <button class="moreless-button" data-target="#courseContent8" data-more="#courseMoreText8">Read More</button> -->
                                    
                                </div>
                            </div> <!-- single course -->
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="single-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('/image/course/img9.jpg') }}" alt="Course">
                                    </div>
                                   
                                </div>
                                <div class="cont" id="coursecolor">
                                    <h6>
                                        Foundation Courses
                                    </h6> <br>

                                    <p style="text-align: justify;"> 
                                        In this course structure students of school levels, up to class X, are rendered coaching in all subjects. Our experienced faculty employs interactive teaching methods, engaging students in practical applications of
                                        the  theoretical knowledge. Regular assessments and feedback sessions are conducted to monitor progress and address individual learning needs. 
                                    </p>

                                    <a style="text-decoration: none; color: #000;">
                                        <h6 id="courseContent9" style="text-align: justify; font-size: 14px; line-height: 1.5; margin-bottom: 10px;">
        
                                       </h6>
        
                                        <h6 id="courseMoreText9" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; margin-bottom: 10px; display: none;">
                                           
                                        </h6>
                                    </a>
                                        <!-- <button class="moreless-button btn-primary" data-target="#courseContent9" data-more="#courseMoreText9">Read More</button>   -->
                                    

                                    
                                </div>
                            </div> <!-- single course -->
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="single-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('/image/course/img10.jpg') }}" alt="Course">
                                    </div>
                                   
                                </div>
                                <div class="cont" id="coursecolor">
                                    <h6>
                                        Medical Courses
                                    </h6> <br>
                                        <p style="text-align: justify;">
                                            Students of classes XI and XII are prepared for entrances. Also, medical students are given regular coaching. Additionally, our coaching extends to medical students who benefit from regular and specialized sessions.
                                            Our experienced faculty, consisting of a medical professionals and educators, provides targeted coaching to enhance medical students' understanding of complex concepts. 

                                        </p>
                                        <a style="text-decoration: none; color: #000;">
                                            <h6 id="courseContent10" style="text-align: justify; font-size: 14px; line-height: 1.5; margin-bottom: 10px;">
                                               
                                            </h6>
            
                                           <h6 id="courseMoreText10" class="moretext" style="text-align: justify; font-size: 14px; line-height: 1.5; margin-bottom: 10px; display: none;">
             
                                              
                                        </h6>
                                        </a>
            
                                            <!-- <button class="moreless-button btn-primary" data-target="#courseContent10" data-more="#courseMoreText10">Read More</button> -->
                                    
                                    
                                </div>
                            </div> <!-- single course -->
                        </div>


                    </div> <!-- row -->
                </div>

              
            </div> <!-- tab content -->
          
        </div> <!-- container -->
    </section>
    
    <!--====== COURSES PART ENDS ======-->
   
  
   
    <!--====== FOOTER PART START ======-->
    
    @include('users.template.footer')
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
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
