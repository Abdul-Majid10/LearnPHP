<!-- Arrays -->
<!-- syntax:
1st way:
$arrayname = array(value1 , value2, value3, ...);
2nd way:
$arrayname = [value1 , value2, value3, ...];
-->

<!--array function only for testing perpose 
print_r($arrayname);-->

<?php
$arr = array(12, 20, "majid", 'ture');
echo $arr[2] . "<br>";
echo "<pre>";
print_r($arr);
echo "</pre>" . "<br>";

for ($i = 0; $i < 4; $i++) {
    echo $arr[$i] . "<br>";
}

?>

<!-- Associated array
syntax:
$arrayname = array(
    "indexkey" => value1 ,
    "indexkey" => value1 ,
    "indexkey" => value1 , 
     .
     .
     .);
 -->


<?php
$stdNum = array(
    "Majid" => 84,
    "Abdul" => 83,
    "Areeb" => 82,
    "Husnanin" => 81
);
echo $stdNum["Majid"] . "<br>";
echo "<pre>";
print_r($stdNum);
echo "</pre>" . "<br>";

?>

<!-- for each loop
syntax:
foreach($arrayname as $value){
    echo $value;
} -->

<?php
$array = array(12, 20, "majid", 'ture');

foreach ($array as $value) {
    echo "<li>";
    echo  $value . "<br>";
    echo "</li>";
}

$Age = array(
    "Majid" => 20,
    "Abdul" => 21,
    "Areeb" => 22,
    "Husnanin" => 51
);

echo "<ul>";
foreach ($Age as $key => $value) {
    echo  "<li> $key = $value  </li>";
}
echo "<ul>";
?>

<!-- Multidemisinal Array
syntax:
$array = [
    [value1, value2, value3, value4, value5 ],
    [value1, value2, value3, value4, value5 ],
    [value1, value2, value3, value4, value5 ],
    [value1, value2, value3, value4, value5 ],
    [value1, value2, value3, value4, value5 ]
] 
-->

<!-- print using nested for loop same as JAVA -->

<!-- Using foreach
foreach($array as $v1){
    foreach($v1 as $v2){
        echo $v2;
    }
    echo "<br>";
} 
-->

