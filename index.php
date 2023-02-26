<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$total_recent_news_home_page = $row['total_recent_news_home_page'];
	$home_title_service          = $row['home_title_service'];
	$home_subtitle_service       = $row['home_subtitle_service'];
	$home_status_service         = $row['home_status_service'];
	$home_title_department       = $row['home_title_department'];
	$home_subtitle_department    = $row['home_subtitle_department'];
	$home_status_department      = $row['home_status_department'];
	$home_title_doctor           = $row['home_title_doctor'];
	$home_subtitle_doctor        = $row['home_subtitle_doctor'];
	$home_status_doctor          = $row['home_status_doctor'];
	$home_title_pricing          = $row['home_title_pricing'];
	$home_subtitle_pricing       = $row['home_subtitle_pricing'];
	$home_status_pricing         = $row['home_status_pricing'];
	$home_title_testimonial      = $row['home_title_testimonial'];
	$home_subtitle_testimonial   = $row['home_subtitle_testimonial'];
	$home_status_testimonial     = $row['home_status_testimonial'];
	$home_title_news             = $row['home_title_news'];
	$home_subtitle_news          = $row['home_subtitle_news'];
	$home_status_news            = $row['home_status_news'];
	$home_title_partner          = $row['home_title_partner'];
	$home_subtitle_partner       = $row['home_subtitle_partner'];
	$home_status_partner         = $row['home_status_partner'];
}
?>

<!-- Slider Start -->
<div class="slider-container rev_slider_wrapper" style="height: 670px;">
	<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
		<ul>
			<?php
			$statement = $pdo->prepare("SELECT * FROM tbl_slider WHERE status=? ORDER BY id DESC");
			$statement->execute(array('Active'));
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $row) {
				if ($row['position'] == 'Left') {
					$align = 'tal';
				}
				if ($row['position'] == 'Center') {
					$align = 'tac';
				}
				if ($row['position'] == 'Right') {
					$align = 'tar';
				}
			?>
				<li data-transition="fade">
					<div class="overlay-slider"></div>
					<img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

					<div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="700" data-fontsize="['22','22','22','40']" data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;">
						<?php if ($row['subheading'] != '') : ?>
							<?php echo $row['subheading']; ?>
						<?php endif; ?>
					</div>

					<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']">
						<?php if ($row['heading'] != '') : ?>
							<?php echo $row['heading']; ?>
						<?php endif; ?>
					</div>

					<div class="tp-caption font-weight-light" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="center" data-y="center" data-voffset="['40','40','40','80']" data-fontsize="['18','18','18','50']" data-lineheight="['20','20','20','55']" style="color: #b5b5b5;">
						<?php if ($row['content'] != '') : ?>
							<?php echo nl2br($row['content']); ?>
						<?php endif; ?>
					</div>

				</li>
			<?php
			}
			?>
		</ul>
	</div>
</div>
<!-- Slider End -->


<div class="container py-4 my-5">
	<div class="row">
		<div class="col-lg-6">
			<div class="overflow-hidden mb-2">
				<h2 class="font-weight-bold text-11 line-height-2 mb-0">Üst Kalite Çözümler</h2>
			</div>
			<div class="overflow-hidden mb-3">
				<h3 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">Yaratıcı tasarımlar, kaliteli işler</h3>
			</div>
		</div>
		<div class="col-lg-6">
			<p class="pt-3 pb-1 mb-2"Nida Makine 1985’ten bu yana makine imalatında ustalaşmış ve makine imalatı ve montajı konusunda birçok önemli işlere imza atmış olan Ahmet Özanlağan tarafından, 2012 yılında Ağır Sanayi Makinaları imal eden bir firma olarak faaliyete geçmiştir.</p>
			<a href="/page/hakkimizda" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
				DAHA FAZLA
				<svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
				</svg>
			</a>
		</div>
	</div>
</div>

