<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost:3308');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'assigment');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) ;
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<!-- MySQL DB Name	         	MySQL User Name	MySQL 	Password	MySQL          Host Name	PHPMyAdmin
epiz_33030521_assigment	  	epiz_33030521	        (Your vPanel Password)	    sql204.epizy.com -->

