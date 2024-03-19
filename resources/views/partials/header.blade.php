<style>
  /* CSS for dropdown menu */

  .dropdown-menu {
    display: none;
    /* Hide dropdown menu by default */
  }

  .navbar-nav .nav-item:hover .dropdown-menu {
    display: block;
    /* Show dropdown menu when hovering over the parent nav item */
    background-color: #F8F9FA;

  }
  /* Apply style only for desktop view */
  @media only screen and (min-width: 768px) {
    .sticky-element {
      position: sticky;
      top: -1%;
      z-index: 9999;
    }
  }

  /* Hide the element for mobile view */
  @media only screen and (max-width: 767px) {
    .sticky-element {
      display: none;
    }
  }
  
</style>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="mobile-menu marketing-bg">
  <nav class="mobile-header">
    <div class="header-logo" style="display: flex;">
      <a href="home"><img src="/public/orange/assets/images/logo1.png" alt="logo"></a>
      <h5 style="margin-top: 5px;padding:10px">OrangeMegaSoftware</h5>
    </div>
    <div class="header-bar">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>
  <nav class="mobile-menu">
    <div class="mobile-menu-area">
      <div class="mobile-menu-area-inner">
        <ul>
          <li><a href="/home">Home</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li><a href="/service">Services</a>
            <ul>

              <li><a href="webdesign">Web Design</a>
                <ul>
                  <li><a href="/affordable">Affordable Web Design</a></li>
                  <li><a href="/corporate">Corporate Web Design</a></li>
                  <li><a href="/content">Content Management System</a></li>
                  <li><a href="/creative">Creative Web Design</a></li>
                  <li><a href="/html5">HTML5 Web Design</a></li>
                  <li><a href="/responsive">Responsive Web Design</a></li>
                  <li><a href="/website">Website Redesigning</a></li>
                </ul>
              </li>

              <li><a href="/Web Development">Web Development</a>
                <ul>
                  <li><a href="/phpweb">Php Web Development</a></li>
                  <li><a href="/react">React Js Development</a></li>
                  <li><a href="/net">Dot Net Web Development</a></li>
                  <li><a href="/realtime">Real Time Web Application <br>Development</a></li>
                  <li><a href="/framework">Special Framework <br>Development</a></li>

                </ul>
              </li>

              <li><a href="/ecommerce">Ecommerce</a>
                <ul>
                  <li><a href="/magento"> Magento Development</a></li>
                  <li><a href="/prestaShop">PrestaShop Development</a></li>
                  <li><a href="/startecomm">Startup E-Commerce</a></li>
                  <li><a href="/premium">Premium E Commerce</a></li>
                  <li><a href="/magentoHosting">Magento Hosting</a></li>
                  <li><a href="/prestaShopHosting">PrestaShop Hosting</a></li>

                </ul>
              </li>

              <li><a href="/mobapp">Mobile App Development</a>
                <ul>
                  <li><a href="/android"> Android App Development </a></li>
                  <li><a href="/ios">IOS App Development </a></li>
                  <li><a href="/hybrid">Hybrid App Development </a></li>
                  <li><a href="/angular"> Angular JS App Development</a></li>
                  <li><a href="/reactnative"> React Native App Development</a></li>
                  <li><a href="/location"> Location-Based Mobile App <br>Development</a></li>
                  <li><a href="/nutrition"> Nutrition / Fitness App</a></li>
                  <li><a href="/flutter"> Flutter App Development </a></li>

                </ul>
              </li>

              <li><a href="/digitalmarketing">Digital Marketing</a>
                <ul>
                  <li><a href="/search"> Search Engine Optimization</a></li>
                  <li><a href="/off">Off Page SEO</a></li>
                  <li><a href="/on">On Page SEO</a></li>
                  <li><a href="/global">Global SEO Services</a></li>
                  <li><a href="/ebook">E-Book Writing Services</a></li>
                  <li><a href="/contentMarketing">Content Marketing</a></li>
                  <li><a href="/trends">Digital Marketing Trends For 2024</a></li>

                </ul>
              </li>

              <li><a href="/quality">Quality Assurance</a>
                <ul>
                  <li><a href="/testing">Quality Testing</a></li>
                  <li><a href="/audits">Quality Audits </a></li>
                  <li><a href="/control">Quality Control</a></li>
                  <li><a href="/root">Root Cause Analysis</a></li>
                  <li><a href="/supplier">Supplier Quality<br> Management </a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="/portfolio">Portfolio</a>

          </li>
          <li><a href="/blog">Blog</a>

          </li>





          <li><a href="/product">Products</a>
            <ul>
              <li><a href="productHospital">Hospital Management System </a></li>
              <li><a href="/school">School Management System </a></li>
              <li><a href="/restaurant">Restaurant Food Delivery App </a></li>
              <li><a href="/car">Car Booking App Uber Ola <br>Clone </a></li>
              <li><a href="/facility">Facility Management Software </a></li>
              <li><a href="/university">University/Institution/College ERP </a></li>
              <li><a href="/mobile">Ecommerce Mobile App</a></li>
              <li><a href="/grocery">Grocery Mobile App</a></li>
              <li><a href="/learning">Learning Management Software </a></li>
              <li><a href="/online">Online Exam Software </a></li>

            </ul>
          </li>

          <li><a href="/career">Career</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="/faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>




        </ul>
      </div>
    </div>
  </nav>
</div>




