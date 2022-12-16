<?php

$db = "testapp";
$port = 3306;

$conn = mysqli_connect("","root","",$db,$port);

session_start();