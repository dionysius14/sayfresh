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
					speed: 700,
					pager: false
				});
			});
		</script>
		<div class="container">
		</div>
		<div class="why">
			<div class="container">
				<h1>Why Choose Sayfresh?</h1>
					<div class="side">
						<ul>
							<li>
								<div class="icon">
									<img src="<?php echo base_url(); ?>\assets\css\public\default\img\homepage\leaf.png">
								</div>
								<h2 style=" color: ;">Quality</h2>
								<div class="smue-service-box-content-section">
									<p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, type specimen book.</p>
								</div>
							</li>
							<li>
								<div class="icon">
									<img src="<?php echo base_url(); ?>\assets\css\public\default\img\homepage\so-logo.png">
								</div>
								<h2 style=" color: ;">Smart Logistics</h2>
								<div class="smue-service-box-content-section">
									<p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, type specimen book.</p>
								</div>
							</li>
							<li>
								<div class="icon">
									<i class="fa fa-truck"></i>
								</div>
								<h2 style=" color: ;">Free Delivery</h2>
								<div class="smue-service-box-content-section">
									<p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, type specimen book.</p>
								</div>
							</li>
							<li>
								<div class="icon">
									<i class="fa fa-users"></i>
								</div>
								<h2 style=" color: ;">Seasoned Team</h2>
								<div class="smue-service-box-content-section">
									<p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, type specimen book.</p>
								</div>
							</li>
						</ul>
					</div>
					<div class="side">
						<img src="<?php echo base_url(); ?>\assets\css\public\default\img\homepage\service.png">
					</div>
				</div>
			</div>

			<div class="products">
				<div class="container">
					<div class="title">
						<h2>Products</h2>
					</div>
					<?php foreach($latest as $dtl){?>
					<div class="gkImage">
						<div class="image" style="background-image: url(<?php echo base_url(); ?>assets/uploads/banner/<?php echo $dtl->banner; ?>)">
						</div>
						<a href="<?php echo base_url(); ?>assets/uploads/banner/<?php echo $dtl->banner; ?>">
							<!--div class="button">Order Now</div-->
						</a>
						<div class="text">
							<div class="prod-name">
								<h4><?php echo $dtl->nama; ?></h4>
							</div>
							<div class="prod-price">
							<?php if($dtl->harga_jual > 0 ){ ?>
								<span class="old"><del><?php echo '<b>Rp ' . number_format($dtl->harga, 0, ',', '.') . '</b>' ?></del></span>
								<span class="final"><?php echo '<b>Rp ' . number_format($dtl->harga_jual, 0, ',', '.') . '</b>'?></span>
							<?php }else{ ?>
								<span class="old"><?php echo '<b>Rp ' . number_format($dtl->harga, 0, ',', '.') . '</b>' ?></span>
							<?php } ?>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>

			<div class="testimonial">
				<div class="container">
					<h3>Testimonial</h3>
					<?php foreach($testimonial as $ts){?>
					<div class="gkImage">
						<div class="image">
							<a href="<?php echo base_url(); ?>assets/uploads/testimonial/<?php echo $ts->testimonial_foto; ?>">
								<div>
									<img src="<?php echo base_url(); ?>assets/uploads/testimonial/<?php echo $ts->testimonial_foto; ?>" alt="">
								</div>
							</a>
						</div>
						<div class="text">
							<div class="testi-name">
								<h4><?php echo $ts->testimonial_nama; ?></h4>
							</div>
							<p>
								<?php 
									echo $ts->testimonial_ket; 
								?>
							</p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
	</div>
</div>

<!-- <script type="text/javascript">
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
</script> -->