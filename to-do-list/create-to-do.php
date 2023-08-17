<?php

include 'database.php';

if (isset($_POST['add'])) {
    $text = $_POST['todo'];
    
    $sql = "INSERT INTO `todolist`(`text`) VALUES ('$text')";

    if (mysqli_query($conn, $sql) == true) {
        echo "<h3>Task is added successfully</h3>";


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}


?>