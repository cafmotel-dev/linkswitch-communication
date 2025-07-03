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
    <title>Ringless Voicemail - LinkSwitch</title>
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
    margin-top: -70px !important; 
  }

.bgcover{
     background: #eef4ff;
}
</style>

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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Ringless Voicemail Drop System</h1>
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
                        Ringless Voicemail Drop System
                    </li>
                </ul>
            </div>
        </div>
    </div> -->

     <!-- Hero Section    S T A R T -->
<section class="hero-section fix">
   <div class="hero-wrapper style1">
      <!-- <div class="shape1_5 float-bob-y d-none d-xxl-block mt-40">
         <img src="assets/img/shape/heroShape1_5.png" alt="shape">
      </div> -->
      <div class="container">
         <div class="hero-main-container style1 border-radius">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-6 order-2 order-xl-1">
                     <div class="hero-content style1">
                        <h6 class="subtitle">
                           <img src="assets/img/icon/subtitleIcon1_1.svg" alt="icon">
                           Modernize Outreach with Ringless Voicemail
                        </h6>

                       <h4 class="text-white">Silent Voicemail. Powerful Impact.</h4>


                     <p class="text-white mt-3">
   Deliver voicemail straight to inboxes—no ringing, no disruption. Engage customers at scale, seamlessly and compliantly.
</p>


                        <div class="checklist-wrapper style3 mt-4">
                           <ul class="checklist style3">
                              <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Silent Delivery to Voicemail</li>
                              <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Compliant & Non-Intrusive Outreach</li>
                           </ul>
                           <ul class="checklist style3">
                              <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Scalable Customer Engagement</li>
                              <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Boost Marketing Response Rates</li>
                           </ul>
                        </div>

                        </br>
                        </br>
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
                           <img src="assets/img/hero/heroThumb2_1.png" alt="thumb">
                        </div>
                        <!-- <div class="shape1_1 d-none d-xxl-block">
                           <img src="assets/img/shape/heroShape1_1.png" alt="shape">
                        </div> -->
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
  width: 100%;
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
}

.hero-main-container.style1 {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  padding: 60px 30px;
  width: 100%;
  gap: 20px;
}

