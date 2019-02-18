<?php

    // Inialize session

    session_start();
    // Include database connection settings
     
    $hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',so you're NOT necessary to change this even this script has already     online on the   internet.
    $dbname   = 'evoting'; // Your database name.
    $username = 'root';             // Your database username.
    $password = '';                 // Your database password. If your database has no password, leave it empty.
    $usern=$_REQUEST['adminid'];
    $pass1=$_REQUEST['password']; 
     // Let's connect to host
     mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
     
     // Select the database
      mysql_select_db($dbname) or DIE('Database name is not available!');



	 
     
     // Select the database
      mysql_select_db($dbname) or DIE('Database name is not available!');
if($usern="admin" && $pass1="admin")
{



      $query = "SELECT cid,cname,count FROM clist ";

      
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
	            echo'<h2>ELECTION COMMISSION OF INDIA.</h2>';
							echo'<p>VOTING RESULT </p>';
							
							echo'<table border="2">';
							echo'<thead>';
							echo'<th>CANDIDATE ID</th>';
							echo'<th>CANDIDATE NAME</th>';
							echo'<th>NO OF VOTES</th>';
							

                          echo'</tr>';
						  echo'</thead>';
						  echo'<tbody>';
						  
						  while($row=mysql_fetch_assoc($res))
						  {
							  echo'<tr>';
							 echo'<td>'; 
							 echo $row["cid"] ;
							 
 							echo'</td>';
							echo'<td>'; 
							 echo $row["cname"] ;
							 
 							echo'</td>';
							echo'<td>'; 
							 echo $row["count"] ;
							
 							
							 
 							
							echo'</tr>';
							
							 
						  }
					echo'</tbody>';
					echo'</table>';


					
				
						  
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