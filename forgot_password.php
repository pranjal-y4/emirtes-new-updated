<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="https://cdn1.vectorstock.com/i/1000x1000/06/85/red-plane-over-white-background-vector-22560685.jpg">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>SignUp</title>
    
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">




        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <?php
        include_once("navbar.php");
    ?>


    
    <section class="banner" id="top" style=" background-image: url('img/signup.jpeg');">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="left-side">
                        <div class="logo">
                            <img src="img/logo.png" alt="Flight Template">
                        </div>
                        
                        <div class="page-direction-button">
                            <h2 style="color: whitesmoke;" style="font-family: verdana;">Fly to Dubai <br>and earn A MILE-A-MINUTE with <br>Emirates Skywards</h2>
                        
                            <a href="https://www.emirates.com/in/english/special-offers/earn-a-mile-a-minute-in-dubai/" style="background-color: red;">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4 style="color: black;">Forgot Password </h4>  
		<?php
        require_once 'includes/dbh.inc.php';
        
        if(!isset($_POST['submit'])){
			echo '<form name="f1" action = "#" method = "POST"><div class="signup-form-form"><table>
			<tr>
				<td><b>Enter Email Id to Reset the password</b></td>
			</tr>
			<tr>
				<td><input type="text" placeholder="Email" name="email" required><br></td>
			</tr>
            <br></table><button type="submit" name="submit" style="background-color:red; height: 50px; width: 350px;">SignUp</button></div></form>';
		}

		if(isset($_POST['submit'])){
			$email =  $_POST['email'];
			if(!empty($email)){
                
				$sql = "SELECT * FROM `users` WHERE `usersEmail` = '".$email."'";
                $result = mysqli_query($conn, $sql);
                if($result && mysqli_num_rows($result) > 0){
                    file_put_contents('otp.txt', rand(1231,7879));
                    echo '
                        <form method="POST" action="includes/forgot.inc.php">
                            Enter the OTP to reset the password<br>
                            <input type="text" placeholder="Enter OTP" name="otp" required><br>
                            Password:
                            <input type="text" placeholder="Enter Password" name="password" required><br>
                            <input type="hidden" name="email1" value="'.$email.'">
                            <button type="submit" name="reset" style="background-color:red; height: 50px; width: 350px;">Reset</button>
                        </form>';
                }else{
                    echo 'No Such User Found';
                }
				
				
			}else{
				echo '<h1>Email Id required</h1>';
			}
        }

        
		?>
        

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>



    


    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item first-service">
                        <div class="travel-safety"></div>
                        <h4>Travel safety during COVID-19</h4>
                        <p>Find out about the measures we're taking to protect you at every step of your journey</p>
                        <img src="https://content.presspage.com/uploads/2431/1920_dsc-7247.jpg?10000" >
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item second-service">
                        <div ></div>
                        <h4>Travel Requiremenets for Dubai</h4>
                        <p>Learn more</p>
                        <img src="http://cdn.cnn.com/cnnnext/dam/assets/180301130119-burj-khalifa-dubai-guide-8.jpg" >
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item third-service">
                        <div></div>
                        <h4>Multi-risk travel insurance</h4>
                        <p>Read more</p>
                        <img src="https://content.presspage.com/uploads/2431/1920_The-Emirates-A380-816265.jpg?10000" >


                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#" class="scroll-top" style="background-color: red">Back To Top</a>
                    </div>
                </div>
                <div class="col-md-12">

                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    
                </div>
            </div>
        </div>
    </footer>


    


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        

        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>