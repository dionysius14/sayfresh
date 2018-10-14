<div class="footer-container">
    <div class="footer">
		<div class="row">
			<div class="head-office">
				<h3>HEAD OFFICE:</h3>			
				<div>
					<?php echo $profile->headoffice?>
				</div>
			</div>
			<div class="branch">
				<?php foreach ($branch as $bc){ ?>
					<div class="branch-item">
						<h3>BRANCH <br/> <?php echo $bc->branch_nama?>:</h3>			
						<div>
							<?php echo $bc->branch_alamat?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<p class="copy"></p>
			<div class="copyright">
				<small>Copyright © 2018 CV. NURANI JAYA. All Rights Reserved.</small>
			</div>
		</div>
    </div>
</div>