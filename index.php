<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="Winikz" />
    <meta name="description" content="Winikz"/>
    <meta name="author" content="Winikz"/>
     
    <!-- Title  -->
    <title>Winikz</title>
 
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />
    
    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
     
</head>
      
<body>

    <!-- ==================== Start Loading ==================== -->
    <div class="loading">
        <span>L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>

    <div id="preloader">
    </div>

    <!-- ==================== End Loading ==================== -->

    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg> 
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->

    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->

   <?php include 'include/navbar.php';?>

    <!-- ==================== Start Slider ==================== -->

    <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/slid/1.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="caption center mt-30">
                                        <h1>Grow <span class="color-font">your business</span> <br> <span
                                        class="color-font">with </span> smarter  <span
                                        class="color-font">marketing</span></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/slid/3.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center mt-30">
                                        <h1 class="color-font">Creative Solutions</h1>
                                        <p>Your website is your online business card. We’ll make it easy to read—and stand out.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/slid/2.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center mt-30">
                                        <h1 class="color-font">Perfect <br> Design Matters</h1> 
                                        <p> Designs for brands, visual identity and digital user experience to adapt and evolve in a creative world.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider setting -->
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="swiper-pagination top botm "></div>

            <div class="social-icon">
            <a href="https://www.facebook.com/winikzDev"><i class="fab fa-facebook-f" target="_blank"></i></a>
            <a href="https://www.instagram.com/winikzx/"><i class="fab fa-instagram" target="_blank"></i></a>
            <a href="https://www.youtube.com/channel/UCaZP_0eM_DDggTyIzCQ7w9A/videos" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    <div class="main-content">

    <!-- ==================== Start about ==================== -->

        <section class="about-us section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 valign md-mb50">
                        <div class="mb-50">
                            <h6 class="fw-100 text-u ls10 mb-10">About Us</h6>
                            <h3 class="fw-600 text-u ls1 mb-30 color-font">Our Comapny</h3>
                            <p>We are a team of creative problem-solvers that care about how your business look and feel.
                               Our company is a company established on 2021 and specialized in web development, Graphic design and audio productions. 
                            </p>
                            <a href="about.php" class="butn bord curve mt-30">
                            <span>Read More</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 img">
                        <img src="img/feat.jpg" alt="">
                        <div class="stauts">
                            <div class="item">
                                <h4>7<span>K+</span></h4>
                                <h6>Happy Clients</h6>
                            </div>
                            <div class="item">
                                <h4>10<span>K+</span></h4>
                                <h6>Success Projects</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End about ==================== -->

        <!-- ==================== Start Services ==================== -->

        <section class="services bords section-padding pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h6 class="wow fadeIn" data-wow-delay=".5s">Best Features</h6>
                            <h3 class="wow color-font">We are a new digital product development agency</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".5s">
                        <div class="item-box md-mb50">
                            <span class="icon fa fa-desktop"></span>
                            <h6>Web Development</h6>
                            <p>Creative thinking never ends.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".7s">
                        <div class="item-box md-mb50">
                            <span class="icon fas fa-paint-brush"></span>
                            <h6>Graphic Design</h6>       
                            <p>Changing the way you look at things.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".9s">
                        <div class="item-box">
                            <span class="icon fas fa-music"></span>
                            <h6>Audio Production</h6>
                            <p>Producing the best music to your ears.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================== End Services ==================== -->

        <!-- ==================== Start works ==================== -->

        <section class="work-carousel metro position-re">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 no-padding">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago" >
                                        <img src="img/web/1.png" class="img-fluid" width="800" height="800" />
                                        </div>
                                        <div class="cont">
                                        <h6 class="color-font"><a href="#0">Work Management System</a></h6>
                                                                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago">
                                        <img src="img/web/2.png" class="img-fluid" width="800" height="800" />
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a href="#0">Explosive Management System </a></h6>   
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago">
                                        <img src="img/web/3.png" class="img-fluid" width="800" height="800" />
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a href="#0">Death Notice</a></h6> 
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago">
                                        <img src="img/web/4.png" class="img-fluid" width="800" height="800" />
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a href="#0">Land System</a></h6>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago">
                                        <img src="img/web/5.png" class="img-fluid" width="800" height="800" />
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a href="#0">Work Management System</a></h6>
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer" style="background-color:#0000008c;">
                <i class="icon fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer" style="background-color:#0000008c;">
                <i class="icon fas fa-chevron-left"></i>
                </div>
                 </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End works ==================== -->
    
        <!-- ==================== Start numbers ==================== -->

        <section class="number-sec section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h6 class="wow fadeIn" data-wow-delay=".5s">FUN FACTS</h6>
                            <h3 class="wow color-font">Pleasure in the job puts perfection in the work.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item no-bord sm-mb50">
                            <span class="icon fa fa-comments"></span>
                            <h3 class=""><span class="count">2400</span></h3>
                            <p class="wow txt" data-splitting>People who are commited to their
                             management tasks.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item no-bord sm-mb50">
                            <span class="icon far fa-file-alt"></span>
                            <h3 class=""><span class="count">133</span></h3>
                            <p class="wow txt" data-splitting>Signed projects that have been
                                confirmed complete!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item no-bord">
                            <span class="icon fa fa-trophy"></span>
                            <h3 class=""><span class="count">46</span></h3>
                            <p class="wow txt" data-splitting>International awards and cups
                                for design projects.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End numbers ==================== -->

        <!-- ==================== Start video ==================== -->

        <section class="block-sec">
            <div class="background bg-img pt-100 pb-0 parallaxie" data-background="img/vid.jpg"
                data-overlay-dark="5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="vid-area" style="margin-top:100px;">
                                <span class="text">Watch Video</span>
                                <div class="vid-icon">
                                    <a class="vid" href="https://youtu.be/MyDDY8M9lNI">
                                        <div class="vid-butn">
                                            <span class="icon">
                                                <i class="fas fa-play"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="testim-box">
                                <div class="head-box">
                                    <h6 class="wow fadeIn" data-wow-delay=".5s">Our Clients</h6>
                                    <h4 class="wow fadeInLeft" data-wow-delay=".5s">What Client's Say?</h4>
                                </div>
                                <div class="slic-item wow fadeInUp" data-wow-delay=".5s">
                                    <div class="item">
                                         <p>Really satisfied with the service by the team.Committed to the work and gives best for the customer.Good luck team.</p>
                                        <div class="info">
                                            <div class="img">
                                                <div class="img-box">
                                                    <img src="img/clients/1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="author">
                                                    <h6 class="author-name ">Sachindra Chalaka</h6>
                                                    <span class="author-details">CEO, Avesz</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>Incredible service, <br> Right time, <br> Right peoples.</p>
                                    <div class="info">
                                            <div class="img">
                                                <div class="img-box">
                                                <img src="img/clients/2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="author">
                                                    <h6 class="author-name ">Mashan Rathnayake</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>The result that the board and I were seeking was successfully provided, 
                                            and we had a glitch-free product launch. I am glad to say that it is exactly what we wanted. 
                                            Thank you very much team and I wish to continue working with winikz.</p>
                                            <div class="info">
                                            <div class="img">
                                            <div class="img-box">
                                            <img src="img/clients/3.jpg" alt="">
                                            </div>
                                            </div>
                                            <div class="cont">
                                            <div class="author">
                                                <h6 class="author-name ">Rajitha de Silva</h6>
                                                    
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End video ==================== -->

        <!-- ==================== Start Skills Circle ==================== -->

        <!-- <section class="skills-circle pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="item wow fadeInLeft" data-wow-delay=".6" style="margin-top:-15px;">
                                        <div class="skill" data-value="0.9">
                                            <span class="">90%</span>
                                        </div>
                                        <div class="cont">
                                            <span>Project</span>
                                            <h6>Consulting</h6>
                                        </div>
                                    </div>
                                </div>    
                                <div class="col-md-6">
                                 <div class="item wow fadeInLeft" data-wow-delay=".3" style="margin-top:-15px;">
                                        <div class="skill" data-value="0.75">
                                            <span class="">75%</span>
                                        </div>
                                        <div class="cont">
                                            <span>App</span>
                                            <h6>Development</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- ==================== End Skills Circle ==================== -->

        <!-- ==================== Start clients Brands ==================== -->
