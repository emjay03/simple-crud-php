<?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo ' CONNECTED NA PEDE KANA MAGPAHINGA ' . $_SESSION['User'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:indexx.php");
    }

?>