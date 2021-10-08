<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Books Record</h2>
    <?php
$conn=mysqli_connect("localhost","root","","crud") or die("Connection Faild");
$sql="SELECT* FROM boipoka";
$result=mysqli_query($conn,$sql) or die("Unsuccessful Query");
if(mysqli_num_rows($result)>0){

    ?>
    <table cellpadding="7px">
        <thead>
        <th>Book ID</th>
        <th>Book Name</th>
        <th>Writer Name</th>
        <th>Book Genre</th>
        <th>Action</th>
        </thead>
        <tbody>

        <?php
while($row=mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td><?php echo $row['bid'];?></td>
                <td><?php echo $row['bname'];?></td>
                <td><?php echo $row['wname'];?></td>
                <td><?php echo $row['genre'];?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php
}?>
        </tbody>
    </table>
    <?php
 } else{
     echo"<h2>No Record Found</h2>";
 }
 mysqli_close($conn);
 ?>
</div>
</div>
</body>
</html>
