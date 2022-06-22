<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/register.css">
    <title>ADD PRODUCT</title>
</head>
<body>
    <div class="container">
        <div class="card w-50 my-5 mx-auto border-0">
            <div class="card-header border-o bg-white">
                <h1 class="display-4 fw-bold text-Warning text-center">ADD PRODUCT</h1>
            </div>

            <div class="card-body">
                <form action="../actions/add-product.php" method="post">

                <div class="row mb-3">
                    <div class="col-md">
                        <label for="first-name" class="form-label">Product Name</label>
                        <input type="text" name="product_name" id="product-name" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                 <div class="col-md">
                    <label for="last-name" class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="text" name="price" id="price" class="form-control" required>
                    </div>
                 </div>


                    <div class="col-md">
                            <label for="username" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" required>
                    </div>

                </div>

                <div class="row mb-3">
                        <div class="col-md">
                            <button type="submit" class="btn btn-warning w-100"><a href="dashboard.php" class="text-white text-decoration-none">ADD</a></button>
                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>