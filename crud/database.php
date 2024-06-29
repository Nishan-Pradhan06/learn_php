<?php
$conn = new mysqli('localhost', 'root', '', 'phpcurd');
if (!$conn) {
    die(mysqli_error($conn));
} else {
    // echo "<center>Connection is Successfully.🎉🎉🎉</center>";
}
