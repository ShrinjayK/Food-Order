<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category</h1>
    </div>
    <br />

    <!-- Button to Add Admin -->
    <a href="#" class="btn-primary">Add Category</a>
    <br />
    <br />
    <table class="tbl-full">
        <tr>
            <th>S.No.</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Actions</th>
        </tr>

        <tr>
            <td>1.</td>
            <td>Shrinjay Kaushik</td>
            <td>skaushik99</td>
            <td>
                <a href="#" class="btn-secondary">Update Admin</a>
                <a href="#" class="btn-danger">Delete Admin</a>
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>xyz</td>
            <td>xyz123</td>
            <td>
                <a href="#" class="btn-secondary">Update Admin</a>
                <a href="#" class="btn-danger">Delete Admin</a>
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>abcd</td>
            <td>abcd99</td>
            <td>
                <a href="#" class="btn-secondary">Update Admin</a>
                <a href="#" class="btn-danger">Delete Admin</a>
            </td>
        </tr>
    </table>
    
</div>
<?php include("partials/footer.php");?>