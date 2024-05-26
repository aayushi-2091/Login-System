<?php
    include '_dbconnect.php';
    if (!empty($_POST) && $_SERVER['REQUEST_METHOD']=='POST')
    {
    $mail=$_POST["email"];
    $pass=$_POST["password"];
    $sql="SELECT * FROM `user_details` where Email='$mail'";
    $result=mysqli_query($connection,$sql);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $row=mysqli_fetch_assoc($result);
        $dbpass=$row['Password'];
        if(password_verify($pass,$dbpass)){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['name']=$row['Name'];
            header("location:/LOGINSYSTEM_PHP/dashboard.php?success=1");
        }
        else{
            header("location:/LOGINSYSTEM_PHP/index.php?error=1");
        }
    }
    else
    {
        header("location:/LOGINSYSTEM_PHP/index.php?error=2");
    }
}
?>