<?php include 'include/header.php'; ?>
		<!-- Begin Wrapper -->
		<div id="wrapper">
				<div id="leftcolumn">

				<h1>Add User Name</h1>
				<form action="add_friends.php" method="POST">
					<p>
				   		<label>User ID:</label>
		            	<input type="text" name="user_id" value="" required><br><br>
		        	</p> 
					<p>
				   		<label>First Name:</label>
		            	<input type="text" name="first_name" value="" required><br><br>
		        	</p> 
					<p>
				   		<label>Last Name:</label>
		            	<input type="text" name="last_name" value="" required><br><br>
		        	</p> 
		        	<p>
		        		<label>Email:</label> 
		            	<input type="text" name="email" value="" required><br><br>
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