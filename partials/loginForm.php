<!DOCTYPE html>
<html lang="en">
<head>
<style>
 body {
  background-image: url('back3.jpeg');
}
</style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h3 class="text-center">Login</h3>
<form action="scripts/loginProcess.php" method="post">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email"
        class="form-control" name="email" id="email" aria-describedby="emailhelpId" placeholder="Enter Email here">
      <small id="emailhelpId" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password"
        class="form-control" name="pwd" id="password" aria-describedby="passwordhelpId" placeholder="Enter Password here">
      <small id="passwordhelpId" class="form-text text-muted"></small>
    </div>
    <button type="reset" class="btn btn-danger">
        Reset
    </button>
    <button type="submit" class="btn btn-success">
        Submit
    </button>
</form>    
  
</section>
</body>
</html>