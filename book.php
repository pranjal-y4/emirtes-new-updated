<?php
	session_start();
	if(!isset($_SESSION['userid'])){
		header('login.php?error=login');
	}
?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="https://cdn1.vectorstock.com/i/1000x1000/06/85/red-plane-over-white-background-vector-22560685.jpg">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Book Now</title>
    
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
        <style type="text/css">
   body {
 
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
   fieldset {

  background-color: #fff;
   border: 1px solid rgb(255,232,57);
  float: center;
  text-align: left;
  style="width: 60%; 
  position: absolute;
  width: 500px; 
  margin:  0px auto;
  
}
legend {
  background-color: red;
  color: white;
  padding: 5px 10px;
}

      h1{
         color: white;
         background: red;
         padding: 12px;
}
p {
    border-bottom: 2px ;
    background-color: none;
    padding: 5px;
    max-width: 100px;
    display: inline-block;
    margin-right: 10px;
    margin-left: 10px;
    margin-top: 2px;
    max-height: 100px;
    font-family: "Arial";
}


</style>




        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
	
	<?php
		include_once("navbar.php");
	?>
		
    <section class="banner" id="top" style=" background-image: url('img/book.jpeg');">
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
                                
                                <form action="includes\book_flight.inc.php" method="post" onsubmit="return validation()">
								
                                    <h1 align="center"> BOOK NOW</h1>
        <br>
         
         <legend>Travel Details: <?php echo (!empty($_GET['name']) ? $_GET['name']: '');?> Airline</legend>
		<input type="hidden" name="airline" value="<?php echo $_GET['airline']?>">
         <br>
         First name: <input type = "text" name = "first_name" id="fname" placeholder="fname" required />
         <span id="fname" style="color:red;"></span>
         <br>

         <br>
         Last name: <input type = "text" name = "last_name" id="lname" placeholder="lname" required/>
         <span id="lname" style="color:red;"></span>
         
         <br><br><input type = "radio" id="Male" name = "gender" value = "male" > Male
         <input type = "radio" id="Female" name = "gender" value = "female" > Female
         <input type = "radio" id="Other" name = "gender" value = "other"> Other   
        <span id="error" style= "color:red"> </span> 
        <br><label for="dep">Depart from :</label> 
<?php
$depart = (!empty($_GET['depart']) ? $_GET['depart'] : '');
$arrival = (!empty($_GET['arrival']) ? $_GET['arrival'] : '');

echo '

<select name="depart" id="dep"  required>
  <option value="'.$depart.'" selected>'.$depart.'</option>
</select>

<br><br><label for="arr">Arrival from :</label>

<select name="arrival" id="arr"  required>
  <option value="'.$arrival.'" selected>'.$arrival.'</option>
</select>

<span id="arr" style="color:red;"></span>';

?>

<br><br><label for="trip-start">Depart date:</label>

<input type="text" id="trip-start" name="trip-start"
       value="<?php echo (!empty($_GET['detp']) ? $_GET['detp']: '');?>"required="">
       <span id="date1" style="color:red;"></span>



         <br><br><input type = "checkbox" name = "dir_lay" value = "on" > Direct flight
         <input type = "checkbox" name = "dir_lay" value = "on"> Layover flight

         <br><br>Description : <br />
         <textarea rows = "5" cols = "50" name = "description">
            Enter description here...
         </textarea>
         <br><br>
  <input type="submit" name="submit" class="button_1" style="background-color: red;" style="color: white;" height: 50px; width: 350px; value="Submit">
  <input type="reset" class="button_2" style="background-color: red;" style="color: white;" height="10px" width="100px" value="Clear">
      
      <script type="text/javascript">

function validation(){
    var x = document.getElementById('fname').value;
    var y=document.getElementById('lname').value;
    var m=document.getElementById('Male').checked;
    var f = document.getElementById('Female').checked;
    var o=document.getElementById('Other').checked;
    var d=document.getElementById('dep').value;
    var a=document.getElementById('arr').value;
    var date=document.getElementById('trip-start').value;






    var flag=1;
    if(x =="" || x==null){
        document.getElementById('firstname').innerHTML="* * Can't leave your name empty ";
        flag=1;
        
      }
    else if(x.length<2 || x.length>20){
        document.getElementById('firstname').innerHTML="* * Name should be between 2 to 20";
        flag=1;}
    

    if(y =="" || y==null){
        document.getElementById('lastname').innerHTML="* * Please fill your last name ";
        flag=1;}
    else if(y.length<2 || y.length>20){
        document.getElementById('lastname').innerHTML="* * Name should be between 2 to 20";
        flag=1;}  
    
    if(!(m||f||o)){
        document.getElementById("error").innerHTML=" * * * You have not selected gender"
        flag=1;
    }
    
    if(date==null||date==""){ 
        document.getElementById("date1").innerHTML="* * Select date";
        flag=1;
    }
       
    





    if(flag==1)
    return false;
    else return true;


}

  

  
</form>
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


    
    <div class="tabs-content" id="recommended-hotel">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Jumeirah Emirates Towers</h2>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="col-md-4">
                            <ul class="tabs clearfix" data-tabgroup="third-tab-group">
                                <li><a href="#livingroom" class="active">Living Room <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="#suitroom">Suit Room <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="#swimingpool">Swiming Pool <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="#massage">Massage Service <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="#fitness">Fitness Life <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="#event">Evening Event <i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <section id="third-tab-group" class="recommendedgroup">
                            <div id="livingroom">
                                <div class="text-content">
                                    <iframe width="100%" height="400px" src="https://www.youtube.com/watch?v=Odzixm3smww">
                                    </iframe>
                                </div>
                            </div>
                            <div id="suitroom">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="owl-suiteroom" class="owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="suiteroom-item">
                                                    <img src="img/suite-02.jpg" alt="">
                                                    <div class="text-content">
                                                        <h4>Clean And Relaxing Room</h4>
                                                        <span>Jumeirah</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="suiteroom-item">
                                                    <img src="img/suite-01.jpg" alt="">
                                                    <div class="text-content">
                                                        <h4>Special Suite Room TV</h4>
                                                        <span>Jumeirah</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="suiteroom-item">
                                                    <img src="img/suite-03.jpg" alt="">
                                                    <div class="text-content">
                                                        <h4>The Best Sitting</h4>
                                                        <span>Jumeirah</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="swimingpool">
                                <img src="img/swiming-pool.jpg" alt="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-content">
                                            <h4>Lovely View Swiming Pool For Special Guests</h4>
                                            <span>Jumeirah Spa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="massage">
                                <img src="img/massage-service.jpg" alt="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-content">
                                            <h4>Perfect Place For Relaxation</h4>
                                            <span>Beach</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="fitness">
                                <img src="img/fitness-service.jpg" alt="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-content">
                                            <h4>Insane Street Workout</h4>
                                            <span>Gym</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="event">
                                <img src="img/evening-event.jpg" alt="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-content">
                                            <h4>Finest Winery Night</h4>
                                            <span>Queen Restaurant</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <section id="most-visited">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Most Visited Places</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="owl-mostvisited" class="owl-carousel owl-theme">
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="https://res.klook.com/image/upload/c_fill,w_750,h_500,f_auto/w_80,x_15,y_15,g_south_west,l_klook_water/activities/ugiaohlcvgauu7krsivj.jpg" alt="">
                                <div class="text-content">
                                    <h4>Barcelona</h4>
                                    <span>Spain</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="https://qph.fs.quoracdn.net/main-qimg-f8af813a766f18a542c10eab21980166-c" alt="">
                                <div class="text-content">
                                    <h4>Dubai</h4>
                                    <span>United Arab Emirates</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="https://assets.vogue.com/photos/5ac4f9f174153c19fdd0a190/master/w_2560%2Cc_limit/00-story-image-florence-italy-travel-guide.jpg" alt="">
                                <div class="text-content">
                                    <h4>Italy</h4>
                                    <span>Rome</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFRSnOu-eyFQkbReoiofPxNio0W2Z8mLsF2ZZhv99dCQq96hnV8igTewhLhbZ5bEPe-4w&usqp=CAU" alt="">
                                <div class="text-content">
                                    <h4>London</h4>
                                    <span>United Kingdom</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-02.jpg" alt="">
                                <div class="text-content">
                                    <h4>Vivamus egestas</h4>
                                    <span>Tokyo</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-01.jpg" alt="">
                                <div class="text-content">
                                    <h4>Aliquam elit metus</h4>
                                    <span>New York</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-03.jpg" alt="">
                                <div class="text-content">
                                    <h4>Phasellus pharetra</h4>
                                    <span>Paris</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-04.jpg" alt="">
                                <div class="text-content">
                                    <h4>In in quam efficitur</h4>
                                    <span>Hollywood</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-01.jpg" alt="">
                                <div class="text-content">
                                    <h4>Sed faucibus odio</h4>
                                    <span>NEW YORK</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-02.jpg" alt="">
                                <div class="text-content">
                                    <h4>Donec varius porttitor</h4>
                                    <span>Tokyo</span>
                                </div>
                            </div>
                        </div>
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