<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    


<?php

    $connection = mysqli_connect("localhost", "cms", "YES" , "cms");
 
 
 if($connection){

echo "we are connected";
 }else{
      die("connection failed. reason:".mysqli_connect_error());
 }

 $sql="SELECT name, password, repassword FROM loginform";

$result = mysqli_query($connection,$sql);

if(mysqli_num_rows($result)>0)
while($row= mysqli_fetch_array($result)){
    echo $row[1]," ",$row[2]," ",$row[3];
    echo"<br>";
}

?>


 }
</body>
</html>