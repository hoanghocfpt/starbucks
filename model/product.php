<?php
    include_once 'product_func.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $product = getProduct($id);
        $product_name = $product['name'];
        $product_price = $product['price'];
        $product_des = $product['description'];
        $product_image = $product['image'];
    }
    else{
        header('location: index.php');
    }

    

?>