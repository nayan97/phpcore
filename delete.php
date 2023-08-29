<?php
include_once"autoload.php";

$del_id = $_GET['delete_id'];
connect()-> query("DELETE FROM staff WHERE id='$del_id'");

header("location:index.php")



?>