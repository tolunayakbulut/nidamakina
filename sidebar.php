<!-- Sidebar Container Start -->
<div class="sidebar">
	<div class="widget widget-search">
		<form action="<?php echo BASE_URL; ?>search" method="post">
			<input type="text" name="search_string" placeholder="Search">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	<div class="widget">
		<?php
		$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $row) {
			$total_recent_news_sidebar = $row['total_recent_news_sidebar'];
			$total_popular_news_sidebar = $row['total_popular_news_sidebar'];
		}
		?>
		<h4>Categories</h4>
		<ul>
			<?php
			$statement = $pdo->prepare("SELECT * FROM tbl_category ORDER BY category_name ASC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $row) {
			?>
				<li><a href="<?php echo BASE_URL; ?>category/<?php echo $row['category_slug']; ?>"><?php echo $row['category_name']; ?></a></li>
			<?php
			}
			?>
		</ul>
	</div>
	<div class="widget">
		<h4>Recent Posts</h4>
		<ul>
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
				<li><a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>"><?php echo $row['news_title']; ?></a></li>
			<?php
			}
			?>
		</ul>
	</div>
	<div class="widget">
		<h4>Popular Posts</h4>
		<ul>
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
				<li><a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>"><?php echo $row['news_title']; ?></a></li>
			<?php
			}
			?>
		</ul>
	</div>
</div>
<!-- Sidebar Container End -->






<aside class="sidebar">
	<form action="page-search-results.html" method="get">
		<div class="input-group mb-3 pb-1">
			<input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
			<button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
		</div>
	</form>
	<h5 class="font-weight-semi-bold pt-4">Categories</h5>
	<ul class="nav nav-list flex-column mb-5">
		<li class="nav-item"><a class="nav-link" href="#">Design (2)</a></li>
		<li class="nav-item">
			<a class="nav-link active" href="#">Photos (4)</a>
			<ul>
				<li class="nav-item"><a class="nav-link" href="#">Animals</a></li>
				<li class="nav-item"><a class="nav-link active" href="#">Business</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
				<li class="nav-item"><a class="nav-link" href="#">People</a></li>
			</ul>
		</li>
		<li class="nav-item"><a class="nav-link" href="#">Videos (3)</a></li>
		<li class="nav-item"><a class="nav-link" href="#">Lifestyle (2)</a></li>
		<li class="nav-item"><a class="nav-link" href="#">Technology (1)</a></li>
	</ul>
	<div class="tabs tabs-dark mb-4 pb-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-bs-toggle="tab">Popular</a></li>
			<li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab">Recent</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="popularPosts">
				<ul class="simple-post-list">
					<li>
						<div class="post-image">
							<div class="img-thumbnail img-thumbnail-no-borders d-block">
								<a href="blog-post.html">
									<img src="img/blog/square/blog-11.jpg" width="50" height="50" alt="">
								</a>
							</div>
						</div>
						<div class="post-info">
							<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
							<div class="post-meta">
								Nov 10, 2022
							</div>
						</div>
					</li>
					<li>
						<div class="post-image">
							<div class="img-thumbnail img-thumbnail-no-borders d-block">
								<a href="blog-post.html">
									<img src="img/blog/square/blog-24.jpg" width="50" height="50" alt="">
								</a>
							</div>
						</div>
						<div class="post-info">
							<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
							<div class="post-meta">
								Nov 10, 2022
							</div>
						</div>
					</li>
					<li>
						<div class="post-image">
							<div class="img-thumbnail img-thumbnail-no-borders d-block">
								<a href="blog-post.html">
									<img src="img/blog/square/blog-42.jpg" width="50" height="50" alt="">
								</a>
							</div>
						</div>
						<div class="post-info">
							<a href="blog-post.html">Odiosters Nullam Vitae</a>
							<div class="post-meta">
								Nov 10, 2022
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="tab-pane" id="recentPosts">
				<ul class="simple-post-list">
					<li>
						<div class="post-image">
							<div class="img-thumbnail img-thumbnail-no-borders d-block">
								<a href="blog-post.html">
									<img src="img/blog/square/blog-24.jpg" width="50" height="50" alt="">
								</a>
							</div>
						</div>
						<div class="post-info">
							<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
							<div class="post-meta">
								Nov 10, 2022
							</div>
						</div>
					</li>
					<li>
						<div class="post-image">
							<div class="img-thumbnail img-thumbnail-no-borders d-block">
								<a href="blog-post.html">
									<img src="img/blog/square/blog-42.jpg" width="50" height="50" alt="">
								</a>
							</div>
						</div>
						<div class="post-info">
							<a href="blog-post.html">Odiosters Nullam Vitae</a>
							<div class="post-meta">
								Nov 10, 2022
							</div>
						</div>
					</li>
					<li>
						<div class="post-image">
							<div class="img-thumbnail img-thumbnail-no-borders d-block">
								<a href="blog-post.html">
									<img src="img/blog/square/blog-11.jpg" width="50" height="50" alt="">
								</a>
							</div>
						</div>
						<div class="post-info">
							<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
							<div class="post-meta">
								Nov 10, 2022
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<h5 class="font-weight-semi-bold pt-4">About Us</h5>
	<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
</aside>