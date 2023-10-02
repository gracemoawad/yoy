<?php
require_once 'connection.php';

if (isset($_POST['email']) && $_POST['email'] != "" &&
    isset($_POST['password']) && $_POST['password'] != "")   
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    
    $res = mysqli_query($con, $query);
    
    $nbrows = mysqli_num_rows($res);
    if ($nbrows == 0) {
        header("Location: register/register.php");
    }
    else if ($nbrows == 1) {
        $row = mysqli_fetch_assoc($res);
        if ($row['RoleID'] == 20) {
            session_start();
            $_SESSION['isloggedin'] = 1;
            $_SESSION['email'] = $email;
            header("Location: admin/admin.html"); 
        } else {
            session_start();
            $_SESSION['isloggedin'] = 1;
            $_SESSION['email'] = $email;
            header("Location: home.php"); 
        }
   }
}
?>
