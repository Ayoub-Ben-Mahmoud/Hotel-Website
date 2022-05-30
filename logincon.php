<?php
include 'connect.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $myusername = $_POST["user"];
    $mypassword = $_POST["pass"]; 
    
    $sql = "SELECT id FROM user WHERE usname = '$myusername' and pass = '$mypassword'";
    $result = $conn->query("SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'");
    
    $nRows = $conn->query('select count(*) from users')->fetchColumn();
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($nRows == 0) {
       
       $_SESSION['user'] = $myusername;
       
       header("location: home.php");
    }else {
       echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
    }
 }
?>