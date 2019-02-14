<?php include 'include/header.php'; ?>
		<!-- Begin Wrapper -->
		<div id="wrapper">
				<!-- Begin Left Column -->
				<div id="leftcolumn">

				<h1>Add movie</h1>
				<form action="add_movie.php" method="POST">
					<p>
				   		<label>Movie ID:</label>
		            	<input type="text" name="movie_id" value="" required placeholder="Numbers Only"><br><br>
		        	</p> 
					<p>
				   		<label>Title:</label>
		            	<input type="text" name="title" value="" required placeholder="Title"><br><br>
		        	</p> 
		        	<p>
		        		<label>Rating:</label> 
		            	<input type="text" name="rating" value="" required placeholder="G, PG, PG-13, R"><br><br>
		            </p>
		            <p> 
		            	<label>Genre:</label>	
		           		<input type="text" name="genre" value="" required placeholder="Genre"><br><br>
		            </p>
		            <p> 
		            	<label>Release Date:</label> 
		            	<input type="text" name="release_date" value="" required placeholder="YYYY-MM-DD"><br><br>
		            </p>
		            <p>
		            	<label>Star Rating:</label>  
		            	<input type="text" name="star_rating" value=""required placeholder="Decimal Format Only"><br><br>
		            </p>
		            <p> 
		            	<label>Movie Language:</label> 
		            	<input type="text" name="movie_language"value="" required placeholder="Movie Language"><br><br>
		            </p> 
		            	<input type="submit" value="Submit"><br><br>
				</form>
				</div>
				<!-- End Left Column -->
				<!-- Begin Right Column -->
				<div id="rightcolumn">

				   		<?php include 'sidebar.php'; ?>

				</div>
				<!-- End Right Column -->

<?php include 'include/footer.php'; ?>