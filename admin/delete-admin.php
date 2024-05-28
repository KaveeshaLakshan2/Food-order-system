<?php 
//include constants.php file
include('../config/constants.php');


//1.Get the id of admin to be deleted
$id = $_GET['id'];

//2.create SQL query to delete admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//execute the query
$res = mysqli_query($conn, $sql);

//check whether the query executed successfully or not
if($res==true)
    {
        //Query executed successfully and admin deleted
        //echo "Admin Deleted";
        //create session variable to display message
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
        //Redirect to manage admin page
        header('location:' .SITEURL. 'admin/manage-admin.php');
    }
    else
    {
        //Failed to delete admin
        //echo "Failed to delete admin";

        $_SESSION['delete'] = "<div class = 'error'>Failed to Delete Admin. Try again later.</div>";
        header('location:' .SITEURL. 'admin/manage-admin.php');
    }

//3.redirect to manage admin page

?>