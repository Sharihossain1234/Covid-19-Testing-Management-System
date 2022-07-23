<?php
$baseurl = "http://localhost/ThirteeNov/PHPMySQLTravelHistoryQuestionnaire/";

$connection = mysqli_connect("localhost", "root", "", "covidtmsdb");
$connection->set_charset("utf8");

$tablename = "travelhistory";

mysqli_query($connection, "CREATE TABLE IF NOT EXISTS $tablename (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
date VARCHAR(15) NOT NULL,
time VARCHAR(15) NOT NULL,
name VARCHAR(50) NOT NULL,
phone VARCHAR(30) NOT NULL,
mobile VARCHAR(30) NOT NULL,
china VARCHAR(10) NOT NULL,
outsg VARCHAR(10) NOT NULL,
outsgc VARCHAR(300) NOT NULL,
temperature VARCHAR(10) NOT NULL
)");

?>