<?php
 session_start();
 if(empty($_SESSION)){
     header("location: ../view/");
     exit;
 }

 include "../classes/product.php";

 $product = new Product;
 $id = preg_replace('/[^0-9]/', '', $_SERVER['REQUEST_URI']);

$product_details = $product->displaySpecificProduct($_GET['product_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Buy Product</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a href="dashboard.php" class="navbar-brand ms-3">
            <i class="fa-solid fa-house fa-2x text-dark"></i>
        </a>

        <div class="ms-auto me-3 navbar-nav">
            <a href="../actions/logout.php" class="nav-link" title="Logout"><i class="fa-solid fa-user-xmark fa-2x text-danger"></i></a>
        </div>
    </nav>

    <div class="container">
        <div class="card w-50 my-5 mx-auto border-0">
            <div class="card-header border-o bg-white">
                <h1 class="display-4 fw-bold text-success text-center">Buy Product</h1>
            </div>

            <div class="card-body">
                <form action="../views/payment.php?product_id=<?= $product_details['id']?>" method="post">

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first-name" class="form-label">Product Name</label>
                        <input type="text" name="first_name" id="first-name" class="form-control" value="<?= $product_details['product_name']?>" readonly>
                    </div>

                    <div class="col-md-6">
                        <label for="last-name" class="form-label">Price</label>
                        <input type="text" name="last_name" id="last-name" class="form-control" value="<?= $product_details['price']?>" readonly>
                    </div>

                </div>


                <div class="row mb-3">
                <div class="col-md">
                        <label for="username" class="form-label">Stocks Left</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?= $product_details['quantity']?>" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                     <div class="col-md">
                        <label for="number" class="form-label">Buy Quantity</label>
                        <input type="number" name="buy_quantity" id="buy-quantity" class="form-control" required min ="1" max="<?= $product_details['quantity']?>">
                    </div>
                </div>

                <div class="row mb-3">
                        <div class="col-md">
                            <button type="submit" class="btn btn-success w-100"><a href="login.php" class="text-white text-decoration-none">Pay</a></button>
                        </div>
                </div>




                </form>
            </div>
        </div>
    </div>
</body>
</html>