<?php

include 'functions.php';
if(isset($_GET['idk'])){
    $delete = mysqli_query($conn, "DELETE FROM db_category WHERE category_id ='".$_GET['idk']."' ");
    echo '<script>window.location="../sakyre2.0/kategori.php"</script>';
}