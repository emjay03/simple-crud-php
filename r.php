<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "custumers";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
 
   
   $id = $_POST['id'];
   $name = $_POST['name'];
   $agentname = $_POST['agentname'];
   $productid = $_POST['productid'];
   $address = $_POST['address'];
           

   $query = "UPDATE `custumer_info` SET `name`='".$name."',`agentname`='".$agentname."',`productid`='".$productid."',`address`='".$address."' WHERE `id` = $id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>