<!DOCTYPE html>
<html>
<head>
	<title>Group 2 - Movie</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<!--Give the search bar a magnifying glass button-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!--Disables the google translate funciton popup-->
	<meta name="google" content="notranslate">
</head>

<body>
     <!-- Begin Header -->
         <div id="header">
		         <h1>i_love_movies</h1>
			 <!-- Begin Navigation -->
    		     <div id="main-nav">
					 
    		        <ul>
						<li>
							<!--Begin Search Bar-->
							<div class="search-container">
							<form action="search.php" method="GET">
								<input type="text" placeholder="Search..." name="query">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
							</div>
							<!--End Search Bar-->
						</li>
    		            <li><a href="index.php"	>home</a></li>
    		            <li><a href="about.php"	>about</a></li>
    		            <li><a href="movie.php"	>movies</a></li>
    					<li><a href="friends.php">friends</a></li>
    		            <li><a href="blog.php">blog</a></li>
    		            <li><a href="contact.php">contact</a></li>
    		        </ul>
    		      </div>
    			  <!-- End Navigation -->
    		 </div>
    		 <!-- End Header -->
