<aside class="sidebar">
	<form action="<?php echo BASE_URL; ?>search" method="post">
		<div class="input-group mb-3 pb-1">
			<input class="form-control text-1" placeholder="Ara..." name="search_string" id="s" type="text">
			<button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
		</div>
	</form>
	<?php
	$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach ($result as $row) {
		$total_recent_news_sidebar = $row['total_recent_news_sidebar'];
		$total_popular_news_sidebar = $row['total_popular_news_sidebar'];
	}
	?>
	<h5 class="font-weight-semi-bold pt-4">Kategoriler</h5>
	<ul class="nav nav-list flex-column mb-5">
		<?php
		$statement = $pdo->prepare("SELECT * FROM tbl_category ORDER BY category_name ASC");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $row) {
		?>
			<li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>category/<?php echo $row['category_slug']; ?>"><?php echo $row['category_name']; ?></a></li>
		<?php
		}
		?>
	</ul>
	<div class="tabs tabs-dark mb-4 pb-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-bs-toggle="tab">Popüler</a></li>
			<li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab">En Son Eklenenler</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="popularPosts">
				<ul class="simple-post-list">
					<?php
					$i = 0;
					$statement = $pdo->prepare("SELECT * FROM tbl_news ORDER BY total_view DESC");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);
					foreach ($result as $row) {
						$i++;
						if ($i > $total_popular_news_sidebar) {
							break;
						}
					?>

						<li>
							<div class="post-info">
								<a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>"><?php echo $row['news_title']; ?></a>
							</div>
						</li>
					<?php
					}
					?>
				</ul>
			</div>
			<div class="tab-pane" id="recentPosts">
				<ul class="simple-post-list">

					<?php
					$i = 0;
					$statement = $pdo->prepare("SELECT * FROM tbl_news ORDER BY news_id DESC");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);
					foreach ($result as $row) {
						$i++;
						if ($i > $total_recent_news_sidebar) {
							break;
						}
					?>

						<li>
							<div class="post-info">
								<a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>"><?php echo $row['news_title']; ?></a>
							</div>
						</li>
					<?php
					}
					?>

				</ul>
			</div>
		</div>
	</div>
</aside>