<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="google-site-verification" content="RDtzde5eSkSyTtWAjCmTqsQJ0K2nJa4Vllep1BK9fNc" />
    <!--====== Title ======-->
    <title>ArchiveX | Home</title>

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/lineicons.css" />

    <!--====== Tiny Slider css ======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />

    <!--====== gLightBox css ======-->
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />

    <link rel="stylesheet" href="login.css" />
	<link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />
</head>

<body>
    <!-- Start navbar area -->
    <section class="navbar-area navbar-nine">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/kaiadmin/logo-light-n.png" alt="ArchiveX" style="width: 150px;" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="page-scroll active" href="#hero-area">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#about-us">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#signin">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- End navbar area -->

    <!-- Start header Area -->
    <section id="hero-area" class="header-area header-eight">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="header-content">
                        <h1>Unlock the Power of Knowledge</h1>
                        <p>
                            Explore our vast collection of digital resources and archives. Your journey to discovery starts here.
                        </p>
                        <div class="button">
                            <a href="#collections" class="btn primary-btn">Start Exploring</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="header-image slider">
                        <img src="assets/img/header/library2.avif" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End header Area -->

    <!-- Start about area -->
    <section class="about-area about-five" id="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="about-image-five">
                        <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG content remains the same -->
                        </svg>
                        <img src="assets/img/header/library1.avif" alt="Digital Archive" />
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-five-content">
                        <h6 class="small-title text-lg">ABOUT US</h6>
                        <h2 class="main-title fw-bold">Preserving Knowledge for the Future</h2>
                        <div class="about-five-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab" data-bs-target="#nav-who" type="button" role="tab" aria-controls="nav-who" aria-selected="true">Who We Are</button>
                                    <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision" aria-selected="false">Our Vision</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">
                                    <p>ArchiveX is a state-of-the-art digital archive and e-library platform dedicated to preserving and providing access to a wealth of knowledge resources. We are committed to making information accessible to researchers, students, and curious minds worldwide.</p>
                                </div>
                                <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                    <p>Our vision is to become the world's leading digital archive, bridging the past with the future through technology. We aim to democratize access to information, foster global learning, and inspire innovation by providing a comprehensive, user-friendly platform for knowledge discovery.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </section>
    <!-- End about area -->

    <!-- Start Sign In Area -->
    <div id="signin" class="latest-news-area section">
        <div class="section-title-five">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h2 class="fw-bold" style="color: white;">Sign In</h2>
                            <p style="color: white;">
                                Access your account to explore our full range of resources
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form method="post" action="cek_login.php" style="width: 30%;margin: auto;" class="form-si">
            <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email">
            <input type="password" class="form-control mb-4" id="password" name="password" placeholder="Password">
            <button type="submit" class="btn btn-sm primary-btn" style="width: 100%;">Login</button>
        </form>
    </div>
    <!-- End Sign In Area -->

    <!-- Start Footer Area -->
    <footer class="footer-area footer-eleven">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="footer-widget f-about row">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/img/kaiadmin/logo-light-n.png" style="width: 100px" alt="ArchiveX" class="img-fluid" />
                                    </a>
                                </div>
                                <p class="copyright-text">
                                    <span>© 2023 ArchiveX.</span>Designed and Developed by
                                    <a href="javascript:void(0)" rel="nofollow"> archivex-team </a>
                                </p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
    </footer>
    <!-- End Footer Area -->

    <!-- button to top start-->
    <a href="#hero-area" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>
    <!-- button to top end -->

    <!-- JS area -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script>
        // JavaScript remains largely the same, just removed travel-specific comments
    </script>

</body>

</html>