 <?php  
 /*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdemo";
// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);*/
 $connect = mysqli_connect("localhost", "root", "", "photo");  
 if($connect -> connect_error)
{
  die("Connection failed:".$connect -> connect_error);
}
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }
 // for delete selected item
if(empty($_REQUEST['name'])) {    
// No items checked
}
else {    
  foreach($_REQUEST['name'] as $deleteName) {   
  $sql="delete from tbl_images where name='$deleteName'";
  $result = $connect -> query($sql);
  
  }
}  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

           <script>
              function editData(x)
              {
                window.location.assign("insertUser.php?edit="+x);
              }

              function ConfirmDelete() {  

                return confirm("Are you sure you want to delete?");
              }

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
              margin: 15px 20px;
            }

            img{
              object-fit: cover;
              width: 100%;

            }

            .chkbox{
              position: static;
              margin: 0;
              top: 0;
              right: 0;
              float: right;
            }
          </style>
      </head>  
      <body>
          <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>
          <table class="inventory" width="100%">
            <caption>
              All User Information
            </caption>

            <form method="post" action="table_complete.php" id="searchForm" name="searchForm" enctype="multipart/form-data">


                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  

                     <input type="text" name="searchBox"/>
                     <input type="submit" name="search" value="Search"/>

                     <input type="submit" value="delete" Onclick="return ConfirmDelete()" />

            <colgroup>
              <col id="id">
              <col id="name">
            </colgroup>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
            </tr>

            <!-- Define SQL statement -->
            <?php 
            $search="";
            if(isset($_POST['searchBox'])){
              $keyword=$_POST['searchBox'];
              $search=" where name like '%$keyword%'";
            }
            $sql = "SELECT * FROM userinfo left join category on userinfo.category=category.ID".$search;
            $result = $conn -> query($sql);
            if ($result->num_rows > 0) {   
             // while(array(with elemtns),it will run the loop, else exit)
             while($row = $result->fetch_assoc()) {         
            ?>    

            <tr>
                  <td><?php echo $row["ID"]; ?></td>
                  <td><input type="checkbox" name="item[]" value="<?php echo  $row["name"]; ?>" /><?php echo $row["name"]; ?></td>
                  <td>
                    {  
                     echo '  
                          <div> 
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                          </div>

                     ';  
                    }
                  </td>
                  <td><input type="button" value="edit" onclick="editData('<?php echo $row["username"]; ?>')"></td>
            </tr> 
            <?php
  }    
} else {    
  echo "0 results";

}
  $conn->close();
?>  


            <tr>
      <td align="right" colspan="6"><input type="submit" value="delete" Onclick="return ConfirmDelete()" />
      </td>
    </tr>   
  </form>
  </table>
</body>
</html>  
  