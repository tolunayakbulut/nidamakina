<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
	$statement = $pdo->prepare("UPDATE tbl_setting_email SET 
                        send_email_from=?, 
                        receive_email_to=?, 
                        smtp_active=?,
                        smtp_ssl=?,
                        smtp_host=?,
                        smtp_port=?,
                        smtp_username=?,
                        smtp_password=? 
                        WHERE id=1
                        ");
	$statement->execute([
	                    $_POST['send_email_from'],
                        $_POST['receive_email_to'],
                        $_POST['smtp_active'],
                        $_POST['smtp_ssl'],
                        $_POST['smtp_host'],
                        $_POST['smtp_port'],
                        $_POST['smtp_username'],
                        $_POST['smtp_password']
                        ]);

    $_SESSION['success_message'] = 'Email setting is updated successfully.';
    header('location: setting-email.php');
    exit;
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Setting - Email</h1>
	</div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_setting_email WHERE id=1");
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row) {
	$send_email_from = $row['send_email_from'];
	$receive_email_to = $row['receive_email_to'];
    $smtp_active = $row['smtp_active'];
    $smtp_ssl = $row['smtp_ssl'];
    $smtp_host = $row['smtp_host'];
    $smtp_port = $row['smtp_port'];
    $smtp_username = $row['smtp_username'];
    $smtp_password = $row['smtp_password'];
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
                            <label for="" class="col-sm-2 control-label">Send Email From </label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="send_email_from" value="<?php echo $send_email_from; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Receive Email To </label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="receive_email_to" value="<?php echo $receive_email_to; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">SMTP Active?</label>
                            <div class="col-sm-5">
                                <select name="smtp_active" class="form-control select2">
                                    <option value="Yes" <?php if($smtp_active == 'Yes') {echo 'selected';} ?>>Yes</option>
                                    <option value="No" <?php if($smtp_active == 'No') {echo 'selected';} ?>>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">SMTP SSL?</label>
                            <div class="col-sm-5">
                                <select name="smtp_ssl" class="form-control select2">
                                    <option value="Yes" <?php if($smtp_ssl == 'Yes') {echo 'selected';} ?>>Yes</option>
                                    <option value="No" <?php if($smtp_ssl == 'No') {echo 'selected';} ?>>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">SMTP Host </label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="smtp_host" value="<?php echo $smtp_host; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">SMTP Port </label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="smtp_port" value="<?php echo $smtp_port; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">SMTP Username </label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="smtp_username" value="<?php echo $smtp_username; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">SMTP Password </label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="smtp_password" value="<?php echo $smtp_password; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
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