<?php
   
    $con=mysqli_connect("localhost","root","","criminal");
    if(!$con)
    {
        die(mysqli_error("Error"+$con));
    }
   
?>
