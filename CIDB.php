<?php
   include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIDB</title>
<style>
    .tb1
    {
        margin:20px;
        
        
    }
    .tb2
    {
        margin:20px;
    }
    .tb2 td
    {
        margin:10px;
        
        
    }
</style>

</head>
<body>
    <table>
        <?php
        if(isset($_POST['submit']))
        {
            $search=$_POST['search'];

            $sql="SELECT * FROM crimes where id like '%$search%' or fname like '%$search%' or lname like '%$search%' or mname like '%$search%' 
            or contact like '%$search%' or Address like '%$search%' or Nid like '%$search%' or crime like '%$search%'";
            $result=mysqli_query($con, $sql);
            if($result){
                if(mysqli_num_rows($result)>0){
                    
                   while($row=mysqli_fetch_assoc($result)){

                    echo' <table>
        <tr>
            <th colspan="4">National Id</th>
            <td>'.$row['Nid'].'</td>
        </tr>
        <tr>
            <th colspan="4">First Name</th>
            <td>'.$row['fname'].'</td>
        </tr>
        <tr>
            <th colspan="4">Mid-name</th>
            <td>'.$row['mname'].'</td>
        </tr>
        <tr>
            <th colspan="4">Last Name</th>
            <td>'.$row['lname'].'</td>
        </tr>
        <tr>
            <th colspan="4">Contact</th>
            <td>'.$row['contact'].'</td>
        </tr>
        <tr>
            <th colspan="4">Crimes</th>
            <td>'.$row['crime'].'</td>
        </tr>
        <tr>
            <th colspan="4">Address</th>
            <td>'.$row['Address'].'</td>
        </tr>
    </table>';
                }}
                else
                {
                    echo '<h3>Data not found</h3>';
                }
            }
        }

                   
        ?>
    </table>
</body>
</html>
