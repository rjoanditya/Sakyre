<?php
    include 'functions.php';
    $query = mysqli_query($conn, "SELECT * FROM db_user WHERE id = '".$_SESSION['id']."'");
    $d = mysqli_fetch_object($query);
?>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-white" >
  <div class="container-fluid">
    <a class="navbar-brand" href="../sakyre2.0/index.php">Sakyre Bookshop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="#navbarScroll">
      <ul class="navbar-nav ml-10px ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../sakyre2.0/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../sakyre2.0/kategori.php">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $d->nama?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../sakyre2.0/profile.php">Edit Profile</a></li>
            <li><a class="dropdown-item" href="#">Cart</a></li>
            <li><a class="dropdown-item" href="../sakyre2.0/buku.php">Daftar Buku</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../sakyre2.0/logout.php">Log Out</a></li>
          </ul>
        </li>
      </ul>

      <!-- <form class="d-flex">
      
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
</div>
<!-- wkwkwkwkwk -->