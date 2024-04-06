<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

		<header id="header-part" class="header-four">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="header-contact">
                                <ul>
                                    <li><i class="fa fa-envelope"></i><a href="http://www.lifescienceacademy.co.in/">info@lifescienceacademy.co.in</a></li>
                                    <li><i class="fa fa-phone"></i><span>+91-9072762286</span></li>
                                </ul>
                            </div> <!-- header contact -->
                        </div>
                        <div class="col-md-6">
                            <div class="header-right d-flex justify-content-end">
                                <div class="social d-flex">
                                    <span class="follow-us">Follow Us :</span>
                                    <ul>
                                        <li><a href="https://www.facebook.com/lifescienceacademy1/"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/team_lsa"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.youtube.com/c/LIFESCIENCEACADEMY" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="https://www.instagram.com/life_science_academy/"><i class="fa fa-instagram"></i></a></li>                             
                                        <li><a href="https://www.pinterest.com/LSA_KERALA/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div> <!-- social -->
                                
                            </div> <!-- header right -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header top -->
            
            <div class="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="index.html">
                                    <img class="logo" src="{{ asset('/image/logo-life.png') }}" alt="Logo">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
    
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a  class="nav_link" href="{{ route('users.home') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav_link" href="{{ route('users.about') }}">About</a>
                                        </li>
    
                                        <li class="nav-item">
                                            <a class="nav_link" href="{{ route('users.team') }}">Team</a>
                                        </li>
    
                                        <li class="nav-item">
                                            <a class="nav_link" href="{{ route('users.courses') }}">Courses</a>
                                            <!-- <ul class="sub-menu">
                                                <li><a href="courses.html">Courses</a></li>
                                                <li><a href="courses-single.html">Course Single</a></li>
                                            </ul> -->  
                                        </li>
    
                                        <li class="nav-item">
                                            <a class="nav_link" href="{{ route('users.news') }}">News</a>
                                        </li>
    
                                        <li  class="nav-item">
                                            <a class="nav_link" href="{{ route('users.gallery') }}">Gallery</a>
                                        </li>
    
                                        <li  class="nav-item">
                                            <a class="nav_link" href="{{ route('users.video') }}">Video</a>
                                        </li>
    

                                        
                                        <!-- <li class="nav-item">
                                            <a href="blog.html">Blog</a>
    
                                        </li> -->
    
                                        <!-- <li class="nav-item">
                                            <a href="blog.html">Career</a>
    
                                        </li> -->
                                        
                                        <li class="nav-item">
                                            <a class="nav_link" href="{{ route('users.contact') }}">Contact</a>
                                           
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav_link">More</a>
                                            <ul class="sub-menu">
                                                <li><a class="nav_link" href="https://lsaonline.co.in/ThemeLog">Examination</a></li>
                                             
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                                
                            </nav> <!-- nav -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div>
        </header>
	</head>





<script>
    $(document).ready(function () {
        // Get the current page URL
        var currentPage = window.location.href;

        // Remove the "active" class from all navigation links
        $('.navbar-nav a').removeClass('active');

        // Loop through each navigation link
        $('.navbar-nav a').each(function () {
            // Get the link URL
            var linkUrl = $(this).attr('href');

            // Check if the current page URL exactly matches the link URL
            if (currentPage === linkUrl) {
                // Add the "active" class if there's an exact match
                $(this).addClass('active');
            }
        });
    });
</script>
