<?php include('partials/menu.php'); ?>

        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br />
                <?php 
                    if(isset($_SESSION['add'])){
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                ?>
                <br> <br> <br>

                <!-- Button to Add Admin -->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <br />
                <br />
                <table class="tbl-full">
                    <tr>
                        <th>S.No.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>


                    <?php 
                        //Query to get all current Admins
                        $sql = "SELECT * FROM tbl_admin"; 
                        //Execute query
                        $res = mysqli_query($conn, $sql);

                        //Check if the query is executed
                        if($res==TRUE){
                            $count = mysqli_num_rows($res); //Get all rows in the DB
                            if($count>0){
                                while($rows=mysqli_fetch_assoc($res)){
                                    //runs as long as we have data in the database
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];

                                    //Display the values in the table
                                    ?>
                                    <tr>
                                        <td><?php echo $id?></td>
                                        <td><?php echo $full_name ?></td>
                                        <td><?php echo $username ?></td>
                                        <td>
                                            <a href="#" class="btn-secondary">Update Admin</a>
                                            <a href="#" class="btn-danger">Delete Admin</a>
                                        </td>
                                    </tr>

                                    <?php
                                }
                            }
                        }
                    ?>
                    
                </table>

                <div class="clear-fix"></div>
            </div>
        </div>
        <!-- Main Content Section Ends -->

<?php include('partials/footer.php'); ?>