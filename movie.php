<?php include 'include/header.php'; ?>
		<!-- Begin Wrapper -->
		<div id="wrapper">
				<!-- Begin Left Column -->
				<div id="leftcolumn">

		<!--This is the database area-->
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

	</div>
	<!-- End Left Column -->

	<!-- Begin Right Column -->
	<div id="rightcolumn">

				 Right Column

	</div>
	<!-- End Right Column -->

<?php include 'include/footer.php'; ?>
