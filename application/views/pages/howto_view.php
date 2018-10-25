<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="howto container">
	<div class="page-header">
	  	<h1>How to Order</h1>
	</div>
	<div class="big-image">
		<img src="<?php echo base_url(); ?>\assets\css\public\default\img\how-to.png">
	</div>
	<div class="item">
	<h2>Steps</h2>
	<?php $i = 1;
	foreach($howto as $ht){?>
		<div class="text">
			<span>
				Step <?php echo $i; ?> <?php echo $ht->howto_step; ?><br/>
			</span>
		</div>
	<?php $i++; } ?>
	</div>
</div>