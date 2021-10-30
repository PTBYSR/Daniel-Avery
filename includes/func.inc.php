<?php

function checkvideo($conn, $video, $fileNameNew, $fileName, $fileTmpName, $fileSize, $fileError, $fileType, $fileExt, $fileActualExt, $allowed){

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
          if ($fileSize < 100000000) {
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination = "../video/".$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            uploadtodb($conn, $fileNameNew);
  
  
          }
          else {
            header("location:../daniel500.php?error=filetobig");
          }
      }
  
      else {
        header("location:../daniel500.php?error=fileerror");
      }
    }
    else {
      header("location:../daniel500.php?error=fileerror");
    }
  }



  function uploadtodb($conn, $fileNameNew){

    $sql ="INSERT INTO video (Videofile) VALUES (?);";
  
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location:../daniel500.php?error=stmtfailed");
      exit();
    }
  
  
    $dateadded = date("y-m-d");
  
  
    mysqli_stmt_bind_param($stmt, "s", $fileNameNew);
    if (  mysqli_stmt_bind_param($stmt, "s", $fileNameNew) === false) {
      header("location:../daniel500.php?error=sorry");
      exit();
    }
  
    else {
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
  
    header("location:../daniel500.php?error=sucess");
    exit();
    }
  }


  function deleteFile($conn, $files){

    
        $sql ="DELETE FROM video WHERE Videofile = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("location:../daniel500.php?error=stmtfailed#formbox");
          exit();
        }
      
        mysqli_stmt_bind_param($stmt, "s", $files);
        mysqli_stmt_execute($stmt);
        unlink("../video/".$files);
      
        $resultData = mysqli_stmt_get_result($stmt);
      
      
        mysqli_stmt_close($stmt);
        header("location: ../daniel500.php?error=delsuccess");
      
      
      
      
  }
  