<!DOCTYPE html>
<html>
<head>
  <title>Contoh Fungsi Array PHP</title>
</head>
<body>

<hr>
<h5>1. array()</h5>
<?php
$fruits = array("Apple", "Banana", "Cherry");
print_r($fruits);
?>

<hr>
<h5>2. array_change_key_case()</h5>
<?php
$person = array("Name" => "John", "Age" => 30);
print_r(array_change_key_case($person, CASE_LOWER));
?>

<hr>
<h5>3. array_chunk()</h5>
<?php
$names = array("Alice", "Bob", "Charlie", "David");
print_r(array_chunk($names, 2));
?>

<hr>
<h5>4. array_column()</h5>
<?php
$records = [
    ["id" => 1, "name" => "John"],
    ["id" => 2, "name" => "Jane"]
];
print_r(array_column($records, "name"));
?>

<hr>
<h5>5. array_combine()</h5>
<?php
$keys = ["name", "age"];
$values = ["Alice", 25];
print_r(array_combine($keys, $values));
?>

<hr>
<h5>6. array_count_values()</h5>
<?php
$colors = ["red", "blue", "red", "green", "blue"];
print_r(array_count_values($colors));
?>

<hr>
<h5>7. array_diff()</h5>
<?php
$a = ["a" => "green", "red", "blue"];
$b = ["b" => "green", "yellow", "red"];
print_r(array_diff($a, $b));
?>

<hr>
<h5>8. array_diff_assoc()</h5>
<?php
$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("a" => "red", "b" => "blue", "c" => "green");
print_r(array_diff_assoc($a1, $a2));
?>

<hr>
<h5>9. array_diff_key()</h5>
<?php
$a1 = array("a" => "green", "b" => "brown", "c" => "blue");
$a2 = array("a" => "green", "b" => "yellow", "d" => "red");
print_r(array_diff_key($a1, $a2));
?>

<hr>
<h5>10. array_diff_uassoc()</h5>
<?php
$a1 = array("a" => "green", "b" => "brown", "c" => "blue");
$a2 = array("a" => "green", "b" => "yellow", "c" => "blue");
print_r(array_diff_uassoc($a1, $a2, function($a, $b) {
    return strcmp($a, $b);
}));
?>

<hr>
<h5>11. array_diff_ukey()</h5>
<?php
$a1 = ["a" => "red", "b" => "green", "c" => "blue"];
$a2 = ["a" => "blue", "b" => "green", "d" => "yellow"];
print_r(array_diff_ukey($a1, $a2, function($k1, $k2) {
    return strcmp($k1, $k2);
}));
?>

<hr>
<h5>12. array_fill()</h5>
<?php
print_r(array_fill(0, 5, "banana"));
?>

<hr>
<h5>13. array_fill_keys()</h5>
<?php
$keys = ["a", "b", "c"];
print_r(array_fill_keys($keys, "apple"));
?>

<hr>
<h5>14. array_filter()</h5>
<?php
$numbers = [1, 2, 3, 4, 5];
print_r(array_filter($numbers, fn($n) => $n % 2 == 0));
?>

<hr>
<h5>15. array_flip()</h5>
<?php
$colors = ["a" => "red", "b" => "green"];
print_r(array_flip($colors));
?>

<hr>
<h5>16. array_intersect()</h5>
<?php
$a1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$a2 = ["a" => "green", "yellow", "red"];
print_r(array_intersect($a1, $a2));
?>

<hr>
<h5>17. array_intersect_assoc()</h5>
<?php
$a1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$a2 = ["a" => "green", "b" => "brown", "c" => "yellow", "red"];
print_r(array_intersect_assoc($a1, $a2));
?>

<hr>
<h5>18. array_intersect_key()</h5>
<?php
$a1 = ["a" => "green", "b" => "brown", "c" => "blue"];
$a2 = ["a" => "yellow", "b" => "black", "d" => "brown"];
print_r(array_intersect_key($a1, $a2));
?>

