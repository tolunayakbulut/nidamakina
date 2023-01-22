<?php require_once('header.php'); ?>

<?php
// Preventing the direct access of this page.
if (!isset($_REQUEST['slug'])) {
	header('location: ' . BASE_URL);
	exit;
}

// Getting the news detailed data from the news id
$statement = $pdo->prepare("SELECT
							t1.news_title,
							t1.news_slug,
							t1.news_content,
							t1.news_date,
							t1.publisher,
							t1.photo,
							t1.category_id,
							
							t2.category_id,
							t2.category_name,
							t2.category_slug

                           	FROM tbl_news t1
                           	JOIN tbl_category t2
                           	ON t1.category_id = t2.category_id
                           	WHERE t1.news_slug=?");
$statement->execute(array($_REQUEST['slug']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$news_title    = $row['news_title'];
	$news_slug     = $row['news_slug'];
	$news_content  = $row['news_content'];
	$news_date     = $row['news_date'];
	$publisher     = $row['publisher'];
	$photo         = $row['photo'];
	$category_id   = $row['category_id'];
	$category_slug = $row['category_slug'];
	$category_name = $row['category_name'];
}

// Update data for view count for this news page
// Getting current view count
$statement = $pdo->prepare("SELECT * FROM tbl_news WHERE news_slug=?");
$statement->execute(array($_REQUEST['slug']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$current_total_view = $row['total_view'];
}
$updated_total_view = $current_total_view + 1;

// Updating database for view count
$statement = $pdo->prepare("UPDATE tbl_news SET total_view=? WHERE news_slug=?");
$statement->execute(array($updated_total_view, $_REQUEST['slug']));
?>


<!-- Banner Start -->
<section class="page-header page-header-modern page-header-background page-header-background-sm m-0" style="background-image: url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $banner; ?>); background-size: cover; background-position: center;">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
				<h1 class="font-weight-bold text-8 mb-0"><?php echo $news_title; ?></h1>
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->


<div class="container py-4">

	<div class="row">
		<div class="col-lg-3 order-lg-2">
			<?php require_once('sidebar.php'); ?>
		</div>
		<div class="col-lg-9 order-lg-1">
			<!-- Post Item Start -->
			<article class="post post-large">
				<div class="post-image">
					<a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>">
						<img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $photo ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="<?php echo $news_title; ?>" />
					</a>
				</div>

				<div class="post-date">
					<span class="day"><?php $newDate = date("d", strtotime($row['news_date']));
										echo $newDate; ?></span>
					<span class="month"><?php $newDate = date("M", strtotime($row['news_date']));
										echo $newDate; ?></span>
				</div>

				<div class="post-content">

					<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><?php echo $news_title; ?></h2>
					<p><?php echo $news_content; ?></p>

					<div class="post-meta">
						<span><i class="far fa-folder"></i> <a href="<?php echo BASE_URL; ?>category/<?php echo $category_slug; ?>"><?php echo $category_name; ?></a></span>
					</div>

				</div>
			</article>
			<!-- Post Item End -->

		</div>
	</div>
</div>


<?php require_once('footer.php'); ?>