<?php
$mysqli = new mysqli("localhost", "root", "", "custumer");
if($mysqli === false){
die("ERROR: Could not connect. " . $mysqli->connect_error);
}
$name = $mysqli->real_escape_string($_POST['name']);
$aname = $mysqli->real_escape_string($_POST ['aname']);

$pidd = $mysqli->real_escape_string($_POST ['Product_ID']);
$add = $mysqli->real_escape_string($_POST ['Address']);


$sql = "INSERT INTO custumer_info (name, aname,Product_ID,Address)
VALUES ('$name', '$aname','$pidd','$add')";
if($mysqli->query($sql) === true){
echo "Records inserted successfully.";
}
else{
echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
$mysqli->close();
?>
