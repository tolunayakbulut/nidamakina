<?php
require_once('header.php');
?>

<?php
require 'assets/mail/Exception.php';
require 'assets/mail/PHPMailer.php';
require 'assets/mail/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>

<?php
// Preventing the direct access of this page.
if (!isset($_REQUEST['slug'])) {
	header('location: index.php');
	exit;
} else {
	// Check the page slug is valid or not.
	$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE page_slug=? AND status=?");
	$statement->execute(array($_REQUEST['slug'], 'Active'));
	$total = $statement->rowCount();
	if ($total == 0) {
		header('location: index.php');
		exit;
	}
}

// Getting the detailed data of a page from page slug
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE page_slug=?");
$statement->execute(array($_REQUEST['slug']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$page_name    = $row['page_name'];
	$page_slug    = $row['page_slug'];
	$page_content = $row['page_content'];
	$page_layout  = $row['page_layout'];
	$banner       = $row['banner'];
	$status       = $row['status'];
}

// If a page is not active, redirect the user while direct URL press
if ($status == 'Inactive') {
	header('location: index.php');
	exit;
}
?>

<?php
$q = $pdo->prepare("SELECT * FROM tbl_setting_captcha WHERE id=?");
$q->execute([1]);
$res = $q->fetchAll();
foreach ($res as $row) {
	$captcha_contact = $row['captcha_contact'];
}
?>


<!-- Banner Start -->
<section class="page-header page-header-modern page-header-background page-header-background-sm m-0" style="background-image: url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $banner; ?>); background-size: cover; background-position: center;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
				<h1 class="font-weight-bold text-8 mb-0"><?php echo $page_name; ?></h1>
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->


<?php if ($page_layout == 'Full Width Page Layout') : ?>
	<section class="section custom-section-shape-background border-0 m-0">
		<div class="container position-relative z-index-3 my-5">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-12 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
					<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">NİDA MAKİNA</h2>
					<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">HAKKIMIZDA</h3>
					<p class="mb-0"><?php echo $page_content; ?></p>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>


<?php if ($page_layout == 'Contact Us Page Layout') : ?>
	<?php
	$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach ($result as $row) {
		$contact_map_iframe = $row['contact_map_iframe'];
	}
	?>

	<?php
	$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach ($result as $row) {
		$contact_address             = $row['contact_address'];
		$contact_email               = $row['contact_email'];
		$contact_phone               = $row['contact_phone'];
		$contact_fax                 = $row['contact_fax'];
	}
	?>


	<div class="container py-5 my-4">
		<div class="row">
			<div class="col-lg-6 mb-5 mb-lg-0">
				<h2 class="font-weight-bold text-transform-none text-8 pb-2 mb-4">İletişim</h2>
				<div class="row">
					<div class="col">
						<div class="feature-box feature-box-style-5">
							<div class="feature-box-icon">
								<img class="icon-animated" width="42" src="<?php echo BASE_URL; ?>/assets/img/icons/icon-location.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
							</div>
							<div class="feature-box-info">
								<div class="d-flex flex-column flex-md-row">
									<ul class="list list-unstyled pe-5 mb-md-0">
										<li class="mb-0"><strong class="text-color-dark custom-font-size-3">Fabrika</strong></li>
										<li class="mb-0"><?php echo $contact_address; ?></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row py-3 my-4">
					<div class="col">
						<div class="feature-box feature-box-style-5">
							<div class="feature-box-icon">
								<img class="icon-animated" width="42" src="<?php echo BASE_URL; ?>/assets/img/icons/icon-mail.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary position-relative bottom-5'}" />
							</div>
							<div class="feature-box-info">
								<h3 class="text-transform-none font-weight-bold custom-font-size-1 pb-1 mb-2">E-posta</h3>
								<ul class="list list-unstyled pe-5 mb-0">
									<li class="mb-0"><a href="mailto:<?php echo $contact_email; ?>" class="text-color-default text-color-hover-primary text-decoration-none"><?php echo $contact_email; ?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="feature-box feature-box-style-5">
							<div class="feature-box-icon">
								<img class="icon-animated" width="42" src="<?php echo BASE_URL; ?>/assets/img/icons/icon-phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
							</div>
							<div class="feature-box-info">
								<h3 class="text-transform-none font-weight-bold custom-font-size-1 pb-1 mb-2">Telefon</h3>
								<ul class="list list-unstyled pe-5 mb-0">
									<li class="mb-0"><a href="tel:<?php echo $contact_phone; ?>" class="text-color-default text-color-hover-primary text-decoration-none"><?php echo $contact_phone; ?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<h2 class="font-weight-bold text-transform-none text-8 pb-2 mb-4">Bize Ulaş</h2>
				<form class="contact-form custom-form-style-1" action="<?php echo BASE_URL; ?>page/<?php echo $_REQUEST['slug']; ?>" method="POST">
					<div class="contact-form-success alert alert-success d-none mt-4">
						<strong>Başarılı!</strong> Mesajınız gönderildi.
					</div>

					<div class="contact-form-error alert alert-danger d-none mt-4">
						<strong>Hata!</strong> Bir hata oluştu.
						<span class="mail-error-message text-1 d-block"></span>
					</div>

					<div class="row">
						<div class="form-group col">
							<input type="text" value="" data-msg-required="Lütfen isminizi giriniz." maxlength="100" class="form-control" name="visitor_name" placeholder="İsim" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col">
							<input type="email" value="" data-msg-required="Lütfen e-posta adresinizi giriniz." data-msg-email="Lütfen geçerli bir e-posta adresinizi giriniz." maxlength="100" class="form-control" name="visitor_email" placeholder="E-posta" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col">
							<input type="phone" value="" data-msg-required="Lütfen telefon numaranızı giriniz." maxlength="100" class="form-control" name="visitor_phone" placeholder="Telefon" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col">
							<textarea maxlength="5000" data-msg-required="Lütfen mesajınızı giriniz." rows="6" class="form-control" name="visitor_comment" placeholder="Mesaj" required></textarea>
						</div>
					</div>
					<div class="row">
						<div class="form-group col">
							<?php if ($captcha_contact == 'Show') : ?>
								<div class="form-group captcha-section">
									<div class="col-md-12">
										<?php
										$q = $pdo->prepare("SELECT * FROM tbl_captcha");
										$q->execute();
										$tot = $q->rowCount();
										$r_serial = mt_rand(1, $tot);
										$q = $pdo->prepare("SELECT * FROM tbl_captcha WHERE captcha_id=?");
										$q->execute([$r_serial]);
										$res = $q->fetchAll();
										foreach ($res as $row) {
											$captcha_value1 = $row['captcha_value1'];
											$captcha_value2 = $row['captcha_value2'];
											$captcha_symbol = $row['captcha_symbol'];
											$captcha_result = $row['captcha_result'];
										}
										?>
										<div class="captcha-section-1">
											<?php echo $captcha_value1 . ' ' . $captcha_symbol . ' ' . $captcha_value2 . ' = ' ?>
										</div>
										<div class="captcha-section-2">
											<input type="hidden" name="r_serial" value="<?php echo $r_serial; ?>">
											<input type="text" class="form-control w-60" name="captcha_input">
										</div>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="row">
						<div class="form-group col">
							<button type="submit" class="btn custom-svg-btn-style-1 custom-svg-btn-style-1-solid text-color-light text-uppercase" data-loading-text="Yükleniyor..." name="form_contact">
								<svg class="custom-svg-btn-background" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 70" preserveAspectRatio="none">
									<polygon fill="none" stroke="#D4D4D4" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 " />
								</svg>
								Gönder
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php echo $contact_map_iframe; ?>
			</div>
		</div>
	</div>
<?php endif; ?>



<div class="container py-2">

	<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
		<li class="nav-item" data-option-value="*"><a class="nav-link text-1 text-uppercase" href="#">Tümü</a></li>
		<?php
		$statement = $pdo->prepare("SELECT * FROM tbl_category_photo WHERE status=?");
		$statement->execute(array('Active'));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $row) {
			$temp_string = strtolower($row['p_category_name']);
			$temp_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
		?>
			<li class="nav-item" data-option-value=".<?php echo $temp_slug; ?>"><a class="nav-link text-1 text-uppercase" href="#"><?php echo $row['p_category_name']; ?></a></li>
		<?php
		}
		?>
	</ul>

	<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
		<div class="row portfolio-list sort-destination" >
			<div class="lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">

				<?php
				$i = 0;
				$statement = $pdo->prepare("SELECT
									t1.photo_id,
									t1.photo_caption,
									t1.photo_name,
									t1.p_category_id,
									t2.p_category_id,
									t2.p_category_name,
									t2.status
									FROM tbl_photo t1
									JOIN tbl_category_photo t2
									ON t1.p_category_id = t2.p_category_id 
									");
				$statement->execute();
				$result = $statement->fetchAll(PDO::FETCH_ASSOC);
				foreach ($result as $row) {
					$i++;
					$temp_string = strtolower($row['p_category_name']);
					$temp_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
				?>

					<div class="<?php echo $temp_slug; ?>">
						<a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon mb-1 me-1 all" data-my-order="<?php echo $i; ?>" href="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo_name']; ?>" title="<?php echo $row['photo_caption']; ?>">
							<img class="img-fluid" src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo_name']; ?>" alt="Project Image" width="110" height="110">
						</a>
					</div>
				<?php
				}
				?>
			</div>

		</div>
	</div>

</div>




<?php if ($page_layout == 'Photo Gallery Page Layout') : ?>
	<section class="gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<ul class="gallery-menu">
						<li class="filter" data-filter="all" data-role="button">All</li>
						<?php
						$statement = $pdo->prepare("SELECT * FROM tbl_category_photo WHERE status=?");
						$statement->execute(array('Active'));
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) {
							$temp_string = strtolower($row['p_category_name']);
							$temp_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
						?>
							<li class="filter" data-filter=".<?php echo $temp_slug; ?>" data-role="button"><?php echo $row['p_category_name']; ?></li>
						<?php
						}
						?>
					</ul>

					<div id="mix-container">
						<?php
						$i = 0;
						$statement = $pdo->prepare("SELECT
					                           	t1.photo_id,
												t1.photo_caption,
												t1.photo_name,
												t1.p_category_id,
												t2.p_category_id,
												t2.p_category_name,
												t2.status
					                            FROM tbl_photo t1
					                            JOIN tbl_category_photo t2
					                            ON t1.p_category_id = t2.p_category_id 
					                            ");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) {
							$i++;
							$temp_string = strtolower($row['p_category_name']);
							$temp_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
						?>
							<div class="col-md-4 mix <?php echo $temp_slug; ?> all" data-my-order="<?php echo $i; ?>">
								<div class="inner">
									<div class="photo" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo_name']; ?>);"></div>
									<div class="overlay"></div>
									<div class="icons">
										<div class="icons-inner">
											<a class="gallery-photo" href="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo_name']; ?>"><i class="fa fa-search-plus"></i></a>
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
	</section>
<?php endif; ?>





<?php if ($page_layout == 'Video Gallery Page Layout') : ?>
	<section class="gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<ul class="gallery-menu">
						<li class="filter" data-filter="all" data-role="button">All</li>
						<?php
						$statement = $pdo->prepare("SELECT * FROM tbl_category_video WHERE status=?");
						$statement->execute(array('Active'));
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) {
							$temp_string = strtolower($row['v_category_name']);
							$temp_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
						?>
							<li class="filter" data-filter=".<?php echo $temp_slug; ?>" data-role="button"><?php echo $row['v_category_name']; ?></li>
						<?php
						}
						?>
					</ul>

					<div id="mix-container">
						<?php
						$i = 0;
						$statement = $pdo->prepare("SELECT
					                           	t1.video_id,
												t1.video_title,
												t1.video_iframe,
												t1.v_category_id,
												t2.v_category_id,
												t2.v_category_name,
												t2.status
					                            FROM tbl_video t1
					                            JOIN tbl_category_video t2
					                            ON t1.v_category_id = t2.v_category_id 
					                            ");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) {
							$i++;
							$temp_string = strtolower($row['v_category_name']);
							$temp_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
						?>
							<div class="col-md-4 mix <?php echo $temp_slug; ?> all" data-my-order="<?php echo $i; ?>">
								<div class="inner viframe">
									<?php echo $row['video_iframe']; ?>
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
<?php endif; ?>



<?php if ($page_layout == 'Blog Page Layout') : ?>
	<section class="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-9">

					<!-- Blog Classic Start -->
					<div class="blog-grid">
						<div class="row">
							<div class="col-md-12">


								<?php
								$statement = $pdo->prepare("SELECT * FROM tbl_news ORDER BY news_id DESC");
								$statement->execute();
								$total = $statement->rowCount();
								?>

								<?php if (!$total) : ?>
									<p style="color:red;">Sorry! No News is found.</p>
								<?php else : ?>




									<?php
									/* ===================== Pagination Code Starts ================== */
									$adjacents = 10;

									$statement = $pdo->prepare("SELECT * FROM tbl_news ORDER BY news_id DESC");
									$statement->execute();
									$total_pages = $statement->rowCount();

									$targetpage = $_SERVER['PHP_SELF'];
									$limit = 5;
									$page = @$_GET['page'];
									if ($page)
										$start = ($page - 1) * $limit;
									else
										$start = 0;


									$statement = $pdo->prepare("SELECT
								   t1.news_title,
		                           t1.news_slug,
		                           t1.news_content,
		                           t1.news_date,
		                           t1.photo,
		                           t1.category_id,

		                           t2.category_id,
		                           t2.category_name,
		                           t2.category_slug
		                           FROM tbl_news t1
		                           JOIN tbl_category t2
		                           ON t1.category_id = t2.category_id 		                           
		                           ORDER BY t1.news_id 
		                           LIMIT $start, $limit");
									$statement->execute();
									$result = $statement->fetchAll(PDO::FETCH_ASSOC);


									$s1 = $_REQUEST['slug'];

									if ($page == 0) $page = 1;
									$prev = $page - 1;
									$next = $page + 1;
									$lastpage = ceil($total_pages / $limit);
									$lpm1 = $lastpage - 1;
									$pagination = "";
									if ($lastpage > 1) {
										$pagination .= "<div class=\"pagination\">";
										if ($page > 1)
											$pagination .= "<a href=\"$targetpage?slug=$s1&page=$prev\">&#171; previous</a>";
										else
											$pagination .= "<span class=\"disabled\">&#171; previous</span>";
										if ($lastpage < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
										{
											for ($counter = 1; $counter <= $lastpage; $counter++) {
												if ($counter == $page)
													$pagination .= "<span class=\"current\">$counter</span>";
												else
													$pagination .= "<a href=\"$targetpage?slug=$s1&page=$counter\">$counter</a>";
											}
										} elseif ($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
										{
											if ($page < 1 + ($adjacents * 2)) {
												for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
													if ($counter == $page)
														$pagination .= "<span class=\"current\">$counter</span>";
													else
														$pagination .= "<a href=\"$targetpage?slug=$s1&page=$counter\">$counter</a>";
												}
												$pagination .= "...";
												$pagination .= "<a href=\"$targetpage?slug=$s1&page=$lpm1\">$lpm1</a>";
												$pagination .= "<a href=\"$targetpage?slug=$s1&page=$lastpage\">$lastpage</a>";
											} elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
												$pagination .= "<a href=\"$targetpage?slug=$s1&page=1\">1</a>";
												$pagination .= "<a href=\"$targetpage?slug=$s1&page=2\">2</a>";
												$pagination .= "...";
												for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
													if ($counter == $page)
														$pagination .= "<span class=\"current\">$counter</span>";
													else
														$pagination .= "<a href=\"$targetpage?slug=$s1&page=$counter\">$counter</a>";
												}
												$pagination .= "...";
												$pagination .= "<a href=\"$targetpage?slug=$s1&page=$lpm1\">$lpm1</a>";
												$pagination .= "<a href=\"$targetpage?slug=$s1&page=$lastpage\">$lastpage</a>";
											} else {
												$pagination .= "<a href=\"$targetpage?slug=$s1&page=1\">1</a>";
												$pagination .= "<a href=\"$targetpage?slug=$s1&page=2\">2</a>";
												$pagination .= "...";
												for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
													if ($counter == $page)
														$pagination .= "<span class=\"current\">$counter</span>";
													else
														$pagination .= "<a href=\"$targetpage?slug=$s1&page=$counter\">$counter</a>";
												}
											}
										}
										if ($page < $counter - 1)
											$pagination .= "<a href=\"$targetpage?slug=$s1&page=$next\">next &#187;</a>";
										else
											$pagination .= "<span class=\"disabled\">next &#187;</span>";
										$pagination .= "</div>\n";
									}
									/* ===================== Pagination Code Ends ================== */
									?>

									<?php
									foreach ($result as $row) {
									?>
										<div class="post-item">
											<div class="image-holder">
												<img class="img-responsive" src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['news_title']; ?>">
											</div>
											<div class="text">
												<h3><a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>"><?php echo $row['news_title']; ?></a></h3>
												<ul class="status">
													<li><i class="fa fa-tag"></i>Category: <a href="<?php echo BASE_URL; ?>category/<?php echo $row['category_slug']; ?>"><?php echo $row['category_name']; ?></a></li>
													<li><i class="fa fa-calendar"></i>Date: <?php echo $row['news_date']; ?></li>
												</ul>
												<p>
													<?php echo substr($row['news_content'], 0, 200) . ' ...'; ?>
												</p>
												<p class="button">
													<a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>">Read More</a>
												</p>
											</div>
										</div>
									<?php
									}
									?>
								<?php endif; ?>

							</div>

							<div class="col-md-12">
								<?php if ($total) : ?>
									<?php echo $pagination; ?>
								<?php endif; ?>
							</div>

						</div>
					</div>
					<!-- Blog Classic End -->

				</div>
				<div class="col-md-3">

					<?php require_once('sidebar.php'); ?>

				</div>




			</div>
		</div>
	</section>
