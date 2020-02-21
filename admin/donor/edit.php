<?php include('../include/header.php'); ?>


<?php

$id = $_GET['id'];


include('../include/connect.php');
$con = connect_db();

$sql = "SELECT donor_list.*, blood_group.blood_group FROM donor_list JOIN blood_group on donor_list.blood_id =blood_group.id where donor_list.id = '$id'  ";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);






?>

<?php
$sql_bg = "Select id as bg_id, blood_group as bg FROM blood_group; ";
$result_bg = mysqli_query($con, $sql_bg);



?>




<div class="card">
    <div class="card-body">
        <h2>Add New Donor :</h2>
        <hr>
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Id</label>
                <input type="text" class="form-control" name="id" value="<?php echo $row['id'];  ?>">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name'];  ?>">
            </div>
            <div class="form-group">
                <label for="name">Blood Group</label>
                <select type="text" class="form-control" name="blood_group_id">






                    <?php while ($row_bg = mysqli_fetch_assoc($result_bg)) {  ?>
                        <?php if ($row_bg['bg_id'] == $row['blood_id']) { ?>
                            <option value="<?php echo $row_bg['bg_id']  ?>"> <?php echo $row_bg['bg']  ?> </option>


                        <?php } else { ?>
                            <option value="<?php echo $row_bg['bg_id']  ?>"> <?php echo $row_bg['bg']  ?> </option>

                        <?php  } ?>



                    <?php   }




                    ?>


                </select>
            </div>
            <div class="form-group">
                <label for="name">Age</label>
                <input type="text" class="form-control" name="age" value="<?php echo $row['age'];  ?>">
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
                <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Email Address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email'];  ?>">
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <textarea type="text" class="form-control" name="address" placeholder="Enter Address" rows="6"><?php echo $row['address'];  ?> </textarea>
            </div>






            <div class="form-group">
                <label for="name">Doner Image </label><br>

                <img src="<?php echo "../";
                            echo $row['image'];  ?>" alt="" width="100px" height="80px">
                <input type="file" class="form-control" name="image">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>




    </div>
</div>

<?php include('../include/footer.php'); ?>