<hr>
<h5>19. array_intersect_uassoc()</h5>
<?php
$a1 = ["a" => "green", "b" => "brown", "c" => "blue"];
$a2 = ["a" => "green", "b" => "yellow", "c" => "blue"];
print_r(array_intersect_uassoc($a1, $a2, function($k1, $k2) {
    return strcmp($k1, $k2);
}));
?>

<hr>
<h5>20. array_intersect_ukey()</h5>
<?php
$a1 = ["a" => "green", "b" => "brown", "c" => "blue"];
$a2 = ["a" => "yellow", "b" => "black", "d" => "blue"];
print_r(array_intersect_ukey($a1, $a2, function($k1, $k2) {
    return strcmp($k1, $k2);
}));
?>

<hr>
<h5>21. array_key_exists()</h5>
<?php
$person = ["name" => "Alice", "age" => 25];
if (array_key_exists("age", $person)) {
    echo "Key 'age' ditemukan.";
}
?>

<hr>
<h5>22. array_keys()</h5>
<?php
$colors = ["red" => 1, "green" => 2, "blue" => 3];
print_r(array_keys($colors));
?>

<hr>
<h5>23. array_map()</h5>
<?php
$numbers = [1, 2, 3];
$squared = array_map(fn($n) => $n * $n, $numbers);
print_r($squared);
?>

<hr>
<h5>24. array_merge()</h5>
<?php
$a = ["color" => "red", 2, 4];
$b = ["a", "b", "color" => "green", "shape" => "trapezoid", 4];
print_r(array_merge($a, $b));
?>

<hr>
<h5>25. array_merge_recursive()</h5>
<?php
$a = ["color" => ["red"], 2];
$b = ["color" => ["green", "blue"], 4];
print_r(array_merge_recursive($a, $b));
?>

<hr>
<h5>26. array_multisort()</h5>
<?php
$array1 = [10, 100, 100, 0];
$array2 = [1, 3, 2, 4];
array_multisort($array1, $array2);
print_r($array1);
print_r($array2);
?>

<hr>
<h5>27. array_pad()</h5>
<?php
$input = [12, 10, 9];
print_r(array_pad($input, 5, 0));
?>

<hr>
<h5>28. array_pop()</h5>
<?php
$stack = ["orange", "banana", "apple", "raspberry"];
array_pop($stack);
print_r($stack);
?>

<hr>
<h5>29. array_product()</h5>
<?php
$numbers = [2, 4, 6];
echo array_product($numbers);
?>

<hr>
<h5>30. array_push()</h5>
<?php
$stack = ["orange", "banana"];
array_push($stack, "apple", "raspberry");
print_r($stack);
?>

<hr>
<h5>31. array_rand()</h5>
<?php
$input = ["red", "green", "blue", "yellow"];
$randKey = array_rand($input);
echo $input[$randKey];
?>

<hr>
<h5>32. array_reduce()</h5>
<?php
$numbers = [1, 2, 3, 4];
$sum = array_reduce($numbers, fn($carry, $item) => $carry + $item, 0);
echo $sum;
?>

<hr>
<h5>33. array_replace()</h5>
<?php
$base = ["orange", "banana", "apple", "raspberry"];
$replacements = [0 => "pineapple", 4 => "cherry"];
print_r(array_replace($base, $replacements));
?>

<hr>
<h5>34. array_replace_recursive()</h5>
<?php
$base = ["a" => ["red"], "b" => ["green", "blue"]];
$replacements = ["a" => ["yellow"], "b" => ["black"]];
print_r(array_replace_recursive($base, $replacements));
?>

<hr>
<h5>35. array_reverse()</h5>
<?php
$input = ["php", "html", "css"];
print_r(array_reverse($input));
?>

<hr>
<h5>36. array_search()</h5>
<?php
$colors = ["a" => "red", "b" => "green", "c" => "blue"];
$key = array_search("green", $colors);
echo $key;
?>

