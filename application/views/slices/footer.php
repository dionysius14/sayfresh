<div class="footer-container">
    <div class="footer">
    	<div class="container">
			<div class="row about">
				<h3>About Sayfresh</h3>			
				<div>
					<?php echo $profile->overview; ?>
				</div>
			</div>
			<div class="row contact">
				<h3>Contact</h3>			
				<div>
					<ul>
						<li>
							<span>Please contact Us below for more detail information.</span>
						</li>
						<li>
							<i class="icon-phone"></i><span><?php echo $profile->phone; ?></span>
						</li>
						<li>
							<i class="icon-globe"></i><span><?php echo $profile->headoffice; ?></span>
						</li>
					</ul>
				</div>
			</div>
    	</div>
    </div>
    <div class="copyright">Copyright Sayfresh (2018)</div>
</div>