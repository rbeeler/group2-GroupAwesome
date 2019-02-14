<?php include 'include/header.php';
      include 'include/credentials.php';

     //Make an INSERT query
        $query_insert = "INSERT INTO movieinfo (MovieID, Title, Rating, Genre,  ReleaseDate, StarRating, MovieLanguage)
            VALUES('". $_POST['movie_id'] . "', 
                   '". $_POST['title'] . "', 
                   '". $_POST['rating'] . "', 
                   '". $_POST['genre'] . "', 
                   '". $_POST['release_date'] . "', 
                   '". $_POST['star_rating'] . "', 
                   '". $_POST['movie_language'] . "')";
        
        if(mysqli_query($conn, $query_insert)){
             echo "<h1>New movie added successfully!</h1>";
             echo "<h2>We will update you the movie soon</h2>";
            
        } else{
             echo "ERROR: Could not able to execute " . $query_insert . "<br>" . mysqli_error($conn);
    }

?> 
</body>
</html>