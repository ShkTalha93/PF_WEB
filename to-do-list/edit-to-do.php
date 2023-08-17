<?php
include 'database.php';
include 'update-to-do.php';

if ( $_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["update"])) {

    $id = $_GET["update"];
    $sql = "SELECT * FROM `todolist` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $id . $row;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Task</title>
</head>

<body>
    <h2>Update Task</h2>
    <form action='' method='POST'>
        <input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
        <input type='text' name='update' value='<?php echo $row['text']; ?>'>
        <button type='submit'>Update</button>
    </form>
</body>

</html>