<?php include 'include/header.php';
      include 'include/credentials.php';


     //Make an INSERT query
        $query_insert = "INSERT INTO userinfo (userID, FirstName, LastName, Email)
            VALUES('". $_POST['user_id'] . "',
                   '". $_POST['first_name'] . "', 
                   '". $_POST['last_name'] . "',  
                   '". $_POST['email'] . "')";
        
        if(mysqli_query($conn, $query_insert)){
             echo "<h1>New user name added successfully!</h1>";
             echo "<h2>We will update you in database soon</h2>";
            
        } else{
             echo "ERROR: Could not able to execute " . $query_insert . "<br>" . mysqli_error($conn);
    }

?> 
</body>
</html>