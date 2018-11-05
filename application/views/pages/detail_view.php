<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="faq container">
	<div class="page-header">
	  	<h1>Detail Product</h1>
				
	</div>
	<div class="item">
		<div class="news-desc">
			<img src="<?php echo base_url(); ?>assets/uploads/banner/<?php echo $detail->banner; ?>">
			<h1><?php echo $detail->nama; ?></h1>
			<?php if($detail->harga_jual > 0 ){ ?>
				<span class="old"><del><?php echo '<b>Rp ' . number_format($detail->harga, 0, ',', '.') . '</b>' ?></del></span>
				<span class="final"><?php echo '<b>Rp ' . number_format($detail->harga_jual, 0, ',', '.') .'/'.$detail->satuan. '</b>'?></span>
			<?php }else{ ?>
				<span class="old"><?php echo '<b>Rp ' . number_format($detail->harga, 0, ',', '.') .'/'.$detail->satuan. '</b>' ?></span>
			<?php } ?>
			<p><?php echo $detail->deskripsi; ?></p>
		</div>
	</div>
</div>