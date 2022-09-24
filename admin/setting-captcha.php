<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
	$statement = $pdo->prepare("UPDATE tbl_setting_captcha SET 
                        captcha_contact=?,
                        captcha_admin_login=?
                        WHERE id=1
                        ");
	$statement->execute([$_POST['captcha_contact'],$_POST['captcha_admin_login']]);

    $_SESSION['success_message'] = 'Captcha setting is updated successfully.';
    header('location: setting-captcha.php');
    exit;
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Setting - Captcha</h1>
	</div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_setting_captcha WHERE id=1");
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row) {
	$captcha_contact = $row['captcha_contact'];
    $captcha_admin_login = $row['captcha_admin_login'];
}
?>

<section class="content">

	<div class="row">
		<div class="col-md-12">

            <?php if(isset($_SESSION['error_message'])): ?>
            <div class="callout callout-danger"><p><?php echo $_SESSION['error_message']; ?></p></div>
            <?php unset($_SESSION['error_message']); ?>
            <?php endif; ?>

            <?php if(isset($_SESSION['success_message'])): ?>
            <div class="callout callout-success"><p><?php echo $_SESSION['success_message']; ?></p></div>
            <?php unset($_SESSION['success_message']); ?>
            <?php endif; ?>

            <form class="form-horizontal" action="" method="post">
                <div class="box box-info">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Contact Page </label>
                            <div class="col-sm-2">
                                <select name="captcha_contact" class="form-control select2">
                                    <option value="Show" <?php if($captcha_contact == 'Show') {echo 'selected';} ?>>Show</option>
                                    <option value="Hide" <?php if($captcha_contact == 'Hide') {echo 'selected';} ?>>Hide</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Admin Login Page </label>
                            <div class="col-sm-2">
                                <select name="captcha_admin_login" class="form-control select2">
                                    <option value="Show" <?php if($captcha_admin_login == 'Show') {echo 'selected';} ?>>Show</option>
                                    <option value="Hide" <?php if($captcha_admin_login == 'Hide') {echo 'selected';} ?>>Hide</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label"></label>
                            <div class="col-sm-5">
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