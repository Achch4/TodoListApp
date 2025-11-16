<?php
include 'db.php';

    $id = (int) $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
        
    $result = $stmt->get_result();
    $task = $result->fetch_assoc();

    $isDone = (int)$task['is_done'];
    $newState = $isDone === 0 ? 1 : 0;
    $stmt = $conn->prepare("UPDATE tasks SET is_done = ? WHERE id = ?");
    $stmt->bind_param("ii", $newState,$id);
    $stmt->execute();
        
    header("Location: index.php");
    exit;
   

?>