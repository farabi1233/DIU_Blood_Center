<?php include('../include/header.php'); ?>
<?php
$id = $_POST['id'];
include('../include/connect.php');
$con = connect_db();


if(!empty($_FILES['image']['name'])){

$rand = rand(1111, 888888);
$id = $_POST['id'];
$image= 'uploads/' . $rand . $_FILES['image']['name'];
$sql = "SELECT image FROM `donor_list` WHERE id ='$id';";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$old_image = $row['image'];



 $upload = '../uploads/' . $rand . $_FILES['image']['name'];
 move_uploaded_file($_FILES['image']['tmp_name'], $upload); 
 $image_location = '../'.$old_image;
 $image;

 if(file_exists($image_location)){
    unlink($image_location);
}


}





$id = $_POST['id'];


 $name = $_POST['name'];
$blood_group_id = $_POST['blood_group_id'];
$age = $_POST['age'];
 $gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];



$sql_insert = "INSERT INTO `donor_list` (`id`, `name`, `blood_id`, `age`, `gender`, `phone`, `email`, `address`, `image`) VALUES ('$id', '$name ', '$blood_group_id ', '$age', '$gender', '$phone', '$email ', '$address ', '$image');";
if(mysqli_query($con, $sql_insert)){
    header("Location: index.php");
}
else{
    echo "data not added";
}



?>
<?php include('../include/footer.php'); ?>