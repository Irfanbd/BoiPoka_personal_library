<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Add New Record</h2>
    <?php
$conn=mysqli_connect("localhost","root","","crud") or die("Connection Faild");
$sql="SELECT* FROM boipoka";
$result=mysqli_query($conn,$sql) or die("Unsuccessful Query");
if(mysqli_num_rows($result)>0){

    ?>
    <form class="post-form" action="savedata.php" method="post">

    
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="bname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="wname" />
        </div>
        <div class="form-group">
            <label>Book Genre</label>
            <input type="text" name="genre" />
        </div>
        
        <input class="submit" type="submit" value="Save"  />
    </form>
 <?php   
} 
?>

 
</div>
</div>
</body>
</html>