<!-- Show in Table form
syantax:
echo "<table>";
foreach($array as $v1){
    echo "<tr>"
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
  -->


<?php
echo "<br>";
$Employee = [
    [01, "Abdul", "Majid", "SE", 50000.00],
    [02, "Muhamad", "Suleman", "CS", 60000.00],
    [03, "AD", "Majid", "SE", 80000.00],
    [04, "Abdul", "rehman", "SE", 100000.00],
    [05, "Abdul", "Wajid", "CS", 200000.00]
];

echo "<table border= '2px' cellspacing = '0px' cellpadding = '5px'>";
echo "<tr>
    <th>EmpID</th>
    <th>Fname</th>
    <th>LName</th>
    <th>Dept</th>
    <th>Salary</th>
      </tr>";
foreach ($Employee as $v1) {
    echo "<tr>";
    foreach ($v1 as $v2) {
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";

// print using foreach and list() funstion
echo "<table border= '2px' cellspacing = '0px' cellpadding = '5px'>";
echo "<tr>
    <th>EmpID</th>
    <th>Fname</th>
    <th>LName</th>
    <th>Dept</th>
    <th>Salary</th>
      </tr>";
foreach ($Employee as list($id, $fname, $lname, $des, $salary)) {
    echo "<tr> <td>$id</td> <td>$fname</td> <td>$lname</td> <td>$des</td> <td>$salary</td></tr>";
}
echo "</table>";
?>

<!-- count() and sizeOf()
syntax:
count($arraynmae); // return number
sizeOf($arraynmae); // return number
// for multidemensional 
count($arraynmae[index]); // return number
sizeOf($arraynmae[index]); // return number
// return full array use print_r to print 
array_count_values($arrayname);
 -->

<!-- in_array() function
syntax:
in_array(value, $arrayname);
return 1 if find return 0 if not find -->

<!-- array_search() function
syntax:
array_search(value, $arrayname);
return index value  if find  -->

<!-- array_repalace and array_replace_recursive (they make new array not change existing arrays)
repace one array with other if second  array contain less then 1st array value 
then these function relace from start other left as same -->

<!-- push()  and array_pop() 
pop syntax:
array_pop($arrayname);
delete 1 value form  array at last
push syntax:
array_push($arraname , 'value 1', valuee 2,...);
add values at the end of the array 
-->

<!-- array_shift() and array_unshift()
array_shift() synatx:
array_shift($arraname);
delete 1 value form  array at start

array_unshift() syntax:
array_unshift($arraname,  'value 1', valuee 2,...)
add values at the start of the array 
 -->

<!-- they also make new array
     array_merge($array1, $array2,....) ;(indexed arry and asoociative array)
     array_combine($arry1, $array2) ; (for indexed arrays)(this make array 1 keys and array 2 as values)(length of both arrays must same)
     array_merge_recursive($arry1, $array2) ;(multidemsinal arrays)(if find same key they make another array (iiner array) )
  -->

<!-- array_slice()
array_slice($arrayname , starting index, ending index, resurve default fasle)
if forth parimeter make true the make associatve array with same indexed from main array
 -->

<!-- array_splice() function this  function will change in orignal array and not make new array 
 syntax:
 array_splice($array1, form index, length, array2)
 we delete values form array for this dont add forth primiter 
 replace values with 2nd array values form index to length 
 add values with out deleting or replacing 
 -->

<!-- 
     1. array_keys($arraname) // return all key in new arrays
     2. array_keys_first($arraname) // return frst key
     3. array_keys_last($arraname) // return last key
     4. array_keys_exists('key'.$arraname) // return 1 if fine
     5. keys_exists('key',$arraname) // return 1 if find
     all this type of functon use for assuciative arrays
  -->

<!--
      1. array_intersect($array1, $array2) // compare values and return common values in new array
      2. array_intersect_keys($array1, $array2) // compare keys and return common keys values in new array
      3. array_intersect_assoc($array1, $array2) // compare both keys and values and return common keys values in new array
      4. array_intersect_uassoc($array1, $array2, "functionName") // compare keys and with user defined compare function  return common keys values in new array
      .
      .
      .
      link of video:
      https://www.youtube.com/watch?v=ziUDM1EBc-U&list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&index=47
    -->

<!--
      1. array_diff($array1, $array2) // compare values and return values which exit in array1 but not in array2 in new array
      2. array_diff_keys($array1, $array2) // compare keys which exit in array1 but not in array2 and return  keys values in new array
      3. array_diff_assoc($array1, $array2) // compare both keys and values which exit in array1 but not in array2 and return  keys values in new array
      4. array_diff_uassoc($array1, $array2, "functionName") // compare keys and  with user defined compare function return keys values in new array
      .
      .
      .
      link of video:
      https://www.youtube.com/watch?v=7NGlB36JtBA&list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&index=48
    -->

<!-- array_unique() for associative arrays
    return unique values in new array -->
<!-- array_values() for associative arrays
    return all values in new array -->

<!-- array_column() for associative array
array_column($arraname, $columnName) 
return new array wich contain all values of smae column name  -->

<!-- array_chunk() for associative array
array_chunk($arraname, pair(1..number) , preserved vlaue default = false) 
return new associative array which contain arrays of paire number values  if 3 
pair of 3 3 values 
if preserved is true show also keys values -->

<!-- array_flip($arraname); return new array in which the keys of old array become values in new array and values of old array become keys of new array
    array_change_key_case($arraname, case); case is CASE_UPPER or CASE_LOWER. this function return new array in which key chage to upper or lower case 
    (these function use for associative arrays)  -->

<!-- array_sum($arraname); return a value of sum of all values of array (arraySum). this function is sum only integer or float value
    array_product($arraname); return a value of product(*) of all values of array (arrays values product). this function is product only integer or float value -->

<!-- array_rand($arraname, number); number => how many random number require.function return index value of random values from  array
    shuffle($arraname);  randomly suffle values of existing array-->

<!-- array_fill(index, number, value); index => starting index , number=> length of arry , value => assign this value at all indexes. function make a new array
    array_fill_keys($arraname, value ); return new array in which keys are value of old array and value is same as in parimiter. avalues is same for all -->

<!-- array_walk($arraname, funcrionname, parameter); if a want to run function for all values of array then this function used, parameter is used if we want to pass extra papermerts
    this function is used for 1D array
    arrar_walk_recursive($arraname, funcrionname, parameter)
    this function is used for multi D array-->

<!-- array_map(functionname, array1, array2,array3...);return new array. functionality is same as walk functions
in this functioname return a value
in this we also pass many arrays at same time  -->

<!-- array_reduce($arraname, functionname, initial(optional)) ; return array single value,if a want to run function for all values of array then this function used,
https://www.youtube.com/watch?v=XDkOts9PkyE&list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&index=57  -->

<!-- array sorting
1.sort($arraname); change in existing array . work for only indexed array
2.rsort($arraname) ; change in existing array . work for only indexed array (reverse sort)
3.arsort(); associative reverse sort sort
4.asort($array); associative sort
5.krsort($array); reverse sorting according keys
6.ksort($array); sorting according keys
7.narcasesort($arraname); natural order sorting not see only first letter, casesencitive
8.natsort($arraname); natural order sorting(not see only first letter)
9.array_multisort($array1, $array2,...); sort many arrays at same time. (lenth of both arrays must same)
10.array_reverse($arraname); reverse array, return new array.
 -->

<!-- array teversing
1.next($arraname); move inner pointer to next. pointer is bydefault at 0 index
2.prev($arraname); move inner pointer to previous.
3.end($arraname); move inner pointer to at end.
4.each($arraname); return new array with keys and values of current pointer postion
5.pos($arraname); return  value of cuurent pointer location 
6.current($arraname); return value of cuurent pointer location
7.key($arraname); return postion key of cuurent pointer location
8.reset($arraname); reset ppointer location to 0
 -->

<!-- list(variable1, variable2, variable3,...) = $arraname; if we want to store all values of array into variables one by on then we use this function
work only for indexed array and associative array with  -->

<!-- extract($arry, extract_rules, prefix); if we want to store all values of array into variables one by on then we use this function. function make keys as variablesnames
compact(var1, var2,var3,...); convert variables into associative array -->

<!-- range(start, end, step); return array make new array start to end. step is diff
range(1,5) = [1,2,3,4,5]   -->

<!-- explode(separator, string, limit); return array with sparated by sparator
explode(" ", "Abdul mAJid ok") = [Abdul, mAJid, ok]; 
implode(sparator, array); return string 
implode("-", [Abdul, mAJid, ok]); = "Abdul-mAJid-ok" .return string -->