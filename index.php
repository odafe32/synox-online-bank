<?php
include("admin/conf/config.php");
/* Persisit System Settings On Brand */
$ret = "SELECT * FROM `iB_SystemSettings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
?>
<!-- header -->
<title>Synox - Online Banking</title>
<?php require_once("inc/header.php")?>

<!-- end header -->

  <body class="online_banking" style="width:100%; overflow-x: hidden">
<!-- navigation bar -->
    <!-- Body Wrap - Start -->
    <div class="page_wrapper">

      <!-- Back To Top - Start -->
      <div class="backtotop">
        <a href="#" class="scroll">
          <i class="fa-solid fa-arrow-up"></i>
        </a>
      </div>
      <!-- Back To Top - End -->

<?php require_once("inc/topnav.php")?>

      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Hero Section - Start
        ================================================== -->
        <section class="hero_section hero_online_banking overflow-hidden section_decoration bg-dark" style="background-image: url('assets/images/backgrounds/hero_bg_noise.webp');">
          <div class="overlay" style="background-image: url('assets/images/hero/hero_pattern.svg');"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <div class="badge text-uppercase text-primary bg-primary-subtle wow fadeInUp" data-wow-delay=".1s">All-in-one banking for everyone</div>
                <h1 class="hero_title text-white wow fadeInUp" data-wow-delay=".2s">
                  The Premier Finto Online Banking
                </h1>
                <p class="pe-lg-5 text-white wow fadeInUp" data-wow-delay=".3s">
                  Discover online banking with Synox. Experience unmatched, security, and efficiency for managing your finances.
                </p>
                <ul class="btns_group pb-0 unordered_list justify-content-lg-start wow fadeInUp" data-wow-delay=".4s">
                  <li>
                    <a class="btn bg-primary text-dark" href="client/pages_client_index.php">
                      <span class="btn_label">Get Started Free Now</span>
                    </a>
                  </li>
                  <li>
                    <div class="rating_block">
                      <div class="rating_content">
                        <div class="rating_icons">
                          <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                          </span>
                          <strong class="text-white ps-2">4.8</strong>
                        </div>
                        <div class="rating_counter text-white">26 Reviews</div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="hero_shape_image">
            <img src="assets/images/hero/hero_shape_1.svg" alt="Hero Shape">
          </div>
          <div class="hero_hand_image wow fadeInRight" data-wow-delay=".2s">
            <img src="assets/images/hero/hero_hand_image.png" alt="Hand Image">
          </div>
          <div class="ob_hero_img">
            <div class="wow fadeInRight" data-wow-delay=".2s"> 
              <img src="assets/images/hero/card.png" alt="">
            </div>
          </div>
          <div class="container">
            <div class="clients_logo_carousel swiper">
              <div class="badge text-uppercase text-primary bg-primary-subtle">Some Several Companies</div>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_2.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_3.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_4.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_5.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_6.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_7.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_8.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_2.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_3.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_4.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_5.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_6.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_7.webp" alt="Client Logo">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image_block border">
                    <img src="assets/images/clients/client_logo_8.webp" alt="Client Logo">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="decoration_item icon_star_1">
            <img src="assets/images/icons/icon_star_4.svg" alt="Icon Star">
          </div>
          <div class="decoration_item icon_star_2">
            <img src="assets/images/icons/icon_star_3.svg" alt="Icon Star">
          </div>
          <div class="decoration_item shape_shadow_1">
            <img src="assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow 1">
          </div>
          <div class="decoration_item shape_shadow_2">
            <img src="assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow 2">
          </div>
          <div class="decoration_item shape_shadow_3">
            <img src="assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow 3">
          </div>
          <div class="decoration_item shape_shadow_4">
            <img src="assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow 4">
          </div>
        </section>
        <!-- Hero Section - End
        ================================================== -->

        <!-- Feature Section - Start
        ================================================== -->
        <section class="feature_section section_space">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-7">
                <div class="heading_block style_2 text-center">
                  <div class="badge text-uppercase text-dark bg-dark-subtle">CORE FEATURES</div>
                  <h2 class="heading_text mb-0">
                    5 Rapid Highlights of Our Synox Solution
                  </h2>
                </div>
              </div>
            </div>

            <div class="row online_banking_features">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="imagebox_block pb-0 bg-primary">
                  <div class="imagebox_content">
                    <div class="imagebox_icon">
                      <img src="assets/images/icons/icon_wallet.svg" alt="Icon Wallet">
                    </div>
                    <h3 class="imagebox_title">
                      Receive Early Payments Within 24 Hours
                    </h3>
                    <p class="mb-0">
                      Experience the convenience of early payments arriving within just 24 hours. Say goodbye.
                    </p>
                  </div>
                  <div class="image_block">
                    <img src="assets/images/features/ob_feature_image_1.webp" alt="Feature Image">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="imagebox_block pb-0 bg-success">
                  <div class="imagebox_content">
                    <div class="imagebox_icon">
                      <img src="assets/images/icons/icon_chart_2.svg" alt="Icon Chart 2">
                    </div>
                    <h3 class="imagebox_title">
                      Monitor Your Essential Expenses Wisely
                    </h3>
                    <p class="mb-0">
                      Take control of your financial journey by wisely monitoring your essential expenses.
                    </p>
                  </div>
                  <div class="image_block pb-4">
                    <img src="assets/images/features/ob_feature_image_2.webp" alt="Feature Image">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="imagebox_block pb-0 bg-warning">
                  <div class="imagebox_content">
                    <div class="imagebox_icon">
                      <img src="assets/images/icons/icon_global_search.svg" alt="Icon Global Search">
                    </div>
                    <h3 class="imagebox_title">
                      Send Money Anywhere, Anytime to here
                    </h3>
                    <p class="mb-0">
                      Send money to any destination, anytime, and from anywhere.
                    </p>
                  </div>
                  <div class="image_block pb-4">
                    <img src="assets/images/features/ob_feature_image_3.webp" alt="Feature Image">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="imagebox_block pb-0 bg-light">
                  <div class="imagebox_content">
                    <div class="imagebox_icon">
                      <img src="assets/images/icons/icon_color_swatch.svg" alt="Icon Color Swatch">
                    </div>
                    <h3 class="imagebox_title">
                      Virtual or physical - it’s your choice
                    </h3>
                    <p class="mb-0">
                      Choice the convenience of virtual options the choice is yours.
                    </p>
                  </div>
                  <div class="image_block">
                    <img src="assets/images/features/ob_feature_image_4.webp" alt="Feature Image">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="imagebox_block pb-0 bg-info">
                  <div class="imagebox_content">
                    <div class="imagebox_icon">
                      <img src="assets/images/icons/icon_bitcoin.svg" alt="Icon Bitcoin">
                    </div>
                    <h3 class="imagebox_title">
                      B2B & Cryptocurrency Payment System
                    </h3>
                    <p class="mb-0">
                      Streamline B2B payments with cryptocurrency integration.
                    </p>
                  </div>
                  <div class="image_block pt-3">
                    <img src="assets/images/features/ob_feature_image_5.webp" alt="Feature Image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Feature Section - End
        ================================================== -->

        <!-- About Section - Start
        ================================================== -->
        <section class="about_section section_space pb-0 bg-light">
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-5">
                <div class="heading_block style_2">
                  <div class="badge text-uppercase text-dark bg-dark-subtle">Who we are</div>
                  <h2 class="heading_text">
                    Shaping Your Future with Online Banking
                  </h2>
                  <p class="heading_description mb-0">
                    Embark on a journey towards a brighter financial future with our online  banking services. From managing accounts to convenient bill payments,  our platform is designed to empower.
                  </p>
                </div>
                <div class="row online_banking_funfact">
                  <div class="col-md-6">
                    <div class="funfact_block left_layout">
                      <div class="funfact_icon bg-dark">
                        <img src="assets/images/icons/icon_maximize.svg" alt="Icon Maximize">
                      </div>
                      <div class="funfact_content">
                        <div class="funfact_value">
                          <span class="odometer" data-count="9">0</span>
                          <span>M+</span>
                        </div>
                        <h4 class="funfact_title mb-0">Daily Transactions</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="funfact_block left_layout">
                      <div class="funfact_icon bg-dark">
                        <img src="assets/images/icons/icon_dollar_3.svg" alt="Icon Dollar">
                      </div>
                      <div class="funfact_content">
                        <div class="funfact_value">
                          <span>+</span>
                          <span class="odometer" data-count="9">0</span>
                          <span>%</span>
                        </div>
                        <h4 class="funfact_title mb-0">Unlimited Cashback</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <ul class="about_image_2 unordered_list justify-content-center">
                  <li>
                    <div class="image_block">
                      <img src="assets/images/about/about_image_1.webp" alt="About Image 1">
                    </div>
                  </li>
                  <li>
                    <div class="image_block">
                      <img src="assets/images/about/about_image_2.webp" alt="About Image 2">
                    </div>
                    <ul class="avatars_group unordered_list justify-content-center">
                      <li>
                        <img src="assets/images/avatar/avatar_image_4.webp" alt="Avatar Image">
                      </li>
                      <li>
                        <img src="assets/images/avatar/avatar_image_5.webp" alt="Avatar Image">
                      </li>
                      <li>
                        <img src="assets/images/avatar/avatar_image_6.webp" alt="Avatar Image">
                      </li>
                      <li>
                        <span>9K+</span>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <div class="image_block">
                      <img src="assets/images/about/about_image_3.webp" alt="About Image 3">
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <!-- About Section - End
        ================================================== -->

        <!-- Video Section - Start
        ================================================== -->
        <section class="video_section section_space pb-0 bg-light">
          <div class="container">
            <div class="heading_block style_2 text-center">
              <div class="badge text-uppercase text-dark bg-dark-subtle">Meet our new</div>
              <h2 class="heading_text mb-0">
                Physical Card for Your Pocket
              </h2>
            </div>

            <div class="video_block position-relative">
              <img src="assets/images/about/about_video_image_1.webp" alt="About Video Image">
              <a class="video_btn" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                <span class="btn_icon">
                  <i class="fa-solid fa-play"></i>
                </span>
              </a>
            </div>
          </div>
        </section>
        <!-- Video Section - End
        ================================================== -->

        <!-- Funfact Section - Start
        ================================================== -->
        <section class="funfact_section section_space bg-light">
          <div class="container">
            <div class="heading_block style_2">
              <div class="row align-items-lg-end justify-content-lg-between">
                <div class="col-lg-6">
                  <div class="badge text-uppercase text-dark bg-dark-subtle">Our Achievements</div>
                  <h2 class="heading_text mb-0">
                    Shaping Your Future with Online Banking
                  </h2>
                </div>
                <div class="col-lg-5">
                  <p class="heading_description mb-0">
                    With our comprehensive banking solution, you'll find that one card is  truly enough. Our all-in-one card combines the functionality of multiple cards into a single, convenient solution, clutter and simplifying your wallet.
                  </p>
                </div>
              </div>
            </div>

            <div class="row section_decoration">
              <div class="col-lg-4">
                <div class="funfact_block style_2" style="background-image: url('assets/images/shapes/funfact_bg_1.svg');">
                  <div class="funfact_value">
                    <span class="odometer" data-count="80">0</span>
                    <span>%</span>
                  </div>
                  <h4 class="funfact_title mb-0">
                    Users primarily access their accounts via mobile for with convenient banking on the go.
                  </h4>
                </div>
                <div class="funfact_block style_2" style="background-image: url('assets/images/shapes/funfact_bg_2.svg');">
                  <div class="funfact_value">
                    <span class="odometer" data-count="300">0</span>
                    <span>K+</span>
                  </div>
                  <h4 class="funfact_title mb-0">
                    Gain access to a vast global network of over 300k+ partner ATMs located worldwide.
                  </h4>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="money_transactions_card bg-dark" style="background-image: url('assets/images/shapes/shape_line.svg');">
                  <div class="image_block">
                    <img src="assets/images/about/transactions_card_image.webp" alt="Transactions Card">
                  </div>
                  <a class="btn bg-primary text-dark" href="pricing.html">
                    <span class="btn_label">Learn More</span>
                  </a>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="funfact_block style_2" style="background-image: url('assets/images/shapes/funfact_bg_3.svg');">
                  <div class="funfact_value">
                    <span class="odometer" data-count="990">0</span>
                    <span>K+</span>
                  </div>
                  <h4 class="funfact_title mb-0">
                    Wings quickly gained popularity among youth, attracting over 990k+ customers in first year.
                  </h4>
                </div>
                <div class="funfact_block style_2" style="background-image: url('assets/images/shapes/funfact_bg_4.svg');">
                  <div class="funfact_value">
                    <span class="odometer" data-count="60">0</span>
                    <span>%</span>
                  </div>
                  <h4 class="funfact_title mb-0">
                    Users enjoy 60% faster transaction processing times compared to traditional banks, providing them.
                  </h4>
                </div>
              </div>

              <div class="decoration_item shape_circle_image">
                <img src="assets/images/shapes/shape_circle_3.svg" alt="Circle Image">
              </div>
            </div>
          </div>
        </section>
        <!-- Funfact Section - End
        ================================================== -->

        <!-- Online Banking Process Section - Start
        ================================================== -->
        <section class="ob_process_section section_space section_decoration overflow-hidden" style="background-image: url('assets/images/backgrounds/hero_bg_noise.webp');">
          <div class="overlay" style="background-image: url('assets/images/hero/hero_pattern.svg');"></div>
          <div class="container">
            <div class="heading_block style_2 text-center">
              <div class="badge text-uppercase text-primary bg-primary-subtle">CARD</div>
              <h2 class="heading_text mb-0 text-white">
                Take control your Money.
              </h2>
            </div>
            <ul class="online_banking_process unordered_list">
              <li>
                <div class="serial_number">/01</div>
                <div class="icon">
                  <img src="assets/images/icons/icon_pen.svg" alt="Icon Pen">
                </div>
                <h3 class="title">
                  Register and Create Your Account
                </h3>
                <p class="mb-0">
                  Start your journey by registering for an account and effortlessly creating it.
                </p>
              </li>
              <li>
                <div class="serial_number">/02</div>
                <div class="icon">
                  <img src="assets/images/icons/icon_web_design.svg" alt="Icon Web Design">
                </div>
                <h3 class="title">
                  Effortlessly Manage Your Virtual Cards
                </h3>
                <p class="mb-0">
                  Easily manage your virtual cards with our platform. Customize, track, and stay secure.
                </p>
              </li>
              <li>
                <div class="serial_number">/03</div>
                <div class="icon">
                  <img src="assets/images/icons/icon_pen.svg" alt="Icon Pen">
                </div>
                <h3 class="title">
                  ATM Withdrawals and Online Banking
                </h3>
                <p class="mb-0">
                  Easily withdraw cash from ATMs and conveniently manage your banking needs online.
                </p>
              </li>
              <li class="bg-primary">
                <div class="content_wrap">
                  <h3 class="title text-dark">
                    The Start of Today Begins Now
                  </h3>
                  <p class="text-dark">
                    Today marks the inception of a new journey, starting at this very moment.
                  </p>
                </div>
                <a class="btn bg-dark" href="client/pages_client_index.php">
                  <span class="btn_label">Apply Now</span>
                  <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                </a>
              </li>
            </ul>
          </div>
          <div class="decoration_item shape_shadow_1">
            <img src="assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow">
          </div>
          <div class="decoration_item shape_shadow_2">
            <img src="assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow">
          </div>
          <div class="decoration_item shape_shadow_3">
            <img src="assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow">
          </div>
          <div class="decoration_item shape_shadow_4">
            <img src="assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow">
          </div>
          <div class="decoration_item shape_shadow_5">
            <img src="assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow">
          </div>
        </section>
        <!-- Online Banking Process Section - End
        ================================================== -->

        <!-- Review Section - Start
        ================================================== -->
        <section class="review_section">
          <div class="container">
            <div class="online_banking_review bg-dark">
              <div class="row">
                <div class="col-lg-6">
                  <div class="heading_block style_2 text-white">
                    <div class="badge text-uppercase text-primary bg-primary-subtle">Testimonial</div>
                    <h2 class="heading_text mb-0">
                      What clients say about us
                    </h2>
                  </div>
                  <ul class="btns_group pt-0 pb-lg-0 unordered_list justify-content-start">
                    <li>
                      <div class="rating_block flex-column align-items-start">
                        <div class="rating_admin">
                          <img src="assets/images/clients/client_logo_9.webp" alt="Client Logo">
                        </div>
                        <div class="rating_content">
                          <div class="rating_icons">
                            <span>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star-half-stroke"></i>
                            </span>
                            <strong class="text-white ps-2">5.0</strong>
                          </div>
                          <div class="rating_counter text-light text-uppercase">26 Reviews</div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="rating_block flex-column align-items-start">
                        <div class="rating_admin">
                          <img src="assets/images/clients/client_logo_10.webp" alt="Client Logo">
                        </div>
                        <div class="rating_content">
                          <div class="rating_icons">
                            <span>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star-half-stroke"></i>
                            </span>
                            <strong class="text-white ps-2">4.8</strong>
                          </div>
                          <div class="rating_counter text-light text-uppercase">26 Reviews</div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <div class="review_carousel_2 swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="review_block_2">
                          <div class="flex_content">
                            <div class="authorbox_block">
                              <div class="author_image">
                                <img src="assets/images/avatar/avatar_image_2.webp" alt="Author Image">
                              </div>
                              <div class="author_info">
                                <h3 class="author_name text-white">Reynolds Anthony</h3>
                                <span class="author_designation text-light">Our Clients</span>
                              </div>
                            </div>
                            <div class="rating_block gap-2">
                              <div class="rating_icons">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                              </div>
                              <strong class="text-white">5.0</strong>
                            </div>
                          </div>
                          <p class="review_comment mb-0">
                            "Switching to Synox online banking has been amazing. The seamless interface makes managing finances effortless. Whether tracking, paying bills, or transferring funds, Finto exceeds expectations. Highly recommended for anyone seeking a reliable banking solution."
                          </p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="review_block_2">
                          <div class="flex_content">
                            <div class="authorbox_block">
                              <div class="author_image">
                                <img src="assets/images/avatar/avatar_image_2.webp" alt="Author Image">
                              </div>
                              <div class="author_info">
                                <h3 class="author_name text-white">Reynolds Anthony</h3>
                                <span class="author_designation text-light">Our Clients</span>
                              </div>
                            </div>
                            <div class="rating_block gap-2">
                              <div class="rating_icons">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                              </div>
                              <strong class="text-white">5.0</strong>
                            </div>
                          </div>
                          <p class="review_comment mb-0">
                            "Switching to Synox online banking has been amazing. The seamless interface makes managing finances effortless. Whether tracking, paying bills, or transferring funds, Finto exceeds expectations. Highly recommended for anyone seeking a reliable banking solution."
                          </p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="review_block_2">
                          <div class="flex_content">
                            <div class="authorbox_block">
                              <div class="author_image">
                                <img src="assets/images/avatar/avatar_image_2.webp" alt="Author Image">
                              </div>
                              <div class="author_info">
                                <h3 class="author_name text-white">Reynolds Anthony</h3>
                                <span class="author_designation text-light">Our Clients</span>
                              </div>
                            </div>
                            <div class="rating_block gap-2">
                              <div class="rating_icons">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                              </div>
                              <strong class="text-white">5.0</strong>
                            </div>
                          </div>
                          <p class="review_comment mb-0">
                            "Switching to Synox online banking has been amazing. The seamless interface makes managing finances effortless. Whether tracking, paying bills, or transferring funds, Finto exceeds expectations. Highly recommended for anyone seeking a reliable banking solution."
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel_arrows">
                      <button type="button" class="rc2-swiper-button-prev">
                        <i class="fa-regular fa-arrow-left-long"></i>
                      </button>
                      <span class="line"></span>
                      <button type="button" class="rc2-swiper-button-next">
                        <i class="fa-regular fa-arrow-right-long"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Review Section - End
        ================================================== -->

        <!-- Integrated Section - Start
        ================================================== -->
        <section class="integrated_section section_space">
          <div class="container">
            <div class="heading_block style_2 text-center">
              <div class="badge text-uppercase text-dark bg-dark-subtle">Integrated</div>
              <h2 class="heading_text mb-0">
                Mobile wallet integrations
              </h2>
            </div>

            <div class="integrated_wrapper">
              <ul class="unordered_list justify-content-center">
                <li>
                  <img src="assets/images/integrated/integrated_logo_1.webp" alt="Integrated Logo">
                  <svg width="193" height="25" viewBox="0 0 193 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path" d="M192.5 1H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                    <path class="path" d="M192.5 24.5H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                  </svg>
                  <img src="assets/images/integrated/integrated_logo_2.webp" alt="Integrated Logo">
                  <svg width="194" height="74" viewBox="0 0 194 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path" d="M168.5 73.5V26C168.5 25.4477 168.052 25 167.5 25H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                    <path class="path" d="M193 73.5V2C193 1.44772 192.552 1 192 1H0.5" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                  </svg>
                </li>
                <li>
                  <svg width="194" height="74" viewBox="0 0 194 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path" d="M25.5 73.5V26C25.5 25.4477 25.9477 25 26.5 25H194" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                    <path class="path" d="M1 73.5V2C1 1.44772 1.44772 1 2 1H193.5" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                  </svg>
                  <img src="assets/images/integrated/integrated_logo_3.webp" alt="Integrated Logo">
                  <svg width="193" height="25" viewBox="0 0 193 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path_2" d="M192.5 1H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                    <path class="path_2" d="M192.5 24.5H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                  </svg>
                  <img src="assets/images/integrated/integrated_logo_4.webp" alt="Integrated Logo">
                </li>
              </ul>
              <ul class="unordered_list justify-content-center">
                <li>
                  <img src="assets/images/integrated/integrated_logo_5.webp" alt="Integrated Logo">
                  <svg width="193" height="25" viewBox="0 0 193 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path" d="M192.5 1H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                    <path class="path" d="M192.5 24.5H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                  </svg>
                  <div class="site_logo">
                    <a class="site_link" href="services.php">
                      <img src="assets/images/site_logo/site_logo_white.svg" alt="Site Logo White">
                    </a>
                  </div>
                  <svg width="193" height="25" viewBox="0 0 193 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path_2" d="M192.5 1H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                    <path class="path_2" d="M192.5 24.5H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                  </svg>
                  <img src="assets/images/integrated/integrated_logo_6.webp" alt="Integrated Logo">
                </li>
              </ul>
              <ul class="unordered_list justify-content-center">
                <li>
                  <img src="assets/images/integrated/integrated_logo_7.webp" alt="Integrated Logo">
                  <svg width="193" height="25" viewBox="0 0 193 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path" d="M192.5 1H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                    <path class="path" d="M192.5 24.5H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                  </svg>
                  <img src="assets/images/integrated/integrated_logo_8.webp" alt="Integrated Logo">
                  <svg width="194" height="73" viewBox="0 0 194 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path" d="M168.5 0V47.5C168.5 48.0523 168.052 48.5 167.5 48.5H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                    <path class="path" d="M193 0V71.5C193 72.0523 192.552 72.5 192 72.5H0.5" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                  </svg>
                </li>
                <li>
                  <svg width="194" height="73" viewBox="0 0 194 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path" d="M25.5 0V47.5C25.5 48.0523 25.9477 48.5 26.5 48.5H194" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                    <path class="path" d="M1 0V71.5C1 72.0523 1.44772 72.5 2 72.5H193.5" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                  </svg>
                  <img src="assets/images/integrated/integrated_logo_9.webp" alt="Integrated Logo">
                  <svg width="193" height="25" viewBox="0 0 193 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path_2" d="M192.5 1H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                    <path class="path_2" d="M192.5 24.5H0" stroke="#DBDBDB" stroke-dasharray="6 6"/>
                  </svg>
                  <img src="assets/images/integrated/integrated_logo_10.webp" alt="Integrated Logo">
                </li>
              </ul>
            </div>
          </div>
        </section>
        <!-- Integrated Section - End
        ================================================== -->

        <!-- App Store Section - Start
        ================================================== -->
        <section class="appstore_section section_decoration" style="background-image: url('assets/images/backgrounds/app_store_bg_1.webp');">
          <div class="container">
            <div class="row justify-content-lg-between">
              <div class="col-lg-5 order-lg-last">
                <div class="heading_block style_2">
                  <div class="badge text-uppercase text-dark bg-dark-subtle"><i class="fa-solid fa-fire"></i> Mobile App 2.0 <b>NEW</b></div>
                  <h2 class="heading_text">
                    Download and enjoy the experience
                  </h2>
                  <p class="heading_description mb-0 text-dark">
                    Don't miss out! Download now for seamless functionalities and endless possibilities.
                  </p>
                </div>
                <ul class="btns_group appp_btn unordered_list justify-content-start pt-0">
                  <li>
                    <a class="btn bg-dark rounded-pill" href="#!">
                      <span class="btn_icon"><i class="fa-brands fa-apple"></i></span>
                      <span class="btn_label">Apple iOS</span>
                    </a>
                  </li>
                  <li>
                    <a class="btn bg-dark rounded-pill" href="#!">
                      <span class="btn_icon"><i class="fa-brands fa-android"></i></span>
                      <span class="btn_label">Android</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <div class="app_image">
                  <img src="assets/images/about/mobile_app_image.webp" alt="App Image">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- App Store Section - End
        ================================================== -->

      </main>
      <!-- Main Body - End
      ================================================== -->
</div>

<?php  require_once("inc/footer.php")?>
<?php
} ?>