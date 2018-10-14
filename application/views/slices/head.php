<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<?php echo chrome_frame(); ?>  
<link rel="icon" href="<?php echo base_url(); ?>/assets/img/icons/as.png" type="image/x-icon" />
<?php echo view_port(); ?>
<?php echo apple_mobile(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<?php
if (!isset($folder))
    $folder = "public/default/";
echo add_css($folder . 'bootstrap');
echo add_css($folder . 'bootstrap-theme');
echo add_css($folder . 'font-awesome.min');
echo add_css($folder . 'main');
echo add_css($folder . 'flexslider');
echo add_css($folder . 'preloader');
echo add_css($folder . 'animate');
echo add_css($folder . 'sweetalert2.min');
echo add_css($folder . 'jquery.countdown');
echo add_css($folder . 'photobox');
echo add_css($folder . 'style');
echo add_css($folder . 'jquery.bxslider');
echo add_css($folder . 'general');
echo add_css($folder . 'jquery.fancybox.min');
echo add_js($folder . 'bootstrap.min');
echo add_js($folder . 'jquery.countdown.min');
echo add_js($folder . 'jquery.flexslider');
echo add_js($folder . 'jquery.sticky');
echo add_js($folder . 'jquery.easing.min');
echo add_js($folder . 'parallax.min');
echo add_js($folder . 'sweetalert2.min');
echo add_js($folder . 'jquery.photobox');
echo add_js($folder . 'preloader');
echo add_js($folder . 'jquery.bxslider');
echo add_js($folder . 'jquery.fancybox.min');
?>
<link href="https://fonts.googleapis.com/css?family=Dosis:400,700|Pacifico|Handlee|Parisienne|Sacramento|Yanone+Kaffeesatz|Raleway:400,500|Josefin+Sans" rel="stylesheet">

<script type="text/javascript">
    
</script>