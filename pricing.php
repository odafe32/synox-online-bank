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
<title>Pricing | Synox - Online Banking</title>
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

   <main class="page_content">

        <!-- Page Header - Start
        ================================================== -->
        <section class="page_header text-center bg-dark section_decoration overflow-hidden" style="background-image: url('assets/images/backgrounds/page_header_bg_1.webp');">
          <div class="container">
            <h1 class="page_title text-white">Our Pricing</h1>
            <ul class="breadcrumb_nav unordered_list justify-content-center">
              <li><a href="index-2.html">Home</a></li>
              <li class="active"><a href="#!">Our Pricing</a></li>
            </ul>
          </div>
          <div class="decoration_item shape_nate">
            <img src="assets/images/shapes/shape_nate.svg" alt="Shape Nate">
          </div>
          <div class="decoration_item shape_dollar_1 wow fadeInUp" data-wow-delay=".2s">
            <img src="assets/images/shapes/shape_dollar_1.webp"  data-parallax='{"y" : 100, "smoothness": 10}' alt="Shape Dollar">
          </div>
          <div class="decoration_item shape_dollar_2 wow fadeInUp" data-wow-delay=".2s">
            <img src="assets/images/shapes/shape_dollar_2.webp" data-parallax='{"y" : 100, "smoothness": 10}' alt="Shape Dollar">
          </div>
          <div class="decoration_item shape_dollar_3 wow fadeInUp" data-wow-delay=".3s">
            <img src="assets/images/shapes/shape_dollar_3.webp" data-parallax='{"y" : -100, "smoothness": 10}' alt="Shape Dollar">
          </div>
          <div class="decoration_item shape_dollar_4 wow fadeInUp" data-wow-delay=".3s">
            <img src="assets/images/shapes/shape_dollar_4.webp" data-parallax='{"y" : -100, "smoothness": 10}' alt="Shape Dollar">
          </div>
          <div class="decoration_item shape_pattern_1">
            <img src="assets/images/shapes/breadcrumb_shape_pattern_1.svg" alt="Shape Pattern">
          </div>
          <div class="decoration_item shape_pattern_2">
            <img src="assets/images/shapes/breadcrumb_shape_pattern_2.svg" alt="Shape Pattern">
          </div>
        </section>
        <!-- Page Header - End
        ================================================== -->

        <!-- Policy Section - Start
        ================================================== -->
        <section class="policy_section section_space">
          <div class="container">
            <div class="heading_block">
              <div class="row justify-content-lg-between">
                <div class="col-lg-5">
                  <h3 class="heading_text mb-0">
                    Celebrating Features discover What Sets Us
                  </h3>
                </div>
                <div class="col-lg-5">
                  <p class="heading_description mb-0">
                    Our team of experts, with their diverse backgrounds and specialized  skills, collaborate seamlessly to deliver tailored solutions that exceed  expectations, Furthermore, our cutting-edge.
                  </p>
                </div>
              </div>
            </div>
            <ul class="policy_items process_steps_block pt-4 unordered_list justify-content-lg-between">
              <li>
                <div class="step_block_icon">
                  <img src="assets/images/icons/icon_doc.svg" alt="icon Doc">
                </div>
                <h3 class="step_block_title">Rich Documentation</h3>
                <p class="mb-0">
                  Our commitment to providing you with unparalleled support.
                </p>
              </li>
              <li>
                <div class="step_block_icon">
                  <img src="assets/images/icons/icon_chart_5.svg" alt="icon Chart">
                </div>
                <h3 class="step_block_title">Fastest Delivery</h3>
                <p class="mb-0">
                  Fastest Delivery typically refers to service or process that emphasizes.
                </p>
              </li>
              <li>
                <div class="step_block_icon">
                  <img src="assets/images/icons/icon_headphone_2.svg" alt="icon Headphone">
                </div>
                <h3 class="step_block_title">Lifetime Support</h3>
                <p class="mb-0">
                  Lifetime Support refers to a by a product or service provider.
                </p>
              </li>
            </ul>
          </div>
        </section>
        <!-- Policy Section - End
        ================================================== -->

        <!-- Service Section - Start
        ================================================== -->
        <section class="service_section section_space section_decoration bg-secondary">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-7">
                <div class="heading_block text-center text-white">
                  <h2 class="heading_text">
                    We Offered Best Pricing
                  </h2>
                  <p class="heading_description mb-0 text-muted">
                    We're here to assist with your financial goals. From investments to retirement planning, count on us for expert guidance
                  </p>
                </div>
              </div>
            </div>

            <div class="btns_group text-center pt-0">
              <button class="pricing_toggle_btn text-white" type="button">
                <span><small class="badge bg-danger">30%</small> Billed Annually</span>
                <span class="switch_btn bg-dark"></span>
                <span>Billed Monthly</span>
              </button>
            </div>

            <div class="pricing_blocks_wrapper">
              <div class="pricing_block bg-dark style_2">
                <div class="pricing_amount">
                  <div class="pricing_amount_monthly">
                    <span>$29.00</span>
                    <small>Per Month</small>
                  </div>
                  <div class="pricing_amount_yearly">
                    <span>$19.00</span>
                    <small>Month (billed annually)</small>
                  </div>
                </div>
                <div class="pricing_info">
                  <h3 class="pricing_title text-white mb-0">
                    Basic plan: Financial Assessment
                  </h3>
                  <hr>
                  <a class="btn bg-secondary w-100 m-0" href="support.php">
                    <span class="btn_label">Get The Plan Now</span>
                    <span class="btn_icon"><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="white" />
                    </svg></span>
                  </a>
                </div>
                <div class="pricing_features text-muted">
                  <h3 class="features_title">Featured Include:</h3>
                  <ul class="iconlist_block unordered_list_block">
                    <li>
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Financial Planning</span>
                    </li>
                    <li>
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Investment Management</span>
                    </li>
                    <li>
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Retirement Planning</span>
                    </li>
                    <li class="del">
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Tax Planning</span>
                    </li>
                    <li class="del">
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Risk Management</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="pricing_block bg-dark style_2">
                <div class="pricing_amount bg-primary text-dark">
                  <div class="pricing_amount_monthly">
                    <span>$59.00</span>
                    <small>Per Month</small>
                  </div>
                  <div class="pricing_amount_yearly">
                    <span>$49.00</span>
                    <small>Month (billed annually)</small>
                  </div>
                </div>
                <div class="pricing_info">
                  <h3 class="pricing_title text-white mb-0">
                    Team plan: Personalized Financial Plan
                  </h3>
                  <hr>
                  <a class="btn bg-primary text-dark w-100 m-0" href="support.php">
                    <span class="btn_label">Get The Plan Now</span>
                    <span class="btn_icon"><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="#012A2B" />
                    </svg></span>
                  </a>
                </div>
                <div class="pricing_features text-muted">
                  <h3 class="features_title">Featured Include:</h3>
                  <ul class="iconlist_block unordered_list_block">
                    <li>
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Financial Planning</span>
                    </li>
                    <li>
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Investment Management</span>
                    </li>
                    <li>
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Retirement Planning</span>
                    </li>
                    <li>
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Tax Planning</span>
                    </li>
                    <li class="del">
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Risk Management</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="pricing_block bg-dark style_2">
                <div class="pricing_amount">
                  <div class="pricing_amount_monthly">
                    <span>$119.00</span>
                    <small>Per Month</small>
                  </div>
                  <div class="pricing_amount_yearly">
                    <span>$99.00</span>
                    <small>Month (billed annually)</small>
                  </div>
                </div>
                <div class="pricing_info">
                  <h3 class="pricing_title text-white mb-0">
                    Enterprise plan: Ongoing Support and Review
                  </h3>
                  <hr>
                  <a class="btn bg-secondary w-100 m-0" href="support.php">
                    <span class="btn_label">Get The Plan Now</span>
                    <span class="btn_icon"><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="white" />
                    </svg></span>
                  </a>
                </div>
                <div class="pricing_features text-muted">
                  <h3 class="features_title">Featured Include:</h3>
                  <ul class="iconlist_block unordered_list_block">
                    <li>
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Financial Planning</span>
                    </li>
                    <li>
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Investment Management</span>
                    </li>
                    <li>
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Retirement Planning</span>
                    </li>
                    <li>
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Tax Planning</span>
                    </li>
                    <li>
                      <span class="iconlist_icon"><i class="fa-regular fa-check"></i></span>
                      <span class="iconlist_text">Risk Management</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="decoration_item shape_lines_flow_2">
            <img src="assets/images/shapes/shape_nate_8.svg" alt="Shape Line Flow">
          </div>
          <div class="decoration_item shape_lines_flow_3">
            <img src="assets/images/shapes/shape_nate_10.svg" alt="Shape Line Flow">
          </div>
          <div class="decoration_item shape_lines_flow_4">
            <img src="assets/images/shapes/shape_nate_7.svg" alt="Shape Line Flow">
          </div>
          <div class="decoration_item shape_lines_flow_5">
            <img src="assets/images/shapes/shape_nate_11.svg" alt="Shape Line Flow">
          </div>
          <div class="decoration_item shape_dollar_4" data-parallax='{"y" : -100, "smoothness": 10}'>
            <img src="assets/images/shapes/shape_dollar_2.webp" alt="Shape Dollar">
          </div>
          <div class="decoration_item shape_dollar_5" data-parallax='{"y" : 100, "smoothness": 10}'>
            <img src="assets/images/shapes/shape_dollar_3.webp" alt="Shape Dollar">
          </div>
        </section>
        <!-- Service Section - End
        ================================================== -->

      </main>
      <!-- Main Body - End
      ================================================== -->
<?php  require_once("inc/footer.php")?>
<?php
} ?>