<!-- 
        <section class="clients section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 valign md-mb50">
                        <div class="sec-head mb-0">
                            <h6 class="wow fadeIn" data-wow-delay=".5s">Best Features</h6>
                            <h3 class="wow mb-20 color-font">Our Clients</h3>
                            <p>Our area of practice is quite wide: design, graphics, branding, development.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <div class="row bord">
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="img/clients/brands/01.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".6s">
                                        <div class="img">
                                            <img src="img/clients/brands/02.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".8s">
                                        <div class="img">
                                            <img src="img/clients/brands/03.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="img/clients/brands/04.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-6 brands sm-mb30">
                                    <div class="item wow fadeIn" data-wow-delay=".4s">
                                        <div class="img">
                                            <img src="img/clients/brands/05.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands sm-mb30">
                                    <div class="item wow fadeIn" data-wow-delay=".7s">
                                        <div class="img">
                                            <img src="img/clients/brands/06.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".5s">
                                        <div class="img">
                                            <img src="img/clients/brands/07.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="img/clients/brands/08.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- ==================== End clients Brands ==================== -->

        <!-- ==================== Start call-to-action ==================== -->
<br><br><br><br>
        <section class="call-action section-padding sub-bg bg-img" data-background="img/ptrn.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="content sm-mb30">
                            <h6 class="wow" data-splitting>Let’s Talk</h6>
                            <h2 class="wow" data-splitting>about your <br> <b class="back-color">next project</b></h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 valign">
                        <a href="contact.php" class="butn bord curve wow fadeInUp" data-wow-delay=".5s"><span>Get In
                        Touch</span></a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==================== End call-to-action ==================== -->

        <?php include 'include/footer.php';?>

    </div>

    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>

</body>

</html>