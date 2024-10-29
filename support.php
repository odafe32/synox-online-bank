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
<title>Support  | Synox - Online Banking</title>
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

        <!-- Page Header - Start
        ================================================== -->
        <section class="page_header text-center bg-dark section_decoration overflow-hidden" style="background-image: url('assets/images/backgrounds/page_header_bg_1.webp');">
          <div class="container">
            <h1 class="page_title text-white">Contact Us</h1>
            <ul class="breadcrumb_nav unordered_list justify-content-center">
              <li><a href="index-2.html">Home</a></li>
              <li class="active"><a href="#!">Contact Us</a></li>
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

        <!-- Contact Section - Start
        ================================================== -->
        <section class="contact_section section_space bg-light">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="comment_form p-lg-5">
                  <div class="heading_block">
                    <h2 class="heading_text">
                      Send us a Message
                    </h2>
                    <p class="heading_description mb-0">
                      Give us chance to serve and bring magic to your Finance.
                    </p>
                  </div>
                  <form action="#">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="input_title" for="input_name">Name<sup>*</sup></label>
                          <input id="input_name" class="form-control" type="text" name="name" placeholder="Carlo Castillo" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="input_title" for="input_email">Email<sup>*</sup></label>
                          <input id="input_email" class="form-control" type="email" name="email" placeholder="alma.lawson@example.com" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label class="input_title" for="input_phone">Phone<sup>*</sup></label>
                          <input id="input_phone" class="form-control" type="tel" name="phone" placeholder="+88 (0) 101 0000 000" required>
                        </div>
                        <div class="form-group">
                          <label class="input_title" for="input_message">Cover Letter<sup>*</sup></label>
                          <textarea id="input_message" class="form-control" name="message" placeholder="Write about your self..." required></textarea>
                        </div>
                        <button class="btn text-dark" type="submit">
                          <span class="btn_label">Send Message</span>
                          <span class="btn_icon ml-10"><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="#012A2B" />
                          </svg></span>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact_info_box p-5">
                  <h3 class="heading_text">Contact Info</h3>
                  <ul class="iconlist_block unordered_list_block">
                    <li>
                      <a href="tel:+8801010000000">
                        <span class="iconlist_icon">
                          <img src="assets/images/icons/icon_calling_3.svg" alt="Icon Calling">
                        </span>
                        <span class="iconlist_text">+(234) 905 444 4075</span>
                      </a>
                    </li>
                    <li>
                      <a href="mailto:synox@examplemail.com">
                        <span class="iconlist_icon">
                          <img src="assets/images/icons/icon_email_3.svg" alt="Icon Email">
                        </span>
                        <span class="iconlist_text">contact@synox.com</span>
                      </a>
                    </li>
                  </ul>
                  <ul class="social_icons_block unordered_list mb-0">
                    <li>
                      <a aria-label="Twitter X" href="#!">
                        <svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.92704 6.35148L14.5111 0H13.1879L8.33921 5.5149L4.4666 0H0L5.85615 8.3395L0 15H1.32333L6.44364 9.17608L10.5334 15H15L8.92671 6.35148H8.92704ZM7.11456 8.41297L6.52121 7.58255L1.80014 0.974755H3.83269L7.64265 6.30746L8.236 7.13788L13.1885 14.0696H11.156L7.11456 8.41329V8.41297Z"></path>
                        </svg>
                      </a>
                    </li>
                    <li><a aria-label="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a aria-label="Linkedin" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                  </ul>
                  <hr>
                  <ul class="office_location iconlist_block unordered_list_block mb-0">
                    <li>
                      <span class="iconlist_text">
                        <strong class="text-dark d-block">Nigeria office:</strong>Nasarawa State Keffi
                      </span>
                    </li>

                  </ul>
                  <hr>
                  <ul class="iconlist_block unordered_list_block mb-0">
                    <li>
                      <span class="iconlist_text">
                        <strong class="text-dark d-block">Our Office Ppen Time:</strong> Mon - Sat : 8.00-5.00 <mark class="d-block text-danger">Sunday : Closed</mark>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Contact Section - End
        ================================================== -->

        <!-- Google Map - Start
        ================================================== -->
        <div class="gmap_canvas bg-light">
          <iframe src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
        </div>
        <!-- Google Map - End
        ================================================== -->

      </main>
      <!-- Main Body - End
      ================================================== -->
<?php  require_once("inc/footer.php")?>
<?php
} ?>