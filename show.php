
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                  echo "<video playsinline autoplay muted loop width='250px' height='250px'> <source src='video/".$row['Videofile']."' type='video/ogg' ></video> ";
                  $nn++;
              
		    

		  }
		}

		elseif ($resultcheck == 0) {
		  echo "<div class='msgs'>No Video uploaded</div>";
		}




 ?>
</body>
</html>