<?php
ob_start();
session_start();
include("config.php");
$error_message='';

$q = $pdo->prepare("SELECT * FROM tbl_setting_captcha WHERE id=?");
$q->execute([1]);
$res = $q->fetchAll();
foreach ($res as $row) {
	$captcha_admin_login = $row['captcha_admin_login'];
}

if(isset($_POST['form1'])) 
{
	$valid = 1;

    if(empty($_POST['email']) || empty($_POST['password'])) 
    {
    	$valid = 0;
        $error_message = 'Email and/or Password can not be empty<br>';
    } 
    else 
    {
    	$statement = $pdo->prepare("SELECT * FROM tbl_user WHERE email=? AND status=?");
    	$statement->execute(array($_POST['email'],'Active'));
    	$total = $statement->rowCount();    
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);    
        if($total==0)
        {
        	$valid = 0;
            $error_message .= 'Email Address does not match<br>';
        }
        else
        {
            foreach($result as $row) 
            {
                $row_password = $row['password'];
            }
        
            if( $row_password != md5($_POST['password']) )
            {
            	$valid = 0;
                $error_message .= 'Password does not match<br>';
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

    if($valid == 1)
    {
    	$_SESSION['user'] = $row;
        header("location: index.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>

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
		<b>Admin Panel</b>
	</div>
  	<div class="login-box-body">
    	<p class="login-box-msg">Log in to start your session</p>
    
	    <?php 
	    if( (isset($error_message)) && ($error_message!='') ):
	        echo '<div class="error">'.$error_message.'</div>';
	    endif;
	    ?>

		<form action="" method="post">
			<div class="form-group has-feedback">
				<input class="form-control" placeholder="Email address" name="email" type="email" autocomplete="off" autofocus>
			</div>
			<div class="form-group has-feedback">
				<input class="form-control" placeholder="Password" name="password" type="password" autocomplete="off" value="">
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
				<div class="col-xs-8" style="padding-top:7px;"><a href="forget-password.php" style="color:red;">Forget Password?</a></div>
				<div class="col-xs-4">
					<input type="submit" class="btn btn-primary btn-block btn-flat login-button" name="form1" value="Log In">
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