
<?php

$rand = rand(1111, 888888);
$image = 'uploads/' . $rand . $_FILES['image']['name'];
$upload = '../uploads/' . $rand . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $upload);



$id = $_POST['id'];
 $name = $_POST['name'];
 $blood_group_id = $_POST['blood_group_id'];
 $age = $_POST['age'];
 $gender = $_POST['gender'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $address = $_POST['address'];


include('../include/connect.php');
$con = connect_db();
$sql = "INSERT INTO `donor_list` (`id`, `name`, `blood_id`, `age`, `gender`, `phone`, `email`, `address`, `image`) VALUES ('$id', '$name ', '$blood_group_id ', '$age', '$gender', '$phone', '$email ', '$address ', '$image');";
if(mysqli_query($con, $sql)){
    header("Location: index.php");
}







?>