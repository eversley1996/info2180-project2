<?php
    session_start();
    
    $host = "localhost";
    $username = "eversley";
    $password = 'E.Francis14';
    $dbname = 'schema';
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
    $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    
    echo $_SESSION['firstname'], $_SESSION['lastname'];
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $stmt = $conn->query("INSERT INTO users (`firstname`,`lastname`,`password`,`email`) VALUES 
    ($firstname, $lastname, $password, $email);");
    
?>
