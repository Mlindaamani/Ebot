<!-- Include the footer contents in the login page. -->
<?php include('includes/header.php') ?>

<!-- Display the error message when the user tries to add product in the cart_items table -->
<?php if (isset($_GET['login'])) { ?>
  <div class="alert alert-info alert-dismissible show text-center container mt-3" role="alert">
    Kindly login/signup to continue adding product to cart
    <button class="btn-close" data-bs-dismiss="alert" aria-lable="Close"></button>
  </div>
<?php } ?>

<!-- login form -->
<div class="container d-flex justify-content-center align-items-center mt-5">
  <form method="POST" class="border shadow p-3 rounded w-25" action="actions/auth-user.php" novalidate>
    <div class="mb-4">
      <h5 class="text-center p-3">LOGIN</h5>


      <!-- Disply the error message when the password or email does not match. -->
      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger alert-dismissible show" role="alert">
          Invalid Email or password!
          <button class="btn-close" data-bs-dismiss="alert" aria-lable="Close"></button>
        </div>
      <?php } ?>


      <!-- Disply error message when the fields are empty. -->
      <?php if (isset($_GET['emptyfields'])) { ?>
        <div class="alert alert-danger alert-dismissible show" role="alert">
          Kindly fill in the required fields!
          <button class="btn-close" data-bs-dismiss="alert" aria-lable="Close"></button>
        </div>
      <?php } ?>


      <!-- Display the error message when the password is too short. -->
      <?php if (isset($_GET['shortpassword'])) { ?>
        <div class="alert alert-danger alert-dismissible show" role="alert">
          Password must be atleast 3 characters long!
          <button class="btn-close" data-bs-dismiss="alert" aria-lable="Close"></button>
        </div>
      <?php } ?>


      <div class="mb-4">
        <div class="form-floating">
          <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
          <label for="email" class="form-label">Enter email</label>
        </div>
      </div>

      <div class="mt-3 form-group">
        <div class="form-floating">
          <input type="password" name="password" id="password" class="form-control" placeholder="password">
          <label for="password" class="form-label">Enter password</label>
        </div>
      </div>

      <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-primary w-100 mt-5 mb-3">Login</button>
      </div>
      <div class="mt-2 form-group">
        <p>Don't have an account? <a href="signup.php">Register</a></p>
        </di>
  </form>
</div>

<!-- Include the footer contents in the login page. -->
<?php include 'includes/footer.php' ?>