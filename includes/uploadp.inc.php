<?php
                if (isset($_POST['SUBMITPIC'])) {
                    # code...
                    $picname = $_FILES['pic']['name'];
                    $tmpfile = $_FILES['pic']['tmp_name'];
                    $fileSize =  $_FILES['pic']['size'];
                    $fileError =  $_FILES['pic']['error'];
                    $fileType =  $_FILES['pic']['type'];
        
                    $fileExt = explode('.', $picname);
                    $fileActualExt = strtolower(end($fileExt));
                    $allowed = array('jpg', 'jpeg', 'png',);
                    $fileDestination = 'asset/img/';
        
                    $propicname = $fileDestination."CEO-da-Vid.png";
        
                    if (unlink($propicname)) {
                        # code...
                       // unlink($propicname);
                    }
                    if (in_array($fileActualExt, $allowed)) {
                    move_uploaded_file($tmpfile, $propicname);
                    
                    }
                    unset($_POST);
                    header("location:../daniel500.php");
                    
                }
       