<?php 
include "config.php";

$id = $_GET['id'];

$query = "DELETE FROM add_parent_category WHERE `add_parent_category`.`id` = $id";
$result = mysqli_query($conn, $query);

if($result){
    header("location: parent-category.php");
}
?>