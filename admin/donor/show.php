<?php include('../include/header.php'); ?>

<?php




$id = $_GET['id'];
include('../include/connect.php');
$con = connect_db();
$sql = "SELECT posts.*, categories.title as category_title FROM posts JOIN categories ON posts.category_id = categories.id where posts.id ='$id' ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);






?>


<div class="card">

    <div class="card-body">
        <h2> Single Blog:</h2>
        <table class="table">
            <tr>
            <th>Title:</th>
            <th><?php echo $row['title'] ?></th>
            </tr>

            <tr>
            <th>Category :</th>
            <th><?php echo $row['category_title'] ?></th>
            </tr>
            <tr>
            <th>Description:</th>
            <th><?php echo $row['description'] ?></th>
            </tr>
            <tr>
            <th>Image:</th>
            <th><img src="../<?php echo $row['image'] ?>" alt="" width="100" height="80"></th>
            </tr>
            <tr>
            <th>Date:</th>
            <th><?php echo $row['date'] ?></th>
            </tr>





        </table>


    </div>
</div>



<?php include('../include/footer.php'); ?>