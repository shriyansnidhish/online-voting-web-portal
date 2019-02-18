<?php

    // Inialize session

    session_start();
    // Include database connection settings
 
$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',so you're NOT necessary to change this even this script has already     online on the   internet.
    $dbname   = 'evoting'; // Your database name.
    $username = 'root';             // Your database username.
    $password = '';                 // Your database password. If your database has no password, leave it empty.
    $c=$_REQUEST['count'];

// Let's connect to host
     mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
     echo 'Connected to the Database<br>';
     // Select the database
      mysql_select_db($dbname) or DIE('Database name is not available!');

 $query = "SELECT count FROM clist where cid='".$c."'";

      
       $res = mysql_query($query);
$array = mysql_fetch_row($res);
$count1=$array[0];

$count1+=1;

$query ="UPDATE clist set count='".$count1."' where  cid='".$c."'";
$res = mysql_query($query);
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
	            echo'<h2>You have successfully Voted </h2>';
				
				
						
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
echo'you have successfully voted';

?>
