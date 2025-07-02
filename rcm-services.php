<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->


<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ex-coders">
    <meta name="description" content="LinkSwitch - Be Inspired By Communication">
   

    <!-- ======== Page title ============ -->
    <title>RCM Services- LinkSwitch</title>
    <!--<< Favcion >>-->
 <link rel="shortcut icon" href="assets/img/logo-transparent-fav.png" style="width: 1200px !important; height: auto !important;">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<style>

.hilight-text {
    border-left: 4px solid var(--theme);
    padding: 40px;
    background-color: var(--bg);
    position: relative;
}

.hilight-text svg {
    position: absolute;
    right: 20px;
    bottom: 20px;
}


.scrolling-banner {
  background-color: var(--bg) !important;
  overflow: hidden;
  padding: 10px 0;
  width: 100%;
}

.scrolling-track {
  display: flex;
  animation: scrollLoop 30s linear infinite;
}

.scrolling-content {
  display: flex;
  gap: 60px;
}

.item {
  display: flex;
  align-items: center;
  gap: 10px;
  color: black;
  font-weight: 500;
  font-size: 16px;
  white-space: nowrap;
}

.item i {
  font-size: 18px;
  color: black;
}

@keyframes scrollLoop {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-50%);
  }
}

</style>
<body>


    <!-- Preloader Start -->
    <!-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="L" class="letters-loading">
                  L
                </span>
                <span data-text-preloader="I" class="letters-loading">
                  I
                </span>
                <span data-text-preloader="N" class="letters-loading">
                  N
                </span>
                <span data-text-preloader="K" class="letters-loading">
                  K
                </span>
                <span data-text-preloader="S" class="letters-loading">
                  S
                </span>
                <span data-text-preloader="W" class="letters-loading">
                  W
                </span>
                 <span data-text-preloader="I" class="letters-loading">
                  I
                </span>
                 <span data-text-preloader="T" class="letters-loading">
                  T
                </span>
                 <span data-text-preloader="C" class="letters-loading">
                  C
                </span>
                 <span data-text-preloader="H" class="letters-loading">
                  H
                </span>

            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div> -->

         <div class="preloader">

            <div class="loader-container">
                <img src="assets/img/logo-png.png" alt="Logo" class="loader-logo">
                <div class="spinner-border text-info loader-spinner" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>

    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info bg-white">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.php">
                                <img src="assets/img/logo-png.png" alt="logo-img" style="width: 450px; max-height: 80px; margin-left: -40px !important;">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- <p class="text d-none d-lg-block">
                        Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                        feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                    </p> -->
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">169 Madison Ave STE 2945 New York, NY 10016</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:sales@linkswitchcommunications.com"><span
                                            class="mailto:info@example.com">sales@linkswitchcommunications.com</span></a>
                                </div>
                            </li>
                            <!-- <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                </div>
                            </li> -->
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+19024412385" >+1 (902) 441-2385</a>
                                </div>
                            </li>
                        </ul>
                        <!-- <div class="header-button mt-4">
                            <a href="contact.php" class="theme-btn text-center">
                                <span>Join Us Now<i class="fa-solid fa-arrow-right-long"></i></span>
                            </a>
                        </div> -->
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/profile.php?id=61577661337809"><i class="fab fa-facebook-f" style="cursor: pointer !important;"></i></a>
                            <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                            <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
                            <a href="https://www.linkedin.com/company/linkswitch-communications-llc/"><i class="fab fa-linkedin-in" style="cursor: pointer !important;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

 <?php include 'header.php'; ?>


    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--<< Breadcrumb Section Start >>-->
    <!-- <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/bg/group.jpg');">
        <div class="border-shape">
            <img src="assets/img/element.png" alt="shape-img">
        </div>
        <div class="line-shape">
            <img src="assets/img/line-element.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">IT Services</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        IT Services
                    </li>
                </ul>
            </div>
        </div>
    </div> -->

<div class="scrolling-banner">
  <div class="scrolling-track">
    <div class="scrolling-content">
      <div class="item"><i class="fa-solid fa-file-invoice-dollar"></i><span>End-to-End RCM Solutions</span></div>
      <div class="item"><i class="fa-solid fa-robot"></i><span>Smart Workflow Automation</span></div>
      <div class="item"><i class="fa-solid fa-user-nurse"></i><span>Healthcare-Centric Solutions</span></div>
      <div class="item"><i class="fa-solid fa-shield-heart"></i><span>HIPAA & GDPR Compliance</span></div>
      <div class="item"><i class="fa-solid fa-chart-line"></i><span>Financial Performance Boost</span></div>
      <div class="item"><i class="fa-solid fa-gears"></i><span>Claims & Denials Management</span></div>
      <div class="item"><i class="fa-solid fa-hand-holding-dollar"></i><span>Faster Reimbursements</span></div>

      <!-- duplicated items for infinite scroll effect -->
      <div class="item"><i class="fa-solid fa-file-invoice-dollar"></i><span>End-to-End RCM Solutions</span></div>
      <div class="item"><i class="fa-solid fa-robot"></i><span>Smart Workflow Automation</span></div>
      <div class="item"><i class="fa-solid fa-user-nurse"></i><span>Healthcare-Centric Solutions</span></div>
      <div class="item"><i class="fa-solid fa-shield-heart"></i><span>HIPAA & GDPR Compliance</span></div>
      <div class="item"><i class="fa-solid fa-chart-line"></i><span>Financial Performance Boost</span></div>
      <div class="item"><i class="fa-solid fa-gears"></i><span>Claims & Denials Management</span></div>
      <div class="item"><i class="fa-solid fa-hand-holding-dollar"></i><span>Faster Reimbursements</span></div>
    </div>
  </div>