<header class="sticky-element" style="position: sticky; top:-1%;z-index:9999">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo" style="display: flex;">
      <a href="index-vpn.html"><img src="/public/orange/assets/images/logo1.png" alt="logo"></a>
      <h5 style="margin-top: 5px;padding:10px">Orange<span style="color: #E84E0D;">Mega</span>Software</h5>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 50px;">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/service" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown" style="border:none;background-color:transparent">
            <div class="row" style="position: relative;left: -452px;border:1px solid #F8F9FA;width: 1020px;background-color:#fff">
              <div class="col-md-4">
                <a class="dropdown-item" href="/webdesign" style="font-weight: bold;">Web Design</a>
                <a class="dropdown-item" href="/affordable">Affordable Web Design</a>
                <a class="dropdown-item" href="/corporate">Corporate Web Design</a>
                <a class="dropdown-item" href="/content">Content Management System</a>
                <a class="dropdown-item" href="/creative">Creative Web Design</a>
                <a class="dropdown-item" href="/html5">HTML5 Web Design</a>
                <a class="dropdown-item" href="/responsive">Responsive Web Design</a>
                <a class="dropdown-item" href="/website">Website Redesigning</a>
              </div>
              <div class="col-md-4">
                <a class="dropdown-item" href="/webdevelopment" style="font-weight: bold;">Web Development</a>
                <a class="dropdown-item" href="/phpweb">Php Web Development</a>
                <a class="dropdown-item" href="/react">React Js Development</a>
                <a class="dropdown-item" href="/net">Dot Net Web Development</a>
                <a class="dropdown-item" href="/realtime">Real Time Web Application <br>Development</a>
                <a class="dropdown-item" href="/framework">Special Framework <br>Development</a>
              </div>
              <div class="col-md-4">
                <a class="dropdown-item" href="/ecommerce" style="font-weight: bold;">Ecommerce</a>
                <a class="dropdown-item" href="/magento"> Magento Development</a>
                <a class="dropdown-item" href="/prestaShop">PrestaShop Development</a>
                <a class="dropdown-item" href="/startecomm">Startup E-Commerce</a>
                <a class="dropdown-item" href="/premium">Premium E Commerce</a>
                <a class="dropdown-item" href="/magentoHosting">Magento Hosting</a>
                <a class="dropdown-item" href="/prestaShopHosting">PrestaShop Hosting</a>
              </div>
              <div class="col-md-4">
                <a class="dropdown-item" href="/mobapp" style="font-weight: bold;">Mobile App Development</a>
                <a class="dropdown-item" href="/android"> Android App Development</a>
                <a class="dropdown-item" href="/ios">IOS App Development</a>
                <a class="dropdown-item" href="/hybrid">Hybrid App Development</a>
                <a class="dropdown-item" href="/angular"> Angular JS App Development</a>
                <a class="dropdown-item" href="/reactnative"> React Native App Development</a>
                <a class="dropdown-item" href="/location"> Location-Based Mobile App <br>Development</a>
                <a class="dropdown-item" href="/nutrition"> Nutrition / Fitness App</a>
                <a class="dropdown-item" href="/flutter"> Flutter App Development</a>
              </div>
              <div class="col-md-4">
                <a class="dropdown-item" href="/digitalmarketing" style="font-weight: bold;">Digital Marketing</a>
                <a class="dropdown-item" href="/search"> Search Engine Optimization</a>
                <a class="dropdown-item" href="/off">Off Page SEO</a>
                <a class="dropdown-item" href="/on">On Page SEO</a>
                <a class="dropdown-item" href="/global">Global SEO Services</a>
                <a class="dropdown-item" href="/ebook">E-Book Writing Services</a>
                <a class="dropdown-item" href="/contentMarketing">Content Marketing</a>
                <a class="dropdown-item" href="/trends">Digital Marketing Trends For 2024</a>
              </div>
              <div class="col-md-4">
                <a class="dropdown-item" href="/quality" style="font-weight: bold;">Quality Assurance</a>
                <a class="dropdown-item" href="/testing">Quality Testing</a>
                <a class="dropdown-item" href="/audits">Quality Audits</a>
                <a class="dropdown-item" href="/control">Quality Control</a>
                <a class="dropdown-item" href="/root">Root Cause Analysis</a>
                <a class="dropdown-item" href="/supplier">Supplier Quality<br> Management</a>

              </div>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/product" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Products
          </a>
          <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown" style="border:none;background-color:transparent">
            <div class="row" style="position: relative;left: -512px;border:1px solid #F8F9FA;width: 720px;background-color:#F8F9FA">
              <div class="col-md-5">
                <a class="dropdown-item" href="/productHospital">Hospital Management System</a>
                <a class="dropdown-item" href="/school">School Management System</a>
                <a class="dropdown-item" href="/restaurant">Restaurant Food Delivery App</a>
                <a class="dropdown-item" href="/car">Car Booking App Uber Ola <br>Clone</a>
                <a class="dropdown-item" href="/facility">Facility Management Software</a>
              </div>
              <div class="col-md-5">

                <a class="dropdown-item" href="university">University/Institution/College ERP</a>
                <a class="dropdown-item" href="/mobile">Ecommerce Mobile App</a>
                <a class="dropdown-item" href="/grocery">Grocery Mobile App</a>
                <a class="dropdown-item" href="/learning">Learning Management Software</a>
                <a class="dropdown-item" href="/online">Online Exam Software</a>

              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/career">Career</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/faq">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
    <div class="header-btn">
      <a href="tel:7845158684" class="lab-btn"><span><i class="fa fa-phone" aria-hidden="true"></i></span></a>
    </div>
    </div>
  </nav>
</header>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>