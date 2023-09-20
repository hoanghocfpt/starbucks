<?php
include_once '../connectDb.php';

$conn = connectDb();
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $searchTerm = '%' . $_GET['name'] . '%';

    // Sử dụng Prepared Statement để tránh SQL Injection
    $sql = "SELECT * FROM products WHERE name LIKE :searchTerm";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($result)) {
        foreach ($result as $value) {
            $data[] = $value;
        }
        echo json_encode($data);
    } else {
        $data = array('status' => 'empty');
        echo json_encode($data);
    }
} else {
    echo "Name parameter is missing";
}

$conn = null;
?>
