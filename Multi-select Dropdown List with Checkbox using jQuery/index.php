<?php 
if(isset($_POST['submit'])){ 
    echo 'Selected Country ID: '.$_POST['country']; 
    echo 'Selected State ID: '.$_POST['state']; 
    echo 'Selected City ID: '.$_POST['city']; 
} 
?>
 <form action="" method="post">
    <!-- Country dropdown -->
    <select id="country" name="country">
        <option value="">Select Country</option>
    </select>
	
    <!-- State dropdown -->
    <select id="state" name="state">
        <option value="">Select state</option>
    </select>
	
    <!-- City dropdown -->
    <select id="city" name="city">
        <option value="">Select city</option>
    </select>
	
    <input type="submit" name="submit" value="Submit"/>
</form>