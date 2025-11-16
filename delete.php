<?php 
    include "db.php";

    $id = (int) $_GET['id']; // Cast to int for safety
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: index.php");
    exit;
?>
