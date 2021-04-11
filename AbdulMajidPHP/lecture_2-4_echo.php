<!-- .php must -->
<!-- only php file -->
<?php
    echo "Hello Abdul Majid";
?>

<!-- php in html file but file extention still .php  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BY ABDUL MAJID</title>
</head>

<body>
    <?php
        echo "My name is Abdul Majid";
    ?>
</body>

</html>

<!-- Diffrent Use of echo command -->
<!-- All commands works same with print satement
    only change echo with print and print does not support , statement
    print "Abdul " , "Majid" not allow -->
<?php
    // both are same for print message
    echo "Abdul Majid";
    echo 'Abdul Majid';

    // show multiple messges using one line
    echo "Abdul ", "Majid"; //not allow in print statment

    //for concatination
    echo "Abdul" . "Majid";

    //php code for html command
    echo "<b>Abdul Majid<b/>";

    //numaric value 
    echo 7.5; //not use ""

?>