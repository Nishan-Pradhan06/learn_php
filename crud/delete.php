<?php
include 'database.php';
//Using get method we can access variable/parameter from the url.
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE from curd WHERE `s.n`=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //  echo "Data Deleted";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
