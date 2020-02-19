
<?php include('../include/connect.php'); ?>
<?php


$con = connect_db();
$sql = "SELECT * FROM donor_list";
$result = mysqli_query($con, $sql);


?>




<?php include('../include/header.php'); ?>

<div class="container"></div> 
<div class="card">
    <div class="card-body">
   
<h2>Donor List:</h2>
<table class="table">
    <tr>
        <th>SL No.</th>
        <th>ID</th>
        <th>Name</th>
        <th>Blood_id</th>
        <th>Age</th>
        <th>Gender </th>
        <th>Phone No. </th>
        <th>Email </th>
        <th>Address </th>
        <th>Image </th>
        <th>Action </th>
        
    </tr>
    <?php  $sl=1?>
    <?php while ($row = mysqli_fetch_assoc($result)) {; ?>
        
        <tr>
        <td><?php echo $sl; ?></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['blood_id']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['image']; ?></td>
           <td>
                <a href="show.php?id=<?php echo $row['id'];?>"class="btn btn-info">View</a>
                <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
                <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this Data?');">Delete</a>
            </td>
             </tr>
        </tr>
        
    <?php $sl++;} ?>
</table>


    </div>

</div>


</div>
<?php include('../include/footer.php'); ?>
