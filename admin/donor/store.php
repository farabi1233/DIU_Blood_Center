

<?php

$rand = rand(1111,888888);
$image = 'uploads/'.$rand. $_FILES['image']['name'];
$upload = '../uploads/'.$rand. $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$upload);



$title = $_POST['title'];
$category_id = $_POST['category_id'];


$description = $_POST['description'];
$date = $_POST['date'];

include('../include/connect.php');
$con = connect_db();
$sql = "INSERT INTO posts VALUES (NULL, '$title','$category_id','$description','$image','$date')";
mysqli_query($con, $sql);
header("Location: index.php");




?>