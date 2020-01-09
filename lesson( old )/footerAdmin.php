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
    <?php echo $row["address"]; ?>    <br>
    <?php echo $row["phone"]; ?>      <br>
    <?php echo $row["email"]; ?>      <br>
    <?php echo $row["whatsapp"]; ?>   <br>
    <?php echo $row["url"]; ?>	     
  </div>
	  
          <br><br>
	<button><a href="footerEdit.php">Edit</a></button>

</body>
</html>