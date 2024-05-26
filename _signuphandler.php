<?php
include '_dbconnect.php';
if (!empty($_POST) && $_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST["name"];
    $mail=$_POST["email"];
    $pass=$_POST["password"];
    $con_pass=$_POST["confirmpassword"];
    $gen=$_POST["gender"];
    $sql1="SELECT * FROM `user_details` where Email='$mail'";
    $result1=mysqli_query($connection,$sql1);
    $count=mysqli_num_rows($result1);
    if($count==0)
    {
        if($pass!=$con_pass)
        {
            header("location:/LOGINSYSTEM_PHP/signup.php?error=1");
        }
        else{
            $encrypt=password_hash($pass,PASSWORD_DEFAULT);
            $sql="INSERT INTO `user_details` (`Name`, `Email`, `Gender`, `Password`) VALUES ('$name', '$mail', '$gen', '$encrypt')";
            $result=mysqli_query($connection,$sql);
            header("location:/LOGINSYSTEM_PHP/index.php?show=1");
        }
    }
    else{
        header("location:/LOGINSYSTEM_PHP/signup.php?error=2");

    }
}
?>