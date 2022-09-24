<?php
ob_start();
session_start();
include("config.php");
$error_message='';

$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://".$_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
define("ADMIN_URL", $base_url);


$q = $pdo->prepare("SELECT * FROM tbl_setting_captcha WHERE id=?");
$q->execute([1]);
$res = $q->fetchAll();
foreach ($res as $row) {
	$captcha_admin_login = $row['captcha_admin_login'];
}

require '../assets/mail/Exception.php';
require '../assets/mail/PHPMailer.php';
require '../assets/mail/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['form1'])) {
        
    $valid = 1;
        
    if(empty($_POST['email'])) {
        $valid = 0;
        $error_message .= "Email can not be empty.<br>";
    } else {
    	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	        $valid = 0;
	        $error_message .= 'Email address must be valid.<br>';
	    } else {
	    	$statement = $pdo->prepare("SELECT * FROM tbl_user WHERE email=?");
	    	$statement->execute(array($_POST['email']));
	    	$total = $statement->rowCount();						
	    	if(!$total) {
	    		$valid = 0;
	        	$error_message .= 'You email address is not found in our system.<br>';
	    	}
	    }
    }

    if($captcha_admin_login == 'Show')
    {
    	$r_serial = $_POST['r_serial'];
	    $captcha_input = $_POST['captcha_input'];

	    if($captcha_input == '')
	    {
	    	$valid = 0;
	    	$error_message .= 'You must have to enter captcha<br>';
	    }
	    else
	    {
	    	$q1 = $pdo->prepare("SELECT * FROM tbl_captcha WHERE captcha_id=?");
	    	$q1->execute([$r_serial]);
	    	$res1 = $q1->fetchAll();
	    	foreach ($res1 as $row1) {
	    		$captcha_result = $row1['captcha_result'];
	    	}
	    	if($captcha_input != $captcha_result)
	    	{
	    		$valid = 0;
	    		$error_message .= 'Your answer is incorrect<br>';
	    	}
	    }
    }

    if($valid == 1) {

    	$error_message = '';
		$success_message = '';
		
		$statement = $pdo->prepare("SELECT * FROM tbl_setting_email WHERE id=1");
		$statement->execute();
		$result = $statement->fetchAll();							
		foreach ($result as $row) 
		{
	        $send_email_from = $row['send_email_from'];
	        $receive_email_to = $row['receive_email_to'];
	        $smtp_active = $row['smtp_active'];
	        $smtp_ssl = $row['smtp_ssl'];
	        $smtp_host = $row['smtp_host'];
	        $smtp_port = $row['smtp_port'];
	        $smtp_username = $row['smtp_username'];
	        $smtp_password = $row['smtp_password'];
		}

    	$token = md5(rand());

		$statement = $pdo->prepare("UPDATE tbl_user SET token=? WHERE email=?");
		$statement->execute(array($token,$_POST['email']));
		
		$message = '<p>To reset your password, please <a href="'.ADMIN_URL.'reset-password.php?email='.$_POST['email'].'&token='.$token.'">click here</a> and enter a new password';

		$mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';

        if($smtp_active == 'Yes')
	    {
	    	if($smtp_ssl == 'Yes')
	    	{
	    		$mail->SMTPSecure = "ssl";
	    	}
	    	else
	    	{
	    		$mail->SMTPSecure = "tls";
	    	}
            $mail->IsSMTP();
			$mail->SMTPAuth = true;
			$mail->Host     = $smtp_host;
			$mail->Port     = $smtp_port;
			$mail->Username = $smtp_username;
			$mail->Password = $smtp_password;
        }

        $mail->addReplyTo($receive_email_to);
	    $mail->setFrom($send_email_from);
	    $mail->addAddress($_POST['email']);
	    
	    $mail->isHTML(true);
	    $mail->Subject = 'Password Reset Request';

	    $mail->Body = $message;
	    $mail->send();
		
		$success_message = 'An email is sent to your email address. Please follow instruction in there.';
    }    
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Forget Password</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/datepicker3.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/AdminLTE.min.css">
	<link rel="stylesheet" href="css/_all-skins.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="hold-transition login-page sidebar-mini">

<div class="login-box">
	<div class="login-logo">
		<b>Forget Password</b>
	</div>
  	<div class="login-box-body">
    
	    <?php 
	    if( (isset($error_message)) && ($error_message!='') ):
	        echo '<div class="error">'.$error_message.'</div>';
	    endif;
	    ?>

	    <?php 
	    if( (isset($success_message)) && ($success_message!='') ):
	        echo '<div class="success">'.$success_message.'</div>';
	    endif;
	    ?>

		<form action="" method="post">

			<div class="form-group has-feedback">
				<input class="form-control" placeholder="Email address" name="email" type="email" autocomplete="off" autofocus>
			</div>

			<?php if($captcha_admin_login == 'Show'): ?>
			<div class="form-group has-feedback">
				<div class="col-md-12 captcha-section">
                    <?php
					$q = $pdo->prepare("SELECT * FROM tbl_captcha");
					$q->execute();
					$tot = $q->rowCount();
					$r_serial = mt_rand(1, $tot);
					$q = $pdo->prepare("SELECT * FROM tbl_captcha WHERE captcha_id=?");
					$q->execute([$r_serial]);
					$res = $q->fetchAll();
					foreach ($res as $row) {
						$captcha_value1 = $row['captcha_value1'];
						$captcha_value2 = $row['captcha_value2'];
						$captcha_symbol = $row['captcha_symbol'];
						$captcha_result = $row['captcha_result'];
					}
					?>
					<div class="captcha-section-1">
						<?php echo $captcha_value1.' '.$captcha_symbol.' '.$captcha_value2.' = ' ?>
                    </div>
                    <div class="captcha-section-2">
						<input type="hidden" name="r_serial" value="<?php echo $r_serial; ?>">
						<input type="text" class="form-control w-60" name="captcha_input">
                    </div>
            	</div>
			</div>
			<?php endif; ?>

			<div class="row">
				<div class="col-xs-8" style="padding-top:7px;"><a href="login.php" style="color:red;">back to login page</a></div>
				<div class="col-xs-4">
					<input type="submit" class="btn btn-primary btn-block btn-flat login-button" name="form1" value="Submit">
				</div>
			</div>
		</form>
	</div>
</div>


<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/select2.full.min.js"></script>
<script src="js/jquery.inputmask.js"></script>
<script src="js/jquery.inputmask.date.extensions.js"></script>
<script src="js/jquery.inputmask.extensions.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/icheck.min.js"></script>
<script src="js/fastclick.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/app.min.js"></script>
<script src="js/demo.js"></script>

</body>
</html>