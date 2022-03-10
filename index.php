<!DOCTYPE html>

<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>E-Attendance</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="icon" href="sources/um_logo.png" type="image/x-icon">
	
    <link rel="stylesheet" href="HomeAssets/css/base.css">
    <link rel="stylesheet" href="HomeAssets/css/vendor.css">
    <link rel="stylesheet" href="HomeAssets/css/main.css">
	
    <script src="HomeAssets/js/modernizr.js"></script>
    <script src="HomeAssets/js/pace.min.js"></script>



</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.php">
                <img src="HomeAssets/images/logo.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a href="login.php" >Login</a></li>
                    <li><a href="register.php" >Register</a></li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="HomeAssets/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to E-Attendance</h3>

                <h1>
                    An E-attendance System With Geolocation and Attendance Prediction
                </h1>

                <div class="home-content__buttons">
                    <a href="login.php" class="btn btn--stroke">
                        Log In
                    </a>
                    <a href="register.php" class="btn btn--stroke">
                        Register
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div>

    </section>

    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Hello There</h3>
                <h1 class="display-1 display-1--light">E-Attendance</h1>
            </div>
        </div>

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                E-Attendance System with Geolocation is an attendance system comprising of a website that will be used by both students and lecturers. The system uses Geofencing technology to detect the location of students within class area during the class hours. The system also provides the lecturers with attendance analysis and future attendance rate prediction for their classes. Our Motive is to manage students absenteeism and eliminate the potential of cheating in the attendance records.
                </p>
            </div>
        </div>

        <div class="row about-stats stats block-1-2 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count">3</div>
                <h5>Users</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">14</div>
                <h5>Features</h5>
            </div>
        </div>

        <div class="about__line"></div>

    </section>

    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">What We Do</h3>
                <h1 class="display-2">We’ve got everything essential for a good attendance system</h1>
            </div>
        </div>

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-padlock"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Authentication</h3>
                    <p>The system only allows authorized UM personnels to access and use it.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-user"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Profile Management</h3>
                    <p>Users can register and modify their profile. Allows lecturers to filter and view students profile and vice versa.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-list"></i>
                </div>  
                <div class="service-text">
                    <h3 class="h2">Track Attendance</h3>
                    <p>Both students and lecturers can track the attendance record for the semester by applying filters.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-file-add"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Absence Reasons Management</h3>
                    <p>Students can add reason and supporting documents for their absence to be reviewed and approved by the lecturers. 
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-cube"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Analysis & Prediction </h3>
                    <p>Lecturers can get complete attendance analysis report of their class and also shows predicted class attendance trend for upcoming weeks.
                    </p>
                </div>
            </div>
    
            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-comment"></i></div>
                <div class="service-text">
                    <h3 class="h2">Feedback Management</h3>
                    <p>Students can submit feedback to specific lecturers on subjects to be reviewed. It also includes profanity filter to block unfavourable words.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-cloud"></i></div>
                <div class="service-text">
                    <h3 class="h2">Scheduled Backup & Restore Database</h3>
                    <p>Admin set the scheduler to allow database backup on certain period. Database can be restored with single click during any database failures or loss.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-paper-plane"></i></div>
                <div class="service-text">
                    <h3 class="h2">Visa Application</h3>
                    <p>International students can apply for visa renewal which will be approved by administration with attendance requirement.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-pin"></i></div>
                <div class="service-text">
                    <h3 class="h2">Geolocation data (Admin)</h3>
                    <p>Admin register, modify or delete the geolocation coordinates of each venue in the faculty.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-education"></i></div>
                <div class="service-text">
                    <h3 class="h2">Courses Data (Admin)</h3>
                    <p>Admin register or upload, modify or delete the course data in the system.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-map"></i></div>
                <div class="service-text">
                    <h3 class="h2">Class Registration</h3>
                    <p>Students and lecturers can register their respective timetable for the semester.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-calendar"></i></div>
                <div class="service-text">
                    <h3 class="h2">Schedule Management</h3>
                    <p>Lecturers can postpone or cancel the class or change its venue for that week only.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-mobile"></i></div>
                <div class="service-text">
                    <h3 class="h2">Mark Attendance </h3>
                    <p>Students geolocation will be tracked to allow them submit their attendance within location range.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-megaphone"></i></div>
                <div class="service-text">
                    <h3 class="h2">Notification Module</h3>
                    <p>Lecturers can send notifications to students to announce change of class details.
                    </p>
                </div>
            </div>

        </div>

    </section>

    <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Photographs</h3>
                    <h1 class="display-2 display-2--light">What are in our faculty?</h1>
                </div>
            </div>

        </div>

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="HomeAssets/images/portfolio/gallery/CCNA 1.png" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="HomeAssets/images/portfolio/CCNA 1.png" 
                                         srcset="HomeAssets/images/portfolio/CCNA 1.png" alt="" width="550px">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    CCNA 1
                                </h3>
                                <p class="item-folio__cat">
                                    Networking Lab
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="HomeAssets/images/portfolio/gallery/Cubes 1.png" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="HomeAssets/images/portfolio/Cubes 1.png" 
                                         srcset="HomeAssets/images/portfolio/Cubes 1.png" alt="" width="550px">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    The Cubes
                                </h3>
                                <p class="item-folio__cat">
                                    Event Room
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="HomeAssets/images/portfolio/gallery/Hall 1.png" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="HomeAssets/images/portfolio/Hall 1.png" 
                                         srcset="HomeAssets/images/portfolio/Hall 1.png" alt="" width="550px">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Hall
                                </h3>
                                <p class="item-folio__cat">
                                    Lecture Hall
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="HomeAssets/images/portfolio/gallery/Idea 1.png" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="HomeAssets/images/portfolio/Idea 1.png" 
                                         srcset="HomeAssets/images/portfolio/Idea 1.png" alt="" width="550px">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    IDEA Lab
                                </h3>
                                <p class="item-folio__cat">
                                
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="HomeAssets/images/portfolio/gallery/Ios 1.png" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="HomeAssets/images/portfolio/Ios 1.png" 
                                         srcset="HomeAssets/images/portfolio/Ios 1.png" alt="" width="550px">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    IOS Lab
                                </h3>
                                <p class="item-folio__cat">
                                    IOS Development
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="HomeAssets/images/portfolio/gallery/Micro 1.png" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="HomeAssets/images/portfolio/Micro 1.png" 
                                         srcset="HomeAssets/images/portfolio/Micro 1.png" alt="" width="550px">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Micro 1
                                </h3>
                                <p class="item-folio__cat">
                                    Micro Computer Lab
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="HomeAssets/images/portfolio/gallery/Theatre 1.png" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="HomeAssets/images/portfolio/Theatre 1.png" 
                                         srcset="HomeAssets/images/portfolio/Theatre 1.png" alt="" width="550px">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Theatre Room
                                </h3>
                                <p class="item-folio__cat">
                                    Screening and Tutorial
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="HomeAssets/images/portfolio/gallery/Tutorial 1.png" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="HomeAssets/images/portfolio/Tutorial 1.png" 
                                         srcset="HomeAssets/images/portfolio/Tutorial 1.png" alt="" width="550px">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Tutorial Room
                                </h3>
                                <p class="item-folio__cat">
                                    Regular Tutorial Sessions
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- footer
    ================================================== -->
    <footer style="
    padding-top: 20px;
    padding-bottom: 20px">
        <div class="header-logo"></div>


        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© E-Attendance 2022</span> 
                    <span>Site by <a href="https://fsktm.um.edu.my//">FCSIT</a></span>	
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>

    </footer>


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="HomeAssets/js/jquery-3.2.1.min.js"></script>
    <script src="HomeAssets/js/plugins.js"></script>
    <script src="HomeAssets/js/main.js"></script>

</body>

</html>