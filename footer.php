<?php  
 $conn = mysqli_connect("localhost", "root", "", "newdemo"); 
// Check connection
if($conn -> connect_error)
{
	die("Connection failed:".$conn -> connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 
</head>
<body>
	<?php
	$sql = "SELECT * from footer;";
	//$result = $conn -> query($sql);
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	?>  
	
	<div class="content">
<!-- <h1 class="header"></h1> -->
    <?php echo $row["address"]; ?>    <br>
    <?php echo $row["phone"]; ?>      <br>
    <a href = "mailto: <?php $row["email"];?>"><?php echo $row["email"]; ?></a>      <br>
    <a href="https://api.whatsapp.com/send?phone=<?php $row["whatsapp"]; ?>"><?php echo $row["whatsapp"]; ?></a>   <br>
    <a href="<?php $row["url"]; ?>"><?php echo $row["url"]; ?></a>
	</div>
	
</body>
</html>