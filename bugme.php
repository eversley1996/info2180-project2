<?php
    include "config.php";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "Connected to $dbname at $host successfully.";
        $conn = null;
        
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

    if(isset($_POST['submit_form'])){
    
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
    
    $connect = new PDO('mysql:host=localhost;dbname=schemadb;', 'eversley', 'E.Francis14');
    
    $insertData= "INSERT INTO `users` (`firstname`, `lastname`, `password`, `email`) VALUES 
     VALUES ('$firstname','$lastname','$password','$email')";
    
    $stmt = $connect->query($insertData);

    $stmt = $connect->query("SELECT * FROM `users`");
	$results = $stmt ->fetchALL(PDO ::FETCH_ASSOC);
	
	$Table = '<div>
		<table>
        <thead>
            <tr>
            <th>ID</th><th>First Name</th><th>Last Name</th><th>Password</th>
            <th>Email</th>
            </tr>
        </thead><tbody>';
        foreach ($results as $row) 
        {
            $Table .=   '<tr><td>' . $row['id']. '</td><td>' . $row['firstname'] .'</td><td>'. $row['lastname'] . '</td><td>' . $row['password'] .'</td><td>' . $row['email']. '</td>';
        }
        $Table .= '</tbody></table></div>';	
        echo $Table;	
        
    }
?>
