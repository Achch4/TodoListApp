<?php
    include 'header.php';
    include 'db.php'; // connect to the database
$sql = "SELECT * FROM tasks"; // run the select all
$result = $conn->query($sql);
 if(!$result) { //if the query fails show error
    die("Query failed: " . $conn->error); //exit the code if there is a error
 }
echo "<ul class='flex flex-col items-center gap-3 mt-6'>"; 
while ($row = $result->fetch_assoc()) { 
  if($row['is_done']=='1'){

}else {
  
}
    echo "<li class='flex items-center justify-between w-[600px] bg-blue-100 p-3 rounded-lg shadow-md'>"
        . "<span class='font-semibold " . ((int)$row['is_done'] == 1 ? "line-through text-gray-500" : "text-gray-800") . "'>"
        . htmlspecialchars($row['title'])
        . "</span>"
        . "<div class='flex gap-2'>"
        . "<a href='delete.php?id=" . urlencode($row['id']) . "' class='px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600'>Delete</a>"
        . "<a href='edit.php?id=" . urlencode($row['id']) . "' class='px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600'>Edit</a>"
        . "<a href='toggle.php?id=" . urlencode($row['id']) . "' 
     class='px-3 py-1 text-white text-sm rounded " 
     . ((int)$row['is_done'] == 1 
        ? "pointer-events-none cursor-not-allowed bg-gray-400" 
        : "bg-green-500 hover:bg-green-600") 
     . "'>Mark As Done</a>"
        . "<a href='toggle.php?id=" . urlencode($row['id']) . "' 
     class='px-3 py-1 text-white text-sm rounded " 
     . ((int)$row['is_done'] == 0 
        ? "pointer-events-none cursor-not-allowed bg-gray-500" 
        : "bg-gray-500 hover:bg-gray-600") 
     . "'>Undo</a>"

        . "</div>"
        . "</li>";
} 
echo "</ul>";


?>
<div class="flex justify-center">
  <a class='hover:bg-red-700 hover:text-blue-300 text-red-700 bg-blue-300 rounded-lg p-3 mt-10 font-bold' href="add.php">+Add Task</a>
</div>


