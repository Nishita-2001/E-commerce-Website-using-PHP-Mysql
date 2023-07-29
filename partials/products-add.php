<form action="scripts/productAddProcess.php" enctype="multipart/form-data" method="POST" class="container pt-3">

    <h3 class="text-center">Add Product</h3>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text"
        class="form-control" name="name" id="name" aria-describedby="namehelpId" placeholder="Enter Full Name">
      <small id="namehelpId" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label class="form-lable" for="type">Type</label>
      <select class="form-control" name="type" id="">
        <option >Please Select Type</option>
        <option value="Men">Men</option>
        <option value="Women">Women</option>
        <option value="kids">kids</option>
      </select>
      <!-- <input type="text"
        class="form-control" name="type" id="type" aria-describedby="typehelpId" placeholder="Enter Type here"> -->
      <small id="typehelpId" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number"
        class="form-control" name="price" id="price" aria-describedby="pricehelpId" placeholder="Enter Price here">
      <small id="pricehelpId" class="form-text text-muted"></small>
    </div>
    <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="">
    <button type="submit" class="btn btn-success">
        Add
    </button>
</form>