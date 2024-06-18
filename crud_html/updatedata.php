<?php

$idd = $_POST['sid'];
$name1 = $_POST['sname'];
$address1 = $_POST['saddress'];
$age1 = $_POST['sage'];
$phone1 = $_POST['sphone'];

$conn = mysqli_connect('localhost', 'root', '', 'crudproject') or die("connectio failed");
 
    $query = "update todaycrud set name='$name1',address='$address1',age='$age1',phone='$phone1' where id='$idd'";

    $result = mysqli_query($conn, $query) or die("Unsucessful");
    header("Location: index.php");
    
    ?>