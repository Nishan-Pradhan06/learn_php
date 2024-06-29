<?php
include 'database.php';
$id = $_GET['updateid'];

//For diplaying data in form for update.....
$sql = "SELECT * FROM curd WHERE `s.n`=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE curd set `s.n`=$id, name='$name', email='$email', mobile='$mobile',
    password='$password' where `s.n`=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:display.php");
        // echo "Data Updated";
    } else {
        die(mysqli_error($conn));
    }
}

?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CRUD OPERATION</title>
</head>

<body>
    <div class="container my-5">
        <form action="" method="post">

            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Your Name" autocomplete="off" value="<?php echo $name; ?>">
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off" value="<?php echo $email; ?>">
            </div>

            <div class="form-group">
                <label for="Mobile">Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile" autocomplete="off" value="<?php echo $mobile; ?>">
            </div>

            <div class="form-group">
                <label for="Password">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Enter Your Password" autocomplete="off" value="<?php echo $password; ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>