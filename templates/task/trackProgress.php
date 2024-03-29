<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html> <!--<![endif]-->
<head>
  <?php
      include('../includes/header.php');
  ?>
  <title>Track Progress</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
<!-- <header class="navigation fixed-top">
 
</header> -->
<?php
  include('../includes/navbar.php');
?>

<!--
End Fixed Navigation
==================================== -->


<!-- blog details part start -->
<section class="blog-details section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <article class="post">
          
          <div class="post-content">
            <h3>Task</h3>
        
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Sed ut perspiciatis unde omnis natus error sit</p>
            <!-- blockquote -->
        
           <br/><br/><br/><br/>
           <br/><br/><br/><br/>
          
            <h3>Update you Progress</h3>
            <!-- Comment Form -->
            <!-- <form action="#" class="comment-form">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <input type="text" name="first-name" class="form-control" id="first-name" placeholder="First Name" required>
                </div>
                <div class="col-lg-6 col-md-6">
                  <input type="email" name="mail" class="form-control" id="mail" placeholder="Email" required>
                </div>
                <div class="col-lg-12 col-md-12">
                  <textarea class="form-control" name="msg" id="msg" rows="6" placeholder="Message" required></textarea>
                </div>
              </div>
              <button type="submit" value="send" class="btn btn-primary">send Message</button>
            </form> -->

          <?php
            include('../includes/db.php');
            if($connection){
                
                // for sign-in
                if(!isset($_SESSION['id'])){
                    echo "hey";
                }
                if(isset($_POST['submit']) && isset($_SESSION['id'])){

                    $date = $_POST['date'];
                    $newdate = date("Y-m-d",strtotime($date));
                    $hour = $_POST['hour'];
                    $nop = $_POST['nop'];
                    $img = $_POST['img'];
                    $pname = $_GET['pname'];
                    $query = "select * from trackproduct where productName = '".$pname."' and mobile =".$_SESSION['id'];
                    echo $query;
                    $result = mysqli_query($connection,$query);
                    $i = mysqli_num_rows ( $result );
                    if(!$i){
                        $query = "INSERT INTO trackproduct(productName, dates, hour, productsMade, imageURL, mobile) VALUES('{$pname}', '{$newdate}', {$hour}, {$nop}, '{$img}', {$_SESSION['id']})";
                        echo $query;
                        $create_user_query = mysqli_query($connection, $query);
                        
                    }else{
                        $fetch_query = mysqli_fetch_array($result); 
                        $hr = $fetch_query['hour'] + $hour;
                        $prevProductMade = $fetch_query['productsMade']+$nop;
                        $query = "update trackproduct set dates= '".$newdate."' , hour =".$hr.",productsMade =".$prevProductMade.",imageUrl ='".$img."' where mobile =".$_SESSION['id']." and productName ='".$pname."'";
                        echo $query;
                        $result = mysqli_query($connection,$query);
                        
                        
                    }
//                    $query = "INSERT INTO trackproduct(productName, dates, hour, productsMade, imageURL, mobile) VALUES('{$pname}', '{$newdate}', {$hour}, {$nop}, '{$img}', {$_SESSION['id']})";
//                    echo $query;
//                    $create_user_query = mysqli_query($connection, $query);
                    // header("Location: ../task/task.php");
                   echo '<script>window.location.replace("./task.php");</script>';
                }
            }
          ?>

          <form action="#" method="POST">
            <div id="trackProgress">
              <div class="slidecontainer">
                <h5>
                  Select date
                </h5>
                <div>
                  <input id="datepicker" name="date" width="276" />
                  <script>
                      $('#datepicker').datepicker({
                          uiLibrary: 'bootstrap4'
                          // dateFormat: "yyyy-mm-dd"
                      });
                    </script>
                </div>
                <h5 class="mt-3">Record number of hours worked</h5>
                <input type="range" min="1" max="10" step='1' value="1" class="slider" id="myRange" name="hour">
                <p>Hours worked: <span id="demo"></span></p>
              </div>
                
                <div class="mb-4">
                <h5>No of products made</h5>
                <input type="number" name="nop" required />
              </div>

              <div>
                <h5>Add an image of your work</h5>
                <input type="file" id="real-file" hidden="hidden" name="img"/>
                <button type="button" id="custom-button">Choose your work</button>
                <span id="custom-text">No file chosen, yet.</span>
              </div>
              <br/><br/>

              <div>
                <h5>Send your progress</h5>
                <button onClick="alert()" type="submit" id="custom-button2" name="submit">Submit progress</button>
              </div>
          </form>



          </div>
          <script>
                      function alert() {
            alert("Submitted!");
          }
          </script>
          <script>
          var slider = document.getElementById("myRange");
          var output = document.getElementById("demo");
          output.innerHTML = slider.value;

          slider.oninput = function() {
            output.innerHTML = this.value;
          }
          </script>
       

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
        </article>
      </div>
      <div class="col-lg-4">




        <!-- sidebar -->
        <aside class="sidebar">



          <div class="widget-search widget">
            <div class="container-glass">
              <div class="glass"></div>
              <div class="get-hourglass">
              <svg width="140px" height="250px" viewBox="0 0 14 18">
                  <defs>
                  </defs>
                  <g id="sandclock" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                         <path d="M13.0986667,16.465 L12.7226667,16.465 C12.6796667,16.031 12.5996667,15.6073333 12.4886667,15.1963333 C12.084,13.6953333 11.269,12.3646667 10.352,11.3396667 C9.52833333,10.4183333 8.623,9.74333333 7.859,9.41433333 C7.859,9.41433333 7.56766667,9.20133333 7.56766667,8.97866667 C7.56766667,8.75633333 7.859,8.54533333 7.859,8.54533333 C9.687,7.74033333 12.3786667,4.93333333 12.7223333,1.50133333 L13.0986667,1.50133333 C13.5006667,1.50133333 13.8266667,1.17533333 13.8266667,0.773666667 C13.8266667,0.371666667 13.5006667,0.0456666667 13.0986667,0.0456666667 L0.776,0.0456666667 C0.374,0.0456666667 0.048,0.371666667 0.048,0.773666667 C0.048,1.17533333 0.374,1.50133333 0.776,1.50133333 L1.152,1.50133333 C1.49233333,4.93666667 4.15866667,7.745 6.00533333,8.54733333 C6.00533333,8.54733333 6.31133333,8.737 6.31133333,8.97866667 C6.31133333,9.22033333 6.01566667,9.421 6.01566667,9.421 C5.26233333,9.75266667 4.36333333,10.4246667 3.54166667,11.3396667 C2.62066667,12.3646667 1.79833333,13.6953333 1.389,15.1963333 C1.277,15.6073333 1.196,16.031 1.15266667,16.465 L0.776,16.465 C0.374,16.465 0.048,16.791 0.048,17.1926667 C0.048,17.5946667 0.374,17.9206667 0.776,17.9206667 L13.0986667,17.9206667 C13.5006667,17.9206667 13.8266667,17.5946667 13.8266667,17.1926667 C13.8263333,16.791 13.5006667,16.465 13.0986667,16.465 L13.0986667,16.465 Z M2.47033333,16.4923333 L1.892,16.4923333 C1.92166667,16.023 1.97666667,15.5933333 2.053,15.1963333 C2.273,14.054 2.67366667,13.1896667 3.18666667,12.4753333 C3.47733333,12.0703333 3.80133333,11.6873333 4.14033333,11.3396667 C4.80733333,10.6553333 5.88879069,10.1021427 6.19133333,9.82066667 C6.49387598,9.53919067 6.65833333,9.39266667 6.65833333,8.997 C6.65833333,8.60133333 6.45611593,8.47363293 6.03570577,8.2112428 C5.61529562,7.94885266 4.034,6.69966667 3.17433333,5.49566667 C2.488,4.53433333 2.00533333,3.328 1.891,1.50166667 L11.982,1.50166667 C11.8663333,3.322 11.378,4.52866667 10.687,5.49133333 C9.82466667,6.69266667 8.52740499,7.75976575 7.89733907,8.12268078 C7.26727316,8.48559582 7.22133333,8.61 7.22133333,8.98333333 C7.22133333,9.35666667 7.41784912,9.52330154 7.89733907,9.82066691 C8.37682903,10.1180323 9.08133333,10.6486667 9.75266667,11.3393333 C10.0873333,11.6833333 10.4066667,12.0626667 10.6933333,12.4633333 C11.2053333,13.179 11.6043333,14.0463333 11.823,15.196 C11.8983333,15.5926667 11.9523333,16.0223333 11.9816667,16.492 L11.4053333,16.492 C4.14033338,16.4920002 5.86059567,16.4920002 2.47033333,16.4923333 Z" id="Shape" fill="transparent"></path>
                    
                          <g id="sand">
                          <path d="M7.00695799,10.3484497 C7.00695799,10.3484497 6.27532958,10.4129639 7.00695799,10.3484497 C7.73858641,10.2839355 7.00695799,10.3484497 7.00695799,10.3484497 C7.00695799,10.3484497 7.78173827,9.99768063 7.09265135,10.548584 C6.40356444,11.0994873 7.09265137,10.548584 7.09265137,10.548584 L7.09265137,10.5493774 L11.4924319,16.4705197 L2.52148436,16.4705197 L6.87243652,10.5493774 L6.80957031,10.548584 C6.80957031,10.548584 7.1925659,10.737854 6.87243651,10.548584 C6.37234656,10.2529159 7.00695799,10.3484497 7.00695799,10.3484497 Z;
              " id="Path-26" fill="#C62626" sketch:type="MSShapeGroup">
                            
                    <animate 
                           attributeName="d" 
                           dur="20s" 
                           repeatCount="once"
                           keyTimes="0;
                                     .01;
                                     .2;
                                     .4;
                                     .7;
                                     .8;
                                     .99;
                                     1"
                         
                           values="M2.33630371,3.07006836 C2.33630371,3.07006836 5.43261719,3.33813477 6.80957031,3.33813477 C8.18652344,3.33813477 11.3754883,3.07006836 11.3754883,3.07006836 C11.3754883,3.07006836 10.8122559,4.96514893 9.58630371,6.16516113 C8.36035156,7.36517334 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,8.35028076 L7.09265137,8.46459961 L6.87243652,8.46459961 L6.87243652,8.35028076 L6.80957031,8.2623291 C6.80957031,8.2623291 4.9704053,7.27703707 3.96130371,5.96057129 C2.5045166,4.06005859 2.33630371,3.07006836 2.33630371,3.07006836 Z;
               
                                   
                                               M2.375,3.11462402 C2.375,3.11462402 5.71569824,3.44421387 7.09265137,3.44421387 C8.46960449,3.44421387 11.4150391,3.31262207 11.4150391,3.31262207 C11.4150391,3.31262207 10.8122559,4.96514893 9.58630371,6.16516113 C8.36035156,7.36517334 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,15.5496216 L7.09265137,16.47052 L6.87243652,16.47052 L6.87243652,15.5496216 L6.80957031,8.2623291 C6.80957031,8.2623291 4.9704053,7.27703707 3.96130371,5.96057129 C2.5045166,4.06005859 2.375,3.11462402 2.375,3.11462402 Z;
                                   
                                               M2.49230957,3.31262207 C2.49230957,3.31262207 5.71569824,3.66851807 7.09265137,3.66851807 C8.46960449,3.66851807 11.3153076,3.53222656 11.3153076,3.53222656 C11.3153076,3.53222656 10.8122559,4.96514893 9.58630371,6.16516113 C8.36035156,7.36517334 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,15.149231 L7.9152832,16.47052 L6.10144043,16.47052 L6.87243652,15.149231 L6.80957031,8.2623291 C6.80957031,8.2623291 4.9704053,7.27703707 3.96130371,5.96057129 C2.5045166,4.06005859 2.49230957,3.31262207 2.49230957,3.31262207 Z;
                              
                                            M2.98474121,4.37164307 C2.98474121,4.37164307 5.49548338,4.7074585 6.87243651,4.7074585 C8.24938963,4.7074585 10.8119509,4.64428711 10.8119509,4.64428711 C10.8119509,4.64428711 10.8122559,4.96514893 9.58630371,6.16516113 C8.36035156,7.36517334 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,12.5493774 L9.36248779,16.47052 L4.5581665,16.47052 L6.87243652,12.5493774 L6.80957031,8.2623291 C6.80957031,8.2623291 4.9704053,7.27703707 3.96130371,5.96057129 C2.5045166,4.06005859 2.98474121,4.37164307 2.98474121,4.37164307 Z;
                                   
                                   M4.49743651,6.36560059 C4.49743651,6.36560059 5.63000487,6.72412109 7.00695799,6.72412109 C8.38391112,6.72412109 9.56188963,6.36560059 9.56188963,6.36560059 C9.56188963,6.36560059 9.48870848,6.54571533 8.79962157,7.09661865 C8.11053465,7.64752197 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,10.5493774 L11.4924319,16.4705197 L2.52148436,16.4705197 L6.87243652,10.5493774 L6.80957031,8.2623291 C6.80957031,8.2623291 6.01727463,8.16043491 4.82800292,6.81622307 C4.42932128,6.36560059 4.49743651,6.36560059 4.49743651,6.36560059 Z;
                                   
                                   M5.87017821,7.51904297 C5.87017821,7.51904297 6.14080809,7.70904542 6.87243651,7.64453126 C7.60406493,7.5800171 7.47180174,7.51904297 7.47180174,7.51904297 C7.47180174,7.51904297 8.51336669,7.23876953 7.82427977,7.78967285 C7.13519286,8.34057617 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,10.5493774 L11.4924319,16.4705197 L2.52148436,16.4705197 L6.87243652,10.5493774 L6.80957031,8.2623291 C6.80957031,8.2623291 6.66632079,8.14239502 6.34619139,7.953125 C5.84610144,7.65745695 5.87017821,7.51904297 5.87017821,7.51904297 Z;
                                   
                                   M7.00695799,8.06219482 C7.00695799,8.06219482 6.27532958,8.12670898 7.00695799,8.06219482 C7.73858641,7.99768066 7.00695799,8.06219482 7.00695799,8.06219482 C7.00695799,8.06219482 7.78173827,7.71142576 7.09265135,8.26232908 C6.40356444,8.8132324 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,10.5493774 L11.4924319,16.4705197 L2.52148436,16.4705197 L6.87243652,10.5493774 L6.80957031,8.2623291 C6.80957031,8.2623291 7.1925659,8.45159912 6.87243651,8.2623291 C6.37234656,7.96666105 7.00695799,8.06219482 7.00695799,8.06219482 Z;
                                   
                                   M7.00695799,10.3484497 C7.00695799,10.3484497 6.27532958,10.4129639 7.00695799,10.3484497 C7.73858641,10.2839355 7.00695799,10.3484497 7.00695799,10.3484497 C7.00695799,10.3484497 7.78173827,9.99768063 7.09265135,10.548584 C6.40356444,11.0994873 7.09265137,10.548584 7.09265137,10.548584 L7.09265137,10.5493774 L11.4924319,16.4705197 L2.52148436,16.4705197 L6.87243652,10.5493774 L6.80957031,10.548584 C6.80957031,10.548584 7.1925659,10.737854 6.87243651,10.548584 C6.37234656,10.2529159 7.00695799,10.3484497 7.00695799,10.3484497 Z;"
                            />
                            
                            <animate 
                           attributeName="fill" 
                           dur="20" 
                           repeatCount="once"
                           keyTimes="0;
                                     .5;
                                     1"
                        
                           values="#e2cba5;#e2cba5;#C62626;"
                            />
                    </path>
                      </g>
                  </g>
              </svg></div>
              
              <div class="txt-center">
                <span id="timer">
                  <!-- <span id="time">20 Days</span>     -->
                </span>
              </div>
              </div>
          </div>
          <script>
            var timeleft = 20;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("time").textContent = timeleft == 0 ? 'Done' : timeleft+' Days';
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
          </script>


          <div class="widget-categories widget">
            <h2>Chat with Umeed</h2>
            <!-- widget categories list -->
            <textarea class="form-control" name="msg" id="msg" rows="6" placeholder="Message" required></textarea>
            <br/>
            <button type="button" id="custom-button3">Send Chat</button>
          </div>
         
        </aside>
      </div>
    </div>
  </div>
</section>
<!-- blog details part end -->

 
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