.hero-main-container .row {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.hero-content.style1 {
  padding-right: 15px;
  text-align: left;
}

.hero-content.style1 h6.subtitle {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 10px 20px;
  border: 1px solid #fff;
  border-radius: 999px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  background-color: transparent;
  width: auto;
  max-width: 100%;
  margin-bottom: 20px;
}

.hero-content.style1 h6.subtitle img {
  width: 20px;
  height: auto;
}

.hero-content.style1 h4 {
  font-size: 32px;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 25px;
}

.checklist-wrapper.style3 {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-bottom: 25px;
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
  cursor: pointer;
}

.btn-wrapper .gt-btn.style4:hover {
  background-color: #e87f00;
  color: #fff;
}

.hero-thumb.style1 {
  text-align: center;
}

.hero-thumb.style1 .main-thumb {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
}

.hero-thumb.style1 .main-thumb img {
  max-height: 500px;
  width: auto;
  height: auto;
  object-fit: contain;
}

/* Tablet view */
@media (min-width: 768px) and (max-width: 991.98px) {
  .hero-main-container.style1 {
    flex-direction: column;
    padding: 40px 30px;
    gap: 20px;
  }

  .hero-content.style1 {
    width: 100%;
    padding: 0;
    text-align: left;
  }

  .hero-content.style1 h6.subtitle {
    width: 100%;
    justify-content: center;
    text-align: center;
    font-size: 15px;
    padding: 12px 20px;
    border: 1px solid #fff;
    border-radius: 999px;
  }

  .hero-content.style1 h4 {
    font-size: 24px;
    line-height: 1.4;
    padding: 0 25px;
  }

  .checklist-wrapper.style3 {
    flex-direction: column;
    align-items: flex-start;
    padding: 0 25px;
    gap: 12px;
  }

  .checklist.style3 li {
    font-size: 15px;
  }

  .btn-wrapper {
    width: 100%;
    padding: 0 25px;
    margin-top: 15px;
    text-align: left;
  }

  .hero-thumb.style1 .main-thumb img {
    max-height: 360px;
    width: auto;
  }
}


@media (max-width: 767.98px) {
  .hero-main-container.style1 {
    flex-direction: column;
    padding: 30px 0;
    gap: 15px;
  }

  .hero-content.style1 {
    width: 100%;
    padding: 0;
    margin: 0;
    text-align: left;
  }

  .hero-content.style1 h6.subtitle {
    width: 100%;
    justify-content: center;
    text-align: center;
    font-size: 14px;
    padding: 10px 18px;
    border: 1px solid #fff;
    border-radius: 999px;
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .hero-content.style1 h6.subtitle img {
    width: 18px;
    height: auto;
  }

  .hero-content.style1 h4 {
    font-size: 20px;
    line-height: 1.5;
    font-weight: 700;
    padding: 10px 15px 15px;
    width: 100%;
    text-align: left;
  }

  .checklist-wrapper.style3 {
    width: 100%;
    padding: 0 15px;
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
  }

  .checklist.style3 {
    width: 100%;
  }

  .checklist.style3 li {
    font-size: 14px;
    line-height: 1.5;
  }

  .btn-wrapper {
    width: 100%;
    padding: 0 15px;
    margin-top: 15px;
    text-align: left;
  }

  .hero-thumb.style1 .main-thumb {
    margin: 10px 0;
    justify-content: center;
  }

  .hero-thumb.style1 .main-thumb img {
    max-height: 240px;
    width: 100%;
    height: auto;
  }
}

@media (min-width: 425px) {
  .hero-content.style1 h6.subtitle {
    padding-top: 10px;
    padding-bottom: 8px;
  }
}

@media (min-width: 992px) {
  .hero-main-container.style1 {
    padding-top: 180px;
    padding-bottom: 60px;
  }

  .hero-thumb.style1 .main-thumb {
    margin-top: 0;
  }
}
</style>


    <!-- Project Section Start -->
    <section class="Project-details-section fix section-padding">
        <div class="container">
            <div class="project-details-wrapper">
                <div class="row closer-to-hero">
                    <div class="col-lg-12">
                        <div class="project-details-items">
                            <!-- <div class="details-image">
                                <img src="assets/img/project/details.jpg" alt="img">
                            </div> -->
                            <div class="row g-4 justify-content-between" style="margin-bottom: 20px !important;">
                                <div class="col-lg-12">
                                    <div class="details-content pt-0">
                                        <h3>Ringless Voicemail Drop System</h3>
<p>
   The Ringless Voicemail Drop System is a cutting-edge communication tool that enables businesses to reach customers efficiently without causing any disruption. By delivering voicemail messages directly to recipients’ inboxes—without ringing their phones—it ensures a respectful and non-intrusive experience. This technology allows marketing, sales, and support teams to engage large audiences effortlessly, while remaining fully compliant with industry regulations. It’s a powerful solution for scaling outreach, improving response rates, and enhancing customer engagement—all without interrupting the customer’s day.
</p>

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
                                                <span>Ringless Voicemail Drop System</span>
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
   The client struggled with poor engagement from cold calls and high opt-out rates from SMS campaigns. They needed a more efficient and non-intrusive way to reach customers while staying compliant and improving response rates.
</p>

                            </div>
                            <div class="row g-4 pt-5">
                                <div class="col-lg-6 col-md-6">
                                    <ul class="list">
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                           A non-intrusive way to reach thousands of leads.
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                           Seamless integration with CRM tools.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="list">
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                          A dashboard to track drop status, response rates, and compliance.
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                        A scalable system that avoids carrier blocking and legal risks.
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
                        <a href="#">Direct Voicemail Delivery</a>
                    </h4>
                    <p>
                        Drop voice messages straight to recipients’ inboxes—no ringing, no disruption.
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
                        <a href="#">TCPA & DNC Compliance</a>
                    </h4>
                    <p>
                        Ensure outreach stays legally compliant with built-in regulatory screening tools.
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
                        <a href="#">Automated & Scalable Voicemail Outreach</a>

                    </h4>
                    <p>
                        Reach thousands of leads simultaneously with automated and silent voicemail drops.
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
                      <a href="#">Real-Time Analytics & Reporting Dashboard</a>

                    </h4>
                    <p>
                        Monitor drop success, delivery rates, and engagement—all from one intuitive dashboard.
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

.service-box-items {
  padding: 20px;
  border-radius: 8px;
  background-color: #fff;
  transition: all 0.3s ease;
  height: 100%;
}

.service-box-items .icon img {
  width: 60px;
  height: auto;
  margin-bottom: 15px;
}

.service-box-items .content h4 {
  font-size: 1.1rem;
  margin-bottom: 10px;
}

.service-box-items .content p {
  font-size: 0.95rem;
  color: #555;
}


.service-box-items:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
}


@media (max-width: 991px) {
  .col-lg-4 {
    flex: 0 0 50%;
    max-width: 50%;
  }
}


@media (max-width: 767px) {
  .col-md-6 {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .service-box-items {
    margin-bottom: 20px;
    text-align: center;
  }

  .service-box-items .icon img {
    margin: 0 auto 15px;
  }
}



.preview-area {
  display: flex;
  justify-content: space-between;
  gap: 2rem;
  align-items: center;
  flex-wrap: wrap;
}

.preview-item {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.preview-item img {
  width: 100px;
  height: auto;
}


@media (max-width: 768px) {
  .preview-area {
    flex-direction: row;
    justify-content: center;
    gap: 2rem;
  }

  .preview-item {
    flex-direction: row;
    gap: 1rem;
  }

  .preview-item img {
    display: none;
  }

  .preview-item .content {
    text-align: center;
  }

  .preview-item .content h3,
  .preview-item .content p {
    margin: 0;
    font-size: 1rem;
  }
}


@media (max-width: 480px) {
  .preview-area {
    flex-direction: column;
    gap: 1.2rem;
  }

  .preview-item {
    justify-content: center;
  }

  .preview-item .content {
    text-align: center;
  }
}

@media (max-width: 767.98px) {
  .preview-item .content.text-right {
    text-align: center !important;
  }
}

@media (max-width: 767px) {
  .team-wrapper .details-content,
  .team-wrapper .row {
    padding-left: 0;
  }

  .team-wrapper .thumb img {
    width: 100%;
    display: block;
  }
}
</style>

    <div class="team-wrapper space style1" data-bg-src="assets/img/bg/teamBg1_1.png">
                            <div class="details-content pt-5">
                              <h3>Product Impact & Outcome</h3>
<p>
   The implementation of the Ringless Voicemail Drop System significantly improved customer engagement while reducing manual outreach efforts. The client experienced smoother campaign execution, better message delivery accuracy, and a more efficient way to reach leads without causing interruptions — all while remaining fully compliant with communication regulations.
</p>
</div>
                            <div class="row g-4 pt-5">
                                <div class="col-lg-6 col-md-6">
                                    <div class="thumb">
                                        <img src="assets/img/bg/group4.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="thumb">
                                        <img src="assets/img/bg/callchex.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                         </div>
                        <div class="preview-area">
                            <div class="preview-item">
                                <img src="assets/img/project/p-1.png" alt="img">
                                <div class="content">
                                    <h3><a href="callchex-qa.php">Preview</a></h3>
                                    <p>CallChex-QA Plateform</p>
                                </div>
                            </div>
                            <div class="preview-item">
                                <div class="content text-right">
                                    <h3><a href="mca-crm.php">Next</a></h3>
                                    <p>Merchant Cash Advance CRM</p>
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