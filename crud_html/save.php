<?php

    $name1 = $_POST['sname'];
    $address1 = $_POST['saddress'];
    $age1 = $_POST['sage'];
    $phone1 = $_POST['sphone'];



    $conn = mysqli_connect('localhost', 'root', '', 'crudproject') or die("connectio failed");
    $query =  "insert into todaycrud(name,address,age,phone) values('$name1','$address1','$age1','$phone1')";
    $result = mysqli_query($conn, $query) or die("Unsucessful");


    header('Location: index.php');
    ?>