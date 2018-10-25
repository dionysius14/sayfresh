<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="faq container">
	<div class="page-header">
	  	<h1>Frequently Asked Question</h1>
				
	</div>
	<div class="item">
		<?php foreach($faq as $fq){?>
				<div class="text">
					<h2><?php echo $fq->faq_ask; ?></h2>
					<p>
						<?php echo $fq->faq_answer; ?>
					</p>
				</div>
		<?php } ?>
	</div>
</div>