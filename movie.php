<!DOCTYPE html>
<html>
<head>
	<title>Group 2 - Movie</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  
   
         <!-- Begin Header -->
         <div id="header">
		 
		 <h1>i_love_movies</h1>
		 
		 	 <!-- Begin Navigation -->    	
		     <div id="main-nav">
		        <ul>			
		            <li><a href="index.html">home</a></li>
		            <li><a href="about.html">about</a></li>
		            <li><a href="movie.php">movies</a></li>
					<li><a href="friends.html">friends</a></li>
		            <li><a href="blog.html">blog</a></li>
		            <li><a href="contact.html">contact</a></li>
		        </ul>	
		      </div> 
		     <!-- End Navigation --> 
		 </div>
		 <!-- End Header -->
		 
		  <!-- Begin Wrapper -->
   <div id="wrapper">
		 
		<?php 
			
			$servername = "localhost:8889";
			$username = "root";
			$password = "root";
			$dbname = "movies";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if (mysqli_connect_error()) {
				die("Database connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT title, rating, genre FROM MovieInfo";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "title: " . $row["title"]. " - rating: " . $row["rating"]. " - genre " . $row["genre"]. "<br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
	
		?>
		 
   </div>
   <!-- End Wrapper -->
   
</body>
</html>
