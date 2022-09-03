<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="Winikz" />
    <meta name="description" content="Winikz" />
    <meta name="author" content="Winikz" />
          
    <!-- Title  -->
    <title>Winikz</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

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

    <!-- ==================== Start header ==================== -->

    <header class="pages-header circle-bg valign position-re">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11">
                    <div class="capt">
                        <div class="text-center">
                            <h1 class="color-font mb-10 fw-700">Let's talk <br> about your project.</h1>
                            <p>Feel free to ask me any question or let’s do to talk about
                                our future collaboration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-color">
            <div class="gradient-circle"></div>
            <div class="gradient-circle two"></div>
        </div>
        <div class="line bottom left" style="margin-left:200px"></div>
        <div class="line bottom right" style="margin-right:200px"></div>
    </header>

    <!-- ==================== End header ==================== -->

    <!-- ==================== Start main-content ==================== -->

    <div class="main-content">

        <!-- ==================== Start Contact ==================== -->

        <section class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form md-mb50">

                            <h4 class="fw-700 color-font mb-50">Get In Touch.</h4>

                            <form id="contact-form" method="post" action="contact.php">

                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" placeholder="Name"
                                            required="required">
                                    </div>

                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                            required="required">
                                    </div>

                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                            required="required"></textarea>
                                    </div>

                                    <button type="submit" class="butn bord"><span>Send Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="cont-info">
                            <h4 class="fw-700 color-font mb-50">Contact Info.</h4>
                            <h3 class="wow" data-splitting>Let's Talk.
                            </h3>
                            <div class="item mb-40">
                                <h5><a href="#0">winikz.info@gmail.com</a></h5>
                             
                            </div>
                            
                            <div class="social mt-50">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-instagram"></i></a>
                                <a href="#0"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->

        <!-- ==================== Start Map ==================== -->

        <div class="map" id="ieatmaps"></div>

        <!-- ==================== End Map ==================== -->

        <?php include 'include/footer.php';?>

    </div>

    <!-- ==================== End main-content ==================== -->

    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>

    <!-- Map -->
    <script src="js/map.js"></script>

    <!-- google map api -->
    <!-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5bpEs3xlB8vhxNFErwoo3MXR64uavf6Y&callback=initMap">
        </script> -->

</body>

</html>