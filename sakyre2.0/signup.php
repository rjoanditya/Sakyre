<?php

    require 'functions.php';

    if(isset($_POST["daftarpembeli"])){

        if(registrasi($_POST)>0){
            echo "
            <script>
                alert('Registrasi berhasil');
            </script>
             ";
        }
        else {
            echo mysqli_error($conn);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sakyre</title>
</head>

<body>

    <?php
    require 'navbar.php';
    ?>
    <div class="container">
        <div class="container-fluid">
    <h4>Signup</h4>
    <form action="" method="post">
        <table>
            <tr>
                <!-- <td>Username</td> -->
                <td><input type="text" name="username" id="username" placeholder="Username"></td>
            </tr>
            <tr>
                <!-- <td>Email</td> -->
                <td><input type="text" name="email" id="email" placeholder="Email"></td>
            </tr>
            <tr>
                <!-- <td>Password</td> -->
                <td><input type="password" name="password" id="password" placeholder="Password"></td>
            </tr>
            <tr>
                <!-- <td>Konfirmasi Password</td> -->
                <td><input type="password" name="password2" id="password2" placeholder="Konfirmasi Password"></td>
            </tr>
            <tr>
                <!-- <td>nama</td> -->
                <td><input type="text" name="nama" id="nama" placeholder="Nama anda"></td>
            </tr>
            <tr>
                <!-- <td>no hp</td> -->
                <td><input type="text" name="hp" id="hp" placeholder="Nomor seluler"></td>
            </tr>
            <tr>
                <!-- <td>alamat</td> -->
                <td><input type="text" name="alamat" id="alamat" placeholder="Alamat"></td>
            </tr>
            <tr>
                <!-- <td>role</td> -->
                <td><input type="text" name="role" id="role" placeholder="Role"></td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td>
                    <button type="submit" name="daftarpembeli">Signup</button>
                </td>
            </tr>
        </table>
        <p>Have already an account ? <a href="../sakyre2.0/login.php">Click Here.</a></p>
    </form>
    </div>
    </div>


</body>

</html>