<?php

    // Inialize session

    session_start();
    // Include database connection settings
     
    $hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',so you're NOT necessary to change this even this script has already     online on the   internet.
    $dbname   = 'our'; // Your database name.
    $username = 'root';             // Your database username.
    $password = '';                 // Your database password. If your database has no password, leave it empty.
    $pass=$_REQUEST["password"];
     
     // Let's connect to host
     mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');

	 

	 
     
     // Select the database
      mysql_select_db($dbname) or DIE('Database name is not available!');



      $query = "SELECT * FROM student_register";

      
       $res = mysql_query($query);
if($pass=="Ra@260722")
{

echo'<html>';
	echo'<head>';
echo'<title>Admin Login</title>';
echo'</head>';

 echo'<h2>EMANCIPATION</h2>';
							echo'<p><h3>REGISTERED STUDENTS</h3> </p>';
							
							echo'<table border="2">';
							echo'<thead>';
							echo'<th>STUDENT NAME</th>';
							echo'<th>MOB NO</th>';
							echo'<th>STREET</th>';
							echo'<th>CITY</th>';
							echo'<th>COUNTRY</th>';
							echo'<th>FATHER'S NAME</th>';
							echo'<th>DOB</th>';
							echo'<th>GENDER</th>';
							echo'<th>COURSE</th>';
							echo'<th>EMAIL</th>';
							echo'<th>PHOTO</th>';
							

                          echo'</tr>';
						  echo'</thead>';
						  echo'<tbody>';
						  
						  while($row=mysql_fetch_assoc($res))
						  {
							  echo'<tr>';
							 echo'<td>'; 
							 echo $row["name"] ;
							 
 							echo'</td>';
							echo'<td>'; 
							 echo $row["phone"] ;
							 
 							echo'</td>';
							echo'<td>'; 
							 echo $row["street"] ;
							
 							echo'</td>';
							
							echo'<td>'; 
							echo $row["city"];
 							echo'</td>';
							echo'<td>'; 
							 echo $row["country"] ;
 							echo'</td>';
							echo'<td>'; 
							 echo $row["fathersname"] ;
 							echo'</td>';
							echo'<td>'; 
							 echo $row["bday"] ;
							echo $row["bmonth"] ;
							echo $row["byear"] ;
							echo'</td>';
							echo'<td>'; 
							 echo $row["gender"] ;
 							echo'</td>';
							echo'<td>'; 
							 echo $row["course"] ;
 							echo'</td>';
							echo'<td>'; 
							 echo $row["email"] ;
 							echo'</td>';
							echo'<td>'; 
							 echo $row["photo"] ;
 							echo'</td>';
							 
 							
							echo'</tr>';
							
							 
						  }
					echo'</tbody>';
					echo'</table>';
echo'</body>';
echo'</html>';
}
else
{
echo'<html>';
	echo'<head>';
echo'<title>Admin Login</title>';
echo'</head>';

 echo'<h2>EMANCIPATION</h2>';
							echo'<p><h3>Incorrect Username or Password</h3> </p>';
echo'</body>';
echo'</html>';
}

?>
							
