<?php

    // Inialize session

    session_start();
    // Include database connection settings
     
    $hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',so you're NOT necessary to change this even this script has already     online on the   internet.
    $dbname   = 'evoting'; // Your database name.
    $username = 'root';             // Your database username.
    $password = '';                 // Your database password. If your database has no password, leave it empty.
    $usern=$_REQUEST['voterid'];
    $pass1=$_REQUEST['password']; 
     // Let's connect to host
     mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
     
     // Select the database
      mysql_select_db($dbname) or DIE('Database name is not available!');



      $query = "SELECT * FROM voter_list where voterid='".$usern."'";

      
       $res = mysql_query($query);
$array = mysql_fetch_row($res);
$fname=$array[0];
$lname=$array[1];
$dob=$array[2];
$email=$array[3];
$mobile=$array[4];
$gender=$array[5];
$address=$array[6];
$city=$array[7];
$pin=$array[8];
$state=$array[9];
$country=$array[10];
$aadhar=$array[11];
$voterid=$array[12];
$pass2=$array[13];
$qualification=$array[14];
$picture=$array[15];




if($pass1==$pass2)
{
	 
 echo'<html>';
	echo'<head>';
		echo'<title>ONLINE VOTING</title>';
		echo'<meta charset="utf-8" />';
		echo'<meta name="viewport" content="width=device-width, initial-scale=1" />';
		echo'<script src="assets/js/ie/html5shiv.js"></script>';
		echo'<link rel="stylesheet" href="main.css" />';
		
	echo'</head>';
	echo'<body class="landing">';


echo'<div id="page-wrapper">';

				
					echo'<header id="header" class="alt">';
					  echo'<nav id="nav">';
					    echo'<ul>';
								echo'<li class="special">';
									echo'<a href="#menu" class="menuToggle"><span>Menu</span></a>';
									echo'<div id="menu">';
										echo'<ul>';
											echo'<li><a href="first.html">Home</a></li>';
											echo'<li><a href="contact.html">CONTACT US</a></li>';
											
									    echo'<li><a href="registration.html">REGISTER</a></li>';
											echo'<li><a href="">PROFILE DETAILS</a></li>';
											echo'<li><a href="clist.php">CANDIDATES LIST</a></li>';
											echo'<li><a href="about.html">ABOUT</a></li>';
										echo'</ul>';
									echo'</div>';
								echo'</li>';
							echo'</ul>';
						echo'</nav>';
echo'</header>';

echo'<section id="banner">';
						echo'<div class="inner">';
	            echo'<h2>WELCOME</h2>';
				echo "<p><h1>" .$fname." " .$lname."</h1>";
				
				echo' <h2>TO NEXT GEN VOTING PORTAL.</h2>';
							echo'<p>ITS YOUR RESPONSIBILITY  </p>';
							echo'<p>TO CHOOSE A RESPONSIBLE LEADER.</p>';
							echo'<ul class="actions">';
							echo '<img src="'.$picture.'" alt="xyz"  width=100 height=100>';
							
							
                                                         
                                                         echo'<form method="post" action="pr.php">';
                                                         echo"<input type='hidden' name='fname'  value='".$fname."'>";
							 echo"<input type='hidden' name='lname'  value='".$lname."'>";
echo"<input type='hidden' name='dob'  value='".$dob."'>";
echo"<input type='hidden' name='email'  value='".$email."'>";
echo"<input type='hidden' name='mobile'  value='".$mobile."'>";
echo"<input type='hidden' name='gender'  value='".$gender."'>";
echo"<input type='hidden' name='address'  value='".$address."'>";
echo"<input type='hidden' name='city'  value='".$city."'>";
echo"<input type='hidden' name='pin'  value='".$pin."'>";
echo"<input type='hidden' name='state'  value='".$state."'>";
echo"<input type='hidden' name='country'  value='".$country."'>";
echo"<input type='hidden' name='aadhar'  value='".$aadhar."'>";
echo"<input type='hidden' name='voterid'  value='".$voterid."'>";
echo"<input type='hidden' name='qualification'  value='".$qualification."'>";
echo"<input type='hidden' name='picture'  value='".$picture."'>";




							
                                                         echo'<input type="submit" placeholder="MY PROFILE" value="MY PROFILE">';
                                                         echo'</form>';
								echo'<li><a href="clist.php" class="button special">CONTINUE TO VOTE</a></li>';
							echo'</ul>';
								echo'<ul class="actions">';
								
							echo'</ul>';
						echo'</div>';
					echo'</section>';
					
					echo'<section id="cta" class="wrapper style4"></section>';

			  echo'<footer id="footer"></footer>';

			echo'</div>';
			echo'<script src="jquery.min.js"></script>';
			echo'<script src="jquery.scrollex.min.js"></script>';
			echo'<script src="jquery.scrolly.min.js"></script>';
			echo'<script src="skel.min.js"></script>';
			echo'<script src="util.js"></script>';
		    echo'     <script src="assets/js/ie/respond.min.js"></script>';
			echo'<script src="main.js"></script>';

	echo'</body>';
echo'</html>';
}

else
{
 echo'<html>';
	echo'<head>';
		echo'<title>ONLINE VOTING</title>';
		echo'<meta charset="utf-8" />';
		echo'<meta name="viewport" content="width=device-width, initial-scale=1" />';
		echo'<script src="assets/js/ie/html5shiv.js"></script>';
		echo'<link rel="stylesheet" href="main.css" />';
		
	echo'</head>';
	echo'<body class="landing">';


echo'<div id="page-wrapper">';

				
					echo'<header id="header" class="alt">';
					  echo'<nav id="nav">';
					    echo'<ul>';
								echo'<li class="special">';
									echo'<a href="#menu" class="menuToggle"><span>Menu</span></a>';
									echo'<div id="menu">';
										echo'<ul>';
											echo'<li><a href="first.html">Home</a></li>';
											echo'<li><a href="contact.html">CONTACT US</a></li>';
											
									    echo'<li><a href="registration.html">REGISTER</a></li>';
											
											
										echo'</ul>';
									echo'</div>';
								echo'</li>';
							echo'</ul>';
						echo'</nav>';
echo'</header>';

echo'<section id="banner">';
						echo'<div class="inner">';
	            echo'<h2>INCORRECT USERNAME AND PASSWORD </h2>';
				
				
						
							echo'<ul class="actions">';
								echo'<li><a href="login(2).HTML" class="button special">BACK TO LOGIN</a></li>';
							echo'</ul>';
								echo'<ul class="actions">';
								
							echo'</ul>';
						echo'</div>';
					echo'</section>';
					
					echo'<section id="cta" class="wrapper style4"></section>';

			  echo'<footer id="footer"></footer>';

			echo'</div>';
			echo'<script src="jquery.min.js"></script>';
			echo'<script src="jquery.scrollex.min.js"></script>';
			echo'<script src="jquery.scrolly.min.js"></script>';
			echo'<script src="skel.min.js"></script>';
			echo'<script src="util.js"></script>';
		    echo'     <script src="assets/js/ie/respond.min.js"></script>';
			echo'<script src="main.js"></script>';

	echo'</body>';
echo'</html>';
}

       

 
     ?>