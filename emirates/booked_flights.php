<?php
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
		if(!isset($_SESSION['userid'])){
			header('login.php?error=login');
		}
	}
?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="https://cdn1.vectorstock.com/i/1000x1000/06/85/red-plane-over-white-background-vector-22560685.jpg">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Booked Tickets</title>
    
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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" rel="stylesheet">
		
        <style type="text/css">
   body {
  background-image: url('https://images.unsplash.com/photo-1570710891163-6d3b5c47248b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8OHx8fGVufDB8fHx8&w=1000&q=80');
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    </head>

<body>
    <?php
		include_once("navbar.php");
	?>


    
    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
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
                <div class="col-md-7 col-md-offset-2">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
								<h1 align="center">Booked Flights</h1>
								<table border="1" id="booked_flights" cell-padding="2">
									<tr>
										<th>Trip Date</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Gender</th>
										<th>Depart</th>
										<th>Arrival</th>
										<th>Flight</th>
										<th>Description</th>
									</tr>
									<?php
										
										if(isset($_SESSION['userid'])){
											require_once 'includes/dbh.inc.php';
											
											$where = ($_SESSION['useruid'] == 'admin' ? '' : 'WHERE user_id = '.$_SESSION['userid']);
											
											$sql = "SELECT * FROM booked_flight ".$where;
											$result = mysqli_query($conn, $sql);
											
											while($data = mysqli_fetch_assoc($result)){
												echo "<tr>
													<td>".$data['trip-start']."</td>
													<td>".$data['first_name']."</td>
													<td>".$data['last_name']."</td>
													<td>".$data['gender']."</td>
													<td>".$data['depart']."</td>
													<td>".$data['arrival']."</td>
													<td>".$data['dir_lay']."</td>
													<td>".$data['description']."</td>
												</tr>";
											}
										}
										
									?>
								</table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>


    


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
	$(document).ready( function () {
		$('#booked_flights').DataTable();
	} );
    </script>
</body>
</html>