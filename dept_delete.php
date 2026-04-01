<?php

//connection
require ("config/connection.php");

//get id
$id = $_GET['id'];

//delete query
$delete = "DELETE FROM `department` WHERE id=$id";
$query = mysqli_query($connection, $delete);

//redirect to view page
header('location: dept_view.php?deleted=1');
?>