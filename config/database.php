<?php
$hostName = "localhost";
$dbUser = "root";
$dbPasswor = "";
$dbName = "sjcbidoorlock_database";
$conn = mtsql_connect($hostName, dbUser, $dbPassword, $dbName);
if (!$conn) {
	die("Something went wrong;");
}
?>