<?php require_once('header.php'); ?>

<?php
if( !isset($_REQUEST['id']) || !isset($_REQUEST['id1']) ) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM tbl_department_openning_hour WHERE oh_id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
	
// Delete from tbl_video
$statement = $pdo->prepare("DELETE FROM tbl_department_openning_hour WHERE oh_id=?");
$statement->execute(array($_REQUEST['id']));

header('location: department-edit.php?id='.$_REQUEST['id1']);
?>