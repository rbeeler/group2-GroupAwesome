<!-- Add Search Box for SQL -->
	<h4>Search Over 5,000 Movies:</h4>
	<form action = "search.php" method="POST">
	  <input type="text" name="search">
	  <input type="submit" name="submit" value="Go">
	</form>
	<br>
<!-- Add an Amazon Search Box -->
	<form action="http://www.amazon.com/exec/obidos/external-search/" method="get" target="_blank>
		<input type="hidden" name="mode" value="blended">
		<input type="hidden" name="tag" value="insert associate tag">
		<h4>Search Amazon.com:</h4>
		<input type="text" name="keyword" size="10" value="">
		<input type="submit" value="Go">
	</form>
	<br>
<!-- Database download -->
<h4>Free downloads:</h4>
<p><a href="doc/movies.sql" target="_blank">movies SQL</a></p>
<p><a href="doc/friends.sql" target="_blank">friends SQL</a></p>
<p><a href="doc/tmdb_5000_credits.csv" target="_blank">credits excel</a></p>
<p><a href="doc/tmdb_5000_movies.csv" target="_blank">movies excel</a></p>
