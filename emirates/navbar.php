<?php
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	$login_logout = '';
	
	if(!(empty($_SESSION['userid']))){

		$login_logout = '
		<div class="topnav" id="myTopnav" >
			<a href="login.php">
					<img src="https://w7.pngwing.com/pngs/811/233/png-transparent-computer-icons-user-login-desktop-others-blue-computer-prints-thumbnail.png" height="20px" width="20px">'
						.$_SESSION['useruid'].'
						</a>
					<a href="includes/logout.inc.php">Logout</a>
					<a href="booked_flights.php">Booked Tickets</a>
		</div>';
	}else{
		$login_logout = '
		<div class="topnav" id="myTopnav" >
		<a href="login.php">
			<img src="https://w7.pngwing.com/pngs/811/233/png-transparent-computer-icons-user-login-desktop-others-blue-computer-prints-thumbnail.png" height="20px" width="20px">Login
		</a>
		<a href="signup.php" class="">Signup</a>
		</div>';
	}
	
	echo $login_logout;