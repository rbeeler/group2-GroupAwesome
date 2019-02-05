<?php include 'include/credentials.php';

      $sql = "SELECT FirstName, LastName, Email, MoviesLiked, MoviesRated
              FROM userInfo";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "FirstName: " . $row["FirstName"]. " - LastName: " . $row["LastName"]. " - Email " . $row["Email"]. 

       
          "<br>";
        }
      } else {
        echo "0 results";
      }
      $conn->close();
?>