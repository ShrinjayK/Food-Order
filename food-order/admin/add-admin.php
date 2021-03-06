<?php include("partials/menu.php");?>
<div class="main-content">
    <div class="wrapper">
    <h1>Add Admin</h1>

<br /> <br />
<?php
    if(isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
?>

<form action="" method="POST">

<table class="tbl-30">
    <tr>
        <td>Full Name: </td>
        <td><input type="text" name="full_name" placeholder="Enter your name"></td>
    </tr>
    <tr>
        <td>Username:</td>
        <td>
            <input type="text" name="username" placeholder="Enter your username">
        </td>
    </tr>
    <tr>
        <td>Password:</td>
        <td>
            <input type="password" name="password" placeholder="Enter your password">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
        </td>
    </tr>
</table>
</form>
    </div>
</div>
<?php include("partials/footer.php");?>

<?php 
    //Read the values from the form and save them in the database
    //Check whether the submit button is clicked or not
    if(isset($_POST['submit'])){
        //Button clicked
        $fullname = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
    

        //SQL query to save data in the database
        $sql = "INSERT INTO tbl_admin SET
            full_name='$fullname',
            username='$username',
            password='$password'
            ";
        //Executing Query and saving the values in the database

        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        //Check whether the query is executed or not
        if($res==TRUE){
            //Data Inserted
            //Create session variable to display the message of whether or not the connected
            $_SESSION['add'] = "Admin Added Successfully";
            header("location:".SITEURL."admin/manage-admin.php");
        }
        else{
            //Failed to insert Data
            $_SESSION['add'] = "Failed to add Admin";
            header("location:".SITEURL."admin/add-admin.php");
        }
    }
?>