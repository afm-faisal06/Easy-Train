<?php
require_once('DBconnect.php');
session_start();

$_SESSION['email'] = $_POST['email'];
$_SESSION['pass'] = $_POST['pass'];

$email = $_POST['email'];
$pass = $_POST['pass'];

if(isset($_POST['email']) && isset($_POST['pass'])){
    $e = $_POST['email'];
    $p = $_POST['pass'];
    $sql = "SELECT * from user WHERE email = '$e' AND pass = '$p'";
    //Execute
    $result = mysqli_query($conn, $sql);
    
    //check if it returns an empty set
    if(mysqli_num_rows($result) != 0){
        if($e == "admin1@gmail.com"){
        header("Location: admin.php");
        }else{
            header("Location: available.php");
        }
    }else{
        // echo "Username and Password is wrong";
        header("Location: log_in.php");
    }
}





?>