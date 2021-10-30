<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="author" content="harrnish">

      <title>Daniel Avery</title>

      <!-- stylesheet -->
      <link rel="stylesheet" href="style.css">

      <!-- bootstrap cdns -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

      <!-- terminal effect -->
      <script src="t.min.js"></script>

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
                        <li><a href="index.html">home<span>.</span></a></li>
                        <li><a href="work.php">work<span>.</span></a></li>
                        <li><a href="about.html">about me<span>.</span></a></li>
                        <!-- <li><a href="contact.html">contact<span>.</span></a></li> -->
                  </ul>
            </div>
            <!--------------- navbar ends here --------------->



            <!--------------- hero section starts here --------------->
            <div class="add-on-1">
                  <div class="hero">
                        <!-- <div style="width: 30%;"> -->
                              <div id="pls"class="header">
                                    <h1 class="line anim-typewriter">I create cinematic orgasms.</h1>
                              </div>
                        <!-- </div> -->
                  </div>
            
                  <div class="add-on-2">
                        <!-- <div class="add-on-3"> -->
                              <!-- Slideshow container -->
                              <div class="slideshow-container">
                              
                                    <!-- Full-width images with number and caption text -->
                                    <!-- <div id='vid' class='mySlides '> -->
                                      <!-- <div class="numbertext">1 / 3</div> -->
                                      <!-- <div id='loading'>Loading...</div> -->
                                      <!-- <img src="img1.jpg" style="width:100%"> -->
                                      <!-- <div class='text'><h1>Picture 1</h1></div>
                                    </div> -->

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
                                                echo "<div id='vid' class='mySlides '>
                                                      <div class='text'>
                                                      <video playsinline autoplay muted loop width='80%' height='100%'> 
                                                      <source src='video/".$row['Videofile']."' type='video/ogg' >
                                                      </video> 
                                                      </div>
                                                      </div>";
                                                $nn++;
                                          
                                          

                                          }
                                          }

                                          elseif ($resultcheck == 0) {
                                          
                                          }

                                    ?>



                                  
                                    <!-- <div class="mySlides "> -->
                                      <!-- <div class="numbertext">2 / 3</div> -->
                                      <!-- <img src="img2.jpg" style="width:100%"> -->
                                      <!-- <img src="https://images.unsplash.com/photo-1468870045442-e7d799d8c98a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2448&q=80" style="width:100%"> -->
                              
                                      <!-- <div class="text"><h1>Picture 2</h1></div> -->
                                    <!-- </div> -->
                                  
                                    <!-- <div class="mySlides "> -->
                                      <!-- <div class="numbertext">3 / 3</div> -->
                                      <!-- <img src="img3.jpg" style="width:100%"> -->
                                      <!-- <img src="https://images.unsplash.com/photo-1435685813800-51ba4ceb9c4a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1785&q=80" style="width:100%"> -->
                              
                                      <!-- <div class="text"><h1>Picture 3</h1></div> -->
                                    <!-- </div> -->
                                  
                                    <!-- Next and previous buttons -->
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                              </div>
                                  <br>
                                  
                                  <!-- The dots/circles -->
                                  <!-- <div style="text-align:center">
                                    <span class="dot" onclick="currentSlide(1)"></span>
                                    <span class="dot" onclick="currentSlide(2)"></span>
                                    <span class="dot" onclick="currentSlide(3)"></span>
                                  </div> -->
                        <!-- </div> -->
                  </div>
            </div>
            
            <div class="scroll-down"></div>
            <!--------------- hero section ends here --------------->



            <!--------------- projects section starts here --------------->
            <!-- <div class="container-fluid">
                  <br><br><br>

                  <h6>Selected projects</h6>

                  <div class="vertical"></div>
                  <br>

                  <div class="whitespace"></div>
                  <div class="whitespace"></div>

                  <div class="row">
                        <div class="col-lg-8"></div>

                        <div class="col-lg-4 project project1 wow fadeInUp" onclick="location.href='project.html'"></div>
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
            </div> -->
            <!--------------- projects section ends here --------------->



            <!--------------- footer starts here --------------->
            <div class="footer">
                  <div class="container">
                        <br><br>

                        <div class="collab">
                              <div class="row">
                                    <div class="col-lg-12">
                                          <a style="text-decoration: none; color: white;" href="work.php">
                                                <p class="wow fadeInUp">Check out my <span style="color: #fcaf45">works.</span></p>
                                          </a>
                                    </div>
                              </div>
                        </div>
                        <div class="collab">
                              <div class="row">
                                    <div class="col-lg-12">
                                          <a style="text-decoration: none; color: white;" href="about.php">
                                                <p class="wow fadeInUp">Know more <span style="color:#fcaf45">about me</span></p>
                                          </a>
                                    </div>
                              </div>
                        </div>
                        <div class="collab">
                              <div class="row">
                                    <div class="col-lg-12">
                                          <p class="wow fadeInUp">Got an interesting idea? I can help you.</p>
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
                                          <br>
                                          <!-- <br><br> -->
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
      var slideIndex = 1;
      showSlides(slideIndex);

      // Next/previous controls
      function plusSlides(n) {
      showSlides(slideIndex += n);
      }

      // Thumbnail image controls
      function currentSlide(n) {
      showSlides(slideIndex = n);
      }

      function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      console.log(slideIndex)
      for (i = 0; i < slides.length; i++) {
            console.log(i)
            slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      //   dots[slideIndex-1].className += " active";
      }

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
