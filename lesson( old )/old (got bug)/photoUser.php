<?php  
 $connect = mysqli_connect("localhost", "root", "", "photo");  
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
  <style>
            .flex-container {
              display: flex;
              flex-flow: row wrap;
              align-items: center;
              background-color: #f1f1f1;
              float: center;
              max-width: 1400px;
              margin: 0 auto;
              align-content: center;
              justify-content: center;
              min-height: 50vh;
            }

            .flex-container>div {
              background-color: DodgerBlue;
              color: white;
              width: 18%;
              margin: 10px;
              text-align: center;
              line-height: 75px;
              font-size: 30px;
              align-items: center;
              margin: 5px;

            }

            img{
              object-fit: cover;
              width: 100%;
              height: 100%;
              max-height: 100%;
            }
          </style>
</head>
<body>              
                <div class="flex-container">  
                    <h1 style="width: 100%; margin: 0 auto; text-align: center;">Image</h1>
                  <?php  
                  $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                  $result = mysqli_query($connect, $query);  
                  while($row = mysqli_fetch_array($result))  
                  {  
                       echo '  
                            <div> 
                                      <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                            </div>

                       ';  
                  }  
                  ?>  
                </div>
</body>
</html>


