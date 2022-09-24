<?php require_once('header.php'); ?>

<?php
// Preventing the direct access of this page.
if (!isset($_REQUEST['slug'])) {
	header('location: ' . BASE_URL);
	exit;
} else {
	// Check the page slug is valid or not.
	$statement = $pdo->prepare("SELECT * FROM tbl_service WHERE slug=?");
	$statement->execute(array($_REQUEST['slug']));
	$total = $statement->rowCount();
	if ($total == 0) {
		header('location: ' . BASE_URL);
		exit;
	}
}

// Getting the detailed data of a service from slug
$statement = $pdo->prepare("SELECT * FROM tbl_service WHERE slug=?");
$statement->execute(array($_REQUEST['slug']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$name              = $row['name'];
	$slug              = $row['slug'];
	$short_description = $row['short_description'];
	$description       = $row['description'];
	$photo             = $row['photo'];
	$banner            = $row['banner'];
}
?>


<!-- Banner Start -->
<section class="page-header page-header-modern page-header-background page-header-background-sm m-0" style="background-image: url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $banner; ?>); background-size: cover; background-position: center;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
				<h1 class="font-weight-bold text-8 mb-0">Hizmet: <?php echo $name; ?></h1>
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->


<!-- Service Start -->


<div class="container pt-3 pb-2">

	<div class="row pt-2">
		<div class="col-lg-9">

			<h2 class="font-weight-normal text-7 mb-2"><?php echo $name; ?></h2>

			<img class="float-start img-fluid p-3" width="300" height="211" src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $photo; ?>" alt="Hizmetler">
			<p><?php echo $description; ?></p>

		</div>

		<div class="col-lg-3 mt-4 mt-lg-0">
			<aside class="sidebar">
				<h5 class="font-weight-semi-bold">Hizmetler</h5>
				<ul class="nav nav-list flex-column mb-5">
					<?php
					$statement = $pdo->prepare("SELECT * FROM tbl_service ORDER BY name ASC");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);
					foreach ($result as $row) {
					?>
						<li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>service/<?php echo $row['slug']; ?>"><?php echo $row['name']; ?></a></li>
					<?php
					}
					?>
				</ul>
			</aside>
		</div>
	</div>

</div>
<!-- Service End -->

<?php require_once('footer.php'); ?>