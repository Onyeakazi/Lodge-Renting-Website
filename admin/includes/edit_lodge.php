   <?php

   if(isset($_GET['l_id'])){

    $the_lodge_id = $_GET['l_id'];
    

   }

    $query = "SELECT * FROM our_lodges WHERE lodge_id = $the_lodge_id ";
    $select_lodges_by_id = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_lodges_by_id)) {
    $lodge_id = $row['lodge_id'];
    $lodge_name = $row['lodge_name'];
    $lodge_amount = $row['lodge_amount'];
    $lodge_description = $row['lodge_description'];
    $lodge_location = $row['lodge_location'];
    $lodge_image = $row['lodge_image'];
    $lodge_status = $row['lodge_status'];
    $lodge_bx_bed = $row['lodge_bx_bed'];
    $lodge_bx_bath = $row['lodge_bx_bath'];

    }
      
    if(isset($_POST['update_lodge'])) {
        
        $lodge_name = $_POST['lodge_name'];
        $lodge_amount = $_POST['lodge_amount'];
        $lodge_location = $_POST['lodge_location'];
        $lodge_description = $_POST['lodge_description'];
        $lodge_image = $_FILES['image']['name'];
        $lodge_image_temp = $_FILES['image']['tmp_name'];
        $lodge_status = $_POST['lodge_status'];
        $lodge_bx_bed = $_POST['lodge_bx_bed'];
        $lodge_bx_bath = $_POST['lodge_bx_bath'];
        
        move_uploaded_file($lodge_image_temp, "../img/$lodge_image");

        
        $query = "UPDATE our_lodges SET ";
        $query.="lodge_name = '{$lodge_name}', ";   
        $query.="lodge_amount = '{$lodge_amount}', ";
        $query.="lodge_location = '{$lodge_location}', ";
        $query.="lodge_description = '{$lodge_description}', ";
        $query.="lodge_image = '{$lodge_image}', ";
        $query.="lodge_status = '{$lodge_status}', ";
        $query.="lodge_bx_bed = '{$lodge_bx_bed}', ";
        $query.="lodge_bx_bath = '{$lodge_bx_bath}' ";
        $query.="WHERE lodge_id = {$the_lodge_id} ";

        $update_lodge = mysqli_query($connection, $query);

        if(!$update_lodge) {
            echo "QUERY FALIED" . mysqli_error($connection);
        }

        echo "<p class='bg-success'>Lodge Updated: " . " " . "<a href='lodge.php'>View Lodges</a></p>";
    }




?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="lodge_name">Lodge Name</label>
        <input type="text" value="<?php echo $lodge_name; ?>" class="form-control" name="lodge_name">
    </div>

    <div class="form-group">
        <label for="lodge_amount">Lodge Amount</label>
        <input type="text" value="<?php echo $lodge_amount; ?>" class="form-control" name="lodge_amount">
    </div>

    <div class="form-group">
        <label for="lodge_location">Location</label>
        <input type="text" value="<?php echo $lodge_location; ?>" class="form-control" name="lodge_location">
    </div>

    <div class="form-group">
        <img width="100" src="../img/<?php echo $lodge_image; ?>" alt="">
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <select name="lodge_status" id="">

            <option value='<?php echo $lodge_status; ?>'><?php echo $lodge_status; ?></option>

            <?php
            if($lodge_status == 'available' ) {

                echo "<option value='occupied'>occupied</option>";

            } else {

                echo "<option value='available'>Available</option>";
            }

            ?>


        </select>
    </div>

    <div class="form-group">
        <label for="lodge_bx_bed">Lodge Bx Bed</label>
        <input type="text" value="<?php echo $lodge_bx_bed; ?>" class="form-control" name="lodge_bx_bed">
    </div>

    <div class="form-group">
        <label for="lodge_bx_bath">Lodge Bx Bed</label>
        <input type="text" value="<?php echo $lodge_bx_bath; ?>" class="form-control" name="lodge_bx_bath">
    </div>

    <div class="form-group">
        <label for="lodge_description">Description</label>
        <textarea name="lodge_description" id="" cols="30" rows="10" class="form-control"><?php echo $lodge_description; ?></textarea>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_lodge" value="Update Lodge">
    </div>
    

    

</form>