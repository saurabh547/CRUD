<?php
include("connection1.php");

$Id = $_GET['id'];

$query = "DELETE FROM form where Id = '$Id'";

$data = mysqli_query($conn,$query);

if($data){
    echo "record deleted";
}
 header("Location: http://localhost/CRUD/display.php");
// else{
//     echo "faild to delete";
// }







?>
