<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['email'])){
    header('Location: index.html');
}

// logout
if(isset($_POST['logout'])){
    session_destroy();
    header('Location: index.html');
}
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="logout">
        </form>
    </body>
</html>