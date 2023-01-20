

            <table class="table table-bordered table-hover">
                <thead>
        
                        <th>Id</th>
                        <th>Username</th>
                        <th>Image</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php 
                
                $query = "SELECT * FROM users WHERE user_role = 'agent' ";
                $select_all_user = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_all_user)) {
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $user_image = $row['user_image'];
                $user_firstname = $row['user_firstname'];
                $user_lastname = $row['user_lastname'];
                $user_email = $row['user_email'];
                
                echo "<tr>";
                echo "<td>$user_id</td>";
                echo "<td>$user_name</td>";
                echo "<td><img width='100' src='../img/$user_image'></td>";
                echo "<td>$user_firstname</td>";
                echo "<td>$user_lastname</td>";
                echo "<td>$user_email</td>";
                echo "</tr>";

                
                 } ?>

                </tbody>
            </table>

        </div>
      </div>

      