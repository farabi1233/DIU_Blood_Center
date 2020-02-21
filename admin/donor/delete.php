<?php
$id = $_GET['id'];
include('../include/connect.php');
$con = connect_db();



$sql = "SELECT * FROM donor_list WHERE id = $id";

$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
$image_location = '../'.$data['image'];
if(file_exists($image_location)){
    unlink($image_location);
}

$sql = "DELETE FROM donor_list WHERE id = $id";
 mysqli_query($con, $sql);
 header("Location: index.php");




// if(isset($_GET['id'])){


//    $id = $_GET['id'];
    
//     include('../include/connect.php');
//     $con = connect_db();
//     $sql = "DELETE FROM categories WHERE id = $id";
//     
//     $result = mysqli_query($con, $sql);
//     header("Location: index.php");
// }
// else{

//     echo "out of loop";
// }