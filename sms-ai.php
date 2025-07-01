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
    <title>SMS AI -LinkSwitch </title>
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

<body>

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

    <!-- Header Section Start -->
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
    <!-- <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
        <div class="border-shape">
            <img src="assets/img/element.png" alt="shape-img">
        </div>
        <div class="line-shape">
            <img src="assets/img/line-element.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">SMS AI – Smart Messaging Automation</h1>
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
                        Products
                    </li>
                     <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                       SMS AI – Smart Messaging Automation
                    </li>
                </ul>
            </div>
        </div>
    </div> -->

   <!-- Hero Section    S T A R T -->
<section class="hero-section fix">
   <div class="hero-wrapper style1">
      <div class="container">
         <div class="hero-main-container style1 border-radius">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-6 order-2 order-xl-1">
                     <div class="hero-content style1" style="margin-top: 80px;">
                        <h6 class="subtitle">
                           <img src="assets/img/icon/subtitleIcon1_1.svg" alt="icon">
                           AI-Powered Smart Messaging
                        </h6>

                        <h4 class="text-white">SMS AI – Smart Messaging Automation</h4>

                        <p class="text-white mt-3">
                           An intelligent communication system that leverages AI-driven workflows to send personalized, timely SMS messages to leads and clients. It increases engagement, reduces drop-offs, and automates follow-ups based on user behavior or funnel stage.
                        </p>

                        <div class="checklist-wrapper style3 mt-4">
                           <ul class="checklist style3">
                              <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> AI-Driven SMS Workflows</li>
                              <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Personalized & Timely Messaging</li>
                           </ul>
                           <ul class="checklist style3">
                              <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Boost Lead Engagement</li>
                              <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Automated Follow-Ups by Funnel Stage</li>
                           </ul>
                        </div>

                        <br><br>
                        <div class="contact-meta">
                           <div class="btn-wrapper">
                              <a href="contact.php" class="gt-btn style4" style="cursor: pointer;">
                                 Contact Us
                                 <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-xl-6 order-1 order-xl-2 justify-content-center">
                     <div class="hero-thumb style1">
                        <div class="main-thumb">
                           <img src="assets/img/bg/ai2.png" alt="thumb">
                        </div>
                          <div class="shape1_1 d-none d-xxl-block">
                           <img src="assets/img/shape/heroShape1_1.png" alt="shape">
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- SVG Mask -->
            <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" style="position: absolute;">
               <clipPath id="heroMask2">
                  <path d="M0 50C0 22.3858 22.3858 0 50 0H1780C1807.61 0 1830 22.3858 1830 50V774C1830 801.614 1807.61 824 1780 824H1042.05C1015.85 824 991.426 810.575 977.326 788.498C947.176 741.292 878.083 741.197 848.055 788.482C834.009 810.601 809.627 824 783.425 824H50C22.3858 824 0 801.614 0 774V50Z" fill="#384BFF" />
               </clipPath>
            </svg>
         </div>
      </div>
   </div>
</section>



<style>

.hero-section {
  width: 100vw;
  padding: 0;
  margin: 0;
  overflow: hidden;
  background-color: #384bff; 
}


.hero-wrapper.style1 {
  width: 100%;
  padding: 0;
  margin: 0;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}


.hero-main-container.style1 {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh; 
  padding: 0 30px;
  width: 100%;
  border-radius: 0; 
}

.contact-meta {
  position: relative;
}

.shape1_1 img,
.shape1_2 img,
.shape1_3 img,
.shape1_5 img {
  pointer-events: none;
}


.hero-main-container .container-fluid {
  max-width: 100%;
  padding: 0 15px;
}

.hero-content .subtitle {
   margin-left: -10px !important;
}

.hero-main-container .row {
  width: 100%;
  align-items: center;
  justify-content: center;
  display: flex;
  flex-wrap: wrap;
}


.hero-content.style1 {
  text-align: left;
  padding-left: 0;
  padding-right: 15px;
  margin-left: -20px;
}

.hero-content.style1 h6.subtitle {
  margin-bottom: 20px;
  margin-top: 10px;
  font-size: 16px;
  color: #ffffff;
  margin-left: 10px; 
}

.hero-content.style1 h4 {
  font-size: 32px;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 25px;
  margin-left: 10px;
}


.checklist-wrapper.style3 {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  margin-bottom: 25px;
  gap: 20px;
}

.checklist.style3 {
  list-style: none;
  padding: 0;
  margin: 0;
}

.checklist.style3 li {
  font-size: 16px;
  color: #ffffff;
  display: flex;
  align-items: center;
  gap: 8px;
}

/* CTA Button */
.btn-wrapper .gt-btn.style4 {
  background-color: #ff8900;
  color: #fff;
  padding: 14px 30px;
  font-weight: 600;
  border-radius: 30px;
  text-transform: uppercase;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  transition: all 0.3s ease;
  cursor: pointer !important;
}

.btn-wrapper .gt-btn.style4:hover {
  background-color: #e87f00;
  color: #fff;
}

.hero-thumb.style1 .main-thumb {
  margin-top: 90px;
}



.hero-thumb.style1 .main-thumb img {
  max-height: 500px; 
  width: auto;
  height: auto;
  object-fit: contain;
}


