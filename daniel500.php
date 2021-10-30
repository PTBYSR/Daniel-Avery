<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel='stylesheet' href='style.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color: black;
            color: white;
            
        }
        button, input{
            width: 8rem;
            height: 3rem;

        }
        a{
            color: white;
        }
        .admin-wrapper{
            width: 80%;
            margin: 0 auto ;    
        }
        /* .box{
            border: 2px solid blue;
        } */

        .video-details{
            position: relative;
            border:solid 2px #fff;
            text-align:center;
        }

        .box-prof{
            /* width:100vw; */
            height:max-content;
            position: relative;
            border:solid 2px #fff;
            text-align:center;


        }

        .box-prof img{
            border-radius:50%;
            transition:all .5s;
        }

        .box-prof img:hover{
            border-radius:1px;
            
        }

        
    </style>
    <div class="admin-wrapper">
        <h1>Admin Panel</h1>
        <p>go back to;</p>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="work.php">Work</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        
            <div class="admin-cms-wrapper">
            <div class="left">
                    <div class="box-prof">
                         <h1>MY PROFILE PICTURE</h1>
                        <img src="asset/img/CEO-da-Vid.png" alt="CEO-da-Vid" srcset="" width="250px" height="250px">
                        <form action="" method="post"  enctype="multipart/form-data">
                        <input type="file" src="" alt="" name="pic">
                        <input type="submit" value="SUBMIT" name="SUBMITPIC">
                        </form>
                        <form action="includes/upload.inc.php" class="upload" method="post" enctype="multipart/form-data">
                        <input type="file" name="videofile">
                        <input type="submit" name="upload" value="SUBMIT">
                    </form>
                    </div>
                </div>
            <div class="right">
                    
                    <?php
                
                    if (isset($_GET['error'])) {
                        $error = $_GET['error'];
                    if ($error === 'sucess') {
                        # code...
                    }
                    }
                    ?>
                
                    <?php
                            require_once 'includes/dbh.inc.php';
                            require_once 'includes/func.inc.php';
                
                            $sql = "SELECT * FROM video;";
                
                            $resultmsg = mysqli_query($conn, $sql);
                            $resultcheck = mysqli_num_rows($resultmsg);
                        $nn = 1;
                
                            if ($resultcheck > 0) {
                
                              while ($row = mysqli_fetch_assoc($resultmsg)) {
                
                                  # code...
                                  echo '<div class="video-details">';
                                  echo "<video playsinline autoplay muted loop width='250px' height='250px'> <source src='video/".$row['Videofile']."' type='video/ogg' ></video> <form action='includes/delete.inc.php' method='post'><button name='delete' type='submit' value='".$row['Videofile']."'>DELETE</button></form>";
                                  echo '<div class="box"><form action="" method="post">
                
                                  <select name="Order" id="">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                  </select>
                                  <br>
                                  <button name="setOrder" value='.$row['VideoId'].'>SET ORDER</button>
                              </form></div></div>
                              ';
                                  $nn++;
                            }
                            }
                
                            elseif ($resultcheck == 0) {
                              echo "<div class='msgs'>No Video uploaded</div>";
                            }
                     ?>
                     <?php
                    if (isset($_POST['setOrder'])) {
                        // echo $_POST['Order'];
                        # code...
                    $sql = "UPDATE video SET VideoOrder = ".$_POST['Order']." WHERE VideoId = ".$_POST['setOrder'].";";
                    mysqli_query($conn, $sql);
                    // header("location:daniel500.php");
                    // echo $_POST['Order'];
                        # code...
                    }
                    // header("location:daniel500.php?ordersucess");
                    ?>
                </div>
                
            </div>
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
                        unlink($propicname);
                    }
                    if (in_array($fileActualExt, $allowed)) {
                    move_uploaded_file($tmpfile, $propicname);
                    header("location:daniel500.php?ordersucess");
                    }
        
                }
        ?>
    </div>
</body>
</html>