</div>





    <!-- Service Details Section Start -->
    <section class="service-details-section fix section-padding"  style="padding-top: 45px;">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="row g-4">
                    <div class="col-12 col-lg-4 order-2 order-md-1">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>All Services</h3>
                                </div>
                                <div class="widget-categories">
                                    <ul>
                                   <li><a href="managed-itservices.php">Managed IT Services <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="cloudservices.php">Cloud Services <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="softwaredevelopment.php">Software Development <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="it-consulting.php">IT Consulting & Strategy <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="it-staffing.php">IT Staffing & Augmentation<i
                                                    class="fa-solid fa-arrow-right-long"></i></a> </li>
                                        <li><a href="bpo-services.php">BPO Services<i
                                                    class="fa-solid fa-arrow-right-long"></i></a> </li>
                                         <li><a href="ecommerce.php">E-commerce<i
                                                    class="fa-solid fa-arrow-right-long"></i></a> </li>
                                        <li class="active"><a href="rcm-services.php">RCM Services<i
                                                    class="fa-solid fa-arrow-right-long"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Opening Hours</h3>
                                </div>
                                <div class="opening-category">
                                    <ul>
                                        <li><i class="fa-regular fa-clock"></i>Mon - Fri: 9.00 AM - 20.00 PM</li>
                                        <li><i class="fa-regular fa-clock"></i>Sat - Sun: 10.00 AM - 22.00 PM</li> -->
                                        <!-- <li><i class="fa-regular fa-clock"></i>Friday: Closed</li> -->
                                        <!-- <li><i class="fa-regular fa-clock"></i>Emergency: 24 hours</li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="single-sidebar-image bg-cover"
                                style="background-image: url('assets/img/service/post.jpg');">
                                <div class="contact-text">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <h4>Need Help? Call Here</h4>
                                    <h5>
                                        <a href="tel:+19024412385">+1 (902) 441-2385</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 order-1 order-md-2">
                        <div class="service-details-items">
                            <div class="details-image">
                                <img src="assets/img/rcm.png" alt="img">
                            </div>
<div class="details-content">
  <h4>🏥 RCM Services</h4>
  <p class="mt-3">
    At CleverCrew Healthcare, we specialize in end-to-end Revenue Cycle Management (RCM) services that streamline your financial operations while allowing you to focus on delivering quality care. Our solutions are designed to simplify billing, reduce denials, and improve cash flow.
  </p>
  <p class="mt-3">
    With deep domain expertise and a tech-first approach, we optimize every stage of the revenue cycle—from patient registration and coding to claims processing and AR follow-up—ensuring greater accuracy, faster reimbursements, and enhanced financial performance for your practice.
  </p>

                              
                                <div class="details-video-items">
                                    <!-- <div class="video-thumb">
                                        <img src="assets/img/bg/connect.jpg" alt="img"> -->
                                        <!-- <div class="video-box">
                                            <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                                class="video-btn ripple popup-video">
                                                <i class="fa-solid fa-play"></i>
                                            </a>
                                        </div> -->
                                    <!-- </div> -->
     <div class="content">
  <h5>✅ Benefits With Our Service</h5>
  <p>
    Empower your healthcare practice with secure, efficient, and personalized RCM solutions that support clinical excellence and financial growth.
  </p>
  <ul class="list">
    <li>
      <i class="fa-regular fa-circle-check"></i>
      Smart Automation for Faster Workflows
    </li>
    <li>
      <i class="fa-regular fa-circle-check"></i>
      End-to-End Revenue Cycle Management
    </li>
    <li>
      <i class="fa-regular fa-circle-check"></i>
      HIPAA & GDPR Compliant Solutions
    </li>
    <li>
      <i class="fa-regular fa-circle-check"></i>
      Tailored Solutions for Every Practice
    </li>
  </ul>
</div>


                                <!-- <p>
                                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and
                                    dolor in reprehenderit.
                                </p> -->
                                <div class="image-area">
                                    <div class="row g-4">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="thumb">
                                                <img src="assets/img/about-rcm.png" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="thumb">
                                                <img src="assets/img/rcm1.png" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <p>
                                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and
                                    dolor in reprehenderit.
                                </p> -->
<div class="hilight-text mt-4 mb-4">
  <p>
    Optimize your revenue and simplify operations with CleverCrew Healthcare’s expert RCM services. From smart automation to regulatory compliance, we tailor our solutions to fit the unique needs of healthcare providers. Whether you're looking to improve collections, reduce denials, or streamline workflows, our team delivers the guidance and tools to boost performance and ensure financial stability. Partner with us to elevate your practice with efficient, secure, and future-ready RCM strategies.
  </p>


</br>
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 20.3698H7.71428L2.57139 30.5546H10.2857L15.4286 20.3698V5.09247H0V20.3698Z"
                                                fill="#3C72FC" />
                                            <path
                                                d="M20.5703 5.09247V20.3698H28.2846L23.1417 30.5546H30.856L35.9989 20.3698V5.09247H20.5703Z"
                                                fill="#3C72FC" />
                                        </svg>
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


    


   <?php include 'footer.php'; ?>

    <!--<< All JS Plugins >>-->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
    
<script>
document.addEventListener('DOMContentLoaded', function () {
    const preloader = document.getElementById('preloader');
    if (preloader) {
        preloader.style.transition = 'opacity 0.3s ease';
        preloader.style.opacity = '0';
        setTimeout(() => {
            preloader.style.visibility = 'hidden';
        }, 300); 
    }
});
</script>




</body>



</html>