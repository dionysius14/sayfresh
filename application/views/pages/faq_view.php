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
							<span>
								Pertanyaan : <?php echo $fq->faq_ask; ?><br/>
								Jawaban :<?php echo $fq->faq_answer; ?><br/><br/>
							</span>
						</div>
				<?php } ?>
	</div>
</div>