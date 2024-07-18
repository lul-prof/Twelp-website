<?php
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$Nid=$_POST['Nid'];
$contact=$_POST['contact'];
$Address=$_POST['Address'];
$Photo=$_POST['Photo'];
$crime=$_POST['crime'];


$con=new mysqli("localhost","root","","criminal");
if($con->connect_error)
{
    die("Connection failed:".$con->connect_error);
}
$sql="INSERT INTO crimes(fname,mname,lname,Nid,contact,Address,photo,crime) VALUES ('$fname','$mname','$lname','$Nid','$contact','$Address','$Photo','$crime')";
$result=$con->query($sql);
if($result){
    echo"<script> alert('Data Uploaded Successfully'); window.location.href='policeDB.html'</script>";
}else{
    echo"Error:".$sql."<br>".$con->close();
}
$con->close();


?>