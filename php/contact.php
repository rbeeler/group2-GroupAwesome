<?php include 'include/header.php'; ?>
		<!-- Begin Wrapper -->
		<div id="wrapper">
				<!-- Begin Left Column -->
				<div id="leftcolumn">
				
				<h2>Contact Us!</h2>
				<p>Your feedback is important to us!</p><br />
				<!-- validating from data -->
						<?php

						if(isset($_POST['Name']))
						{					   
								
							$Name = $_POST['Name'];
							$Email = $_POST['Email'];
							$Comment = $_POST['Comments'];
							echo "<p>Hello, $Name, thanks for getting in touch!</p><br />";
							echo "<p>We have received your message: <i>$Comment</i></p><br />";
					 		echo "<p>We will reply to $Email as soon as possible.</p><br />";    
						    						    
						}else{

						    echo
						    '
						    <form action="contact.php" method="POST">
						    	<p>
							    	<label for="Name">Name:</label>
							        <input type="text" 
							               id="Name" 
							               name="Name" 
							               required="required"
							               placeholder="Enter your Name" />
						        </p><br />
						        <p>
							    	<label for="Email">Email:</label>
							        <input type="email" 
							               id="Email" 
							               name="Email" 
							               required="required"
							               placeholder="Enter your Email" />
						        </p><br />
						        <p>
							    	<label for="Comments">Comments:</label>
							    	<textarea type="text" 
							        	   id="Comments" 
							        	   name="Comments" 
							        	   required="required"
							        	   placeholder="Comments"></textarea>
						        </p><br />
						        <input type="submit" value="Submit" />
						    </form>
						    ';
						}
						?>

				</div>
				<!-- End Left Column -->

				<!-- Begin Right Column -->
				<div id="rightcolumn">

				   		<?php include 'sidebar.php'; ?>

				</div>
				<!-- End Right Column -->

<?php include 'include/footer.php'; ?>