<?php
    session_start();
    if(!isset($_SESSION["login"])){
       header("Location: ../sakyre2.0/login.php");
       exit;
    } 

    // include 'functions.php';
    // $query = mysqli_query($conn, "SELECT * FROM db_user WHERE id = '".$_SESSION['id']."'");
    // $d = mysqli_fetch_object($query);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sakyre</title>
</head>

<body>

    <?php
      require 'navbar.index.php';
    ?>
    <div class="container">
    <h5>Profile</h5>
    <form action="" method="POST">

        <div class="form-label">Nama
        <input class="form-control" type="text" name="nama"  value="<?php echo $d->nama?>"><br>
        </div>
        <div class="form-label">Username
        <input class="form-control" type="text" name="username" value="<?php echo $d->username?>"><br>
        </div>
        <div class="form-label">Email
        <input class="form-control" type="text" name="email" value="<?php echo $d->email?>"><br>
        </div>
        <div class="form-label">No HP
        <input class="form-control" type="text" name="hp" value="<?php echo $d->hp?>"><br>
        </div>
        <div class="form-label">Alamat
        <input class="form-control" type="text" name="alamat" value="<?php echo $d->alamat?>"><br>
        </div>
         
         
         
         
         <input type="submit" name="submit" value="save profile" onclick="return confirm('Yakin mengubah profile?')"></input>

    </form>
    

   <?php
        // require 'functions.php';
        if(isset($_POST["submit"])){

            $nama       = $_POST['nama'];
            $username   = $_POST['username'];
            $email      = $_POST['email'];
            $hp         = $_POST['hp'];
            $alamat     = $_POST['alamat'];

            $updateprofile = mysqli_query ($conn,"UPDATE db_user SET 
                                    nama = '".$nama."' ,
                                    username = '".$username."' ,
                                    email = '".$email."' ,
                                    hp = '".$hp."' ,
                                    alamat = '".$alamat."' 
                                    WHERE id = '".$d->id."' ");
         
           
         if($updateprofile){
            echo'<script>alert("Profile has changed")</script>';
            echo'<script>window.location="../sakyre2.0/profile.php"</script>';
        
        }else {
            echo 'gagal '.mysqli_error($conn);
        }
        }
       
   ?>
       
       </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

<?php
    require 'footer.php';
?>
</body>

</html>