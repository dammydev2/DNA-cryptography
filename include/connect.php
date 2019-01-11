<?php
error_reporting(E_ALL);
ob_start();
session_start();
$server = "localhost";
$user = "root";
$pass = "damilola92";
$db = "my_project";
$conn = new mysqli($server,$user,$pass,$db);
