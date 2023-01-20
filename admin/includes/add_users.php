<?php 

if(isset($_POST['create_user'])) {

    $user_name = $_POST['user_name'];
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_password = $_POST['user_password'];

    $user_image = $_FILES['image']['name'];
    $user_image_temp = $_FILES['image']['tmp_name'];

    $user_email = $_POST['user_email'];
    $user_role = $_POST['user_role'];
    
    move_uploaded_file($user_image_temp, "../img/$user_image");


    $query = "INSERT INTO users(user_name, user_firstname, user_lastname, user_password, user_image, user_email, user_role) ";

    $query .= "VALUES( '{$user_name}', '{$user_firstname}', '{$user_lastname}', '{$user_password}', '{$user_image}', '{$user_email}', '{$user_role}' ) ";

    $create_user_query = mysqli_query($connection, $query);

    if(!$create_user_query) {
       echo "Not connected";
    }

    echo "User created: " . " " . "<a href='user.php'>View Users</a>";


   
}

?>



<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="user_name">Username</label>
        <input type="text" class="form-control" name="user_name">
    </div>

    <div class="form-group">
        <label for="user_firstname">First Name</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>

    <div class="form-group">
        <label for="user_lastname">Last Name</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>

    <div class="form-group">
        <label for="user_password">Password</label>
        <input type="password" class="form-control" name="user_password">
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="user_email">Email</label>
        <input type="text" class="form-control" name="user_email">
    </div>

    <div class="form-group">
        <select name="user_role" id="">
            <option value="agent">User Role</option>
            <option value="admin">Admin</option>
            <option value="agent">Agent</option>
            <option value="student">Student</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_user" value="Create User">
    </div>
    

    

</form>