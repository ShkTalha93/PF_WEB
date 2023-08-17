<?php

include 'database.php';
include 'delete-to-do.php';
include 'update-to-do.php';


$sql = "SELECT * FROM `todolist` WHERE 1";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {


        echo "<form action='' method='GET'>";
        echo $row["text"] . "  <button type='submit' name='delete'  value='$row[id]'>Delete</button>" . "  <button type='submit' name='update' value='$row[id]'>Update</button><br/>";

        echo "</form>";
        ;
    }
}
else{
    echo "List is Empty";
}

?>