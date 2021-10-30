<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="author" content="harrnish">

      <title>Work </title>

      <!-- stylesheet -->
      <link rel="stylesheet" href="style.css">

      <!-- bootstrap cdns -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

      <!-- for on scroll animations -->
      <link rel="stylesheet" href="animate.css">
      <script src="wow.min.js"></script>

</head>
<body>
      <div class="wrapper">

            <!--------------- navbar starts here --------------->
            <nav>
                  <span id="brand">
                        <a href="index.php">Daniel Avery</a>
                  </span>

                  <ul id="menu">
                        <li><a href="index.php">home<span>.</span></a></li>
                        <li><a href="work.php">work<span>.</span></a></li>
                        <li><a href="about.php">about me<span>.</span></a></li>
                        <!-- <li><a href="contact.html">contact<span>.</span></a></li> -->
                  </ul>

                  <div id="toggle">
                        <div class="span">menu</div>
                  </div>

            </nav>

            <div id="resize">
                  <div class="close-btn">close</div>

                  <ul id="menu">
                        <li><a href="index.php">home<span>.</span></a></li>
                        <li><a href="work.php">work<span>.</span></a></li>
                        <li><a href="about.php">about me<span>.</span></a></li>
                        <!-- <li><a href="contact.html">contact<span>.</span></a></li> -->
                  </ul>
            </div>

            <!--------------- navbar ends here --------------->

            <div class="whitespace"></div>

            <!--------------- hero section starts here --------------->
            <div class="container">
                  <div class="hero-content">
                  <div class="row" style="margin-top:20px">
                              <div class="col-lg-8">
                                    </br>
                                    </br>
                                    </br>
                                    <h3 class="wow fadeInUp" data-wow-delay="1s">work.</h3><br>
                                    <p class="wow fadeInUp" data-wow-delay="1.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, accusantium sint quod voluptatem dolorum, quaerat, ut iusto cumque magni ab repudiandae, quasi minus unde temporibus nulla eum eaque! Placeat praesentium sunt suscipit laboriosam deserunt commodi atque corporis, iure maiores dicta, fugit similique.</p>

                              </div>
                        </div>
                  <?php
		require_once 'includes/dbh.inc.php';
		require_once 'includes/func.inc.php';

		$sql = "SELECT * FROM video ORDER BY VideoOrder DESC;";

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
                        <br><br>

                        
                  </div>
            </div>

            <!--------------- hero section ends here --------------->

            <!--------------- projects section starts here --------------->
            <div class="container-fluid">

                  <div class="whitespace"></div>
                  <div class="whitespace"></div>

                  <div class="row">
                        <div class="col-lg-8"></div>

                        <div class="col-lg-4 project project1 wow fadeInUp" data-wow-delay="1.4s" onclick="location.href='project.html'"></div>
                  </div>

                  <div class="whitespace"></div>

                  <div class="row">
                        <div class="col-lg-6 project project2 wow fadeInUp" onclick="location.href='project.html'"></div>

                        <div class="col-lg-6"></div>
                  </div>

                  <div class="whitespace"></div>

                  <div class="row">
                        <div class="col-lg-7"></div>

                        <div class="col-lg-4 project project3 wow fadeInUp" onclick="location.href='project.html'"></div>

                        <div class="col-lg-1"></div>
                  </div>

                  <div class="whitespace"></div>

                  <div class="row">
                        <div class="col-lg-1"></div>

                        <div class="col-lg-5 project project4 wow fadeInUp" onclick="location.href='project.html'"></div>

                        <div class="col-lg-6"></div>
                  </div>

                  <div class="whitespace"></div>
            </div>

            <!--------------- projects section ends here --------------->

            <!--------------- footer starts here --------------->
            <div class="footer">
                  <div class="container">
                        <br><br>

                        <div class="collab">
                              <div class="row">
                                    <div class="col-lg-12">
                                          <p class="wow fadeInUp">Got an interesting project? I can help you.</p>
                                    </div>
                              </div>
                        </div>

                        <br>

                        <div class="hr">
                              <div class="row"></div>
                        </div>

                        <br><br>

                        <div class="info">
                              <div class="row">
                                    <div class="col-lg-4" id="personal">
                                          <p class="wow fadeInUp">connect with me</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s">ig @danielavery__</h4>
                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="media">
                                          <p class="wow fadeInUp" data-wow-delay="0s">follow me</p>

                                          <ul>
                                                <!-- <li id="fb" class="wow fadeInUp" data-wow-delay="0.4s">fb</li> -->
                                                <a href="https://instagram.com/danielavery__?utm_medium=copy_link">
                                                      <li id="ig" class="wow fadeInUp" data-wow-delay="0.6s">ig</li>
                                                </a>
                                                <!-- <li id="tw" class="wow fadeInUp" data-wow-delay="0.8s">tw</li> -->
                                                <!-- <li id="yt" class="wow fadeInUp" data-wow-delay="1s">yt</li> -->
                                          </ul>

                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="address">
                                          <p class="wow fadeInUp" data-wow-delay="0s">say hello</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s">okahdaniel14@gmail.com</h4>
                                          <br><br>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

            <!--------------- footer ends here --------------->

            <br><br><br><br>

      </div>

      <!-- greensock cdn -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script type="text/javascript">

      // navigation starts here
      $("#toggle").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      $("#resize ul li a").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      $(".close-btn").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      // navigation ends here

      // nav animation

      TweenMax.from("#brand", 1, {
            delay: 0.4,
            y: 10,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.staggerFrom("#menu li a", 1, {
            delay: 0.4,
            opacity: 0,
            ease: Expo.easeInOut
      }, 0.1);

      // nav animation ends

      new WOW().init();


      </script>
</body>
</html>