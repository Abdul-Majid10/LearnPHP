<?php

$name = $_POST['S_Name'];
$address = $_POST['S_Address'];
$class = $_POST['S_Class'];
$cgpa = $_POST['S_CGPA'];

$conn = mysqli_connect("localhost", "root", "", "curd") ;

if(!$conn){
    die("Connection Faild! " . mysqli_connect_error());
}

$sql = "INSERT iNTO student (S_Name, S_Address, S_Class, S_CGPA) VALUES ('{$name}','{$address}','{$class}',{$cgpa})"; 

if (!mysqli_query($conn, $sql)){
    echo "Submitted Faild";
}

header("Location: http://localhost/LearnPHP/MyCURD/");

mysqli_close($conn);
