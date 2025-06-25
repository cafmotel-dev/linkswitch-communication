 <style>
.megamenu-li {
  position: relative;
}

.services-megamenu {
  position: absolute;
  top: 100%;
  left: -750px !important; 
  width: 1400px; 
  max-width: 140vw;
  padding: 20px;
  background: #fff !important; 
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
  z-index: 999;
  display: none;
  overflow: hidden;
}

.megamenu-li:hover .services-megamenu {
  display: block;
}

.services-row {
  display: flex;
  flex-direction: row;

}

.services-row .col {
  flex: 1;
  min-width: 200px;
  margin: 0;
  padding: 0;
}

.services-row .title {
  font-weight: bold;
  font-size: 15px;
  text-transform: uppercase;
  color: #007bff;
  pointer-events: none;
  text-decoration: none;
  cursor: default;
  padding: 4px 0 4px 25px;
  border-bottom: 1px solid #007bff;
  margin: 0;
}

.services-row li a,
.services-row li a *,
.services-row li:hover a,
.services-row li:hover a *,
.services-row li:focus a,
.services-row li:focus a *,
.services-row li:active a,
.services-row li:active a * {
  color: black !important;
  background-color: transparent !important;
  -webkit-text-fill-color: black !important; 
  text-decoration: none !important;
  outline: none !important;
  box-shadow: none !important;
}


.services-row li a:hover,
.services-row li a:hover *,
.services-row li a:focus,
.services-row li a:focus *,
.services-row li a:active,
.services-row li a:active * {
  color: black !important;
  -webkit-text-fill-color: black !important;
}

.services-row li a::selection,
.services-row li a *::selection {
  color: black !important;
  background: #ddd !important;
}

.services-row li a span,
.services-row li a i,
.services-row li a strong,
.services-row li a em {
  color: black !important;
  -webkit-text-fill-color: black !important;
}

</style>

    <style>
        .preloader {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #fff;
        }

      .loader-container {
       position: relative;
       width: 100%;               
       max-width: 250px;          
       height: auto;
       display: flex;
       justify-content: center;
       align-items: center;
      }


        .loader-logo {
            width: 250px;
            position: relative;
            z-index: 2;
        }

        .loader-spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 150px;
            height: 150px;
            margin-top: -75px;
            margin-left: -75px;
            z-index: 1;
        }
    </style>
 
 <!-- Header Section Start -->
    <header>
        <div class="header-top-section top-style-3">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="contact-list mb-1">
                        <li style= "margin-left: -18px;">
                            <i class="far fa-envelope"></i>
                            <a href="mailto:info@example.com" class="link">sales@linkswitchcommunications.com</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone-volume"></i>
                            <a href="tel:2086660112">+1 (902) 441-2385</a>
                        </li>
                    </ul>
                    <div class="top-right">
                        <!-- <div class="flag-wrap">
                            <div class="flag">
                                <img src="assets/img/flag.png" alt="flag">
                            </div>
                            <div class="nice-select" tabindex="0">
                                <span class="current">
                                    English
                                </span>
                                <ul class="list">
                                    <li data-value="1" class="option selected focus">
                                        English
                                    </li>
                                    <li data-value="1" class="option">
                                        Bangla
                                    </li>
                                    <li data-value="1" class="option">
                                        Hindi
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="social-icon d-flex align-items-center">
                            <span>Follow Us:</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="header-3">
            <div class="plane-shape">
                <img src="assets/img/plane.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="index.html" class="header-logo">
                                    <img src="assets/img/logo4.png" alt="logo-img" style="width: 480px; max-height: 85px; margin-left: -100px;">
                                </a>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="index.php">
                                                    Home 
                                                </a>
                                            </li>

                                            <li>
                                                <a href="about.php">About</a>
                                            </li>
                                <li class="megamenu-li">
  <a href="#0">Services <i class="fa-solid fa-angle-down"></i></a>
  <ul class="submenu services-megamenu">
    <li>
      <div class="services-row">
        <div class="col">
          <ul>
      <li class="title"><span><i class="fas fa-laptop-code"></i>  IT Services</span></li>
      <li><a href="managed-itservices.php"><i class="fas fa-cogs"></i> Managed IT Services</a></li>
      <li><a href="cloudservices.php"><i class="fas fa-cloud"></i> Cloud Services</a></li>
      <li><a href="#"><i class="fas fa-code"></i>  Software Development</a></li>
          </ul>
        </div>
        <div class="col">
          <ul>
        <li class="title"><span><i class="fas fa-user-tie"></i> Consulting</span></li>
      <li><a href="#"><i class="fas fa-lightbulb"></i> IT Consulting & Strategy</a></li>
      <li><a href="#"><i class="fas fa-users"></i> IT Staffing</a></li>
          </ul>
        </div>
        <div class="col">
          <ul>
             <li class="title"><span><i class="fas fa-briefcase"></i> Business Services</span></li>
             <li><a href="#"><i class="fas fa-headset"></i> BPO Services</a></li>
          </ul>
        </div>
        <div class="col">
          <ul>
            <li class="title"><span><i class="fas fa-globe"></i> Digital Solutions</span></li>
            <li><a href="#"><i class="fas fa-cart-plus"></i> E-commerce & Web Solutions</a></li>

          </ul>
        </div>
        <div class="col">
          <ul>
             <li class="title"><span><i class="fas fa-notes-medical"></i> Healthcare Services</span></li>
            <li><a href="#"><i class="fas fa-file-invoice-dollar"></i> RCM Services</a></li>

          </ul>
        </div>
      </div>
    </li>
  </ul>
</li>


                                            <li class="has-dropdown">
                                                <a href="news.html">
                                                     Products
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li class="has-dropdown">
                                                        <a href="project.html">
                                                           Call Center Dialer with Integrated CRM
                                                            <!-- <i class="fas fa-angle-down"></i> -->
                                                        </a>
                                                        <!-- <ul class="submenu">
                                                            <li><a href="project.html">CallChex – Call Center QA Platform</a></li>
                                                            <li><a href="project-carousel.html">Alt-Lending Origination & Servicing Software</a>
                                                            </li>
                                                            <li><a href="project-details.html">Project Details</a></li>
                                                        </ul> -->
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="team.html">
                                                            CallChex – Call Center QA Platform
                                                            <!-- <i class="fas fa-angle-down"></i> -->
                                                        </a>
                                                        <!-- <ul class="submenu">
                                                            <li><a href="team.html">Our Team</a></li>
                                                            <li><a href="team-carousel.html">Team Carousel</a></li>
                                                            <li><a href="team-details.html">Team Details</a></li>
                                                        </ul> -->
                                                    </li>
                                                    <li><a href="pricing.html">Alt-Lending Origination & Servicing Software</a></li>
                                                    <li><a href="pricing.html">Ringless.Cloud</a></li>
                                                    <!-- <li><a href="faq.html">Faq's</a></li>
                                                    <li><a href="404.html">404 Page</a></li> -->
                                                </ul>
                                            </li>
                                            <!-- <li>
                                                <a href="news.html">
                                                    Blog
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="news.html">Blog Grid</a></li>
                                                    <li><a href="news-standard.html">Blog Standard</a></li>
                                                    <li><a href="news-details.html">Blog Details</a></li>
                                                </ul>
                                            </li> -->
                                            <li>
                                                <a href="contact.php">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a> -->
                            <div class="header-button">
                                <a href="contact.php" class="theme-btn bg-white">
                                    <span>
                                        Join Us Now
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="header__hamburger d-lg-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    