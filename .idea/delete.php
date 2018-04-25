<?php
include("authenticate.php");
$delete_id=$_GET['del'];
$delete_query="DELETE FROM Account WHERE id='$delete_id'";//delete query
$run=mysqli_query($db,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('admin_index.php?deleted=user has been deleted','_self')</script>";
}

?>