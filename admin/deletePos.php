<?php
if(isset($_POST['id'])){
	$id = $_POST['id'];
	require_once('./includes/dbhelp.php');
	$sql = "delete from position where pos_id = " .$id;
	execute($sql);

	echo('Xóa phòng ban thành công!');
}