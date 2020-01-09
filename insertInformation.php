<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdemo";
// Create connection
$conn=new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn -> connect_error) {    
	die("Connection failed: ".$conn -> connect_error);
}

// --------------------------- Submit ------------------------

//if user click the "submit" button,
//then execute the code below
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$fullname=$_POST['fullname'];

$category = '';
if (isset($_POST['category'])) {
	$category=$_POST['category'];	
}

$address = $_POST['address'];
$email = $_POST['email'];

$sql="insert into userinfo values ('$username', '$password','$fullname', '$address','$category', '$email')";

$result = $conn->query($sql);

$conn -> close();
}

// ------------------------------ Edit --------------------------

$username="";
$password="";
$fullname="";
$address="";
$category='';
$email="";

 if(isset($_GET['edit']))
{
	$id=$_GET['edit'];

	$sql = "SELECT * FROM userinfo where username='$id'";	
	$result = $conn->query($sql);	
	if ($result->num_rows > 0) 
	{    		
		while($row = $result->fetch_assoc()) 
		{
				$username=$row['username'];
				$password=$row['password'];
				$fullname=$row['fullName'];
				$address=$row['address'];			
				$category=$row['category'];			
				$email=$row['email'];    		
		}	

	}
}

// -------------------- If edit is set ---------------------
if(isset($_POST['edit'])){	
	
	$category =2; // default value is 2
	$username=$_POST['username'];	
	$password=$_POST['password'];	
	$fullname=$_POST['fullname'];	
	if(isset($_POST['category']))
	{
		$category=$_POST['category'];
	}		
	$email=$_POST['email'];	
	$address=$_POST['address'];

$sql="update userinfo set password='$password',fullName='$fullname',address='$address', category='$category',email='$email' where username='$username'";

$result = $conn->query($sql);
echo "<script>window.location.assign('table_complete.php');</script>";
}
?>


<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>User Registration</title>
<link href="global.css" rel="stylesheet">
<style>

</style>
</head>
<body>
<h1>User Registration</h1>

<form class="subform"  method="post" action="insertUser.php">

	<p>
		<label for="username" class="label">User Name</label>
		<input type="text" name="username" id="username" value="<?php echo $username; ?>">
	</p>
	<p>
		<label for="password" class="label">Password</label>
		<input type="password" name="password" id="password" value="<?php echo $password; ?>">
	</p>
	<p>
		<label for="fullname" class="label">Full Name</label>
		<input type="text" name="fullname" id="fullname" value="<?php echo $fullname; ?>">
	</p>
	<p>
		<label for="address" class="label">Address</label>
		<textarea name="address" cols="35" rows="4" id="address"><?php echo $address; ?></textarea>		
	</p>
	
	
	<p>
		<label for="category" class="label">Category</label>
		<label class="label2">Student</label> <input type="checkbox" id="category"  name="category" value="1" <?php if($category =='1'){echo "checked";} ?> >
		
	</p>
	<p>
		<label for="email" class="label">Email</label>
		<input name="email" id="email" type="email" value="<?php echo $email; ?>" />
	</p>

	<p>
		<input type="submit" name="submit" value="Insert user">
		<input name="edit" type="submit" value="edit" />
		

	</p>
</form>

</body>
</html>