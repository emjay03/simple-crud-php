<!DOCTYPE html>
<html>
<head>
	<title>Supplier Information</title>
	<STYLE>
	table {
border-collapse: collapse;
width: 100%;
color: BLACK;
font-family: monospace;
font-size: 25px;
text-align:center;;
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
 .a{
	 text-align:left;
	 font-size:30px;
	
 }
 .b{
	 font-family:georgia,serif;
	 height:30px;
	 width:400px;
	 font-size:16px;
	 outline:none;
 }
 .c{
	 font-family:georgia,serif;
	 font-size:px;
	 height:35px;
	 cursor:pointer;
	 outline:none;
 }
.d {text-align:Center;
}
	</STYLE>
</head>
<body>


<h4>COMPANY NAME</h4>
<div class="a">

<h5>Name of Supplier:</h5>
	</div>
	<form method="post">
<input class="a"type="text" name="search">
<input class="b"type="submit" name="submit" value="search">
</form>
</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=custumers",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `suppliers` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Address</th>
				
			</tr>
			<tr>
			<td><?php echo $row->ID; ?></td>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->Address;?></td>
			</tr>

		</table>
		<a class="d" href="act.php"><button style="font-size:25px;margin-top:20px;font-family:gerogia,serif;cursor:pointer;">Back</button></a>
<?php 
	}
		
		
else{
			echo "Name Does not exist";
		}


}

?>