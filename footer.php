		<?php
		$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $row) {
			$logo 						 = $row['logo'];
			$footer_about                = $row['footer_about'];
			$footer_copyright            = $row['footer_copyright'];
			$contact_address             = $row['contact_address'];
			$contact_email               = $row['contact_email'];
			$contact_phone               = $row['contact_phone'];
			$contact_fax                 = $row['contact_fax'];
			$total_recent_news_footer    = $row['total_recent_news_footer'];
			$total_popular_news_footer   = $row['total_popular_news_footer'];
			$total_recent_news_sidebar   = $row['total_recent_news_sidebar'];
			$total_popular_news_sidebar  = $row['total_popular_news_sidebar'];
			$total_recent_news_home_page = $row['total_recent_news_home_page'];
		}
		?>



	</div> 

		<footer id="footer" class="section section-with-shape-divider border-0 custom-bg-lighten-grey-1 pt-5 pb-0 m-0">
			<div class="shape-divider shape-divider-reverse-x" style="height: 120px;">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
					<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
				</svg>
			</div>
			<div class="container pt-lg-5 mt-5">
				<div class="row">
					<div class="col-lg-3 mb-5 mb-lg-0">
						<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $logo; ?>" class="img-fluid" width="123" height="32" alt=""></a>
						<p><?php echo nl2br($footer_about); ?></p>
						<ul class="social-icons social-icons-medium">


							<?php
							// Getting and showing all the social media icon URL from the database
							$statement = $pdo->prepare("SELECT * FROM tbl_social");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							foreach ($result as $row) {
								if ($row['social_url'] != '') {
									echo '<li class="social-icons"><a href="' . $row['social_url'] . '" target="_blank"><i class="fab ' . $row['social_icon'] . '"></i></a></li>';
								}
							}
							?>
						</ul>
					</div>
					<div class="col-lg-4 offset-lg-1 mb-5 mb-lg-0">
						<h4 class="text-color-light font-weght-bold positive-ls-2 custom-font-size-2">SON YAZILAR</h4>
						<div class="row">
							<div class="col-md-12">
								<?php
								$i = 0;
								$statement = $pdo->prepare("SELECT * FROM tbl_news ORDER BY news_id DESC");
								$statement->execute();
								$result = $statement->fetchAll(PDO::FETCH_ASSOC);
								foreach ($result as $row) {
									$i++;
									if ($i > $total_recent_news_footer) {
										break;
									}
								?>
									<div class="news-item">
										<div class="news-title"><a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>"><?php echo $row['news_title']; ?></a></div>
									</div>
								<?php
								}
								?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 offset-lg-1 mb-5 mb-lg-0">
						<h4 class="text-color-light font-weght-bold positive-ls-2 custom-font-size-2">İLETİŞİM</h4>
						<ul class="list list-unstyled list-inline custom-list-style-1 mb-0">
							<li><i class="fa fa-map-marker"></i> <?php echo $contact_address; ?></li>
							<li><a href="tel:<?php echo $contact_phone; ?>"><i class="fa fa-phone"></i> <?php echo $contact_phone; ?></a></li>
							<li><a href="mailto:<?php echo $contact_email; ?>"><i class="fa fa-envelope"></i> <?php echo $contact_email; ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright custom-bg-lighten-grey-1 mt-5 pb-5">
				<div class="container custom-footer-top-light-border pt-4">
					<div class="row">
						<div class="col">
							<p class="text-center text-3 mb-0"><?php echo $footer_copyright; ?></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

		</div>


		<!-- Vendor -->
		<script src="<?php echo BASE_URL; ?>assets/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/lazysizes/lazysizes.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/vide/jquery.vide.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/vivus/vivus.min.js"></script>

		<!-- Revolution Slider Scripts -->
		<script src="<?php echo BASE_URL; ?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo BASE_URL; ?>assets/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php echo BASE_URL; ?>assets/js/view.contact.js"></script>

		<!-- Demo -->
		<script src="<?php echo BASE_URL; ?>assets/js/demo-industry-factory.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo BASE_URL; ?>assets/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo BASE_URL; ?>assets/js/theme.init.js"></script>

	</body>

</html>