<hr>
<h5>37. array_shift()</h5>
<?php
$queue = ["a", "b", "c"];
array_shift($queue);
print_r($queue);
?>

<hr>
<h5>38. array_slice()</h5>
<?php
$input = ["a", "b", "c", "d", "e"];
print_r(array_slice($input, 2, 2));
?>

<hr>
<h5>39. array_splice()</h5>
<?php
$input = ["red", "green", "blue", "yellow"];
array_splice($input, 1, 2, ["black", "maroon"]);
print_r($input);
?>

<hr>
<h5>40. array_sum()</h5>
<?php
$numbers = [2, 4, 6, 8];
echo array_sum($numbers);
?>

<hr>
<h5>41. array_udiff()</h5>
<?php
$a1 = ["a" => "green", "b" => "brown", "c" => "blue"];
$a2 = ["a" => "GREEN", "b" => "yellow", "c" => "red"];
print_r(array_udiff($a1, $a2, 'strcasecmp'));
?>

<hr>
<h5>42. array_udiff_assoc()</h5>
<?php
$a1 = ["a" => "green", "b" => "brown", "c" => "blue"];
$a2 = ["a" => "green", "b" => "yellow", "c" => "red"];
print_r(array_udiff_assoc($a1, $a2, 'strcasecmp'));
?>

<hr>
<h5>43. array_udiff_uassoc()</h5>
<?php
$a1 = ["a" => "green", "b" => "brown", "c" => "blue"];
$a2 = ["a" => "GREEN", "b" => "yellow", "c" => "red"];
print_r(array_udiff_uassoc($a1, $a2, 'strcasecmp', 'strcasecmp'));
?>

<hr>
<h5>44. array_uintersect()</h5>
<?php
$a1 = ["a" => "green", "b" => "brown", "c" => "blue"];
$a2 = ["a" => "GREEN", "b" => "yellow", "c" => "blue"];
print_r(array_uintersect($a1, $a2, 'strcasecmp'));
?>

<hr>
<h5>45. array_uintersect_assoc()</h5>
<?php
$a1 = ["a" => "green", "b" => "brown", "c" => "blue"];
$a2 = ["a" => "GREEN", "b" => "yellow", "c" => "blue"];
print_r(array_uintersect_assoc($a1, $a2, 'strcasecmp'));
?>

<hr>
<h5>46. array_uintersect_uassoc()</h5>
<?php
$a1 = ["a" => "green", "b" => "brown", "c" => "blue"];
$a2 = ["a" => "GREEN", "b" => "yellow", "c" => "blue"];
print_r(array_uintersect_uassoc($a1, $a2, 'strcasecmp', 'strcasecmp'));
?>

<hr>
<h5>47. array_unique()</h5>
<?php
$input = ["a" => "green", "red", "b" => "green", "blue", "red"];
print_r(array_unique($input));
?>

<hr>
<h5>48. array_unshift()</h5>
<?php
$queue = ["orange", "banana"];
array_unshift($queue, "apple", "raspberry");
print_r($queue);
?>

<hr>
<h5>49. array_values()</h5>
<?php
$array = ["size" => "XL", "color" => "gold"];
print_r(array_values($array));
?>

<hr>
<h5>50. array_walk()</h5>
<?php
$array = [1, 2, 3];
array_walk($array, function(&$value, $key) {
    $value *= 2;
});
print_r($array);
?>

<hr>
<h5>51. array_walk_recursive()</h5>
<?php
$fruits = [
    "a" => ["apple", "banana"],
    "b" => ["orange", "grape"]
];
array_walk_recursive($fruits, function($value, $key) {
    echo "$key: $value<br>";
});
?>

<hr>
<h5>52. arsort()</h5>
<?php
$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
arsort($age);
print_r($age);
?>

<hr>
<h5>53. asort()</h5>
<?php
$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
asort($age);
print_r($age);
?>

<hr>
<h5>54. compact()</h5>
<?php
$firstname = "John";
$lastname = "Doe";
$age = 30;
$result = compact("firstname", "lastname", "age");
print_r($result);
?>

