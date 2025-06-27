 <style>
.megamenu-li {
  position: relative;
}

.services-megamenu {
  position: absolute;
  top: 100%;
  left: -500px !important;
  transform: translateX(0);
  width: 1100px;
  height: 600px;
  background: #fff;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
  z-index: 999;
  display: none;
  border-radius: 12px;
  padding: 20px 40px 30px;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
  overflow: hidden;
}

.megamenu-li:hover .services-megamenu {
  display: block;
  opacity: 1;
  visibility: visible;
}

.services-row {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
}

.services-row .col {
  display: flex;
  flex-direction: column;
  gap: 20px;
  align-items: flex-start;
}

.services-row .col:first-child {
  margin-left: 15px;
}

.card-item {
  background: #f9f9fa;
  width: 95%;
  border-radius: 12px;
  padding: 18px 15px;
  text-align: center;
  transition: all 0.3s ease;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
}

.card-item:hover {
  background: #eef4ff;
  transform: translateY(-4px);
}

.card-item a {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-decoration: none;
  color: #333;
}

.card-item i {
  font-size: 32px;
  color: #007bff;
  margin-bottom: 8px;
  transition: color 0.3s ease;
}

.card-item:hover i {
  color: #0056b3;
}

.card-item h4 {
  font-size: 15px;
  font-weight: 600;
  margin: 4px 0;
}

.card-item p {
  font-size: 13px;
  color: #666;
  margin: 0;
}



html, body, * {
  cursor: auto !important;
}

#cursor,
.cursor,
.custom-cursor,
.mouse-cursor,
.cursor-dot,
.cursor-outline {
  display: none !important;
  pointer-events: none !important;
  animation: none !important;
  transition: none !important;
}

a:hover,
button:hover,
[role="button"]:hover,
.btn:hover,
input[type="submit"]:hover {
  cursor: pointer !important;
}


input[type="text"],
input[type="email"],
input[type="number"],
input[type="password"],
textarea:hover {
  cursor: text !important;
}


body, html {
  cursor: default !important;
}

@media (max-width: 1199px) {
  .header-logo img {
    margin-left: -60px !important; 
  }
}



.header-left,
.logo {
    display: flex;
    align-items: start;

}

