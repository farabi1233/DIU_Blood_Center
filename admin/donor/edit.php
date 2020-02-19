<?php

if(isset($_GET['id'])){
    include('../include/connect.php');
    $con = connect_db();
    $id = $_GET['id'];
    $sql = "SELECT posts.*, categories.title as category_title FROM posts JOIN categories ON posts.category_id = categories.id where posts.id ='$id' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

   
    
}


?>

<?php include('../include/header.php'); ?>

<div class="card">
    <div class="card-body">
        <h2>Update Post  :</h2>
        <hr>
        <form action="store.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Title</label>
                <input required required type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
            </div>
            <div class="form-group">
                <label for="name">Category</label>
                <select  required type="text" class="form-control" name="category_id">
                    <option value="" >Select Category</option>
                 
                   

                </select>
            </div>


        
            
            <div class="form-group">
                <label for="name">Blog Description</label>
                <textarea required required type="text" class="form-control" name="description" placeholder="Enter Blog  Name" rows ="10"> <?php echo $row['description'];?> </textarea>
            </div>
            <div class="form-group">
                <label for="name">Blog Image </label>
                <input  required type="file" class="form-control" name="image" >
            </div>
            <div class="form-group">
                <label for="name">Date </label>
                <input  required type="date" class="form-control" name="date" value=" <?php echo $row['date'];?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>




    </div>
</div>

<?php include('../include/footer.php'); ?>