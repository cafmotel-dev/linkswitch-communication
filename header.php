 <style>
 .megamenu-li {
  position: relative;
}

.services-megamenu {
  position: absolute;
  top: 100%;
   left: -300px !important; 
  width: 900px; 
  max-width: 95vw;
  padding: 20px;
  background: #fff;
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
  gap: 30px;
}

.services-row .col {
  flex: 1;
  min-width: 200px;
}

.services-row .title  {
  font-weight: bold;
  font-size: 15px;
  text-transform: uppercase;
  margin-bottom: 8px;
  pointer-events: none;
  color: #007bff;
  text-decoration: underline;
  cursor: default;
  padding-left: 25px;
}

.services-row ul li a {
  color: #444;
  text-decoration: none;
  padding: 6px 0;
  display: block;
  font-size: 14px;
}

.services-row ul li a:hover {
  color: #007bff;
  padding-left: 5px;
}
</style>
 
 <!-- Header Section Start -->
    <header>
        <!-- <div class="header-top-section top-style-3">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="contact-list">
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:info@example.com" class="link">info@example.com</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone-volume"></i>
                            <a href="tel:2086660112">+208-666-0112</a>
                        </li>
                    </ul>
                    <div class="top-right">
                        <div class="flag-wrap">
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
                        </div>
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
        </div> -->
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
                                    <img src="assets/img/logo.webp" alt="logo-img" style="width: 450px; max-height: 80px; margin-left: -90px;">
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
            <li class="title"><span>IT Services</span></li>
            <li><a href="#">Managed IT Services</a></li>
            <li><a href="#">Cloud Services</a></li>
            <li><a href="#">Software Development</a></li>
          </ul>
        </div>
        <div class="col">
          <ul>
            <li class="title"><span>Consulting</span></li>
            <li><a href="#">IT Consulting & Strategy</a></li>
            <li><a href="#">IT Staffing</a></li>
            <!-- <li><a href="#">BPO Services</a></li> -->
          </ul>
        </div>
        <div class="col">
          <ul>
            <li class="title"><span>Business Services</span></li>
            <li><a href="#">BPO Services</a></li>
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
                            <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                            <div class="header-button">
                                <a href="contact.html" class="theme-btn bg-white">
                                    <span>
                                        Get Started
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