@media (max-width: 1199px) {
  .services-megamenu {
    position: static !important;
    width: 100% !important;
    height: auto !important;
    background: #f9f9f9;
    box-shadow: none;
    padding: 15px;
    margin-top: 10px;
    border-radius: 6px;
  }

  .services-row {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .services-row .col {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .card-item {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    gap: 12px;
    padding: 12px;
    background-color: #fff;
    border-radius: 6px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
    transition: background 0.3s;
  }

  .card-item:hover {
    background-color: #f0f0f0;
  }

  .card-item i {
    font-size: 20px;
    color: #0a58ca;
    min-width: 24px;
    margin-top: 4px;
  }

  .card-item h4 {
    font-size: 15px;
    margin: 0;
    color: #111;
  }

  .card-item p {
    font-size: 13px;
    margin: 2px 0 0 0;
    color: #666;
  }

  .card-item a {
    display: flex;
    flex-direction: row;
    gap: 12px;
    align-items: flex-start;
    text-decoration: none;
    color: inherit;
    width: 100%;
  }

   .contact-li {
    display: none !important;
  }
}

</style>

<style>
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: #fff;
  z-index: 9999;
  display: flex;
  justify-content: center;
  align-items: center;
}

.loader-container {
  position: relative;
  width: 100%;
  max-width: 250px;
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


@media (max-width: 480px) {
  .loader-logo {
    width: 180px;
  }
  .loader-spinner {
    width: 100px;
    height: 100px;
    margin-top: -50px;
    margin-left: -50px;
  }
}

@media (max-width: 767px) {
  .offcanvas__info {
    width: 100%;
    max-width: 100vw;
    overflow-y: auto;
    padding: 20px 15px;
  }

  .offcanvas__wrapper {
    padding: 0;
  }

  .offcanvas__top {
    flex-direction: row !important;
    justify-content: space-between !important;
    align-items: center;
  }

  .offcanvas__logo img,
  .offcanvas-logo-img {
    width: 100%;
    max-width: 180px;
    max-height: 60px;
    margin-left: 0 !important;
    height: auto;
  }

 .offcanvas__close button {
  font-size: 18px;
  background: none;
  border: none;
  color: #000;
  padding: 0;
  line-height: 1;
}


  .offcanvas__contact h4 {
    font-size: 18px;
    margin-top: 20px;
  }

  .offcanvas__contact ul {
    padding: 0;
    margin: 0;
  }

  .offcanvas__contact ul li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font-size: 14px;
    margin-bottom: 12px;
    flex-wrap: wrap;
  }

  .offcanvas__contact-icon i {
    font-size: 18px;
    margin-top: 2px;
  }

  .offcanvas__contact-text a {
    font-size: 14px;
    word-break: break-word;
    color: #333;
    text-decoration: none;
  }

  .header-button .theme-btn {
    padding: 10px 18px;
    font-size: 14px;
    display: inline-block;
    width: auto;
    text-align: center;
  }

  .social-icon {
    margin-top: 20px;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
  }

  .social-icon a {
    font-size: 16px;
    padding: 8px;
    background: #f2f2f2;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    text-align: center;
    line-height: 20px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #333;
    transition: 0.3s ease;
  }

  .social-icon a:hover {
    background: #2e45ff;
    color: #fff;
  }

  .offcanvas__overlay {
    width: 100vw;
    height: 100vh;
  }
}

.header-right .main-menu nav > ul {
  display: flex;
  align-items: center;
  gap: 25px; 
}

.header-right .main-menu nav > ul > li {
  display: inline-flex;
  align-items: center;
  white-space: nowrap;
}

.contact-li {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding-left: 15px;
  white-space: nowrap;
  line-height: 1;
}

.contact-li a {
  font-size: 14px;
  color: #000;
  text-decoration: none;
  font-weight: 700;
  text-transform: none;
  margin: 0;
  padding: 0;
  line-height: 1;
  display: flex;
  align-items: center;
}

.contact-li a + a {
  margin-top: -20px !important; 
}

.contact-li i {
  margin-right: 5px;
  line-height: -30px !important;
}

.contact-li a {
  text-transform: none !important;
}


</style>
 
 <!-- Header Section Start -->
    <header>
        <!-- <div class="header-top-section top-style-3">
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
                    <div class="top-right"> -->
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
                        <!-- <div class="social-icon d-flex align-items-center">
                            <span>Follow Us:</span>
                            <a href="https://www.facebook.com/profile.php?id=61577661337809"><i class="fab fa-facebook-f" style="cursor: pointer !important;"></i></a>
                            <a href="#"><i class="fab fa-twitter" style="cursor: pointer !important;"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in" style="cursor: pointer !important;"></i></a> -->
                            <!-- <a href="#"><i class="fa-brands fa-youtube" style="cursor: pointer !important;"></i></a> -->
                        <!-- </div>
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
                                <a href="index.php" class="header-logo">
                                    <img src="assets/img/logo-png.png" alt="logo-img" style="width: 470px; max-height: 80px; margin-left: -110px;">
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
  <a href="#">Services <i class="fa-solid fa-angle-down"></i></a>
  <ul class="submenu services-megamenu">
    <li>
      <div class="services-row">
        <!-- Column 1 -->
        <div class="col">
          <div class="card-item">
            <a href="managed-itservices.php">
              <i class="fas fa-cogs"></i>
              <h4>Managed IT Services</h4>
              <p>Infrastructure & Support</p>
            </a>
          </div>
          <div class="card-item">
            <a href="cloudservices.php">
              <i class="fas fa-cloud"></i>
              <h4>Cloud Services</h4>
              <p>AWS | Azure | GCP</p>
            </a>
          </div>
          <div class="card-item">
            <a href="softwaredevelopment.php">
              <i class="fas fa-code"></i>
              <h4>Software Development</h4>
              <p>Web & Mobile Apps</p>
            </a>
          </div>
        </div>

        <!-- Column 2 -->
        <div class="col">
          <div class="card-item">
            <a href="#">
              <i class="fas fa-lightbulb"></i>
              <h4>IT Consulting & Strategy</h4>
              <p>Digital Roadmap</p>
            </a>
          </div>
          <div class="card-item">
            <a href="#">
              <i class="fas fa-headset"></i>
              <h4>BPO Services</h4>
              <p>Customer Support</p>
            </a>
          </div>
          <div class="card-item">
            <a href="#">
              <i class="fas fa-cart-plus"></i>
              <h4>E-commerce</h4>
              <p>Shopify, Magento</p>
            </a>
          </div>
        </div>

        <!-- Column 3 -->
        <div class="col">
          <div class="card-item">
            <a href="#">
              <i class="fas fa-user-friends"></i>
              <h4>IT Staffing</h4>
              <p>Dedicated Hiring</p>
            </a>
          </div>
          <div class="card-item">
            <a href="#">
              <i class="fas fa-file-invoice-dollar"></i>
              <h4>RCM Services</h4>
              <p>Medical Billing</p>
            </a>
          </div>
        </div>
      </div>
    </li>
  </ul>
</li>






                                            <li class="has-dropdown">
                                                <a href="#">
                                                     Products
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li class="has-dropdown">
                                                        <a href="#">
                                                           Call Center Dialer with Integrated CRM
                                                        
                                                        </a>
                                                    
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="#">
                                                            CallChex – Call Center QA Platform
                                                            <!-- <i class="fas fa-angle-down"></i> -->
                                                        </a>
                                                      
                                                    </li>
                                                    <li><a href="#">Alt-Lending Origination & Servicing Software</a></li>
                                                    <li><a href="#">Ringless.Cloud</a></li>
                                                   
                                                </ul>
                                            </li>
                                          
                                            <li>
                                                <a href="contact.php">Contact</a>
                                            </li>
<li class="contact-li" style="display: flex; flex-direction: column; justify-content: center; padding-left: 15px;">
  <a href="mailto:sales@linkswitchcommunications.com" style="font-size: 13px; color: #000; text-decoration: none; font-weight: 500;">
    <i class="far fa-envelope"></i> sales@linkswitchcommunications.com
  </a>
  <a href="tel:+19024412385" style="font-size: 13px; color: #000; text-decoration: none; font-weight: 500;">
    <i class="fa-solid fa-phone-volume"></i> +1 (902) 441-2385
  </a>
</li>


                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a> -->
                            <!-- <div class="header-button">
                                <a href="contact.php" class="theme-btn bg-white">
                                    <span>
                                        Join Us Now
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </a>
                            </div> -->
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




