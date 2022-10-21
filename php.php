<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $txt_uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $txt_pwd = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($txt_uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where txt_uname='".$txt_uname."' and txt_pwd='".$txt_pwd."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['txt_uname'] = $txt_uname;
            header('Location: page.html');
        }else{
            echo "Invalid username and password";
        }

    }

}