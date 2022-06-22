<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="card w-50 my-5 mx-auto border-0">
            <div class="card-header border-o bg-white">
                <h1 class="display-4 fw-bold text-danger text-center">REGISTRATION</h1>
            </div>

            <div class="card-body">
                <form action="../actions/registration.php" method="post">

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first-name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first-name" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last-name" class="form-control" required>
                    </div>

                </div>


                <div class="row mb-3">
                <div class="col-md">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                     <div class="col-md">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                        <div class="col-md">
                            <button type="submit" class="btn btn-danger w-100"><a href="login.php" class="text-white text-decoration-none">Register</a></button>
                            <p class="text-center small">Already Registered? <a href="../views">Sign In</a></p>
                        </div>
                </div>





                </form>
            </div>
        </div>
    </div>
</body>
</html>