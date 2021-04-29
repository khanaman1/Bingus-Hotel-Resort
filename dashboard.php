


<?php

/* Author : Aman Khan
   CSCI 426 
   Project 2 */

/* This section is for the dashboard */

include_once 'Source/session.php';// combines the session.php file

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<!-- for the dashboard viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<!--the following function will take to the dashboard-->

    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?> 

    <?php else: ?>

    <?php endif ?>
<!--it will take the user to the welcome section to the dashboard-->
    <?php echo "<h1> Welcome ".$_SESSION['username']." To Bingus Hotels & Resort </h1>" ?>
<!-- inlculdes the logout option-->

    <h2><a href="logout.php">Logout</a></h2>

</body>
</html>
<?php
echo ' 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<img src="Images/logo.png" width="280" height="125" title="Logo of a company" alt="Logo of a company" />

</html>
';
?>