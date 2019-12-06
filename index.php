<?php
include('login.php');

if(isset($_SESSION['login_user'])){
header("location: Issues.html");
}
?>
<!DOCTYPE html >
<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" type ="text/css" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
  integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
    <header>
        <div id="bugimg"></div>
        <h3><i class="fas fa-bug"></i> BugMe Issue Tracker</h3>
    </header>

    <div id="sidepanel">
        <a href="login.html"> <i class="fas fa-home"></i> Home</a><br>
        <a href= "AddUser.html"><i class="fas fa-user-plus"></i>User</a><br>
        <a href="CreateIssue.html"> <i class="fas fa-plus-circle"></i> New Issue</a><br>
        <a> <i class="fas fa-power-off"></i> Logout</a><br>
    </div>

    
      <form method="post" name="form" id="mainsection"  action = "login.php"> 
          <div id="formdata">
             <h2><strong>Login</strong></h2>
            
            <div>
                <label for="email">Email Address:</label>
                <input type = "text" name="email" id="email" >
            </div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            <div>
                <button type="submit" name="submit_form" id="submit_form">Submit</button> 
            </div>
          </div>
      </form>

</body>
</html>