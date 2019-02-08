<?php include 'include/credentials.php';

      $sql = "SELECT title, rating, genre, imageReference
              FROM MovieInfo";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "title: " . $row["title"]. " - rating: " . $row["rating"]. " - genre " . $row["genre"].
          //$image =
          "<br>";
        }
      } else {
        echo "0 results";
      }
      $conn->close();
?>