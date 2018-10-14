<div class="header">
    <div class="upper">
      <div class="container">
        <div class="text-above"><b>SAYFRESH</b></div>
      </div>
    </div>
    <div class="mobile-menu">
      <div class="mobile-menu-container">
        <i class="fa fa-menu"></i>
        <span>Menu</span>
      </div>
    </div>
    <div class="logo-mobile">
      <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url(); ?>\assets\css\public\default\img\logonurani.png">
      </a>
    </div>
    <div class="header-menu" id="navbar">
      <div class="container">
        <div class="logo">
          <a href="<?php echo base_url(); ?>">
              <img src="<?php echo base_url(); ?>\assets\css\public\default\img\logonurani.png">
          </a>
        </div>
        <div id="google_translate_element"></div>
        <ul class="nav navbar-nav navbar-center" align="center">
           <li class="list-menu"><a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url(); ?>">Home</a></li>
           <li class="list-menu"><a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url("profile"); ?>">Our Profile</a></li>
           <li class="list-menu category">
              <a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url("ourproduct"); ?>">Products</a>
           </li>
           <li class="list-menu"><a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url("news"); ?>">News/Event</a></li>
           <li class="list-menu"><a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url("faq"); ?>">FAQ</a></li>
           <li class="list-menu"><a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url("howto"); ?>">How to Order</a></li>
           <li class="list-menu"><a data-toggle="" data-target=".navbar-collapse" class="page-scroll handlee" href="<?php echo site_url("contact"); ?>">Contact Us</a></li>
        </ul>
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
