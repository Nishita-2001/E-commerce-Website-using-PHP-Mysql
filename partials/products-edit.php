<?php
    include 'config/db.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM `db` WHERE 1";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($res);
?>
<form action="scripts/productUpdateProcess.php" method="POST" class="container pt-3">
    <h3 class="text-center">Edit Product</h3>
    <input type="text" value="<?= $row['id'] ?>" name="id" hidden>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" value="<?= $row['name'] ?>"
        class="form-control" name="name" id="name" aria-describedby="namehelpId" placeholder="Enter Full Name">
      <small id="namehelpId" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <input type="text" value="<?= $row['type'] ?>"
        class="form-control" name="type" id="type" aria-describedby="typehelpId" placeholder="Enter Type here">
      <small id="typehelpId" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" value="<?= $row['price'] ?>"
        class="form-control" name="price" id="price" aria-describedby="pricehelpId" placeholder="Enter Price here">
      <small id="pricehelpId" class="form-text text-muted"></small>
    </div>
    <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="">
    <button type="submit" class="btn btn-success">
        Update
    </button>
</form>