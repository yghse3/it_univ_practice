<?php
 session_start();

 if(empty($_SESSION)){
    header("location: ../views/");
    exit;
}

 include "../classes/product.php";

 $product = new Product;
 $product_list = $product->displayProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="" class="navbar-brand ms-3">
            <h1 class="h5">Product List</h1>
        </a>

        <div class="ms-auto">
            <ul class="navbar-nav me-3">
                <li class="nav-item"><a href="" class="nav-link">Welcome <?= $_SESSION['username']?></a></li>
                <li class="nav-item"><a href="add-product.php" class="nav-link">ADD PRODUCT</a></li>
                <div class="nav-item"><a href="" class="nav-link text-danger">Logout</a></div>
            </ul>
        </div>
    </nav>

    <main>
         <div class="container mt-5">
             <div class="row">
                 <div class="col">
                 <h2 class="display-4 fw-bold text-center float-start">Product List</h2>
                 </div>
             <div class="col">
             
             </div>
             

             </div>
            
             <table class="table table-hover">
                 <thead class="table-dark">
                     <th>ID</th>
                     <th>Product Name</th>
                     <th>Price</th>
                     <th>Quantity</th>
                     <th></th>
                     <th></th>

                 </thead>

                 <tbody>
                    <?php
                    if(empty($product_list)){
                        ?>
                    }
                            <tr>
                                <td colspan="5" class="text-danger fw-bold text-center">NO RECORDS FOUND</td>
                            </tr>
                    <?php
                    }else{
                        foreach($product_list as $product){
                            ?>
                            <tr>
                                <td><?= $product['id']?></td>
                                <td><?= $product['product_name']?></td>
                                <td><?= $product['price']?></td>
                                <td><?= $product['quantity']?></td>
                            
                                 <td>
                                    
                                    <a href='' class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                                    <a href='' class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                                </td>
                    <?php
                     if($product['quantity'] > 0){
                    ?>
                                <td>
                                <a href="buy-product.php?product_id=<?php echo $product['id']?>" class="btn btn-outline-success btn-sm" title="Buy Product"><i class="fas fa-bag-shopping"></i></a>
                                </td>
            
                            </tr>

                
                    <?php
                         } } }
                    ?>
                 </tbody>
             </table>
         </div>
   </main>
</body>
</html>