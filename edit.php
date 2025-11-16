<?php
    include "header.php";
    include "db.php";

     if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
            exit("invalid or missing id");
        }

        $id = (int) $_GET['id'];

        $stmt = $conn->prepare("SELECT * FROM tasks WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $task = $result->fetch_assoc();// we canot use the value in the form if we didn't do this

        if (!$task) {
        die("Task not found");
    }
// when the button pressed
    } elseif($_SERVER['REQUEST_METHOD']==='POST') {
        if(!isset($_POST['id']) || !is_numeric($_POST['id'])){//if there is nothing on the id when the button pressed
            die("Invalid ID");
        }

        $id = (int) $_POST['id'];
        $title = trim($_POST['title']); 

        if($title === "") {
            die("Title cannot be empty");
        }

        $stmt = $conn->prepare("UPDATE tasks SET title = ? WHERE id = ?");
        $stmt->bind_param("si", $title,$id);
        $stmt->execute();

        header("Location: index.php");
        exit;
    }
    

?>

<div class="flex flex-col items-center space-y-4">
<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($task['id']); ?>"
> 
    <input type="text" name="title" value="<?php echo htmlspecialchars($task['title']); ?> "class="border-4 border-red-300 mr-5 ml-5 bg-yellow-100">

    <button type="submit" class="bg-blue-500 text-white px-4 py-1 mt-4 rounded hover:bg-blue-600 font-bold">Update</button><!--with the btn name 'add', $_POST['add'] = "value of the button";-->
</form>
</div>