<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form_home_menu'])) {
	$statement = $pdo->prepare("UPDATE tbl_menu_home SET home_menu_name=?,home_menu_status=? WHERE id=1");
	$statement->execute(array($_POST['home_menu_name'],$_POST['home_menu_status']));

	$success_message = 'Home menu setting is updated successfully.';
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Menus</h1>
	</div>
	<div class="content-header-right">
		<a href="menu-add.php" class="btn btn-primary btn-sm">Add New</a>
	</div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_menu_home");
$statement->execute();
$result = $statement->fetchAll();							
foreach ($result as $row) {
	$home_menu_name = $row['home_menu_name'];
	$home_menu_status = $row['home_menu_status'];
}
?>

<section class="content">

  	<div class="row">
    	<div class="col-md-12">

    		<?php if($error_message): ?>
					<div class="callout callout-danger">
					<h4>Please correct the following errors:</h4>
					<p>
					<?php echo $error_message; ?>
					</p>
					</div>
					<?php endif; ?>

					<?php if($success_message): ?>
					<div class="callout callout-success">
					<h4>Success:</h4>
					<p><?php echo $success_message; ?></p>
					</div>
					<?php endif; ?>

    		<div class="box box-info">        
				<div class="box-body table-responsive">
					<form action="" method="post">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="col-sm-12 control-label">Home Menu Name</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" name="home_menu_name" value="<?php echo $home_menu_name; ?>">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="col-sm-12 control-label">Home Menu Status</label>
									<div class="col-sm-12">
										<select name="home_menu_status" class="form-control">
											<option value="Show" <?php if($home_menu_status == 'Show') {echo 'selected';} ?>>Show</option>
											<option value="Hide" <?php if($home_menu_status == 'Hide') {echo 'selected';} ?>>Hide</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="col-sm-12 control-label">&nbsp;</label>
									<div class="col-sm-12">
										<button type="submit" class="btn btn-success pull-left" name="form_home_menu">Update</button>
									</div>
								</div>
							</div>
						</div>
						
						
						
					</form>
				</div>
			</div>

			<div class="box box-info">        
				<div class="box-body table-responsive">

					
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Serial</th>
								<th>Menu Type</th>
								<th>Menu Name</th>
								<th>Menu URL</th>
								<th>Menu Order</th>
								<th>Menu Parent</th>
								<th style="width:60px;">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							$q = $pdo->prepare("SELECT * 
                                                FROM tbl_menu 
                                                ORDER BY menu_parent,menu_order ASC");
                            $q->execute();
                            $res = $q->fetchAll();
							foreach ($res as $row) {
								$i++;

								if($row['menu_type']=='Page'):
                                    $r = $pdo->prepare("SELECT * 
                                                FROM tbl_page 
                                                WHERE page_id=?");
                                    $r->execute([$row['page_id']]);
                                    $res1 = $r->fetchAll();                           
                                    foreach ($res1 as $row1) {
                                        $menu_name = $row1['page_name'];
                                    }
                                    $menu_url = '---';
                                elseif($row['menu_type']=='Category'):
                                	$r = $pdo->prepare("SELECT * 
                                                FROM tbl_category 
                                                WHERE category_id=?");
                                    $r->execute([$row['category_id']]);
                                    $res1 = $r->fetchAll();                           
                                    foreach ($res1 as $row1) {
                                        $menu_name = $row1['category_name'];
                                    }
                                    $menu_url = '---';
                                else:
                                    $menu_name = $row['menu_name'];
                                    $menu_url = $row['menu_url'];
                                endif;

								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['menu_type']; ?></td>
									<td><?php echo $menu_name; ?></td>
									<td style="width:250px;word-break: break-word;"><?php echo $menu_url; ?></td>
									<td><?php echo $row['menu_order']; ?></td>
									<td>
										<?php
                                        if($row['menu_parent'] == 0):
                                            echo '---';
                                        else:

                                            $r = $pdo->prepare("SELECT * 
                                                                FROM tbl_menu 
                                                                WHERE menu_id=?");
                                            $r->execute([$row['menu_parent']]);
                                            $res1 = $r->fetchAll();                           
                                            foreach ($res1 as $row1) {

                                                if($row1['page_id'] == 0):
                                                    echo $row1['menu_name'];
                                                else:
                                                    $s = $pdo->prepare("SELECT * 
                                                                        FROM tbl_page 
                                                                        WHERE page_id=?");
                                                    $s->execute([$row1['page_id']]);
                                                    $res2 = $s->fetchAll();                           
                                                    foreach ($res2 as $row2) {
                                                        echo $row2['page_name'];
                                                    }
                                                endif;
                                            }
                                        endif;
                                        ?>
									</td>
									<td>
										<a href="menu-edit.php?id=<?php echo $row['menu_id']; ?>" class="btn btn-primary btn-xs" style="width: 100%;margin-bottom:3px;">Edit</a>
										<a href="#" class="btn btn-danger btn-xs" data-href="menu-delete.php?id=<?php echo $row['menu_id']; ?>" data-toggle="modal" data-target="#confirm-delete" style="width: 100%;">Delete</a>
									</td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                Are you sure want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>