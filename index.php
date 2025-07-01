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
    <title>LinkSwitch - Be Inspired By Communication</title>
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
  .closer-to-hero {
    margin-top: -80px; 
  }

   .closer-to-top {
    margin-top: -78px; 
  }

  .bg-white{
    background: #fff;
  }

html {
  -webkit-tap-highlight-color: transparent;
}


@media (max-width: 767px) {
  .about-section {
    padding: 30px 15px !important;
  }

  .about-thumb {
    text-align: center;
  }

  .about-thumb img {
    max-width: 100%;
    height: auto;
  }

  .about-content {
    text-align: center;
  }

  .section-title.mxw-560 {
    max-width: 100%;
    margin: 0 auto;
  }

  .fancy-box-wrapper.style2 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  .fancy-box.style2 {
    flex: 1 1 45%;
    max-width: 45%;
    text-align: center;
  }

  .fancy-box.style2 .icon {
    margin-bottom: 5px;
  }

  .fancy-box.style2 h6 {
    font-size: 14px;
  }

  .theme-btn.bg-white {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 14px;
  }

  .about-container-wrapper .shape1,
  .about-container-wrapper .shape2,
  .about-container-wrapper .shape3,
  .about-container-wrapper .shape {
    display: none; 
  }

  .gx-70 {
    --bs-gutter-x: 1rem;
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

        <div class="preloader" id="preloader">

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
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
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

    <!-- Hero Section Start -->
    <section class="hero-section fix hero-3">
        <div class="bottom-shape">
            <img src="assets/img/hero/bottom-shape.png" alt="shape-img">
        </div>
        <div class="array-button">
            <button class="array-prev"><i class="fal fa-arrow-right"></i></button>
            <button class="array-next"><i class="fal fa-arrow-left"></i></button>
        </div>
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('assets/img/hero/hero-2.jpg');">
                        <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
                            <img src="assets/img/hero/mask-shape-2.png" alt="shape-img">
                        </div>
                        <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
                            <img src="assets/img/hero/border-shape.png" alt="shape-img">
                        </div>
                        <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
                            <img src="assets/img/choose/circle.png" alt="shape-img">
                        </div>
                        <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
                            <img src="assets/img/frame.png" alt="shape-img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s"> Welcome to </h5>
                                    <h2 class="text-white" data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                         LinkSwitch Communications 
                                    </h2>
                                    </br>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                        
                                     A global tech partner driving innovation across borders—delivering cutting-edge IT solutions, </br>smart software, and digital services tailored for growth in a connected world.
                                    </p>
                                    <div class="hero-button">
                                        <a href="about.php" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn hover-white">
                                            Explore More
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                        <a href="contact.php" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn border-white">
                                            Contact Us
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('assets/img/hero/hero-1.jpg');">
                        <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
                            <img src="assets/img/hero/mask-shape-2.png" alt="shape-img">
                        </div>
                        <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
                            <img src="assets/img/hero/border-shape.png" alt="shape-img">
                        </div>
                        <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
                            <img src="assets/img/choose/circle.png" alt="shape-img">
                        </div>
                        <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
                            <img src="assets/img/frame.png" alt="shape-img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s"> Welcome to </h5>
                                    <h2 class="text-white" data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                      
                                        LinkSwitch Communications 
                                    </h2>
                                  </br>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                          Transforming ideas into intelligent tech solutions that drive growth, streamline </br>operations, and connect businesses worldwide.
                                    </p>
                                    <div class="hero-button">
                                        <a href="about.php" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn hover-white">
                                            Explore More
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                        <a href="contact.php" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn border-white">
                                            Contact Us
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('assets/img/hero/hero-3.jpg');">
                        <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
                            <img src="assets/img/hero/mask-shape-2.png" alt="shape-img">
                        </div>
                        <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
                            <img src="assets/img/hero/border-shape.png" alt="shape-img">
                        </div>
                        <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
                            <img src="assets/img/choose/circle.png" alt="shape-img">
                        </div>
                        <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
                            <img src="assets/img/frame.png" alt="shape-img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s"> Welcome to</h5>
                                    <h2 class="text-white" data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                        LinkSwitch Communications 
                                    </h2>
                                    </br>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                           Driven by innovation, we craft smart digital ecosystems—blending technology, design, </br>and data to accelerate your business across global markets.
                                    </p>
                                    <div class="hero-button">
                                        <a href="about.php" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn hover-white">
                                            Explore Now
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                        <a href="contact.php" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn border-white">
                                            Contact Us
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
            <!-- Service Section    S T A R T -->
    <section class="service-section space fix closer-to-hero">
      <div class="service-container-wrapper style1">
        <div class="container">
          <div class="title-wrap mb-5">
            <div class="section-title">
              <div class="subtitle">
                <img src="assets/img/icon/arrowLeft.svg" alt="icon" />
                <span> Our Services </span
                ><img src="assets/img/icon/arrowRight.svg" alt="icon" />
              </div>
              <h3>Smart Solutions That Drive Results.</h3>
            </div>
            <div class="arrow-btn text-end wow fadeInUp" data-wow-delay=".9s">
              <button
                data-slider-prev="#serviceSliderOne"
                class="slider-arrow style1"
              >
                <i class="fa-sharp fa-regular fa-arrow-left-long"></i>
              </button>
              <button
                data-slider-next="#serviceSliderOne"
                class="slider-arrow style1 slider-next"
              >
                <i class="fa-regular fa-arrow-right-long"></i>
              </button>
            </div>
          </div>

          <div class="row">
            <div class="slider-area serviceSliderOne">
              <div
                class="swiper gt-slider"
                id="serviceSliderOne"
                data-slider-options='{"loop": true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":2,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":3},"1200":{"slidesPerView":4}}}'
              >
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="service-card style1">
                      <div class="icon">
                        <img
                          src="assets/img/icon/serviceIcon1_1.svg"
                          alt="icon"
                        />
                      </div>
                      <div class="body">
                        <h3>
                          <a href="managed-itservices.php">Managed IT Services</a>
                        </h3>
                        <p>
                         Full-spectrum IT support with helpdesk, system management, remote troubleshooting, and 24/7 monitoring.

                        </p>
                        <a href="managed-itservices.php" class="link-btn style1"
                          >Read more <i class="fa-regular fa-chevrons-right"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="service-card style1">
                      <div class="icon">
                        <img
                          src="assets/img/icon/serviceIcon1_2.svg"
                          alt="icon"
                        />
                      </div>
                      <div class="body">
                        <h3>
                          <a href="cloudservices.php">Cloud Services</a>
                        </h3>
                        <p>
                         Seamless migration to AWS, Azure, and GCP with VDI setup, cloud optimization, and disaster recovery for secure business continuity.

                        </p>
                        <a href="cloudservices.php" class="link-btn style1"
                          >Read more <i class="fa-regular fa-chevrons-right"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                
                  <div class="swiper-slide">
                    <div class="service-card style1">
                      <div class="icon">
                        <img
                          src="assets/img/icon/serviceIcon1_4.svg"
                          alt="icon"
                        />
                      </div>
                      <div class="body">
                        <h3>
                          <a href="softwaredevelopment.php"
                            >Software Development</a
                          >
                        </h3>
                        <p>
                      Custom software for mobile apps, SaaS, APIs, ERP, and CRM systems. We modernize legacy code and build scalable digital platforms.

                        </p>
                        <a href="softwaredevelopment.php" class="link-btn style1"
                          >Read more <i class="fa-regular fa-chevrons-right"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                     <div class="swiper-slide">
                    <div class="service-card style1">
                      <div class="icon">
                        <img
                          src="assets/img/icon/serviceIcon1_1.svg"
                          alt="icon"
                        />
                      </div>
                      <div class="body">
                        <h3>
                          <a href="bpo-services.php">BPO Services</a>
                        </h3>
                        <p>
                          Customer support and back-office outsourcing with
                          multilingual agents and AI tools for cost-effective
                          service delivery.
                        </p>
                        <a href="bpo-services.php" class="link-btn style1"
                          >Read more <i class="fa-regular fa-chevrons-right"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="service-card style1">
                      <div class="icon">
                        <img
                          src="assets/img/icon/serviceIcon1_1.svg"
                          alt="icon"
                        />
                      </div>
                      <div class="body">
                        <h3>
                          <a href="it-consulting.php"
                            >IT Consulting & Strategy</a
                          >
                        </h3>
                        <p>
                       IT audits, CTO-as-a-Service, automation, and strategic roadmaps for long-term efficiency.

                        </p>
                        <a href="it-consulting.php" class="link-btn style1"
                          >Read more <i class="fa-regular fa-chevrons-right"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="service-card style1">
                      <div class="icon">
                        <img
                          src="assets/img/icon/serviceIcon1_2.svg"
                          alt="icon"
                        />
                      </div>
                      <div class="body">
                        <h3>
                          <a href="it-staffing.php"
                            >IT Staffing & Augmentation</a
                          >
                        </h3>
                        <p>
                        Pre-vetted developers, offshore teams, flexible hiring, and RPO solutions.

                        </p>
                        <a href="it-staffing.php" class="link-btn style1"
                          >Read more <i class="fa-regular fa-chevrons-right"></i
                        ></a>
                      </div>
                    </div>
                  </div>
               
                  <div class="swiper-slide">
                    <div class="service-card style1">
                      <div class="icon">
                        <img
                          src="assets/img/icon/serviceIcon1_2.svg"
                          alt="icon"
                        />
                      </div>
                      <div class="body">
                        <h3><a href="ecommerce.php">E-commerce & Web Solutions</a></h3>
                        <p>
                         E-commerce solutions with Shopify, WooCommerce, CMS, SEO, and digital marketing.


                        </p>
                        <a href="ecommerce.php" class="link-btn style1"
                          >Read more <i class="fa-regular fa-chevrons-right"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                       <div class="swiper-slide">
                    <div class="service-card style1">
                      <div class="icon">
                        <img
                          src="assets/img/icon/serviceIcon1_3.svg"
                          alt="icon"
                        />
                      </div>
                      <div class="body">
                        <h3>
                          <a href="rcm-services.php">RCM Services</a>
                        </h3>
                        <p>
                         CleverCrew Healthcare leverages cutting-edge automation, AI, and data-driven insights to transform healthcare operations.
                        </p>
                        <a href="rcm-services.php" class="link-btn style1"
                          >Read more <i class="fa-regular fa-chevrons-right"></i
                        ></a>
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
 

   

    <!-- About Section    S T A R T -->
   <section class="about-section space fix bg-theme-color" style="padding-top: 35px; padding-bottom: 5px;" >
      <div class="about-container-wrapper style1">
         <div class="shape1"><img src="assets/img/shape/aboutShape1_1.png" alt="shape"></div>
         <div class="shape2"><img src="assets/img/shape/aboutShape1_2.png" alt="shape"></div>
         <div class="shape3"><img src="assets/img/shape/aboutShape1_3.png" alt="shape"></div>
         <div class="container">
            <div class="row gy-5 gx-70">
               <div class="col-xl-6">
                  <div class="about-thumb">
                     <div class="thumb1">
                        <img class="img-custom-anim-left wow fadeInUp" data-wow-delay=".5s"
                           src="assets/img/about/aboutThumb1_1.png" alt="thumb">

                        <!-- SVG Mask -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" style="position: absolute;">
                           <clipPath id="aboutThumbdMask1">
                              <path
                                 d="M0 20C0 8.95431 8.9543 0 20 0H395.5C423.114 0 445.5 22.3858 445.5 50V72.5C445.5 100.114 467.886 122.5 495.5 122.5H520C547.614 122.5 570 144.886 570 172.5V321.5L562.197 537.223C561.808 547.98 552.975 556.5 542.21 556.5H20C8.95432 556.5 0 547.546 0 536.5V20Z" />
                           </clipPath>
                        </svg>
                     </div>
                     <div class="thumb2">
                        <img class="img-custom-anim-top wow fadeInUp" data-wow-delay=".8s"
                           src="assets/img/about/aboutThumb1_2.png" alt="thumb">
                     </div>

                     <div class="shape"><a href="about.php"><img class="rotate360"
                              src="assets/img/shape/aboutShape1_4.png" alt="shape"></a></div>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="about-content">
                     <div class="section-title mxw-560">
                        <div class="subtitle text-white wow fadeInUp" data-wow-delay=".3s"> <img
                              src="assets/img/icon/arrowLeftWhite.svg" alt="icon"> <span class="text-white"> about
                              company
                           </span><img src="assets/img/icon/arrowRightWhite.svg" alt="icon"></div>
                       </br>
                        <h3 class="text-white wow fadeInUp" data-wow-delay=".6s">Where Vision Meets Innovation
                        </h3>
                        <p class="mt-25 text-white wow fadeInUp" data-wow-delay=".5s">LinkSwitch Communications combines global innovation with local insight. With presence across four continents, we offer next-gen tech services that help clients compete and scale.</p>
                     </div>
                      </br>
                     <div class="fancy-box-wrapper style2">
                        <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".3s">
                           <div class="item">
                              <div class="icon"><img src="assets/img/icon/safe.svg" alt="icon" style="height: 35px;"></div>
                           </div>
                           <div class="item">
                              <h6>Regional presence</h6>
                           </div>
                        </div>
                        <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".5s">
                           <div class="item">
                              <div class="icon"><img src="assets/img/icon/aboutIcon1_1.svg" alt="icon"></div>
                           </div>
                           <div class="item">
                              <h6>Expertise in AI</h6>
                           </div>
                        </div>
                        <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".5s">
                           <div class="item">
                              <div class="icon"><img src="assets/img/icon/24-7.svg" alt="icon" style="height: 35px;"></div>
                           </div>
                           <div class="item">
                              <h6>24/7 services</h6>
                           </div>
                        </div>
                        <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".5s">
                           <div class="item">
                              <div class="icon"><img src="assets/img/icon/ROI.svg" alt="icon" style="height: 35px;"></div>
                           </div>
                           <div class="item">
                              <h6>ROI delivery</h6>
                           </div>
                        </div>
                     </div>
                     
                   </br>
                    </br>
                     </br>
                       <a href="about.php" class="theme-btn bg-white">
                        Explore More
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>

                    
                     <!-- <div class="counter-box-wrapper style1">
                        <div class="counter-box style1 wow fadeInUp" data-wow-delay=".3s">
                           <h3>
                              <span class="counter-number">20.5</span> k
                           </h3>
                           <h6>Projects Done</h6>
                        </div>
                        <div class="counter-box style1 wow fadeInUp" data-wow-delay=".5s">
                           <h3>
                              <span class="counter-number">100.5</span> k
                           </h3>
                           <h6>Happy Clients</h6>
                        </div>
                        <div class="counter-box style1 wow fadeInUp" data-wow-delay=".8s">
                           <h3>
                              <span class="counter-number">150.5</span> k
                           </h3>
                           <h6>Team Members</h6>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

    <!-- Brand Section Start -->
    <!-- <div class="brand-section fix section-padding pt-0">
        <div class="container">
            <div class="brand-wrapper">
                <h6 class="text-center wow fadeInUp" data-wow-delay=".3s">1k + Brands Trust Us</h6>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand.png" alt="brand-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Work Process Section Start -->
    <!-- <section class="work-process-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title title-area  mx-auto mb-25">
                <div class="subtitle d-flex justify-content-center"> <img src="assets/img/icon/arrowLeft.svg"
                        alt="icon"> <span> How IT work
                    </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                <h2 class="title text-center">Standard Work Process</h2>
            </div>

            <div class="process-work-wrapper">
                <div class="line-shape">
                    <img src="assets/img/process/linepng.png" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="icon">
                                <img src="assets/img/process/01.svg" alt="img">
                                <h6 class="number">
                                    1
                                </h6>
                            </div>
                            <div class="content">
                                <h4>Choose A Service</h4>
                                <p>
                                    In a free hour, when our power of choice is untrammeled and
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="content style-2">
                                <h4>Define Requirements</h4>
                                <p>
                                    In a free hour, when our power of choice is untrammeled and
                                </p>
                            </div>
                            <div class="icon">
                                <img src="assets/img/process/02.svg" alt="img">
                                <h6 class="number">
                                    2
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="icon">
                                <img src="assets/img/process/03.svg" alt="img">
                                <h6 class="number">
                                    3
                                </h6>
                            </div>
                            <div class="content">
                                <h4>Request A Meeting</h4>
                                <p>
                                    In a free hour, when our power of choice is untrammeled and
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="content style-2">
                                <h4>Finial Solutio3</h4>
                                <p>
                                    In a free hour, when our power of choice is untrammeled and
                                </p>
                            </div>
                            <div class="icon">
                                <img src="assets/img/process/04.svg" alt="img">
                                <h6 class="number">
                                    4
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Achievement Section Start -->
    <!-- <section class="achievement-section-3 fix section-bg-2">
        <div class="shape-image">
            <img src="assets/img/achiv-shape.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="achievement-wrapper style-2">
                <div class="section-title mxw-560">
                    <div class="subtitle text-white wow fadeInUp" data-wow-delay=".3s"> <img
                            src="assets/img/icon/arrowLeftWhite.svg" alt="icon"> <span class="text-white"> achievement
                        </span><img src="assets/img/icon/arrowRightWhite.svg" alt="icon"></div>
                    <h2 class="title text-white wow fadeInUp" data-wow-delay=".6s"> We Are Increasing Business Success
                    </h2>
                </div>

                <div class="counter-area">
                    <div class="counter-items wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon">
                            <img src="assets/img/achievement-icon/01.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h2><span class="counter-number">6,561</span>+</h2>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon">
                            <img src="assets/img/achievement-icon/02.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h2><span class="counter-number">600</span>+</h2>
                            <p>Finished Projects</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon">
                            <img src="assets/img/achievement-icon/03.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h2><span class="counter-number">250</span>+</h2>
                            <p>Skilled Experts</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".9s">
                        <div class="icon">
                            <img src="assets/img/achievement-icon/04.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h2><span class="counter-number">5,90</span>+</h2>
                            <p>Media Posts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<!-- Service Section Start -->
<section class="service-section-3 fix section-padding bg-cover bg-white" style="background-image: url('assets/img/service/service-bg-3.jpg')">
  <div class="container">
    <!-- Heading -->
    <div class="row d-flex align-items-end justify-content-between mb-20">
      <div class="col-xl-7">
        <div class="section-title mxw-650">
          <div class="subtitle">
            <img src="assets/img/icon/arrowLeft.svg" alt="icon" />
            <span> Our Products </span>
            <img src="assets/img/icon/arrowRight.svg" alt="icon" />
          </div>
          <h3>Explore Our Cutting-Edge Product Solutions</h3>
        </div>
      </div>
    </div>
</br>

    <!-- Swiper Slider -->
    <div class="swiper service-slider-2">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="service-card-items mt-0">
            <div class="service-image">
              <img src="assets/img/service/03.jpg" alt="service-img" />
            </div>
            <div class="icon-2">
              <img src="assets/img/service/icon/s-icon-2.svg" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/service/icon/s-icon-2.svg" alt="img" />
              </div>
              <h5 class="text-black">
                <a href="call-center-dialer.php" class="text-black">Call Center Dialer</a>
              </h5>
              <p>Smart dialer with CRM, multichannel outreach, and real-time lead automation.</p>
              <a href="call-center-dialer.php" class="theme-btn-2 mt-3">
                read More
                <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="service-card-items mt-0">
            <div class="service-image">
              <img src="assets/img/service/04.jpg" alt="service-img" />
            </div>
            <div class="icon-2">
              <img src="assets/img/service/icon/s-icon-4.svg" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/service/icon/s-icon-5.svg" alt="img" />
              </div>
              <h5 class="text-black">
                <a href="callchex-qa.php" class="text-black">CallChex – QA Platform</a>
              </h5>
            <p>AI-powered platform for call monitoring, compliance checks, and agent coaching.</p>
              <a href="callchex-qa.php" class="theme-btn-2 mt-3">
                read More
                <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="service-card-items mt-0">
            <div class="service-image">
              <img src="assets/img/service/05.jpg" alt="service-img" />
            </div>
            <div class="icon-2">
              <img src="assets/img/service/icon/s-icon-3.svg" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/service/icon/s-icon-3.svg" alt="img" />
              </div>
              <h5 class="text-black">
                <a href="lending-origination.php" class="text-black">Lending Origination</a>
              </h5>
              <p>Streamlined loan origination and servicing with automation, tracking, and smart analytics.</p>
              <a href="lending-origination.php" class="theme-btn-2 mt-3">
                read More
                <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="service-card-items mt-0">
            <div class="service-image">
              <img src="assets/img/service/02.jpg" alt="service-img" />
            </div>
            <div class="icon-2">
              <img src="assets/img/service/icon/s-icon-1.svg" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/service/icon/s-icon-1.svg" alt="img" />
              </div>
              <h5 class="text-black">
                <a href="ringless-voicemail.php" class="text-black">Ringless Voicemail Drop</a>
              </h5>
              <p>Ringless boosts productivity with smart workflows and automated scheduling.</p>

              <a href="ringless-voicemail.php" class="theme-btn-2 mt-3">
                read More
                <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </div>
          </div>
        </div>

                <div class="swiper-slide">
          <div class="service-card-items mt-0">
            <div class="service-image">
              <img src="assets/img/bg/CRM.jpg" alt="service-img"  style="height: 195px;"/>
            </div>
            <div class="icon-2">
              <img src="assets/img/service/icon/s-icon-1.svg" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/service/icon/s-icon-1.svg" alt="img" />
              </div>
              <h5 class="text-black">
                <a href="mca-crm.php" class="text-black">Cash Advance CRM</a>
              </h5>
              <p>Purpose-built CRM for MCA with deal tracking, broker management, and automated follow-ups.</p>

              <a href="mca-crm.php" class="theme-btn-2 mt-3">
                read More
                <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </div>
          </div>
        </div>

                <div class="swiper-slide">
          <div class="service-card-items mt-0">
            <div class="service-image">
              <img src="assets/img/bg/smsai.jpg" alt="service-img"  style="height: 195px;"/>
            </div>
            <div class="icon-2">
              <img src="assets/img/service/icon/s-icon-1.svg" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/service/icon/s-icon-1.svg" alt="img" />
              </div>
              <h5 class="text-black">
                <a href="sms-ai.php" class="text-black">SMS AI</a>
              </h5>
     <p>AI-powered SMS platform for smart conversations, lead engagement, and automated follow-ups.</p>



              <a href="sms-ai.php" class="theme-btn-2 mt-3">
                read More
                <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-dot-2">
        <div class="dot-2"></div>
      </div>
    </div>
  </div>
</section>




    <!--<< Testimonial Section Start >>-->
    <section class="tesimonial-section-3 section-padding section-bg-2 bg-cover" style="padding-top: 25px;">
        <div class="line-shape">
            <img src="assets/img/team/line-shape.png" alt="shape-img">
        </div>
        <div class="mask-shape">
            <img src="assets/img/team/mask-shape.png" alt="shape-img">
        </div>
        <!-- <div class="array-button">
            <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
            <button class="array-next"><i class="fal fa-arrow-right"></i></button>
        </div> -->
       <div class="testimonial-wrap style3 close-to-top">
      <div class="container">
         <div class="row">
            <div class="col-12 d-flex justify-content-center">
               <div class="section-title title-area mx-auto mb-20">
          <div class="subtitle d-flex justify-content-center">
            <img src="assets/img/icon/arrowLeftWhite.svg" alt="icon" />
            <span class="text-white"> Testimonials </span
            ><img src="assets/img/icon/arrowRightWhite.svg" alt="icon" />
          </div>
                  <h2 class="text-center text-white"> People Who Already Love Us</h2>
               </div>
            </div>
         </div>
         <div class="slider-area">
            <div class="swiper gt-slider testimonial-slider3" id="testimonialSlider3"
               data-slider-options='{"loop": true,"centeredSlides":true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
               <div class="swiper-wrapper">

                  <!-- Testimonial 1 -->
                  <div class="swiper-slide">
                     <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                        <ul class="star-wrap">
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                        </ul>
<p class="text">
With LinkSwitch’s expert guidance and unwavering support, we scaled our business ahead of schedule and significantly cut operational costs.
</p>
                        <div class="profile-box">
                           <div class="testi-thumb">
                              <img src="assets/img/testimonial/03.jpg" alt="thumb">
                           </div>
                           <div class="testi-content">
                              <h4>Edgard Uzcategui</h4>
                              <div class="designation">Septic LLC</div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Testimonial 2 -->
                  <div class="swiper-slide">
                     <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                        <ul class="star-wrap">
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                        </ul>
  <p class="text">
Our team feels more empowered than ever—sales performance has already improved just weeks after adopting LinkSwitch's AI-driven call quality platform.
</p>
                        <div class="profile-box">
                           <div class="testi-thumb">
                              <img src="assets/img/testimonial/testiThumb3_3.png" alt="thumb">
                           </div>
                           <div class="testi-content">
                              <h4>Marcus Boyd</h4>
                              <div class="designation">BrightTouch Communications</div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Testimonial 3 -->
                  <div class="swiper-slide">
                     <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                        <ul class="star-wrap">
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                        </ul>
                       <p class="text">
It’s like having a real-time quality manager for every agent—without the pressure. The insights are actionable, instant, and incredibly effective.
</p>
                        <div class="profile-box">
                           <div class="testi-thumb">
                              <img src="assets/img/testimonial/testiThumb3_1.png" alt="thumb">
                           </div>
                           <div class="testi-content">
                              <h4>Jorge Martinez</h4>
                              <div class="designation">SalesNova Team</div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Testimonial 4 -->
                  <div class="swiper-slide">
                     <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                        <ul class="star-wrap">
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                           <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                        </ul>
                      <p class="text">
Thanks to LinkSwitch, our coaching sessions are quicker and way more focused. We finally have clear insights to help agents improve—without wasting time.
</p>

                        <div class="profile-box">
                           <div class="testi-thumb">
                              <img src="assets/img/testimonial/02.jpg" alt="thumb">
                           </div>
                           <div class="testi-content">
                              <h4>Nandita Rao</h4>
                              <div class="designation">NextVoice Contact Center</div>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
               <div class="slider-pagination"></div>
            </div>
         </div>
      </div>
   </div>
    </section>



    <!-- News Section Start -->
    <section class="news-section-3 fix section-padding closer-to-top">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between mb-20">
                <div class="col-xl-7">
                    <div class="section-title-area">
                        <div class="section-title mxw-650">
                            <div class="subtitle"> <img src="assets/img/icon/arrowLeft.svg" alt="icon"> <span> Latest
                                    Blog
                                </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                            <h3> Checkout Our Latest News & Articles</h3>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 d-flex justify-content-end">
                    <div class="array-button">
                        <button class="array-next"><i class="fal fa-arrow-left"></i></button>
                        <button class="array-prev"><i class="fal fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="swiper news-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="news-card-items style-2">
                            <div class="news-image">
                                <img src="assets/img/news/04.jpg" alt="news-img">
                                <!-- <div class="post-date">
                                    <h3>
                                        17 <br>
                                        <span>Feb</span>
                                    </h3>
                                </div> -->
                            </div>
                            <div class="news-content">
                                <!-- <ul>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-tag"></i>
                                        IT Services
                                    </li>
                                </ul> -->
                                <h5>
                                    <a href="https://callchex.com/blogs">Agent Coaching AI: Smarter Coaching for Better Call Center Results</a>
                                </h5>
                                <a href="https://callchex.com/blogs" class="theme-btn-2 mt-3">
                                    read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="news-card-items style-2">
                            <div class="news-image">
                                <img src="assets/img/news/07.jpg" alt="news-img">
                                <!-- <div class="post-date">
                                    <h3>
                                        20 <br>
                                        <span>May</span>
                                    </h3>
                                </div> -->
                            </div>
                            <div class="news-content">
                                <!-- <ul>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-tag"></i>
                                        UI/UX Design
                                    </li>
                                </ul> -->
                                <h5>
                                    <a href="https://callchex.com/blogs">Call Auditing Software: Boosting Call Center Efficiency</a>
                                </h5>
                                <a href="https://callchex.com/blogs" class="theme-btn-2 mt-3">
                                    read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                      <div class="swiper-slide">
                        <div class="news-card-items style-2">
                            <div class="news-image">
                                <img src="assets/img/blog/blogThumb2_1.jpg" alt="news-img" style= "height: 290px;">
                                <!-- <div class="post-date">
                                    <h3>
                                        20 <br>
                                        <span>May</span>
                                    </h3>
                                </div> -->
                            </div>
                            <div class="news-content">
                                <!-- <ul>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-tag"></i>
                                        UI/UX Design
                                    </li>
                                </ul> -->
                                <h5>
                                    <a href="https://callchex.com/blogs">Call Center Analytics Software: Turn Every Call into a Winning Move</a>
                                </h5>
                                <a href="https://callchex.com/blogs" class="theme-btn-2 mt-3">
                                    read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                      <div class="swiper-slide">
                        <div class="news-card-items style-2">
                            <div class="news-image">
                                <img src="assets/img/blog/blogThumb2_2.jpg" alt="news-img" style= "height: 290px;">
                                <!-- <div class="post-date">
                                    <h3>
                                        20 <br>
                                        <span>May</span>
                                    </h3>
                                </div> -->
                            </div>
                            <div class="news-content">
                                <!-- <ul>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-tag"></i>
                                        UI/UX Design
                                    </li>
                                </ul> -->
                                <h5>
                                    <a href="https://callchex.com/blogs">Agent Performance Tracking: Enhance Efficiency with AI Insights</a>
                                </h5>
                                <a href="https://callchex.com/blogs" class="theme-btn-2 mt-3">
                                    read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                                  <div class="swiper-slide">
                        <div class="news-card-items style-2">
                            <div class="news-image">
                                <img src="assets/img/blog/blogThumb2_3.jpg" alt="news-img" style= "height: 290px;">
                                <!-- <div class="post-date">
                                    <h3>
                                        20 <br>
                                        <span>May</span>
                                    </h3>
                                </div> -->
                            </div>
                            <div class="news-content">
                                <!-- <ul>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-tag"></i>
                                        UI/UX Design
                                    </li>
                                </ul> -->
                                <h5>
                                    <a href="https://callchex.com/blogs">Sales Call Analysis in Hauppauge: Boost Conversions with AI</a>
                                </h5>
                                <a href="https://callchex.com/blogs" class="theme-btn-2 mt-3">
                                    read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                                      <div class="swiper-slide">
                        <div class="news-card-items style-2">
                            <div class="news-image">
                                <img src="assets/img/news/07.jpg" alt="news-img" style= "height: 290px;">
                                <!-- <div class="post-date">
                                    <h3>
                                        20 <br>
                                        <span>May</span>
                                    </h3>
                                </div> -->
                            </div>
                            <div class="news-content">
                                <!-- <ul>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-tag"></i>
                                        UI/UX Design
                                    </li>
                                </ul> -->
                                <h5>
                                    <a href="https://callchex.com/blogs">Call Quality Monitoring Tool: A Game-Changer for Customer Service</a>
                                </h5>
                                <a href="https://callchex.com/blogs" class="theme-btn-2 mt-3">
                                    read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="news-card-items style-2">
                            <div class="news-image">
                                <img src="assets/img/news/post-5.jpg" alt="news-img" style= "height: 290px;">
                                <!-- <div class="post-date">
                                    <h3>
                                        10 <br>
                                        <span>Feb</span>
                                    </h3>
                                </div> -->
                            </div>
                            <div class="news-content">
                                <!-- <ul>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-tag"></i>
                                        Cyber Security
                                    </li>
                                </ul> -->
                                <h5>
                                    <a href="https://callchex.com/blogs">AI Call Monitoring: Smarter Call Center Optimization</a>
                                </h5>
                                <a href="https://callchex.com/blogs" class="theme-btn-2 mt-3">
                                    read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
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
  window.addEventListener('load', function () {
    const preloader = document.getElementById('preloader');
    if (preloader) {
      preloader.style.transition = 'opacity 0.3s ease';
      preloader.style.opacity = '0';
      setTimeout(() => {
        preloader.style.display = 'none';
      }, 300);
    }
  });
</script>



</body>


</html>