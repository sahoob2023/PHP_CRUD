<?php
$idd = $_GET['sid'];
$name1 = $_GET['sname'];
$address1 = $_GET['saddress'];
$age1 = $_GET['sage'];
$phone1 = $_GET['sphone'];

$conn = mysqli_connect('localhost', 'root', '', 'crudproject') or die("connectio failed");
 
    $query = "update todaycrud set name='$name1',address='$address1',age='$age1',phone='$phone1' where id='$idd'";

    $result = mysqli_query($conn, $query) or die("Unsucessful");
    header("Location: index.php");

?>