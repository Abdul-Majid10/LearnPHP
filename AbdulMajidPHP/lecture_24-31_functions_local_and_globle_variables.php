<!-- Functions -->
<!-- simple function syntax
function functionName(){
    body
} -->

<?php

function intro()
{
    echo "My name is abdul majid and my age is 20";
}

intro();
echo "<br>";
intro();

function sum($a, $b)
{
    return $a + $b;
}

$sum = sum(5, 3);
echo "<br>" .  $sum;


?>

<!-- passing argument by refrence 
use & sign with variable name  -->

<?php

$fname = "Majid";
echo "<br>" . $fname;
function myreset(&$fname)
{
    $fname = "FNAME";
}
myreset($fname);
echo "<br>" . $fname;
?>

<!-- annonimus fuction and variable function  -->
<?php

$sayHi = function ($lname) {
    echo "Hi " . $lname;
};

$sayHi("Majid");

?>
<!-- Recursive function
make function for factorial -->

<?php
function fact($num)
{
    if ($num == 0) {
        return 1;
    } else {
        return ($num * fact($num - 1));
    }
}
echo fact(5);
?>

<!-- if you use global variable in function 
then fist use global keyword in funstion
function functionName(){
    global variableName;
    use variable freely😊;
} -->