<?php endif; ?>



<?php if ($page_layout == 'Doctor Page Layout') : ?>
	<section class="doctor-v3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<!-- Doctor Container Start -->
					<div class="doctor-inner">

						<?php
						$statement = $pdo->prepare("SELECT
												
												t1.id,
												t1.name,
												t1.slug,
												t1.designation_id,
												t1.photo,
												t1.degree,
												t1.detail,
												t1.facebook,
												t1.twitter,
												t1.linkedin,
												t1.youtube,
												t1.google_plus,
												t1.instagram,
												t1.flickr,
												t1.address,
												t1.practice_location,
												t1.phone, 
												t1.email,
												t1.website,
												t1.status,

												t2.designation_id,
												t2.designation_name
						
					                            FROM tbl_doctor t1
					                            JOIN tbl_designation t2
					                            ON t1.designation_id = t2.designation_id
					                            WHERE t1.status=?
					                            ");
						$statement->execute(array('Active'));
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) {
						?>
							<div class="col-md-3 item">
								<div class="inner">
									<div class="thumb">
										<div class="photo" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>)"></div>
										<div class="overlay"></div>
										<div class="social-icons">
											<ul>
												<?php if ($row['facebook'] != '') : ?>
													<li><a href="<?php echo $row['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
												<?php endif; ?>

												<?php if ($row['twitter'] != '') : ?>
													<li><a href="<?php echo $row['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
												<?php endif; ?>

												<?php if ($row['linkedin'] != '') : ?>
													<li><a href="<?php echo $row['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
												<?php endif; ?>

												<?php if ($row['youtube'] != '') : ?>
													<li><a href="<?php echo $row['youtube']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
												<?php endif; ?>

												<?php if ($row['google_plus'] != '') : ?>
													<li><a href="<?php echo $row['google_plus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
												<?php endif; ?>

												<?php if ($row['instagram'] != '') : ?>
													<li><a href="<?php echo $row['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
												<?php endif; ?>

												<?php if ($row['flickr'] != '') : ?>
													<li><a href="<?php echo $row['flickr']; ?>" target="_blank"><i class="fa fa-flickr"></i></a></li>
												<?php endif; ?>
											</ul>
										</div>
									</div>
									<div class="text">
										<h3><a href="<?php echo BASE_URL; ?>doctor/<?php echo $row['slug']; ?>"><?php echo $row['name']; ?></a></h3>
										<h4><?php echo $row['designation_name']; ?></h4>
										<p class="button">
											<a href="<?php echo BASE_URL; ?>doctor/<?php echo $row['slug']; ?>">See Full Profile</a>
										</p>
									</div>
								</div>
							</div>
						<?php
						}
						?>

					</div>
					<!-- Doctor Container End -->

				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php require_once('footer.php'); ?>