<?php
  $servername = "localhost:8889";
  $username = "root";
  $password = "root";
  $dbname = "movie";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

//echo "Connected sucessfully";

  //Make a SELECT query
  $query_movie = "SELECT * FROM movie.movies";

  $result = $conn->query($query_movie);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "Title: "
            . $row["title"]
            . " - Tagline: "
            . $row["tagline"]
            . " - Score: "
            . $row["vote_average"]
            . "<br>";
      }
  }
?>