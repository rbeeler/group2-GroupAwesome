<?php include 'include/credentials.php';

  //Make a SELECT query
  $query_movie = "SELECT * FROM data.film limit 18";

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