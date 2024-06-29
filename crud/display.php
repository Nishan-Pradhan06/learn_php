<?php
include 'database.php';
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
    <div class="container">
        <button type="button" class="btn btn-primary my-5"><a href="user.php" class="text-light my-5">Add Student</a></button>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * from curd";
                $result = mysqli_query($conn, $sql);
                // $row = mysqli_fetch_assoc($result);
                // echo $row['name'];
                // echo $row['email'];
                // echo $row['mobile'];
                // $row = mysqli_fetch_assoc($result);
                // echo $row['name'];
                // echo $row['email'];
                // echo $row['mobile'];
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['s.n'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $password = $row['password'];
                    echo '
                    <tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $password . '</td>
                    <td> 
                    <div class="btn btn-primary">
                    <a href="update.php?updateid=' . $id . '" class="text-light
                text-decoration-none
                ">
                Update</a>
                    </div>

                <div class="btn btn-danger">
                <a href="delete.php?deleteid=' . $id . '" class="text-light
                text-decoration-none
                ">
                Delete</a>
                </div>
                    </td>
                </tr>
                    
                    ';
                }

                ?>


                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr> -->
            </tbody>
        </table>

    </div>
</body>

</html>