<?php
require_once "Database.php";


class Product extends Database{
    public function createProduct($product_name, $price, $quantity){
        # CREATE THE SQL
        $sql = "INSERT INTO products (product_name, price, quantity)
                 VALUES('$product_name', '$price', '$quantity')";

        #EXECUTION
        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php"); //GOES  TO THE index.php OF THE VIEWS FOLDER
            exit;                         //STOPS THE CODE
        }else{
            die("Error in registering the user: ") . $this->conn->error;
        }

    }

    public function getAllProducts(){
        $sql = "SELECT id, product_name, price, quantity FROM products";

        if($result = $this->conn->query($sql)){
            while($row = $result->fetch_assoc()){
                $product_list[] = $row;
            }
            return $product_list;
        }else{
            die("Error in retrieving users: " . $this->conn->error);
        }
    }

    public function displayProducts(){
        $sql = "SELECT * FROM products";

        if($result = $this->conn->query($sql)){
            while($item = $result->fetch_assoc()){
                $items[]=$item;
            }
            return $items;
        }else{
            die("Error in retrieving: ".$this->conn->error);
        }
    }

    public function displaySpecificProduct($product_id){
        $sql="SELECT * FROM products WHERE id = '$product_id'";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("Error in retrieving product: ".$this->conn->error);
        }
    }

}

    ?>