<hr>
<h5>55. count()</h5>
<?php
$items = [1, 2, 3, 4];
echo count($items);
?>

<hr>
<h5>56. current()</h5>
<?php
$items = ["apple", "banana", "cherry"];
echo current($items);
?>

<hr>
<h5>57. each()</h5>
<?php
$fruits = ["a" => "apple", "b" => "banana"];
reset($fruits);
if (function_exists("each")) {
    print_r(each($fruits));
} else {
    echo "Function 'each()' is deprecated in PHP 7.2+";
}
?>

<hr>
<h5>58. end()</h5>
<?php
$items = ["apple", "banana", "cherry"];
echo end($items);
?>

<hr>
<h5>59. extract()</h5>
<?php
$data = ["name" => "Alice", "age" => 30];
extract($data);
echo "Name: $name, Age: $age";
?>

<hr>
<h5>60. in_array()</h5>
<?php
$colors = ["red", "green", "blue"];
if (in_array("green", $colors)) {
    echo "Green is in the array.";
}
?>

<hr>
<h5>61. key()</h5>
<?php
$items = ["a" => "apple", "b" => "banana", "c" => "cherry"];
echo key($items);
?>

<hr>
<h5>62. krsort()</h5>
<?php
$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
krsort($age);
print_r($age);
?>

<hr>
<h5>63. ksort()</h5>
<?php
$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
ksort($age);
print_r($age);
?>

<hr>
<h5>64. list()</h5>
<?php
$info = ["John", "Doe"];
list($firstname, $lastname) = $info;
echo "First name: $firstname, Last name: $lastname";
?>

<hr>
<h5>65. natcasesort()</h5>
<?php
$files = ["img12.png", "img10.png", "img2.png", "img1.png"];
natcasesort($files);
print_r($files);
?>

<hr>
<h5>66. natsort()</h5>
<?php
$files = ["img12.png", "img10.png", "img2.png", "img1.png"];
natsort($files);
print_r($files);
?>

<hr>
<h5>67. next()</h5>
<?php
$items = ["apple", "banana", "cherry"];
next($items);
echo current($items);
?>

<hr>
<h5>68. pos()</h5>
<?php
$items = ["apple", "banana", "cherry"];
echo pos($items); // sama dengan current()
?>

<hr>
<h5>69. prev()</h5>
<?php
$items = ["apple", "banana", "cherry"];
next($items);
prev($items);
echo current($items);
?>

<hr>
<h5>70. range()</h5>
<?php
$numbers = range(1, 5);
print_r($numbers);
?>

<hr>
<h5>71. reset()</h5>
<?php
$items = ["apple", "banana", "cherry"];
end($items);
reset($items);
echo current($items);
?>

<hr>
<h5>72. rsort()</h5>
<?php
$numbers = [4, 6, 2, 22, 11];
rsort($numbers);
print_r($numbers);
?>

<hr>
<h5>73. shuffle()</h5>
<?php
$colors = ["red", "green", "blue", "yellow"];
shuffle($colors);
print_r($colors);
?>

<hr>
<h5>74. sizeof()</h5>
<?php
$items = ["apple", "banana", "cherry"];
echo sizeof($items); // sama dengan count()
?>

<hr>
<h5>75. sort()</h5>
<?php
$fruits = ["lemon", "orange", "banana", "apple"];
sort($fruits);
print_r($fruits);
?>

<hr>
<h5>76. uasort()</h5>
<?php
$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
uasort($age, function($a, $b) {
    return $b <=> $a;
});
print_r($age);
?>

<hr>
<h5>77. uksort()</h5>
<?php
$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
uksort($age, function($a, $b) {
    return strcmp($b, $a);
});
print_r($age);
?>

<hr>
<h5>78. usort()</h5>
<?php
$numbers = [3, 2, 5, 6, 1];
usort($numbers, function($a, $b) {
    return $a <=> $b;
});
print_r($numbers);
?>

</body>
</html>
