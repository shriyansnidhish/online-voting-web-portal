<?php

    // Inialize session

    session_start();
    // Include database connection settings
 

    $hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',so you're NOT necessary to change this even this script has already     online on the   internet.
    $dbname   = 'evoting'; // Your database name.
    $username = 'root';             // Your database username.
    $password = '';                 // Your database password. If your database has no password, leave it empty.
    $ffname=$_REQUEST['fname'];
    $llname=$_REQUEST['lname'];
$ddob=$_REQUEST['dob'];
$eemail=$_REQUEST['email'];
$mmobno=$_REQUEST['mobile'];
$gen=$_REQUEST['gender'];
$add=$_REQUEST['address'];
$ccity=$_REQUEST['city'];
$ppin=$_REQUEST['pin'];
$sstate=$_REQUEST['state'];
$count=$_REQUEST['country'];
$uid=$_REQUEST['aadhar'];
$vvoterid=$_REQUEST['voterid'];
$quall=$_REQUEST['qualification'];
$photo=$_REQUEST['picture'];

     
     // Let's connect to host
     mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
     echo 'Connected to the Database<br>';
     // Select the database
      mysql_select_db($dbname) or DIE('Database name is not available!');

 echo'<html>';
	echo'<head>';
		echo'<title>ONLINE VOTING</title>';
		echo'<meta charset="utf-8" />';
		echo'<meta name="viewport" content="width=device-width, initial-scale=1" />';
		echo'<script src="assets/js/ie/html5shiv.js"></script>';
		echo'<link rel="stylesheet" href="main.css" />';
		
	echo'</head>';
	echo'<body class="landing">';
echo'<section id="banner">';
echo"<div class='inner'>";
	                  echo"<h2>ELECTION COMMISION OF INDIA.</h2>";
                           echo"<p><h1> MY PROFILE DETAILS</h1></p>";
echo"</div>";
echo'</section>';
							


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
											
									    
											
											echo'<li><a href="clist.php">CANDIDATES LIST</a></li>';
											echo'<li><a href="about.html">ABOUT</a></li>';
										echo'</ul>';
									echo'</div>';
								echo'</li>';
							echo'</ul>';
						echo'</nav>';
echo'</header>';

echo"<li>";
			echo'FIRST NAME';			echo"<input type='text' name='firstname' value='".$ffname."'  >";
					echo"</li>";
echo"<li>";
				echo'LAST NAME';		echo"<input type='text' name='lastname' value='".$llname."'  >";
					echo"</li>";
echo"<li>";
				echo'DATE OF BIRTH';		echo"<input type='text' name='dob' value='".$ddob."'  >";
					echo"</li>";
echo"<li>";
				echo'EMAIL';		echo"<input type='text' name='email' value='".$eemail."'  >";
					echo"</li>";
echo"<li>";
				echo'MOBILE NUMBER';		echo"<input type='text' name='mobno' value='".$mmobno."'  >";
					echo"</li>";
echo"<li>";
				echo'GENDER';		echo"<input type='text' name='gender' value='".$gen."'  >";
					echo"</li>";
echo"<li>";
				echo'ADDRESS';		echo"<input type='text' name='address' value='".$add."'  >";
					echo"</li>";
echo"<li>";
				echo'CITY';		echo"<input type='text' name='city' value='".$ccity."'  >";
					echo"</li>";
echo"<li>";
				echo'PINCODE';		echo"<input type='text' name='pin' value='".$ppin."'  >";
					echo"</li>";
echo"<li>";
				echo'STATE';		echo"<input type='text' name='state' value='".$sstate."'  >";
					echo"</li>";
echo"<li>";
				echo'COUNTRY';		echo"<input type='text' name='country' value='".$count."'  >";
					echo"</li>";
echo"<li>";
				echo'AADHAR NUMBER';		echo"<input type='text' name='uid' value='".$uid."'  >";
					echo"</li>";
echo"<li>";
				echo'VOTER ID';		echo"<input type='text' name='voterid' value='".$vvoterid."'  >";
					echo"</li>";
echo"<li>";
				echo'QUALIFICATION';		echo"<input type='text' name='qualification' value='".$quall."'  >";
					echo"</li>";
echo"<li>";
				echo'VOTER PHOTO';		echo '<img src="'.$photo.'" alt="xyz"  width=150 height=150>';
					echo"</li>";


							
                                                         
                                                         
								echo"<li><a href='clist.php' class='button special'>CONTINUE TO VOTE</a></li>";
							echo"</ul>";
								echo"<ul class='actions'>";
								
							echo"</ul>";
						echo"</div>";
					echo"</section>";
					
					echo"<section id='cta' class='wrapper style4'></section>";

			  echo"<footer id='footer'></footer>";

			echo"</div>";
			echo"<script src='jquery.min.js'></script>";
			echo"<script src='jquery.scrollex.min.js'></script>";
			echo"<script src='jquery.scrolly.min.js'></script>";
			echo"<script src='skel.min.js'></script>";
			echo"<script src='util.js'></script>";
		    echo"     <script src='assets/js/ie/respond.min.js'></script>";
			echo"<script src='main.js'></script>";

	echo"</body>";
echo"</html>";
?>