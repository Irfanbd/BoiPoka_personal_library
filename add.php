<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Add New Record</h2>
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
            <label>Genre</label>
            <select name="genre">
                <option value="" selected disabled>Select your book genre</option>

                <?php
$conn=mysqli_connect("localhost","root","","crud") or die("Connection Faild");
$sql="SELECT* FROM boipoka";
$result=mysqli_query($conn,$sql) or die("Unsuccessful Query");

while(%row=mysqli_fetch_assoc($result))
{

    <option value="1">BCA</option>
}
    ?>
                <option value="1">BCA</option>
                <option value="2">BSC</option>
                <option value="3">B.TECH</option>
            </select>
        </div>
       
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
