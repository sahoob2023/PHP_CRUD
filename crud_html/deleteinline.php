<?php

include "header.php";


$idd = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'crudproject') or die("connectio failed");

$query = "delete from todaycrud where id = '$idd'";

mysqli_query($conn,$query);

header('Location: index.php');


?>