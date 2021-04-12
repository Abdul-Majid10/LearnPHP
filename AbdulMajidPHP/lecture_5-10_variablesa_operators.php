<!-- Variables -->
<!-- 1. varable name start with $ sign => $name -->
<!-- 2. PHP is case sensitive  -->
<?php
$name = "Abdul Majid";
$age = 20;
echo $name;

echo "<h1>" . $name . "</h1>";

echo "My Name is " . $name . "<br>";
echo "My age is " . $age;

?>
<!-- data types -->
<!-- 
    $x = "hello majid"; ---------String
    $x = 25; --------integer
    $x = 2.5; ---------Float
    $x = true; ---------Boolean
    $x = array("HTML","CSS","JS"); ---------Array
    $x = new MyClass(); ---------Object
    $x = null; ---------Null

 -->
<!-- Find Data Type using var_dump(); -->
<?php
echo "<br>";
var_dump($name);
echo "<br>";
var_dump($age);
?>

<!-- Comments -->
<!-- 
    single line 
        #
        //
    multiline
        /*  */

 -->

<!-- Constant variable -->
<!--
     Syntex: 
        define(name, value, case-insensitive) ;
    default value of case-insentive = false // not support
    they are global variables.
 -->

<?php
define("PI", 3.14);
define("num", 20);
//not use $ before name
// variable name must be in ""
echo "<br>";
echo PI;
echo "<br>";
echo num;
?>

<!-- operator
    ** exponensial
    10**3 = 10 * 10 * 10
 -->