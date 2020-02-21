<?php include('../include/header.php'); ?>


<?php


include('../include/connect.php');
$con = connect_db();
$sql = "SELECT * FROM blood_group ;";
$result = mysqli_query($con, $sql);




?>



<div class="card">
<div class="card-body">
    <h2>Add New Donor :</h2>
    <hr>
    <form action="store.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Id</label>
            <input  type="text" class="form-control" name="id" placeholder="Enter ID">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input  type="text" class="form-control" name="name" placeholder="Enter Donor Name">
        </div>
        <div class="form-group">
            <label for="name">Blood Group</label>
            <select  type="text" class="form-control" name="blood_group_id">
                <option value=""  >Select Blood Group ...</option>
              <?php  while($row =mysqli_fetch_assoc($result)) { ?>
                <option value="<?php echo $row['id']  ?>"><?php echo $row['blood_group']  ?></option>
               



            <?php       } ?>
               

            </select>
        </div>
        <div class="form-group">
            <label for="name">Age</label>
            <input  type="text" class="form-control" name="age" placeholder="Enter Age">
        </div>
        <div class="form-group">
            <label for="name">Gender</label>
            <select  type="text" class="form-control" name="gender">
                <option value="" disabled selected >Select Gender ...</option>
              
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
               

            </select>
        </div>
        <div class="form-group">
            <label for="name">Phone no. </label>
            <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
        </div>
        <div class="form-group">
            <label for="name">Email Address</label>
            <input  type="email" class="form-control" name="email" placeholder="Enter Email Address">
        </div>
        <div class="form-group">
                <label for="name">Address</label>
                <textarea  type="text" class="form-control" name="address" placeholder="Enter Address" rows ="6"> </textarea>
            </div>
            <div cla
        
        


        <div class="form-group">
            <label for="name">Doner Image </label>
            <input   type="file" class="form-control" name="image" >
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>




</div>
</div>

<?php include('../include/footer.php'); ?>