@media (max-width: 991.98px) {
  .hero-main-container.style1 {
    flex-direction: column;
    padding: 40px 15px;
  }

  .hero-content.style1 {
    text-align: center;
    padding: 0 15px;
  }

  .hero-thumb.style1 {
    margin-top: 30px;
    padding: 20px;
    align-items: center;
  }
}
</style>



    <!-- Project Section Start -->
    <section class="Project-details-section fix section-padding">
        <div class="container">
            <div class="project-details-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-details-items">
                            <!-- <div class="details-image">
                                <img src="assets/img/project/details.jpg" alt="img">
                            </div> -->
                            <div class="row g-4 justify-content-between">
                                <div class="col-lg-12">
                                    <div class="details-content">
                                        <h3>SMS AI – Smart Messaging Automation</h3>
                                        <p>
                                          SMS AI – Smart Messaging Automation is an intelligent communication system that leverages AI-driven workflows to send personalized, timely SMS messages to leads and clients. It increases engagement, reduces drop-offs, and automates follow-ups based on user behavior or funnel stage. </p>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4">
                                    <div class="project-catagory">
                                        <h3>Project Info: </h3>
                                        <ul>
                                            <li>
                                                Client:
                                                <span>Ralph Edwards</span>
                                            </li>
                                            <li>
                                                Category:
                                                <span>SMS AI</span>
                                            </li>
                                            <li>
                                                Location:
                                                <span>Landon</span>
                                            </li>
                                            <li>
                                                Share:
                                                <span>
                                                    <a href="#"> <i class="fa-brands fa-facebook-f me-3"></i> </a>
                                                    <a href="#"> <i class="fa-brands fa-instagram me-3"></i> </a>
                                                    <a href="#"> <i class="fa-brands fa-linkedin-in"></i> </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                            <div class="details-content pt-3">
                                <h3>Our Challenge</h3>
                                <p>
                                 The client was using basic SMS tools that lacked intelligence and personalization. This led to low open rates, delayed responses, and missed conversion opportunities. </p>
                            </div>
                            <div class="row g-4 pt-5">
                                <div class="col-lg-6 col-md-6">
                                    <ul class="list">
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                          Static SMS campaigns with no behavioral triggers.
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                           No real-time response analysis or follow-up logic.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="list">
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                         Delayed agent response to interested leads.
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                        High drop-off in warm leads before qualification.
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                  <div class="service-wrapper mb-0"> 
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="service-box-items box-shadow">
                <div class="icon">
                    <img src="assets/img/process/01.svg" alt="icon-img">
                </div>
                <div class="content">
                    <h4>
                        <a href="#">
                            AI-Driven SMS Workflows
                        </a>
                    </h4>
                    <p>
                        Automate message sequences triggered by user behavior or funnel stage
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="service-box-items box-shadow active">
                <div class="icon">
                    <img src="assets/img/process/02.svg" alt="icon-img">
                </div>
                <div class="content">
                    <h4>
                        <a href="#">
                            Personalized Messaging Engine
                        </a>
                    </h4>
                    <p>
                        Send dynamic SMS content based on lead profiles and interaction history
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
            <div class="service-box-items box-shadow">
                <div class="icon">
                    <img src="assets/img/process/03.svg" alt="icon-img">
                </div>
                <div class="content">
                    <h4>
                        <a href="#">
                            Engagement Analytics Dashboard
                        </a>
                    </h4>
                    <p>
                        Track open rates, click-throughs, and user journeys in real-time
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
            <div class="service-box-items box-shadow">
                <div class="icon">
                    <img src="assets/img/process/04.svg" alt="icon-img">
                </div>
                <div class="content">
                    <h4>
                        <a href="#">
                            Seamless CRM Integration
                        </a>
                    </h4>
                    <p>
                        Auto-sync leads and conversations for smooth, context-rich interactions
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


   <style>
.team-wrapper {
  width: 100vw;
  background-image: url('assets/img/bg/teamBg1_1.png');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 40px 20px;
  margin: 40px 0 0 0;
  position: relative;
  left: 50%;
  right: 50%;
  transform: translateX(-50%);
  overflow: hidden;
}

.team-wrapper .details-content,
.team-wrapper .row {
  padding-left: 40px; 
}


</style>

    <div class="team-wrapper space style1" data-bg-src="assets/img/bg/teamBg1_1.png">
                   
                            <div class="details-content pt-5">
                           <h3>The Result of Project</h3>
<p>
The implementation of SMS AI led to significantly improved engagement and follow-up efficiency. The system minimized manual workload, enabled real-time responses, and ensured timely communication with leads—resulting in smoother conversion workflows and enhanced customer experience.
</p>
</div>
                            <div class="row g-4 pt-5">
                                <div class="col-lg-6 col-md-6">
                                    <div class="thumb">
                                        <img src="assets/img/bg/ai3.jpg" alt="img" style="height: 480px;">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="thumb">
                                        <img src="assets/img/bg/AI.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                         </div>
                        <div class="preview-area">
                            <div class="preview-item">
                                <img src="assets/img/project/p-1.png" alt="img">
                                <div class="content">
                                    <h3><a href="mca-crm.php">Preview</a></h3>
                                    <p> Merchant Cash Advance CRM</p>
                                </div>
                            </div>
                            <div class="preview-item">
                                <div class="content text-right">
                                    <h3><a href="sms-ai.php">Next</a></h3>
                                    <p>SMS AI</p>
                                </div>
                                <img src="assets/img/project/p-2.png" alt="img">
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
</body>



</html>
