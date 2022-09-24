<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1']))
{
    $captcha_value1 = $_POST['captcha_value1'];
    $captcha_value2 = $_POST['captcha_value2'];
    $captcha_result = $_POST['captcha_result'];
    $captcha_symbol = $_POST['captcha_symbol'];

    $valid = 1;

    if($captcha_value1 == '')
    {
        $valid = 0;
        $error_message .= 'Value 1 can not be empty<br>';
    }
    if($captcha_value2 == '')
    {
        $valid = 0;
        $error_message .= 'Value 2 can not be empty<br>';
    }
    if($captcha_result == '')
    {
        $valid = 0;
        $error_message .= 'Result can not be empty<br>';
    }

    if($valid == 1) 
    {
        $statement = $pdo->prepare("INSERT INTO tbl_captcha (
                            captcha_value1,
                            captcha_value2,
                            captcha_result,
                            captcha_symbol
                        ) VALUES (?,?,?,?)");
        $statement->execute(array(
                            $captcha_value1,
                            $captcha_value2,
                            $captcha_result,
                            $captcha_symbol
                        ));
            
        $success_message = 'Captcha is added successfully!';
    }
}
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Add Captcha Items</h1>
    </div>
</section>


<section class="content">

    <div class="row">
        <div class="col-md-12">

            <?php if($error_message): ?>
            <div class="callout callout-danger"><p><?php echo $error_message; ?></p></div>
            <?php endif; ?>

            <?php if($success_message): ?>
            <div class="callout callout-success"><p><?php echo $success_message; ?></p></div>
            <?php endif; ?>

            <form class="form-horizontal" action="" method="post">
                <div class="box box-info">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="captcha_value1">
                            </div>
                            <div class="col-sm-2">
                                <select name="captcha_symbol" class="form-control symbol">
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="captcha_value2">
                            </div>
                            <div class="col-sm-1 equal text-center">
                                =
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="captcha_result">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>



<section class="content-header">
	<div class="content-header-left">
		<h1>View Captcha Items</h1>
	</div>
</section>


<section class="content">

  <div class="row">
    <div class="col-md-12">


      <div class="box box-info">
        
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
			<thead>
			    <tr>
			        <th>SL</th>
                    <th>Value 1</th>
                    <th>Symbol</th>
                    <th>Value 2</th>
                    <th>Result</th>
                    <th>Action</th>
			    </tr>
			</thead>
            <tbody>
            	<?php
            	$i=0;
                $statement = $pdo->prepare("SELECT * FROM tbl_captcha ORDER BY captcha_id ASC");
                $statement->execute();
                $result = $statement->fetchAll();
                foreach ($result as $row) {
                    $i++;
            		?>
					<tr>
	                    <td><?php echo $i; ?></td>
                        <td><?php echo $row['captcha_value1']; ?></td>
                        <td class="fz_20 pt_5"><?php echo $row['captcha_symbol']; ?></td>
                        <td><?php echo $row['captcha_value2']; ?></td>
                        <td><?php echo $row['captcha_result']; ?></td>
	                    <td>
	                        <a class="btn btn-danger btn-xs" href="captcha-delete.php?id=<?php echo $row['captcha_id']; ?>" onClick="return confirm('Are you sure?');">Delete</a>
	                    </td>
	                </tr>
            		<?php
            	}
            	?>
            </tbody>
          </table>
        </div>
      </div>
</section>

<?php require_once('footer.php'); ?>