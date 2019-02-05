<?php

define ( 'DB_HOST', 'localhost' );
define ( 'DB_USER', 'root' );
define ( 'DB_PASSWORD', 'root' );
define ( 'DB_NAME', 'data' );

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "data";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

//echo "Connected sucessfully";