<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="p-3 mb-2 bg-info text-dark">
  <div class="container mt-5 d-flex justify-content-center">
    <div class="card w-50 p-3 mb-2 bg-info-subtle text-info-emphasis">
      <div class="d-flex justify-content-center mt-2">
        <h3>Sign Up</h3>
      </div>
      <div class="card-body">
        <div class="modal" tabindex="-1" id="popup">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body">
                <p>
                  <?php
            if(isset($_GET['error'])){
              if($_GET['error']==1)
              {
                $message="Both password is not same.";
              }
              elseif($_GET['error']==2){
                $message="Email address already registered.";
              }
              echo '<p>'.$message.'</p>';
            }
            ?>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <form action="_signuphandler.php" method="POST">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingName" placeholder="Name" name="name">
            <label for="floatingName">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mt-3">
            <input type="password" class="form-control" id="floatingPassword1" placeholder="Password"
              name="confirmpassword">
            <label for="floatingPassword1">Confirm Password</label>
          </div>
          <div class="mb-3 form-check mt-2">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myfunc()">
            <label class="form-check-label" for="exampleCheck1">Show Password</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"
              name="gender">
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"
              name="gender">
            <label class="form-check-label" for="inlineRadio2">Female</label>
          </div>
          <div class="d-grid gap-2 mt-2">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
        <div class="mt-3">
          <p>Already registered? <a href="index.php">Login</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  function myfunc() {
    var x = document.getElementById("floatingPassword")
    var y = document.getElementById("floatingPassword1")
    if (x.type == "password" && y.type == "password") {
      x.type = "text";
      y.type = "text";
    }
    else {
      x.type = "password";
      y.type = "password";
    }
  }
</script>
<?php
    if(isset($_GET['error'])){
      echo"<script>
      var mymodal=new bootstrap.Modal(document.getElementById('popup'));
      mymodal.show();
      </script>";
    }
    ?>

</html>