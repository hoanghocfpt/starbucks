<?php 
    include_once 'model/connectDb.php';
    // get Product delail
    function getProduct($id){
        $conn = connectDb();
        $sql = "SELECT * FROM products WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


?>