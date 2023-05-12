<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'ftp-direct.azpassio.com');
define('DB_USERNAME', 'thuongvo');
define('DB_PASSWORD', 'ma3VeQMgVG9TQETe');
define('DB_NAME', 'thuongvo');

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
