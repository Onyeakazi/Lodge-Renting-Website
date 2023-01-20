

            <table class="table table-bordered table-hover">
                <thead>
        
                        <th>Id</th>
                        <th>Username</th>
                        <th>Image</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php 
                
                $query = "SELECT * FROM users";
                $select_all_user = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_all_user)) {
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $user_image = $row['user_image'];
                $user_firstname = $row['user_firstname'];
                $user_lastname = $row['user_lastname'];
                $user_email = $row['user_email'];
                $user_role = $row['user_role'];
                
                echo "<tr>";
                echo "<td>$user_id</td>";
                echo "<td>$user_name</td>";
                echo "<td><img width='100' src='../img/$user_image'></td>";
                echo "<td>$user_firstname</td>";
                echo "<td>$user_lastname</td>";
                echo "<td>$user_email</td>";
                echo "<td>$user_role</td>";
                echo "<td><a class='btn btn-success' href='user.php?source=edit_user&u_id={$user_id}'>Edit</a></td>";
                echo "<td><a class='btn btn-danger' href='user.php?delete={$user_id}'>Delete</a></td>";
                echo "</tr>";

                
                 } ?>

                </tbody>
            </table>

            <?php 

            if(isset($_GET['delete'])) {

                $user_id = $_GET['delete'];

                $query = "DELETE FROM users WHERE user_id = $user_id";
                $delete_user = mysqli_query($connection, $query);

                header("Location: user.php");


                
            }


            // if(isset($_GET['available'])) {

            //     $lodge_id = $_GET['available'];

            //     $query = "UPDATE our_lodges SET lodge_status = 'Available' WHERE lodge_id = $lodge_id";
            //     $available_lodge = mysqli_query($connection, $query);

            //     header("Location: lodge.php");


                
            // }

            
            // if(isset($_GET['unavailable'])) {

            //     $lodge_id = $_GET['unavailable'];

            //     $query = "UPDATE our_lodges SET lodge_status = 'Unavailable' WHERE lodge_id = $lodge_id";
            //     $unavailable_lodge = mysqli_query($connection, $query);

            //     header("Location: lodge.php");


                
            // }
            
            ?>

        </div>
      </div>

      