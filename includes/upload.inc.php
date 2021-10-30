<?php

if (!isset($_POST['upload'])) {
    header("location:../");
}
else{
    require_once "dbh.inc.php";
    require_once "func.inc.php";

    $video = $_FILES["videofile"];

    if (empty($video)) {
        header("location:../daniel500.php?error=emptyfile");
    }

    $fileName =  $_FILES['videofile']['name'];
    $fileTmpName =  $_FILES['videofile']['tmp_name'];
    $fileSize =  $_FILES['videofile']['size'];
    $fileError =  $_FILES['videofile']['error'];
    $fileType =  $_FILES['videofile']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('avi', 'gif', 'mp4',);
    $fileNameNew = "";

    checkvideo($conn, $video, $fileNameNew, $fileName, $fileTmpName, $fileSize, $fileError, $fileType, $fileExt, $fileActualExt, $allowed);





















}