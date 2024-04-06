<!doctype html>
<html lang="en">
<head>
       
@include('users.template.topbar')

</head>


<body>

        <!--====== HEADER PART START ======-->
    
        @include('users.template.header')
        
        <!--====== HEADER PART ENDS ======-->
            <!--====== PAGE BANNER PART START ======-->
    
            <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url( {{ asset('/image/page-banner-1.jpg') }} )">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-banner-cont">
                                <h2>Contact</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                    </ol>
                                </nav>
                            </div>  <!-- page banner cont -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </section>
    <!--====== PAGE BANNER PART ENDS ======-->

        <section id="contact-page" class="pt-90 pb-120 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-from">
                            <div class="section-title">
                                <h5>Contact Us</h5>
                                <h2>Keep in touch</h2>
                            </div> <!-- section title -->
                            <div class="main-form pt-45">

                            
                                
                                <form id="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form form-group">
                                                <input name="name" type="text" id="name" placeholder="Your name" required="required">
                                            
                                            </div> <!-- single form -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-group">
                                                <input name="email" id="email" type="email" placeholder="Email" required="required">
                                            
                                            </div> <!-- single form -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-group">
                                                <input name="subject" type="text" placeholder="Subject" id="subject" required="required">
                                            
                                            </div> <!-- single form --> 
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-group">
                                                <input id="phone" type="tel"  name="name" required>
                                                <span id="valid-msg" class="hide">Valid</span>
                                                <span id="error-msg" class="hide">Invalid number</span>
                                            </div> <!-- single form -->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form form-group">
                                                <textarea name="message" placeholder="Message" id="message" required="required"></textarea>
                                                
                                            </div> <!-- single form -->
                                        </div>
                                        <p class="form-message"></p>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <button type="button" class="btn btn-primary" onclick="validateAndSubmit()">Send</button>
                                            
                                            </div> <!-- single form -->
                                        </div> 
                                    </div> <!-- row -->
                                </form>
                            </div> <!-- main form -->
                        </div> <!--  contact from -->
                    </div>
                
                </div> <!-- row -->
            </div> <!-- container -->

        </section>        


       <!-- map section start -->
        <section>
            <div class="row">
            
                <div class="col-lg-8">
                    <div class="map map-big">
                
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d62979.10945277303!2d76.54050120393397!3d9.404337591611872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x3b0615514c6efa75%3A0x7a3deade68f4a435!2sLSA%20Life%20Science%20Academy%20PVT%20LTD%20(Thiruvalla%20%26%20Kannur)%2C%20Marthoma%20College%20Rd%2C%20Kizhakken%20Muthoor%2C%20Thiruvalla%2C%20Kerala%20689103!3m2!1d9.404255299999999!2d76.5817011!4m0!5e0!3m2!1sen!2sin!4v1708421495204!5m2!1sen!2sin" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> <!-- map -->
                </div>
                <div class="col-lg-4">
                    <div class="contact-address">
                        <div class="contact-heading">
                            <h5>Address</h5>
                            <p>If you have any further questions, please don’t hesitate to contact us.</p>
                        </div>
                        <ul>
                        
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        
                                        <p>LSA Life Science Academy PVT LTD Kizhakken Muthoor, Kerala 689103</p>
                                    </div>
                                </div> <!-- single address -->
                            </li>
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+91-9072762286</p>
                                    </div>
                                </div> <!-- single address -->
                            </li>
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>info@lifescienceacademy.co.in</p>
                                        <p>dmsklra@gmail.com</p>
                                    </div>
                                </div> <!-- single address -->
                            </li>
                        </ul>
                    </div> <!-- contact address -->
                </div>
                
            </div>
            
            <br><br>

            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-address">
                        <div class="contact-heading">
                            <h5>Address</h5>
                            <p>If you have any further questions, please don’t hesitate to contact us.</p>
                        </div>
                        <ul>
                        
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>LSA Life Science Academy PVT LTD Kandamkunnu Koothuparamba 670701</p>
                                    </div>
                                </div> <!-- single address -->
                            </li>
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+91-9072762286</p>
                                    </div>
                                </div> <!-- single address -->
                            </li>
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>info@lifescienceacademy.co.in</p>
                                        <p>dmsklra@gmail.com</p>
                                    </div>
                                </div> <!-- single address -->
                            </li>
                        </ul>
                    </div> <!-- contact address -->
                </div>
                <div class="col-lg-8">
                    <div class="map map-big">
                
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d44175.305962033555!2d75.546108582503!3d11.86448421805123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x3b05c5a0e4b550e7%3A0x221e97f981b01a3b!2sLSA%20Life%20Science%20Academy%20PVT%20LTD%20(%20KANNUR%20%26%20THIRUVALLA)%2C%20Kandamkunnu%2C%20Kuthuparamba%2C%20Kerala%20670701!3m2!1d11.8690002!2d75.5749896!4m0!5e0!3m2!1sen!2sin!4v1708420385112!5m2!1sen!2sin" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> <!-- map -->
                </div>
            
                
            </div>
        </section>

        <!-- map section end -->


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

     <!--====== BACK TO TOP PART START ======-->
    
     <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
     <!--====== BACK TO TOP PART ENDS ======-->
 
            <!-- Include SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     
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