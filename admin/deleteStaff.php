<?php
if(isset($_POST['id'])){
	$id = $_POST['id'];
	require_once('./includes/dbhelp.php');
	$sql = "delete from employee where nv_id = " .$id;
	execute($sql);

	echo('Xóa nhân viên thành công!');
}