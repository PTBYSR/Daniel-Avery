<?php

if (isset($_POST['delete'])) {
    require_once "dbh.inc.php";
    require_once "func.inc.php";

    $files = $_POST['delete'];

    if (!empty($files)) {
        # code...
        deleteFile($conn, $files);
    }

}