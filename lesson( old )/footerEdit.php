<?php  
 $conn = mysqli_connect("localhost", "root", "", "newdemo"); 
// Check connection
if($conn -> connect_error)
{
	die("Connection failed:".$conn -> connect_error);
}



$sql = "SELECT * from footer;";
	//$result = $conn -> query($sql);
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

  $address = $row['address'];
	$phone = $row['phone'];
  $email = $row['email'];
  $whatsapp = $row['whatsapp'];
	$url = $row['url'];


///////////////--------edit--------/////////////
	if( isset($_POST['submit']) ){
		$address   = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
		$url = $_POST['url'];
	}

	$sql = "update footer set address='$address', phone='$phone', email='$email', whatsapp='$whatsapp', url='$url' ";
	$result = $conn->query($sql);
	//echo"<script>window.location.assign('aboutUs.php')</script>"
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

           <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form action="footerEdit.php" method="post">

		Address:<br>
		<textarea rows="4" cols="50" type="text" name="address" size="100%" placeholder="<?php echo $row["address"]; ?>"></textarea><br>
    Phone Number :<br>
    <input type="text" name="phone" style="width: 50em;" value="<?php echo $row["phone"]; ?>"><br>
    Email :<br>
    <input type="text" name="email" style="width: 50em;" value="<?php echo $row["email"]; ?>"><br>
    WhatsApp Number :<br>
    <input type="text" name="whatsapp" style="width: 50em;" value="<?php echo $row["whatsapp"]; ?>"><br>
    Website URL :<br>
    <input type="text" name="url" style="width: 50em;" value="<?php echo $row["url"]; ?>"><br>


		<input type="submit" name="submit" value="submit">
         <br /><br />  
             



	</form>
	
</body>
</html>