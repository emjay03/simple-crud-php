<!DOCTYPE html>
<html>
<head>
<title>View all</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: BLACK;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: pink;
color: white;
}
tr {
	background-color:#f8f8ff;
	}
	h4{
	 font-family:goergia,serif;
	 font-size:30px;
	 text-align:center;
	 text-decoration:underline;
	 
 }
</style>
</head>
<body>
<h4>COMPANY NAME</h4>
<table>
<tr>
<th>No</th>
<th>Name</th>
<th>Agent Name</th>
<th>Product ID</th>
<th>Address</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "custumers");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT no ,name, agentname, productid,address FROM custumer_info";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["no"]. "</td><td>" . $row["name"] . "</td><td>". $row["agentname"] . "</td><td>". $row["productid"] . "</td><td>" . $row["address"] . "</td><td>" ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<a class="d" href="act.php"><button style="font-size:25px;margin-top:20px;font-family:gerogia,serif;cursor:pointer;">Back</button></a>
</table>
</body>
</html>