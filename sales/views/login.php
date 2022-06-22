<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="container">
        <div class="card w-50 my-5 mx-auto border-0">
            <div class="card-header border-0 bg-white">
                <h1 class="display-4 fw-bold text-primary text-center">LOGIN</h1>
            </div>

            <div class="card-body">
                <form action="../actions/login.php" method="post">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="usename" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                         </div>
                    </div>
            
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                         </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                          <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
                          <p class="text-center small"><a href="registration.php">Create an Account</a></p>
                         </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>