<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
   

    $con=new mysqli("localhost","root","","registration");
    if($con->connect_error)
    {
        die("Connection failed:".$con->connect_error);
    }
    $sql="INSERT INTO login (username,password) VALUES ('$username','$password')";
    $result=$con->query($sql);
    if($result){
        echo"<script> alert('Login successful'); window.location.href='index.html'</script>";
    }else{
        echo"Error:".$sql."<br>".$con->close();
    }
    $con->close();
?>



