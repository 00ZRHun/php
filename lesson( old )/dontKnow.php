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
	$sql = "SELECT * from about_us;";
	//$result = $conn -> query($sql);
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	?>  
	<h1 class="title"><?php echo "$row["title"]<br>" ?></h1>
<a href='edit.php?edit=$row["content"]'>edit</a>
	

	<div class="text">
<!-- <h1 class="header"></h1> -->
<?php echo $row["content"]; ?>
	</div>
<!-- 
	<div class="image"><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" style="text-align: right; margin: 30" /></div>
	<a href="edit.php?edit=$row[content]">edit</a>
 -->
</body>
</html>