function foo(array $arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )

//Alternative solution using array_filter
function foo2(array $arr) {
  return array_filter($arr, function($value) { return $value !== 'a'; });
}

$arr = ['a', 'b', 'a', 'c'];
$result2 = foo2($arr);
print_r($result2); // Output: Array ( [1] => b [3] => c )