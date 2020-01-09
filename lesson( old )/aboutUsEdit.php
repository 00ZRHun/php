<?php  
 $conn = mysqli_connect("localhost", "root", "", "newdemo"); 
  $connect = mysqli_connect("localhost", "root", "", "photo"); 
// Check connection
if($conn -> connect_error)
{
	die("Connection failed:".$conn -> connect_error);
}



$sql = "SELECT * from about_us;";
	//$result = $conn -> query($sql);
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
  
	$title = $row['title'];
	$content = $row['content'];
///////////////--------edit--------/////////////
	if( isset($_POST['submit']) ){
		$title   = $_POST['title'];
		$content = $_POST['content'];
	}

	$sql = "update about_us set title='$title' , content='$content'";
	$result = $conn->query($sql);
	//echo"<script>window.location.assign('aboutUs.php')</script>"
	if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

           <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
          * {box-sizing: border-box;}
          body {font-family: Verdana, sans-serif;}
          .mySlides {display: none;}
          img {vertical-align: middle;}

          /* Slideshow container */
          .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
          }

          /* Caption text */
          .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }

          /* Number text (1/3 etc) */
          .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }

          /* The dots/bullets/indicators */
          .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }

          .active {
            background-color: #717171;
          }

          /* Fading animation */
          .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
          }

          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          /* On smaller screens, decrease text size */
          @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
          }
      </style>
</head>
<body>
	<form action="aboutUsEdit.php" method="post">
		Title :<br>
		<input type="text" name="title" style="width: 50em;" value="<?php echo $row["title"]; ?>"><br>
		Content:<br>
		<textarea rows="4" cols="50" type="text" name="content" size="100%" placeholder="<?php echo $row["content"]; ?>"></textarea><br>

		<input type="submit" name="submit" value="submit">
	<!-- 
	<div class="image"><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" style="text-align: right; margin: 30" /></div>
	automatic slide show -->
         <br /><br />  
             



	</form>
	
</body>
</html>
<script>
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  