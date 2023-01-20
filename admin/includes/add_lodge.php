<?php 

if(isset($_POST['create_lodge'])) {

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


    $query = "INSERT INTO our_lodges(lodge_name, lodge_amount, lodge_location, lodge_description, lodge_image, lodge_status, lodge_bx_bed, lodge_bx_bath) ";

    $query .= "VALUES( '{$lodge_name}', '{$lodge_amount}', '{$lodge_location}', '{$lodge_description}', '{$lodge_image}', '{$lodge_status}', '{$lodge_bx_bed}', '{$lodge_bx_bath}' ) ";

    $create_lodge_query = mysqli_query($connection, $query);

    echo "Lodge Added: " . " " . "<a href='lodge.php'>View Lodges</a>";
   
}

?>



<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="lodge_name">Lodge Name</label>
        <input type="text" class="form-control" name="lodge_name">
    </div>

    <div class="form-group">
        <label for="lodge_amount">Lodge Amount</label>
        <input type="text" class="form-control" name="lodge_amount">
    </div>

    <div class="form-group">
        <label for="lodge_location">Location</label>
        <input type="text" class="form-control" name="lodge_location">
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <select name="lodge_status" class="form-control" id="">
            <option value="occupied">Lodge Status</option>
            <option value="available">Available</option>
            <option value="occupied">Occupied</option>
        </select>
    </div>

    <div class="form-group">
        <label for="lodge_bx_bed">Lodge Bx Bed</label>
        <input type="text" class="form-control" name="lodge_bx_bed">
    </div>

    <div class="form-group">
        <label for="lodge_bx_bath">Lodge Bx Bath</label>
        <input type="text" class="form-control" name="lodge_bx_bath">
    </div>

    <div class="form-group">
        <label for="lodge_description">Description</label>
        <textarea name="lodge_description" id="" cols="30" rows="10" class="form-control" placeholder="Your Text"></textarea>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_lodge" value="Publish Lodge">
    </div>
    

    

</form>