<?php if ($home_status_service == 1) : ?>
	<!-- Service Start -->
	<section class="section section-with-shape-divider border-0 z-index-2 pb-0 m-0">
		<div class="shape-divider shape-divider-reverse-xy" style="height: 120px;">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
				<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
			</svg>
		</div>
		<div class="container pt-3 mt-5">
			<div class="row justify-content-center mb-5">
				<div class="col-lg-9 col-xl-8 text-center">
					<div class="overflow-hidden">
						<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0"><?php echo $home_subtitle_service; ?></h2>
					</div>
					<div class="overflow-hidden mb-3">
						<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0"><?php echo $home_title_service; ?></h3>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="owl-carousel stage-margin stage-margin-md nav-style-1 nav-svg-arrows-1 nav-dark" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 2}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}}, 'autoplay': false, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': true, 'margin': 20, 'stagePadding': 75}">
							<?php
							$statement = $pdo->prepare("SELECT * FROM tbl_service ORDER BY id ASC");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							foreach ($result as $row) {
							?>
								<div>
									<a href="<?php echo BASE_URL; ?>service/<?php echo $row['slug']; ?>" class="text-decoration-none">
										<div class="thumb-info custom-thumb-info-style-1 mb-3">
											<div class="thumb-info-wrapper">
												<img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" class="img-fluid" alt="" />
											</div>
										</div>
									</a>
									<h4 class="text-center mb-0"><a href="<?php echo BASE_URL; ?>service/<?php echo $row['slug']; ?>" class="text-color-dark text-color-hover-primary text-decoration-none text-2"><?php echo $row['name']; ?></a></h4>
								</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- Service End -->
<?php endif; ?>


<?php if ($home_status_department == 1) : ?>
	<!-- Department Start -->
	<div class="container py-4 my-5">
		<div class="col-lg-12 col-xl-12 text-center">
			<div class="overflow-hidden">
				<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0"><?php echo $home_subtitle_department; ?></h2>
			</div>
			<div class="overflow-hidden mb-3">
				<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0"><?php echo $home_title_department; ?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col">

				<div class="tabs tabs-bottom tabs-center tabs-simple">
					<ul class="nav nav-tabs">
						<?php
						$i = 0;
						$statement = $pdo->prepare("SELECT * FROM tbl_department ORDER BY dep_id ASC");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) {
							$i++;
						?>
							<li class="nav-item <?php if ($i == 1) {
													echo 'active';
												} ?>">
								<a class="nav-link <?php if ($i == 1) {
														echo 'active';
													} ?>" href="#tabsNavigationSimple<?php echo $i; ?>" data-bs-toggle="tab"><?php echo $row['dep_name']; ?></a>
							</li>
						<?php
						}
						?>
					</ul>
					<div class="tab-content">
						<?php
						$i = 0;
						$statement = $pdo->prepare("SELECT * FROM tbl_department ORDER BY dep_id ASC");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) {
							$i++;
						?>
							<div class="tab-pane <?php if ($i == 1) {
														echo 'active';
													} ?>" id="tabsNavigationSimple<?php echo $i; ?>">
								<div class="row">
									<div class="col-md-6">
										<h4><?php echo $row['dep_name']; ?></h4>
										<p><?php echo $row['dep_detail']; ?></p>
										<a href="<?php echo BASE_URL; ?>department/<?php echo $row['dep_slug']; ?>">DAHA FAZLA</a>

									</div>
									<div class="col-md-6">
										<div class="thumb">
											<img class="img-fluid box-shadow-3 animated-visible" src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['dep_photo']; ?>" alt="<?php echo $row['dep_name']; ?>">
										</div>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Department End -->
<?php endif; ?>


