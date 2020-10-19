<?php
session_start();

if (!isset($_SESSION['username'])) {
header('Location: login.php');
}
else{
    $uname=$_SESSION['username'];
}
include "db.php";
$name=$_GET['name'];
   
if (isset($_GET['name'])){
    
    $name = $_GET['name'];
                          
    $download_path = 'user_data/$uname/'.$name;
    $file_to_download = $download_path; 
    header("Expires: 0");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");  
    header("Content-type: application/file");
    header('Content-length: '.filesize($file_to_download));
    header('Content-disposition: attachment; filename='.basename($file_to_download));
    readfile($file_to_download);
    exit;
                         
    }
?>