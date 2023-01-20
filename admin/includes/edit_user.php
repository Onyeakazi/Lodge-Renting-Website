<?php

    if(isset($_GET['u_id'])){

    $the_user_id = $_GET['u_id'];

    }

    $query = "SELECT * FROM users WHERE user_id = $the_user_id ";
    $select_user_by_id = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_user_by_id)) {
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_password = $row['user_password'];
    $user_image = $row['user_image'];
    $user_email = $row['user_email'];
    $user_role = $row['user_role'];

    }
   
    if(isset($_POST['update_user'])) {
     
     $user_name = $_POST['user_name'];
     $user_firstname = $_POST['user_firstname'];
     $user_lastname = $_POST['user_lastname'];
     $user_password = $_POST['user_password'];
     $user_image = $_FILES['image']['name'];
     $user_image_temp = $_FILES['image']['tmp_name'];
     $user_email = $_POST['user_email'];
     $user_role = $_POST['user_role'];
     
     move_uploaded_file($user_image_temp, "../img/$user_image");


     $query = "SELECT randSalt FROM users";
     $select_randsalt_query = mysqli_query($connection, $query);

     $row = mysqli_fetch_array($select_randsalt_query);
     $salt = $row['randSalt'];
     $hashed_password = crypt($user_password, $salt);

     
     $query = "UPDATE users SET ";
     $query.="user_name = '{$user_name}', ";   
     $query.="user_firstname = '{$user_firstname}', ";
     $query.="user_lastname = '{$user_lastname}', ";
     $query.="user_password = '{$hashed_password}', ";
     $query.="user_image = '{$user_image}', ";
     $query.="user_email = '{$user_email}', ";
     $query.="user_role = '{$user_role}' ";
     $query.="WHERE user_id = {$the_user_id} ";

     $update_user = mysqli_query($connection, $query);

     if(!$update_user) {
         echo "QUERY FALIED" . mysqli_error($connection);
     }

     echo "User Updated: " . " " . "<a href='user.php'>View Users</a>";

    }

?>


<form action="" method="post" enctype="multipart/form-data">
 <div class="form-group">
     <label for="user_name">Userame</label>
     <input type="text" value="<?php echo $user_name; ?>" class="form-control" name="user_name">
 </div>

 <div class="form-group">
     <label for="user_firstname">Firstname</label>
     <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
 </div>

 <div class="form-group">
     <label for="user_lastname">Lastname</label>
     <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
 </div>

 <div class="form-group">
     <label for="user_password">Password</label>
     <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
 </div>

 <div class="form-group">
     <img width="100" src="../img/<?php echo $user_image; ?>" alt="">
     <input type="file" name="image">
 </div>

 <div class="form-group">
     <label for="user_email">Email</label>
     <input type="text" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
 </div>

 <div class="form-group">
        <select name="user_role" id="">

            <option value='<?php echo $user_role; ?>'><?php echo $user_role; ?></option>

            <?php
            if($user_role == 'admin' ) {

                echo "<option value='agent'>agent</option>";

            } else {

                echo "<option value='admin'>admin</option>";
            }

            ?>


        </select>
    </div>

 <div class="form-group">
     <input type="submit" class="btn btn-primary" name="update_user" value="Update User">
 </div>
 

</form>