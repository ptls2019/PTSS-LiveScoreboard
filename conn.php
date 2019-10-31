<?php
session_start();

$uservername="localhost";
$username="root";
$password="";
$dbname="PTSSLiveScoreboard";
/*
$uservername="fdb23.awardspace.net";
$username="3201544_ptsslivescoreboard";
$password="Anis18699";
$dbname="3201544_ptsslivescoreboard";
*/

$conn = new mysqli($uservername, $username, $password, $dbname);
