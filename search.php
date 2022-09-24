<?php require_once('header.php'); ?>

<?php
// Preventing the direct access of this page.
if (!isset($_REQUEST['search_string'])) {
	header('location: ' . BASE_URL);
	exit;
}
?>

<!-- Banner Start -->
<section class="page-header page-header-modern page-header-background page-header-background-sm m-0" style="background-image: url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $banner; ?>); background-size: cover; background-position: center;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
				<h1 class="font-weight-bold text-8 mb-0">"<?php echo $_REQUEST['search_string']; ?>" için sonuçlar</h1>
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->


<!-- Blog Start -->
<div class="container py-4">

	<div class="row">
		<div class="col-lg-3 order-lg-2">
			<?php require_once('sidebar.php'); ?>
		</div>
		<div class="col-lg-9 order-lg-1">
			<div class="blog-posts">


				<?php
				$search_string = "%" . $_REQUEST['search_string'] . "%";

				$statement = $pdo->prepare("SELECT * FROM tbl_news WHERE news_title like ? OR news_content like ?");
				$statement->execute(array($search_string, $search_string));
				$total = $statement->rowCount();
				?>

				<?php if (!$total) : ?>
					<p style="color:red;">Üzgünüz! Herhangi bir içerik bulunamadı.</p>
				<?php else : ?>




					<?php
					/* ===================== Pagination Code Starts ================== */
					$adjacents = 10;

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
		                           WHERE t1.news_title like ? OR t1.news_content like ?");
					$statement->execute(array($search_string, $search_string));
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
						WHERE t1.news_title like ? OR t1.news_content like ? 
						LIMIT $start, $limit");
					 $statement->execute(array($search_string, $search_string));
					 $result = $statement->fetchAll(PDO::FETCH_ASSOC);


					$s1 = $_REQUEST['search_string'];

					if ($page == 0) $page = 1;
					$prev = $page - 1;
					$next = $page + 1;
					$lastpage = ceil($total_pages / $limit);
					$lpm1 = $lastpage - 1;
					$pagination = "";
					if ($lastpage > 1) {
						$pagination .= "<div class=\"pagination float-end\">";
						if ($page > 1)
							$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=$prev\"><i class=\"fas fa-angle-left\"></i></a></li>";
						else
							$pagination .= "<li class=\"page-item\"><a onclick=\"return false;\" class=\"page-link\"><i class=\"fas fa-angle-left\"></i></a></li>";
						if ($lastpage < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
						{
							for ($counter = 1; $counter <= $lastpage; $counter++) {
								if ($counter == $page)
									$pagination .= "<li class=\"page-item active\"><a class=\"page-link\" href=\"javascript:void(0)\">$counter</a></li>";
								else
									$pagination .= "<a class=\"page-link\" href=\"$targetpage?slug=$s1&page=$counter\">$counter</a>";
							}
						} elseif ($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
						{
							if ($page < 1 + ($adjacents * 2)) {
								for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
									if ($counter == $page)
										$pagination .= "<span class=\"current\">$counter</span>";
									else
										$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=$counter\">$counter</a></li>";
								}
								$pagination .= "...";
								$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=$lpm1\">$lpm1</a></li>";
								$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=$lastpage\">$lastpage</a></li>";
							} elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
								$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=1\">1</a></li>";
								$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=2\">2</a></li>";
								$pagination .= "...";
								for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
									if ($counter == $page)
										$pagination .= "<span class=\"current\">$counter</span>";
									else
										$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=$counter\">$counter</a></li>";
								}
								$pagination .= "...";
								$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=$lpm1\">$lpm1</a></li>";
								$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=$lastpage\">$lastpage</a></li>";
							} else {
								$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=1\">1</a></li>";
								$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=2\">2</a></li>";
								$pagination .= "...";
								for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
									if ($counter == $page)
										$pagination .= "<span class=\"current\">$counter</span>";
									else
										$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=$counter\">$counter</a></li>";
								}
							}
						}
						if ($page < $counter - 1)
							$pagination .= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?slug=$s1&page=$next\"><i class=\"fas fa-angle-right\"></i></a></li>";
						else
							$pagination .= "<li class=\"page-item\"><a onclick=\"return false;\" class=\"page-link\"><i class=\"fas fa-angle-right\"></i></a></li>";
						$pagination .= "</div>\n";
					}
					/* ===================== Pagination Code Ends ================== */
					?>

					<?php
					foreach ($result as $row) {
					?>
						<article class="post post-large">
							<div class="post-image">
								<a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>">
									<img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="<?php echo $row['news_title']; ?>" />
								</a>
							</div>

							<div class="post-date">
								<span class="day"><?php $newDate = date("d", strtotime($row['news_date']));
													echo $newDate; ?></span>
								<span class="month"><?php $newDate = date("M", strtotime($row['news_date']));
													echo $newDate; ?></span>
							</div>

							<div class="post-content">

								<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>"><?php echo $row['news_title']; ?></a></h2>
								<p><?php echo substr($row['news_content'], 0, 200) . ' ...'; ?></p>

								<div class="post-meta">
									<span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>" class="btn btn-xs btn-light text-1 text-uppercase">Daha Fazla</a></span>
								</div>

							</div>
						</article>
					<?php
					}
					?>
				<?php endif; ?>


				<?php if ($total) : ?>
					<?php echo $pagination; ?>
				<?php endif; ?>

			</div>
		</div>
	</div>

</div>
<!-- Blog End -->

<?php require_once('footer.php'); ?>