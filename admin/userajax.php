<?php $db= new mysqli('localhost','upasahgv_ngo','loveyoudad9820102993','upasahgv_ngo'); 
extract($_POST);
$user_id=$db->real_escape_string($id);
$status=$db->real_escape_string($status);
$sql=$db->query("UPDATE adminlogin SET status='$status' WHERE id='$id'");
echo $sql;
//echo 1;
?>