<?php if ($home_status_testimonial == 1) : ?>
	<!-- Testimonial Start -->
	<section class="section section-with-shape-divider border-0 m-0">
		<div class="shape-divider shape-divider-reverse-x" style="height: 120px;">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
				<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
			</svg>
		</div>
		<div class="shape-divider shape-divider-bottom shape-divider-reverse-y" style="height: 120px;">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
				<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
			</svg>
		</div>
		<div class="container py-5 my-5">
			<div class="row mb-5">
				<div class="col">
					<div class="overflow-hidden">
						<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0"><?php echo $home_subtitle_testimonial; ?></h2>
					</div>
					<div class="overflow-hidden mb-3">
						<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0"><?php echo $home_title_testimonial; ?></h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="owl-carousel nav-style-1 nav-svg-arrows-1 nav-dark" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 2}, '768': {'items': 2}, '992': {'items': 2}, '1200': {'items': 2}}, 'autoplay': true, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': true, 'margin': 60, 'stagePadding': 50}">
						<?php
						$statement = $pdo->prepare("SELECT * FROM tbl_testimonial ORDER BY id ASC");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) {
						?>
							<div>
								<div class="custom-testimonial-style-1 testimonial testimonial-style-3">
									<blockquote>
										<p class="mb-0"><?php echo nl2br($row['comment']); ?></p>
									</blockquote>
									<div class="testimonial-author">
										<p class="ms-3"><strong class="font-weight-semibold text-color-dark text-4"><?php echo $row['name']; ?></strong><span class="text-1"><?php echo $row['designation']; ?> - <?php if ($row['company'] != '') : ?>
													(<?php echo $row['company']; ?>)
												<?php endif; ?></span></p>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial End -->
<?php endif; ?>

<?php if ($home_status_news == 1) : ?>
	<!-- News Start -->
	<section class="section section-with-shape-divider border-0 m-0">
		<div class="shape-divider shape-divider-reverse-x" style="height: 120px;">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
				<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
			</svg>
		</div>
		<div class="shape-divider shape-divider-bottom shape-divider-reverse-y" style="height: 120px;">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
				<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
			</svg>
		</div>
		<div class="container py-5 my-5">
			<div class="row">
				<div class="col">
					<div class="overflow-hidden">
						<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0"><?php echo $home_subtitle_news; ?></h2>
					</div>
					<div class="overflow-hidden pb-3 mb-3">
						<h3 class="font-weight-bold text-transform-none text-9 pb-2 mb-0"><?php echo $home_title_news; ?></h3>
					</div>
				</div>
			</div>
			<div class="row mb-4">
				<?php
				$i = 0;
				$statement = $pdo->prepare("SELECT * FROM tbl_news ORDER BY news_id DESC");
				$statement->execute();
				$result = $statement->fetchAll(PDO::FETCH_ASSOC);
				foreach ($result as $row) {
					$i++;
					if ($i > $total_recent_news_home_page) {
						break;
					}
				?>
					<div class="col-lg-6 mb-4 mb-lg-0">
						<article>
							<div class="card border-0 border-radius-0 box-shadow-1">
								<div class="card-body p-4 z-index-1">
									<a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>">
										<img class="card-img-top border-radius-0" src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" alt="Card Image">
									</a>
									<div class="card-body p-0">
										<h4 class="card-title mb-3 text-5 font-weight-semibold"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>"><?php echo $row['news_title']; ?></a></h4>
										<p class="card-text mb-0"><?php echo substr($row['news_content'], 0, 200) . ' ...'; ?></p>
										<a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
											DAHA FAZLA
											<svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												<polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
											</svg>
										</a>
									</div>
								</div>
							</div>
						</article>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>
	<!-- News End -->
<?php endif; ?>


<?php if ($home_status_partner == 1) : ?>
	<!-- Partner Start -->
	<div class="container py-4 my-5">
		<div class="row">
			<div class="col">
				<h4><?php echo $home_title_partner; ?></h4>
				<div class="owl-carousel owl-theme stage-margin nav-style-1 " data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
					<?php
					$statement = $pdo->prepare("SELECT * FROM tbl_partner ORDER BY id ASC");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);
					foreach ($result as $row) {
					?>
						<?php if ($row['url'] == '') : ?>
							<div>
								<img class="img-fluid rounded" src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>">
							</div>
						<?php else : ?>
							<div>
								<a href="<?php echo $row['url']; ?>" target="_blank"><img class="img-fluid rounded" src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>"></a>
							</div>
						<?php endif; ?>

					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- Partner End -->
<?php endif; ?>

<?php require_once('footer.php'); ?>