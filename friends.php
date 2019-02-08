<?php include 'include/header.php'; ?>
		<!-- Begin Wrapper -->
		<div id="wrapper">
				<!-- Begin Left Column -->
				<div id="leftcolumn">

			         <div class = "db-container">
	                	     <?php include 'include/db-friends.php'; ?>   
	            	         </div><!-- End database -->

				</div>
				<!-- End Left Column -->

				<!-- Begin Right Column -->
				<div id="rightcolumn">

						<form action="insert_friend.php" method="post">
							    <form action="insert_friend.php" method="post">
								    <p>
									<label for="userName">First Name:</label>
									<input type="text" name="userName" id="userName">
								    </p>
								    <p>
									<label for="email">Email:</label>
									<input type="text" name="email" id="email">
								    </p>
							    <input type="submit" value="Submit">
						</form>

				</div>
				<!-- End Right Column -->

<?php include 'include/footer.php'; ?>
