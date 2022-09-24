<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
	$valid = 1;

    if(empty($_POST['pricing_plan_name'])) {
        $valid = 0;
        $error_message .= "Pricing Plan Name can not be empty<br>";
    } else {
		// Duplicate checking
    	// current name that is in the database
    	$statement = $pdo->prepare("SELECT * FROM tbl_pricing_plan WHERE pricing_plan_id=?");
		$statement->execute(array($_REQUEST['id']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $row) {
			$current_pricing_plan_name = $row['pricing_plan_name'];
		}

		$statement = $pdo->prepare("SELECT * FROM tbl_pricing_plan WHERE pricing_plan_name=? and pricing_plan_name!=?");
    	$statement->execute(array($_POST['pricing_plan_name'],$current_pricing_plan_name));
    	$total = $statement->rowCount();							
    	if($total) {
    		$valid = 0;
        	$error_message .= 'Pricing Plan name already exists<br>';
    	}
    }

    if(empty($_POST['pricing_plan_price'])) {
        $valid = 0;
        $error_message .= "Pricing Plan Price can not be empty<br>";
    }

    if($valid == 1) {

    	// updating into the database
		$statement = $pdo->prepare("UPDATE tbl_pricing_plan SET pricing_plan_name=?, pricing_plan_price=?, pricing_plan_button_text=?, pricing_plan_button_url=? WHERE pricing_plan_id=?");
		$statement->execute(array($_POST['pricing_plan_name'],$_POST['pricing_plan_price'],$_POST['pricing_plan_button_text'],$_POST['pricing_plan_button_url'],$_REQUEST['id']));

    	$success_message = 'Pricing Plan is updated successfully.';
    }
}
?>

<?php
if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM tbl_pricing_plan WHERE pricing_plan_id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Pricing Plan</h1>
	</div>
	<div class="content-header-right">
		<a href="pricing-plan.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php							
foreach ($result as $row) {
	$pricing_plan_name        = $row['pricing_plan_name'];
	$pricing_plan_price       = $row['pricing_plan_price'];
	$pricing_plan_button_text = $row['pricing_plan_button_text'];
	$pricing_plan_button_url  = $row['pricing_plan_button_url'];
}
?>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if($error_message): ?>
			<div class="callout callout-danger">
			
			<p>
			<?php echo $error_message; ?>
			</p>
			</div>
			<?php endif; ?>

			<?php if($success_message): ?>
			<div class="callout callout-success">
			
			<p><?php echo $success_message; ?></p>
			</div>
			<?php endif; ?>

			<form class="form-horizontal" action="" method="post">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Plan Name <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="pricing_plan_name" value="<?php echo $pricing_plan_name; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Plan Price <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="pricing_plan_price" value="<?php echo $pricing_plan_price; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Button Text </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="pricing_plan_button_text" value="<?php echo $pricing_plan_button_text; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Button URL </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="pricing_plan_button_url" value="<?php echo $pricing_plan_button_url; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>

<?php require_once('footer.php'); ?>