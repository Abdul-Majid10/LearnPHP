<?php
include "index.html";

$conn = mysqli_connect("localhost", "root", "", "curd") ;

if(!$conn){
    die("Connection Faild! " . mysqli_connect_error());
}
// echo("Connection successfull");

echo "<h2>All Students</h2>";
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<br>" . "ID : " . $row["ID"] . ",Name : " . $row["S_Name"] ." ,Address: " . $row["S_Address"] ." ,Class: " . $row["S_Class"] ." ,CGPA: " . $row["S_CGPA"];
    }
}

mysqli_close($conn);
?>