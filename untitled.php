//checkbox
// <td>
                          	   // 		<input type="checkbox" name="item[]" 
                          	   // 		value="'.$row["name"].'" />
                          	   // </td> 


//slide show 
		//in aboutUs.php
<h2>Automatic Slideshow</h2>
          <p>Change image every 2 seconds:</p>

          <div class="slideshow-container">
            <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))
                //while($row = $result->fetch_assoc()) {   
                { 
            ?> 
                  <div class="mySlides fade"> 
                  <div class="numbertext"><?php echo $row['id'] ?> / 3</div> 
                  <?php
                     echo '  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="100%" class="img-thumnail" />  
                     ';
                  ?>
                  <div class="text">Caption Text</div>
                </div>
                <?php
                }  
                ?>
                <br>
          <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {
          ?>
                    <span class="dot"></span>
          <?php
                }
          ?>

          //aboutUsAdmin
          <div class="slideshow-container">
            <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))
                //while($row = $result->fetch_assoc()) {   
                { 
            ?> 
                  <div class="mySlides fade"> 
                  <div class="numbertext"><?php echo $row['id'] ?> / 3</div> 
                  <?php
                     echo '  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="100%" class="img-thumnail" />  
                     ';
                  ?>
                  <div class="text">Caption Text</div>
                </div>
                <?php
                }  
                ?>  
	<br>
          <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {
          ?>
                    <span class="dot"></span>
          <?php
                }
          ?>

          //aboutUsEdit.php
          <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  
           </div>