<?php
    include 'header.php';
    include 'db.php';
    if(isset($_POST['add'])){//isset = is there a value in the 'add'
        $title = trim($_POST['title']);

         if(!empty($title)){
            $is_done = "0";
            $stmt = $conn->prepare("INSERT INTO tasks (title, is_done) VALUES (?, ?)");
            $stmt->bind_param("ss", $title, $is_done);
            $stmt->execute();
            header("Location: " . $_SERVER['PHP_SELF']); // after adding a task go to  the same page
            exit();
        }else{
            echo "Please enter a task title.";
        }
    }
    //$_POST = collect data submitted through HTML forms that have their method attribute set to "POST".
?>

<div class="flex flex-col items-center space-y-4">
<form action="" method="post"> <!--when the button is clicked the form send a post request-->
    <input type="text" name="title" placeholder="Enter a new task" class="border-4 border-red-300 mr-5 ml-5 bg-yellow-100">
    <button type="submit" name="add" class="bg-blue-500 text-white px-4 py-1 mt-4 rounded hover:bg-blue-600 font-bold">Add Task</button><!--with the btn name 'add', $_POST['add'] = "value of the button";-->
</form><!--basically did the user pressed the button-->
<a class='hover:bg-red-700 hover:text-blue-300 text-red-700 bg-blue-300 rounded-lg p-3 mt-10 font-bold' href="index.php">← Back to tasks</a>
</div>

