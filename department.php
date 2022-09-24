<?php require_once('header.php'); ?>

<?php
// Preventing the direct access of this page.
if (!isset($_REQUEST['slug'])) {
	header('location: ' . BASE_URL);
	exit;
} else {
	// Check the page slug is valid or not.
	$statement = $pdo->prepare("SELECT * FROM tbl_department WHERE dep_slug=?");
	$statement->execute(array($_REQUEST['slug']));
	$total = $statement->rowCount();
	if ($total == 0) {
		header('location: ' . BASE_URL);
		exit;
	}
}

// Getting the detailed data of a department from slug
$statement = $pdo->prepare("SELECT * FROM tbl_department WHERE dep_slug=?");
$statement->execute(array($_REQUEST['slug']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$dep_id      = $row['dep_id'];
	$dep_name    = $row['dep_name'];
	$dep_slug    = $row['dep_slug'];
	$dep_detail  = $row['dep_detail'];
	$dep_address = $row['dep_address'];
	$dep_phone   = $row['dep_phone'];
	$dep_fax     = $row['dep_fax'];
	$dep_email   = $row['dep_email'];
	$dep_photo   = $row['dep_photo'];
	$dep_banner  = $row['dep_banner'];
}

$statement = $pdo->prepare("SELECT * FROM tbl_department_openning_hour WHERE dep_id=?");
$statement->execute(array($dep_id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$arr_oh_day[]  = $row['oh_day'];
	$arr_oh_time[] = $row['oh_time'];
}

$statement = $pdo->prepare("SELECT * FROM tbl_department_faq WHERE dep_id=?");
$statement->execute(array($dep_id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$arr_fq_title[]   = $row['fq_title'];
	$arr_fq_content[] = $row['fq_content'];
}
?>

<!-- Banner Start -->
<section class="page-header page-header-modern page-header-background page-header-background-sm m-0" style="background-image: url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $banner; ?>); background-size: cover; background-position: center;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
				<h1 class="font-weight-bold text-8 mb-0">Sektör: <?php echo $dep_name; ?></h1>
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->


<!-- Department Start -->
<div class="container pt-3 pb-2">

	<div class="row pt-2">
		<div class="col-lg-9">

			<h2 class="font-weight-normal text-7 mb-2"><?php echo $dep_name; ?></h2>

			<img class="float-start img-fluid p-3" width="300" height="211" src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $dep_photo; ?>" alt="Hizmetler">
			<p><?php echo $dep_detail; ?></p>

		</div>

		<div class="col-lg-3 mt-4 mt-lg-0">
			<aside class="sidebar">
				<h5 class="font-weight-semi-bold">Sektörler</h5>
				<ul class="nav nav-list flex-column mb-5">

					<?php
					$statement = $pdo->prepare("SELECT * FROM tbl_department ORDER BY dep_name ASC");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);
					foreach ($result as $row) {
					?>
						<li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>department/<?php echo $row['dep_slug']; ?>"><?php echo $row['dep_name']; ?></a></li>
					<?php
					}
					?>
				</ul>
			</aside>
		</div>
	</div>

</div>
<!-- Department End -->


<?php require_once('footer.php'); ?>