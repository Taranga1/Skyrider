<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Skyrider SEBS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>
<style>
    img{
        border-radius: 50%
    }
</style>
<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <h4>SKY&nbsp;<span>RIDER</span></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About Us</a></li>
                            <li class="scroll-to-section"><a href="#services">Services</a></li>
                            <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>




                            @if (Route::has('login'))

                                @auth
                                    <li class="scroll-to-section"><a href="{{ url('/home') }}"
                                            class="font-semibold text-gray-200 hover:text-gray dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                    </li>
                                @else
                                    <li class="scroll-to-section"><a href="{{ route('login') }}"
                                            class="font-semibold text-gray-200 hover:text-gray dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                            in</a></li>

                                    @if (Route::has('register'))
                                        <li class="scroll-to-section"><a href="{{ route('register') }}"
                                                class="ml-4 font-semibold text-gray hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                        </li>
                                    @endif
                                @endauth

                            @endif





                            <li class="scroll-to-section">
                                <div class="main-red-button"><a href="#contact">Contact Now</a></div>
                            </li>
                        </ul>




                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <h6>Warm Welcome</h6>

                                <h2>Best <em>Educational </em> <em>Experience </em> <br><span> is </span> Secured </h2>
                                <p>SkyRider School is known for its exceptional educational quality, providing a
                                    well-rounded curriculum, experienced faculty, state-of-the-art facilities, and a
                                    supportive learning environment that fosters academic, personal, and social growth
                                    for students.</p>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/skyrider.png" alt="team meeting">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <img src="assets/images/about-left-image.png" alt="person graphic">
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="services">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="icon">
                                        <img src="assets/images/service-icon-01.png" alt="reporting">
                                    </div>
                                    <div class="right-text">
                                        <h4>Managed Environment</h4>
                                        <p>Promising Environment</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                    <div class="icon">
                                        <img src="assets/images/service-icon-02.png" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>Quality Education</h4>
                                        <p>No Compromise in Education</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                    <div class="icon">
                                        <img src="assets/images/service-icon-03.png" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>Wide Ranged Faculty</h4>
                                        <p>Science, Humanity, Management, Arts....</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                                    <div class="icon">
                                        <img src="assets/images/service-icon-04.png" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>Scholorships Oppourtunity</h4>
                                        <p>For Sound Students we offer various Types of Scholorships</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="our-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="left-image">
                        <img src="assets/images/services-left-image.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="section-heading">
                        <h2><em></em> <span> innovative curriculum, experienced teachers, and modern facilities.</span>
                        </h2>
                        <p>Provides educational facility which may include modern classrooms and facilities, advanced
                            technology,
                            well-stocked libraries, laboratories, and computer labs, highly qualified and experienced
                            teachers, and a wide range of extracurricular activities to enhance student learning and
                            development. We also have a strong academic program with a focus on
                            student-centered teaching, personalized attention, and student engagement to ensure that
                            students receive a well-rounded education.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="first-bar progress-skill-bar">
                                <h4>+2 Passouts</h4>
                                <span>84%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="second-bar progress-skill-bar">
                                <h4>SEE Passouts</h4>
                                <span>88%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="third-bar progress-skill-bar">
                                <h4>BLE Passouts</h4>
                                <span>94%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>See What Our Organization <em>Offers</em> &amp; What We <span>Provide</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="hidden-content">
                                <h4>Kamal Lamichchhane</h4>
                                <p> I got all support and
                                    guidance for betterment.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/kamal.jpg" alt="" height="100px" width="80px">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="hidden-content">
                                <h4>Sandeep Khadka</h4>
                                <p>No Words to Describe about School .</p>
                            </div>
                            <div class="showed-content">
                                <img src="https://i.redd.it/8fqzw8yxpkp11.jpg" alt="" height="100px" width="80px">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="hidden-content">
                                <h4>Keshav Bhakta</h4>
                                <p>Best School ever growned in with beautiful environment</p>
                            </div>
                            <div class="showed-content">
                                <img src="https://s.yimg.com/ny/api/res/1.2/uL6C1Jl3LgE5y822Puwwsw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTQ4MA--/https://s.yimg.com/uu/api/res/1.2/3ErQJs24BWEbSzVuNn.Krg--~B/aD0xMDk3O3c9MTQ2MzthcHBpZD15dGFjaHlvbg--/http://globalfinance.zenfs.com/en_us/Finance/US_AFTP_SILICONALLEY_H_LIVE/Google_rewarded_the_guy_who-cb914d79c7ae31dff0c551ddfb859b2c"
                                    alt="" height="100px" width="80px">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="hidden-content">
                                <h4>Dharma Singh</h4>
                                <p>It was where i was growned in with full support from teachers</p>
                            </div>
                            <div class="showed-content">
                                <img src="https://i.pinimg.com/originals/1f/8f/88/1f8f88fd1dc3eb2aab83b71330777d04.jpg" alt="" height="100px" width="80px">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="blog" class="our-blog section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Check Out What Is <em>Trending</em> In Our Latest <span>News</span></h2>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
            <img src="assets/images/blog-dec.png" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <a href="#"><img src="assets/images/big-blog-thumb.jpg" alt="Workspace Desktop"></a>
            <div class="info">
              <div class="inner-content">
                <ul>
                  <li><i class="fa fa-calendar"></i> 24 Mar 2021</li>
                  <li><i class="fa fa-users"></i> TemplateMo</li>
                  <li><i class="fa fa-folder"></i> Branding</li>
                </ul>
                <a href="#"><h4>SEO Agency &amp; Digital Marketing</h4></a>
                <p>Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore magna...</p>
                <div class="main-blue-button">
                  <a href="#">Discover More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="right-list">
            <ul>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 18 Mar 2021</span>
                  <a href="#"><h4>New Websites &amp; Backlinks</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 14 Mar 2021</span>
                  <a href="#"><h4>SEO Analysis &amp; Content Ideas</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 06 Mar 2021</span>
                  <a href="#"><h4>SEO Tips &amp; Digital Marketing</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s"
                    data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>Feel Free To Send Us a Message .</h2>
                        <p>We have a strong academic program with a focus on
                            student-centered teaching, personalized attention, and student engagement to ensure that
                            students receive a well-rounded education.</p>
                        <div class="phone-info">
                            <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a
                                        href="#">056562277</a></span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="https://formsubmit.co/tarangabaral10@gmail.com" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Name"
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="surname" name="surname" id="surname" placeholder="Surname"
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button ">Send
                                        Message</button>
                                </fieldset>
                            </div>
                        </div>
                        <div class="contact-dec">
                            <img src="assets/images/contact-decoration.png" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p>© Copyright 2023 | Taranga Baral | All Rights Reserved.

                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/templatemo-custom.js"></script>

</body>

</html>
