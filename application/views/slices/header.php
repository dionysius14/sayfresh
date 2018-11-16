<div class="header">
    <div class="upper">
      <div class="container">
        <div class="text-above">
          <a class="whatsapp" target="blank" >
<!--             <span class="whatsapp-icon">
            <strong><?php echo $profile->phone; ?></strong></span> -->
            <strong>PT. PANGAN SEHAT NUSANTARA</strong>
          </a>
        </div>
        <div class="social">
          <ul>
            <li><a class="ig" target="blank" href="<?php echo $profile->link_ig; ?>" ><i class="icon-instagram"></i></a></li>
            <li><a class="fb" target="blank" href="<?php echo $profile->link_fb; ?>" ><i class="icon-facebook"></i></a></li>
          </ul>
        </div>
        <!--div id="google_translate_element"></div-->
      </div>
    </div>
    <div class="middle">
      <div class="container">
        <div class="logo">
          <a href="<?php echo base_url(); ?>">
              <img src="<?php echo base_url(); ?>\assets\css\public\default\img\sayfresh-logo.png">
          </a>
        </div>
        <div class="info">
          <ul>
            <li class="address">
              <i class="icon-phone"></i>
              <span>
                <strong>Whatsapp</strong>
                <a class="whatsapp" target="blank" href="<?php echo $profile->link_wa; ?>" >
                  +<?php echo $profile->phone; ?>
                </a>
              </span>
            </li>
            <li class="email">
              <i class="icon-envelope"></i>
              <span><strong>Email Address</strong><p><?php echo $profile->email; ?></p></span>
            </li>
            <li class="hours">
              <i class="icon-time"></i>
              <span><strong>Working Time</strong><p><?php echo $profile->working_time; ?></p></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="header-menu" id="navbar">
      <div class="container">
        <div class="logo-mobile">
          <a href="<?php echo base_url(); ?>">
              <img src="<?php echo base_url(); ?>\assets\css\public\default\img\sayfresh-logo.png">
          </a>
        </div>
        <div class="mobile-menu">
          <div class="mobile-menu-container">
            <i class="icon-list-ul"></i>
            <span>Menu</span>
          </div>
        </div>
        <ul class="nav navbar-nav navbar-center" align="center">
           <li class="list-menu"><a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url(); ?>">Home</a></li>
           <li class="list-menu about">
              <a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url("profile"); ?>">Our Profile</a>
           <li class="list-menu category">
              <a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url("ourproduct"); ?>">Our Products</a>
           </li>
           <li class="list-menu category">
              <a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url("news"); ?>">News and Event</a>
           </li>
           <li class="list-menu category">
              <a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url("howto"); ?>">How to Order</a>
           </li>
           <li class="list-menu category">
              <a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url("faq"); ?>">FAQ</a>
           </li>
           <li class="list-menu category">
              <a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url("contact"); ?>">Contact Us</a>
           </li>
        </ul>
        <div class="download">
          <ul>
            <li>
              <a target="blank" href="<?php echo base_url(); ?>assets/uploads/catalog/<?php echo $profile->catalog; ?>">
                <span>Download Katalog</span>
              </a>
            </li>
            <li>
              <?php echo form_open('ourproduct/search', 'id="form_add"'); ?>
              <input type="text" id="filter" name="filter" class="form-control" placeholder="Cari Produk">
              <?php echo form_close(); ?>
            </li>
          </ul>
        </div>
        <div class="info">
          <ul>
            <li class="address">
              <i class="icon-phone"></i>
              <span>
                <strong>Whatsapp</strong>
                <a class="whatsapp" target="blank" href="<?php echo $profile->link_wa; ?>" >
                  +<?php echo $profile->phone; ?>
                </a>
              </span>
            </li>
            <li class="email">
              <i class="icon-envelope"></i>
              <span><strong>Email Address</strong><p><?php echo $profile->email; ?></p></span>
            </li>
            <li class="hours">
              <i class="icon-time"></i>
              <span><strong>Working Time</strong><p><?php echo $profile->working_time; ?></p></span>
            </li>
          </ul>
        </div>
      </div>
   </div>
</div>

<script type="text/javascript">
  if ($(window).width() > 768){
    // When the user scrolls the page, execute myFunction 
    window.onscroll = function() {myFunction()};

    // Get the navbar
    var navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  }
  $(document).ready(function ($) {
      var url = window.location.href;
      var activePage = url;
      $('.navbar-nav .list-menu > a').each(function () {
          var linkPage = this.href;

          if (activePage == linkPage) {
              $(this).closest("li").addClass("active");
          }
      });
      $('.mobile-menu').click(function () {
        $('.header-menu').toggleClass('active');
        $('.header .header-menu .info').toggleClass('active');
        $(this).toggleClass('active');
      });

      if ($(window).width() < 481){
        $('.list-menu.category').click(function () {
            $('.list-menu.category .sub-category').toggleClass("active");
        });
        $('.header .header-menu #google_translate_element').insertBefore( "body > .header .mobile-menu" );
      }
  });

</script>
