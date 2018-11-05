<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="detailproduct container">
	<div class="side">
		<img src="<?php echo base_url(); ?>assets/uploads/banner/<?php echo $detail->banner; ?>">
	</div>
	<div class="side detail">
		<h1><?php echo $detail->nama; ?></h1>
		<?php if($detail->harga_jual > 0 ){ ?>
			<span class="old"><del><?php echo '<b>Rp ' . number_format($detail->harga, 0, ',', '.') . '</b>' ?></del></span>
			<span class="final"><?php echo '<b>Rp ' . number_format($detail->harga_jual, 0, ',', '.') .'/'.$detail->satuan. '</b>'?></span>
		<?php }else{ ?>
			<span class="final"><?php echo '<b>Rp ' . number_format($detail->harga, 0, ',', '.') .'/'.$detail->satuan. '</b>' ?></span>
		<?php } ?>
		<p><?php echo $detail->deskripsi; ?></p>
	</div>

	<div class="back">
		<span><a href="<?php echo site_url("ourproduct"); ?>">Back</a></span>
	</div>
</div>