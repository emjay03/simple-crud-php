<?php



if(isset($_POST['delete']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "custumers";
    
   
    $id = $_POST['id'];
    
 
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    

    $query = "DELETE FROM `custumer_info` WHERE `id` = $id";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Deleted';
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($connect);
}

?>