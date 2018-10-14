<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="homepage">
	<div class="homepage-container">
		<div class="slider">
			<ul class="bxslider">
				<?php foreach($slider as $sld){?>
				<li><a href="<?php echo $sld->banner_link; ?>"><img src="<?php echo base_url(); ?>assets/uploads/slider/<?php echo $sld->banner_foto; ?>" /></a></li>
				<?php } ?>
			</ul>
		</div>	
		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery('.bxslider').bxSlider({
					auto: true,
					speed: 700
				});
			});
		</script>

		<div class="row">
			<h3>Testimonial</h3>
				<?php foreach($testimonial as $ts){?>
					<div class="gkImage">
						<div class="image">
							<a href="<?php echo base_url(); ?>assets/uploads/testimonial/<?php echo $ts->testimonial_foto; ?>">
								<img src="<?php echo base_url(); ?>assets/uploads/testimonial/<?php echo $ts->testimonial_foto; ?>" alt="">
							</a>
						</div>
						<div class="text">
							<span>
								<?php echo $ts->testimonial_nama; ?>
								<?php echo $ts->testimonial_ket; ?>
							</span>
						</div>
					</div>
				<?php } ?>
		</div>
		<div class="row">
			<h3>Download Catalog</h3>
				<a href="<?php echo base_url(); ?>assets/uploads/catalog/<?php echo $profile->catalog; ?>" target="blank" >File PDF</a>
		</div>
		<div class="ourproducts">
			<h3>Our Latest Products</h3>
			<div class="active">
				<?php foreach($latest as $dtl){?>
					<div class="gkImage">
						<div class="image">
							<a href="<?php echo base_url(); ?>assets/uploads/banner/<?php echo $dtl->banner; ?>">
								<img src="<?php echo base_url(); ?>assets/uploads/banner/<?php echo $dtl->banner; ?>" alt="">
							</a>
						</div>
						<div class="text">
							<span>
								<?php echo $dtl->nama; ?>
							</span>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="social">
			<ul>
				<li><a class="fb" href="<?php echo $profile->link_fb; ?>" ></a></li>
				<li><a class="ig" href="<?php echo $profile->link_ig; ?>" ></a></li>
				<li><a class="whatsapp" href="<?php echo $profile->link_wa; ?>" ></a></li>
			</ul>
		</div>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function(){
        $('.ourproducts .active').each(function(){
	        var imageHeight = 0;
	        var imageText = 0;
	        $(this).find('.gkImage .image img').each(function(){
	            var w = $(this).height();
	            if (w > imageHeight) { 
	              imageHeight = w;
	            }
	        });
	        $(this).find('.gkImage .text span').each(function(){
	            var y = $(this).height();
	            if (y > imageText) { 
	              imageText = y;
	            }
	        });
	        if (imageHeight) {
	          $(this).find('.image').css({height:imageHeight});
	          $(this).find('.text').css({height:imageText});
	        }
	    });   
	});
</script>