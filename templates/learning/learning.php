<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title>Bingo | Responsive Multipurpose Parallax HTML5 Template</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="../plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="../plugins/lightbox2/dist/css/lightbox.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="../plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="../plugins/slick/slick.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../css/style.css">  

</head>

<body id="body">


  

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
 
</header>



<section class="blog" id="blog">
	<div class="container">

        <div class="row">

                <div id="progressBar" class="charts">
                    <div class="chart chart--dev">
                      <span class="chart__title">Course Progress</span>
                      <ul class="chart--horiz">
                        <li class="chart__bar" style="width: 98%;">
                          <span class="chart__label">
                            60%
                          </span>
                        </li>
                        
                      </ul>
                    </div>
                    
            </div>
            
            
               
                  
                  
                </div>
             
                <br/><br/> <br/><br/> 

		<div class="row">
                
			<!-- section title -->
			<div class="col-12">
				<div class="title text-center ">
					<h2> Did you attend <span class="color">the session?</span></h2>
					<div class="border"></div>
					
				</div>
			</div>
			<!-- /section title -->
			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
				<div class="post-item">
          <div>
            <?php
              $txt='ఇది సాధికారత సెషన్. దయచేసి యూట్యూబ్ వీడియో చూడండి మరియు వెబ్‌సైట్‌ను ఉపయోగించడం నేర్చుకోండి. దయచేసి మీ హోంవర్క్‌ను వెబ్‌సైట్‌లో అప్‌లోడ్ చేయండి.';
              $txt=htmlspecialchars($txt);
              $txt=rawurlencode($txt);
              $html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=te-IN');
              $player="<audio controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
              echo $player;
            ?>
          </div>

					<div class="media-wrapper">
						<img style="height: 200px;" src="../images/learning3.jpg" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="trackProgress.html">Empowerment session</a></h3>
						<p><a href="https://www.youtube.com/watch?v=EdMFiBGMVy4">Session Link</a></p>
                        <!-- <a class="btn btn-main" href="trackProgress.html">Update Progress</a> -->
                        <br/>
                        <div class="container">
                            <div class="row">
                              <div class="col">
                                <button onclick="myFunction1()" style="background-color: red;"><i class="fa fa-times" aria-hidden="true"></i></button>

                                <p id="cross"></p>
                              </div>
                              <div class="col">
                                <button onclick="myFunction2()" style="background-color: green;"  ><i class="fa fa-check" aria-hidden="true"></i></button>

                                <p id="tick"></p>
                              </div>
                            
                        <script>
                            function myFunction1() {
                            document.getElementById("cross").innerHTML = "Never mind!";
                            }
                            </script>
                           
       
                               <script>
                               function myFunction2() {
                               document.getElementById("tick").innerHTML = "Great!";
                               }
                               </script>
                        
                            </div>
                            <br/>
                            <div>
                                <div>
                                    <input type="file" id="real-file" hidden="hidden" />
                                    <button type="button" id="custom-button">Select your homework</button>
                                    <span >No file
                                </div>
                                <br/>
                                <div>
                                    <button type="button" id="custom-button2">Submit homework</button>
                                </div>
                            </div>
                          
                            
                                    <script>
                                        const realFileBtn = document.getElementById("real-file");
                            const customBtn = document.getElementById("custom-button");
                            const customTxt = document.getElementById("custom-text");

                            customBtn.addEventListener("click", function() {
                            realFileBtn.click();
                            });

                            realFileBtn.addEventListener("change", function() {
                            if (realFileBtn.value) {
                                customTxt.innerHTML = realFileBtn.value.match(
                                /[\/\\]([\w\d\s\.\-\(\)]+)$/
                                )[1];
                            } else {
                                customTxt.innerHTML = "No file chosen, yet.";
                            }
                            });

                            </script>
                               
                          </div>
                      

                    </div>
				</div>
			</article>
			<!-- /single blog post -->

			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
        <div>
            <?php
              $txt='ఇది నాయకత్వ పాఠం. దయచేసి యూట్యూబ్ వీడియో చూడండి మరియు వెబ్‌సైట్‌ను ఉపయోగించడం నేర్చుకోండి. దయచేసి మీ హోంవర్క్‌ను వెబ్‌సైట్‌లో అప్‌లోడ్ చేయండి.';
              $txt=htmlspecialchars($txt);
              $txt=rawurlencode($txt);
              $html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=te-IN');
              $player="<audio controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
              echo $player;
            ?>
          </div>
					<div class="media-wrapper">
						<img style="height: 200px;" src="../images/learning6.png" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="trackProgress.html">Leadership Session</a></h3>
						<a href="https://www.youtube.com/watch?v=EdMFiBGMVy4">Session Link</a>
						<br/> <br/>
                        <div class="container">
                            <div class="row">
                              <div class="col">
                                <button style="background-color: red;" onclick="myFunction3()"><i class="fa fa-times" aria-hidden="true"></i></button>

                                <p id="cross2"></p>
                              </div>
                              <div class="col">
                                <button style="background-color: green;" onclick="myFunction4()"><i class="fa fa-check" aria-hidden="true"></i></button>

                                <p id="tick2"></p>
                              </div>
                            
                        <script>
                            function myFunction3() {
                            document.getElementById("cross2").innerHTML = "Never mind!";
                            }
                            </script>
                           
       
                               <script>
                               function myFunction4() {
                               document.getElementById("tick2").innerHTML = "Great!";
                               }
                               </script>
                        
                            </div>
                            <br/>
                            <div>
                                <div>
                                    <input type="file" id="real-file" hidden="hidden" />
                                    <button type="button" id="custom-button">Select your homework</button>
                                    <span >No file
                                </div>
                                <br/>
                                <div>
                                    <button type="button" id="custom-button2">Submit homework</button>
                                </div>
                            </div>
                          
                            
                                    <script>
                                        const realFileBtn = document.getElementById("real-file");
                            const customBtn = document.getElementById("custom-button");
                            const customTxt = document.getElementById("custom-text");

                            customBtn.addEventListener("click", function() {
                            realFileBtn.click();
                            });

                            realFileBtn.addEventListener("change", function() {
                            if (realFileBtn.value) {
                                customTxt.innerHTML = realFileBtn.value.match(
                                /[\/\\]([\w\d\s\.\-\(\)]+)$/
                                )[1];
                            } else {
                                customTxt.innerHTML = "No file chosen, yet.";
                            }
                            });

                            </script>
                               
                          </div>
                      

					</div>
				</div>
			</article>
			<!-- end single blog post -->

			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
        <div>
            <?php
              $txt='ఇది ఒక
              బ్యాంకింగ్ పాఠం యొక్క ప్రాథమిక అంశాలు. దయచేసి YouTube వీడియోను చూడండి మరియు వెబ్‌సైట్‌ను ఎలా ఉపయోగించాలో తెలుసుకోండి. దయచేసి మీ హోంవర్క్‌ను వెబ్‌సైట్‌లో అప్‌లోడ్ చేయండి.';
              $txt=htmlspecialchars($txt);
              $txt=rawurlencode($txt);
              $html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=te-IN');
              $player="<audio controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
              echo $player;
            ?>
          </div>
					<div class="media-wrapper">
						<img style="height: 200px;" src="../images/learning2.jpg" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="trackProgress.html">Fundamentals of banking</a></h3>
						<a href="https://www.youtube.com/watch?v=EdMFiBGMVy4">Session Link</a>
						<br/> <br/>
                        <div class="container">
                            <div class="row">
                              <div class="col">
                                <button style="background-color: red;" onclick="myFunction5()"><i class="fa fa-times" aria-hidden="true"></i></button>

                                <p id="cross3"></p>
                              </div>
                              <div class="col">
                                <button style="background-color: green;" onclick="myFunction6()"><i class="fa fa-check" aria-hidden="true"></i></button>

                                <p id="tick3"></p>
                              </div>
                            
                        <script>
                            function myFunction5() {
                            document.getElementById("cross3").innerHTML = "Never mind!";
                            }
                            </script>
                           
       
                               <script>
                               function myFunction6() {
                               document.getElementById("tick3").innerHTML = "Great!";
                               }
                               </script>
                        
                            </div>
                            <br/>
                            <div>
                                <div>
                                    <input type="file" id="real-file" hidden="hidden" />
                                    <button type="button" id="custom-button">Select your homework</button>
                                    <span >No file
                                </div>
                                <br/>
                                <div>
                                    <button type="button" id="custom-button2">Submit homework</button>
                                </div>
                            </div>
                          
                            
                                    <script>
                                        const realFileBtn = document.getElementById("real-file");
                            const customBtn = document.getElementById("custom-button");
                            const customTxt = document.getElementById("custom-text");

                            customBtn.addEventListener("click", function() {
                            realFileBtn.click();
                            });

                            realFileBtn.addEventListener("change", function() {
                            if (realFileBtn.value) {
                                customTxt.innerHTML = realFileBtn.value.match(
                                /[\/\\]([\w\d\s\.\-\(\)]+)$/
                                )[1];
                            } else {
                                customTxt.innerHTML = "No file chosen, yet.";
                            }
                            });

                            </script>
                               
                          </div>
                      

					</div>
				</div>
			</article>
			<!-- end single blog post -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>about</h3>
          <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus commodo, tortor mauris sed posuere.</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Our Services</h3></li>
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Quick Links</h3></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ’s</a></li>
            <li><a href="#">Badges</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Connect with us Socially</h3></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Pinterest</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright 2020. All rights reserved.</h5>
    <h6>Design and Developed by <a href="">UMEED</a></h6>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->


    
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script  src="../plugins/google-map/gmap.js"></script>

    <!-- Form Validation -->
    <script src="../plugins/form-validation/jquery.form.js"></script> 
    <script src="../plugins/form-validation/jquery.validate.min.js"></script>
    
    <!-- Bootstrap4 -->
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Parallax -->
    <script src="../plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox -->
    <script src="../plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Owl Carousel -->
    <script src="../plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="../plugins/smooth-scroll/smooth-scroll.min.js"></script>
    
    <!-- Custom js -->
    <script src="js/script.js"></script>

  </body>
  </html>
