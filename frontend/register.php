<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <?php include 'navbar.php'; ?>
        <!-- Page content-->
        <div class="container py-5">
            <div class="row justify-content-md-center">
                <!-- Blog entries-->
                <div class="col-lg-6">
                  <h3>Register</h3>
                  <form action="" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInputName" placeholder="shewu">
                      <label for="floatingInputName">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="ConfirmPassword">
                      <label for="floatingConfirmPassword">Confirm Password</label>
                    </div>
                    <div class="d-grid gap-2">
                      <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php include 'footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
