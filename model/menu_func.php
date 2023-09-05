<?php
    include_once 'connectDb.php';
    function getMenu(){
        $conn = connectDb();
        $sql = "SELECT products.*, categories.name as category_name
        FROM products
        JOIN categories ON products.category_id = categories.id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    // get menu by category
    function getMenuByCategory($category){
        $conn = connectDb();
        $sql = "SELECT products.*, categories.name as category_name
        FROM products
        JOIN categories ON products.category_id = categories.id
        WHERE category_id = :category";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':category',$category);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    // get categories
    function getCategories(){
        $conn = connectDb();
        $sql = "SELECT * FROM categories";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


?>