<?php

include 'database.php';

if (isset($_GET['update'])) {

    $id = $_GET['update'];


    // $sql = "SELECT * FROM `todolist` WHERE id = $id";



    $sql = "UPDATE todolist SET text='Static value time is up' WHERE id='$id' ";
    mysqli_query($conn, $sql);





}


?>