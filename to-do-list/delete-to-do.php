<?php

include 'database.php';

if (isset($_GET['delete'])) {
$id =$_GET['delete'];

    $sql = "DELETE FROM todolist WHERE id=$id";
    if (!mysqli_query($conn, $sql)) {
        echo "Error deleting record: " . mysqli_error($conn);

    } 
  

}



?>