<?php include "db.php" ?>
<?php session_start() ?>


<?php 

if(isset($_POST['login'])) {

$email = $_POST['email'];
$password = $_POST['password'];

$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);

$query = "SELECT * FROM users WHERE user_email = '{$email}' ";
$select_users_query = mysqli_query($connection, $query);

if(!$select_users_query) {
    die("QUERY" . mysqli_error($connection));
}

while($row = mysqli_fetch_array($select_users_query)) {
    $db_user_id = $row['user_id'];
    $db_user_name = $row['user_name'];
    $db_user_password = $row['user_password'];
    $db_user_image = $row['user_image'];
    $db_user_email = $row['user_email'];
    $db_user_firstname = $row['user_firstname'];
    $db_user_lastname = $row['user_lastname'];
    $db_user_role = $row['user_role'];
    
}

$password = crypt($password, $db_user_password);

if($email !== $db_user_email && $password !== $db_user_password) {
    header("Location: ../login.php");

} elseif ($email == $db_user_email && $password == $db_user_password) {

    $_SESSION['username'] = $db_user_name;
    $_SESSION['user_password'] = $db_user_password;
    $_SESSION['user_image'] = $db_user_image;
    $_SESSION['user_firstname'] = $db_user_firstname;
    $_SESSION['user_lastname'] = $db_user_lastname;
    $_SESSION['user_role'] = $db_user_role;



    header("Location: ../admin/admin_index.php");

}
}
?>