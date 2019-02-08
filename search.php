<?php include 'include/header.php';
      include 'include/credentials.php';

  if($_REQUEST['submit']){

    $search = $_POST['search'];

  if(empty($search)){
    echo '<h1>Sorry, search failed: </h1>
          <h2>Please enter a movie title to search!</h2>';

  }else{

    $found = '<h2>No match was found!</h2>';
    $query_search = "SELECT * FROM data.film WHERE `title` LIKE '%".$search."%'";
    $result = $conn->query($query_search); 
  
  // Display search result
  if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        
        echo "<table border='2'>
        <tr>
          <th>Title</th>
          <th>Tagline</th>
          <th>Vote Average</th>
          <th>Release date</th>
        </tr>";
        
        echo "<tr>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['tagline'] . "</td>";
        echo "<td>" . $row['vote_average'] . "</td>";
        echo "<td>" . $row['release_date'] . "</td>";
        echo "</tr>";
        }   
      }else{
        echo'<h1>Search Result:</h1>';
        print ($found);
      }
    }
  }
?>
</body>
</html>