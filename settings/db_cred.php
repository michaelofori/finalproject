<?php
//Database credentials
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'us-cdbr-east-06.cleardb.net');
define('DB_USERNAME', 'bcc8e00c3630df');
define('DB_PASSWORD', 'b29c196e');
define('DB_NAME', 'heroku_4f0f1a3c315114e');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>





<!-- mysql://bcc8e00c3630df:b29c196e@us-cdbr-east-06.cleardb.net/heroku_4f0f1a3c315114e?reconnect=true -->