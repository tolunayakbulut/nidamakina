<?php
ob_start();
session_start();
include("admin/config.php");
include("admin/functions.php");
$error_message = '';
$success_message = '';

$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://" . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
define("BASE_URL", $base_url);
?>
<?php
// Getting the basic data for the website from database
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$logo = $row['logo'];
	$favicon = $row['favicon'];
	$contact_email = $row['contact_email'];
	$contact_phone = $row['contact_phone'];
	$color = $row['color'];
	$preloader_status = $row['preloader_status'];
}

$statement = $pdo->prepare("SELECT * FROM tbl_menu_home WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$home_menu_name = $row['home_menu_name'];
	$home_menu_status = $row['home_menu_status'];
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="tr">

<head>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">


	<!-- Showing the SEO related meta tags data -->
	<?php

	// Getting the current page URL
	$cur_page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

	if ($cur_page == 'news.php') {
		$statement = $pdo->prepare("SELECT * FROM tbl_news WHERE news_slug=?");
		$statement->execute(array($_REQUEST['slug']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $row) {
			$og_photo = $row['photo'];
			$og_title = $row['news_title'];
			$og_slug = $row['news_slug'];
			$og_description = substr(strip_tags($row['news_content']), 0, 200) . '...';
			echo '<meta name="description" content="' . $row['meta_description'] . '">';
			echo '<meta name="keywords" content="' . $row['meta_keyword'] . '">';
			echo '<title>' . $row['meta_title'] . '</title>';
		}
	}

	if ($cur_page == 'page.php') {
		$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE page_slug=?");
		$statement->execute(array($_REQUEST['slug']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $row) {
			echo '<meta name="description" content="' . $row['meta_description'] . '">';
			echo '<meta name="keywords" content="' . $row['meta_keyword'] . '">';
			echo '<title>' . $row['meta_title'] . '</title>';
		}
	}

	if ($cur_page == 'category.php') {
		$statement = $pdo->prepare("SELECT * FROM tbl_category WHERE category_slug=?");
		$statement->execute(array($_REQUEST['slug']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $row) {
			echo '<meta name="description" content="' . $row['meta_description'] . '">';
			echo '<meta name="keywords" content="' . $row['meta_keyword'] . '">';
			echo '<title>' . $row['meta_title'] . '</title>';
		}
	}

	if ($cur_page == 'index.php') {
		$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $row) {
			echo '<meta name="description" content="' . $row['meta_description_home'] . '">';
			echo '<meta name="keywords" content="' . $row['meta_keyword_home'] . '">';
			echo '<title>' . $row['meta_title_home'] . '</title>';
		}
	}
	?>


	<!-- Favicon -->
	<link href="<?php echo BASE_URL; ?>assets/uploads/<?php echo $favicon; ?>" rel="shortcut icon" type="image/png">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CPlayfair+Display:400,700,900&display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/vendor/magnific-popup/magnific-popup.min.css">

	<!-- Revolution Slider CSS -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/vendor/rs-plugin/css/navigation.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/theme.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/theme-elements.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/theme-blog.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/theme-shop.css">

	<!-- Demo CSS -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/demo-industry-factory.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/skin-industry-factory.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/custom.css">

	<!-- Head Libs -->
	<script src="<?php echo BASE_URL; ?>assets/vendor/modernizr/modernizr.min.js"></script>


	<?php if ($cur_page == 'news.php') : ?>
		<meta property="og:title" content="<?php echo $og_title; ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo BASE_URL; ?>news/<?php echo $og_slug; ?>">
		<meta property="og:description" content="<?php echo $og_description; ?>">
		<meta property="og:image" content="<?php echo BASE_URL; ?>assets/uploads/<?php echo $og_photo; ?>">
	<?php endif; ?>

	<style>
		<?php $color = '#' . $color; ?>.sf-menu li:hover a,
		.department-v2 .department-tab .nav-tabs>li>a,
		.doctor-v1 .item .text h3 a,
		.pricing-v1 .pricing-item:hover .price .hexa .amount,
		.pricing-v1 .pricing-item:hover .price .hexa .time,
		.pricing-v1 .pricing-item:hover .button a,
		.news-v1 .date .day:before,
		.blog h4,
		.widget ul li a:hover,
		.doctor-detail .doctor-detail-tab .nav-tabs>li>a,
		.heading-normal h2,
		.doctor-v2 .text h3 a {
			color: <?php echo $color; ?> !important;
		}

		.top-bar,
		.sf-menu li li:hover,
		.slider p.button a,
		.service-v1 .text p.button a:hover,
		.department-v2 .department-tab .nav-tabs>li.active>a,
		.department-v2 .department-tab .nav-tabs>li.active>a:hover,
		.department-v2 .department-tab .nav-tabs>li.active>a:focus,
		.department-v2 .department-tab .nav-tabs>li a:hover,
		.department-v2 .department-tab .nav-tabs>li a:focus,
		.department-v2 .department-tab .department-content p.button a,
		.doctor-v1 .item:hover .text,
		.doctor-v1 .social-icons ul li a,
		.pricing-v1 .pricing-item:hover,
		.pricing-v1 .pricing-item .price .hexa,
		.pricing-v1 .pricing-item .button a,
		.testimonial-v1 .overlay,
		.news-v1 .date .day,
		.footer-social,
		.footer-social .item ul li,
		.footer-col h3:after,
		.scrollup i,
		.news-v1 .owl-controls .owl-prev:hover,
		.news-v1 .owl-controls .owl-next:hover,
		.doctor-v1 .owl-controls .owl-prev:hover,
		.doctor-v1 .owl-controls .owl-next:hover,
		.doctor-detail .doctor-single .social ul li a,
		.doctor-detail .contact .icon,
		.doctor-v2 .owl-controls .owl-prev:hover,
		.doctor-v2 .owl-controls .owl-next:hover,
		.doctor-v2 .social-icons ul li a {
			background: <?php echo $color; ?> !important;
		}

		.department-v2 .department-tab .nav-tabs>li.active>a,
		.department-v2 .department-tab .nav-tabs>li.active>a:hover,
		.department-v2 .department-tab .nav-tabs>li.active>a:focus,
		.department-v2 .department-tab .nav-tabs>li a:hover,
		.department-v2 .department-tab .nav-tabs>li a:focus,
		.footer-social .item ul li a {
			border-color: <?php echo $color; ?> !important;
		}

		.pricing-v1 .pricing-item .price .hexa:before,
		.widget h4,
		.heading-normal h2 {
			border-bottom-color: <?php echo $color; ?> !important;
		}

		.pricing-v1 .pricing-item .price .hexa:after {
			border-top-color: <?php echo $color; ?> !important;
		}
	</style>

</head>

<body class="body">

	<?php
	// Getting Facebook comment code from the database
	$statement = $pdo->prepare("SELECT * FROM tbl_comment WHERE id=1");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach ($result as $row) {
		echo $row['code_body'];
	}
	?>

	<?php if ($preloader_status == 'On') : ?>
		<div id="preloader">
			<div id="status"></div>
		</div>
	<?php endif; ?>


	<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
		<div class="header-body header-body-bottom-border border-top-0">
			<div class="header-top">
				<div class="container">
					<div class="header-row">
						<div class="header-column justify-content-start">
							<div class="header-row">
								<ul class="list list-unstyled list-inline mb-0">
									<li class="list-inline-item text-color-dark me-4 mb-0">
										Mail: <a href="mailto:<?php echo $contact_email; ?>" class="text-color-dark text-color-hover-primary text-decoration-none"><strong><?php echo $contact_email; ?></strong></a>
									</li>
									<li class="list-inline-item text-color-dark d-none d-sm-inline-block mb-0">
										Phone: <a href="tel:<?php echo $contact_phone; ?>" class="text-color-dark text-color-hover-primary text-decoration-none"><strong><?php echo $contact_phone; ?></strong></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-row">
								<ul class="header-social-icons social-icons social-icons-clean d-none d-md-block">
									<?php
									// Getting and showing all the social media icon URL from the database
									$statement = $pdo->prepare("SELECT * FROM tbl_social");
									$statement->execute();
									$result = $statement->fetchAll(PDO::FETCH_ASSOC);
									foreach ($result as $row) {
										if ($row['social_url'] != '') {
											echo '<li class="social-icons"><a target="_blank" href="' . $row['social_url'] . '"><i class="fab ' . $row['social_icon'] . '"></i></a></li>';
										}
									}
									?>
								</ul>
								<a href="#" class="btn custom-svg-btn-style-1 custom-svg-btn-style-1-solid custom-svg-btn-style-1-small text-color-light ms-4">
									<svg class="custom-svg-btn-background" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 70" preserveAspectRatio="none">
										<polygon fill="none" stroke="#D4D4D4" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 " />
									</svg>
									GET A QUOTE
									<svg class="custom-svg-btn-arrow" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<polygon stroke="#FFF" stroke-width="0.4" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-container container">
				<div class="header-row">
					<div class="header-column">
						<div class="header-row">
							<div class="header-logo">
								<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $logo; ?>" class="img-fluid" width="123" height="32" alt=""></a>
							</div>
						</div>
					</div>
					<div class="header-column justify-content-end">
						<div class="header-row">
							<div class="header-nav header-nav-links">
								<div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
									<nav class="collapse">
										<ul class="nav nav-pills" id="mainNav">

											<?php if ($home_menu_status == 'Show') : ?>
												<li>
													<a href="<?php echo BASE_URL; ?>" class="nav-link active">
														<span class="menu-title"><?php echo $home_menu_name; ?></span>
													</a>
												</li>
											<?php endif; ?>


											<?php
											$q = $pdo->prepare("SELECT * FROM tbl_menu WHERE menu_parent=? ORDER BY menu_order ASC");
											$q->execute(array(0));
											$res = $q->fetchAll();
											foreach ($res as $row) {

												$r = $pdo->prepare("SELECT * FROM tbl_menu WHERE menu_parent=?");
												$r->execute(array($row['menu_id']));
												$total = $r->rowCount();

												echo '<li>';

												if ($row['page_id'] == 0 && $row['category_id'] == 0) {


													// Check if product
													if ($row['menu_name'] == 'Product') {
											?>
														<li><a href="javascript:void(0);">PRODUCT</a>
															<ul>
																<?php
																$statement6 = $pdo->prepare("SELECT * FROM tbl_top_category");
																$statement6->execute();
																$result6 = $statement6->fetchAll(PDO::FETCH_ASSOC);
																foreach ($result6 as $row6) {
																?>
																	<li><a href="product-category.php?id=<?php echo $row6['tcat_id']; ?>&type=top-category"><?php echo $row6['tcat_name']; ?></a>
																		<ul>
																			<?php
																			$statement1 = $pdo->prepare("SELECT * FROM tbl_mid_category WHERE tcat_id=?");
																			$statement1->execute(array($row6['tcat_id']));
																			$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
																			foreach ($result1 as $row1) {
																			?>
																				<li><a href="product-category.php?id=<?php echo $row1['mcat_id']; ?>&type=mid-category"><?php echo $row1['mcat_name']; ?></a>
																					<ul>
																						<?php
																						$statement2 = $pdo->prepare("SELECT * FROM tbl_end_category WHERE mcat_id=?");
																						$statement2->execute(array($row1['mcat_id']));
																						$result2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
																						foreach ($result2 as $row2) {
																						?>
																							<li><a href="product-category.php?id=<?php echo $row2['ecat_id']; ?>&type=end-category"><?php echo $row2['ecat_name']; ?></a></li>
																						<?php
																						}
																						?>
																					</ul>
																				</li>
																			<?php
																			}
																			?>
																		</ul>
																	</li>
																<?php
																}
																?>
															</ul>
														</li>
													<?php
													} else {
														if ($row['menu_url'] == '') {
															$final_url = 'javascript:void(0);';
														} else {
															$final_url = $row['menu_url'];
														}
													?>
														<a href="<?php echo $final_url; ?>"><?php echo $row['menu_name']; ?><?php if ($total) {
																																echo '<em></em>';
																															}; ?></a>
														<?php
													}
												} else {

													if ($row['page_id'] != 0) {
														$r = $pdo->prepare("SELECT * FROM tbl_page WHERE page_id=? ");
														$r->execute(array($row['page_id']));
														$res1 = $r->fetchAll();
														foreach ($res1 as $row1) {
														?>
															<a href="<?php echo BASE_URL . 'page/' . $row1['page_slug']; ?>"><?php echo $row1['page_name']; ?><?php if ($total) {
																																									echo '<em></em>';
																																								}; ?></a>
														<?php
														}
													}

													if ($row['category_id'] != 0) {
														$r = $pdo->prepare("SELECT * FROM tbl_category WHERE category_id=? ");
														$r->execute(array($row['category_id']));
														$res1 = $r->fetchAll();
														foreach ($res1 as $row1) {
														?>
															<a href="<?php echo BASE_URL . 'category/' . $row1['category_slug']; ?>"><?php echo $row1['category_name']; ?><?php if ($total) {
																																												echo '<em></em>';
																																											}; ?></a>
														<?php
														}
													}
												}




												// Checking for sub-menu
												$r = $pdo->prepare("SELECT * FROM tbl_menu WHERE menu_parent=?");
												$r->execute(array($row['menu_id']));
												$total = $r->rowCount();
												if ($total) {
													echo '<ul>';

													$res1 = $r->fetchAll();
													foreach ($res1 as $row1) {
														//
														echo '<li>';
														if ($row1['page_id'] == 0 && $row1['category_id'] == 0) {
															if ($row1['menu_url'] == '') {
																$final_url1 = 'javascript:void(0);';
															} else {
																$final_url1 = $row1['menu_url'];
															}
														?>
															<a href="<?php echo $final_url1; ?>"><?php echo $row1['menu_name']; ?></a>
															<?php
														} else {

															if ($row1['page_id'] != 0) {
																$s = $pdo->prepare("SELECT * FROM tbl_page WHERE page_id=?");
																$s->execute(array($row1['page_id']));
																$res2 = $s->fetchAll();
																foreach ($res2 as $row2) {
															?>
																	<a href="<?php echo BASE_URL . 'page/' . $row2['page_slug']; ?>"><?php echo $row2['page_name']; ?></a>
																<?php
																}
															}

															if ($row1['category_id'] != 0) {
																$s = $pdo->prepare("SELECT * FROM tbl_category WHERE category_id=?");
																$s->execute(array($row1['category_id']));
																$res2 = $s->fetchAll();
																foreach ($res2 as $row2) {
																?>
																	<a href="<?php echo BASE_URL . 'category/' . $row2['category_slug']; ?>"><?php echo $row2['category_name']; ?></a>
											<?php
																}
															}
														}
														echo '</li>';
														//
													}

													echo '</ul>';
												}


												echo '</li>';
											}
											?>

										</ul>
									</nav>
								</div>
							</div>
							<div class="header-nav-features">
								<div class="header-nav-feature header-nav-features-search d-inline-flex">
									<a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch">
										<i class="icons icon-magnifier header-nav-top-icon font-weight-bold text-4 top-2 text-color-hover-primary"></i>
									</a>
									<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
										<form role="search" action="page-search-results.html" method="get">
											<div class="simple-search input-group">
												<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
												<button class="btn" type="submit">
													<i class="icons icon-magnifier header-nav-top-icon font-weight-bold text-color-dark text-4 text-color-hover-primary top-2"></i>
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
								<i class="fas fa-bars"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div role="main" class="main">