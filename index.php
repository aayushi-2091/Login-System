<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-info text-dark">
    <div class=" d-flex justify-content-lg-center mt-5 pr-3 ">
        <div class="row ">
            <div class="col-lg-12 mb-3">
              <div class="card p-3 mb-2 bg-info-subtle text-info-emphasis">
                <div class="card-body ">
                    <div class="d-flex justify-content-center">
                        <h3>Login</h3>
                    </div>
                    <form action="_indexhandler.php" method="POST">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myfunc()">
                          <label class="form-check-label" for="exampleCheck1">Show Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                      <div class="mt-3">
                        <p>Not registered? <a href="signup.php">Sign Up</a></p>
                      </div>
                </div>
              </div>
            </div>
         </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    function myfunc(){
        var x=document.getElementById("exampleInputPassword1")
        if(x.type=="password"){
            x.type="text";
        }
        else{
            x.type="password";
        }
    }
  </script>
</html>