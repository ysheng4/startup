<?php
$url=$_REQUEST['purl'];
session_start();
session_unset(); 
session_destroy();
//echo $_SERVER['REQUEST_URI'];
//echo json_encode($url);

?>