<?PHP
// Turing Test. Delivered 18th December, 2020
// Given an array A of integers and integer K, return the maximum S such that there
// exist i < j with A[i] + A[j] = S and S < K.
// If no i, j exist satisfying this equation, return -1

// Test array A = [34, 23, 1, 24, 75, 33, 54, 8] // K = 60

// The class that solves the problem.
class Solution {
  // The function that solves the problem.
  function twoSumsLessThanK($A, $K){
    $a = array();
    if(is_array($A)) {
      $a = $A;
    }
    $result_array = array();
    $length_of_array = sizeof($a);
    $k = 0;
    if(is_int($K)) {
      $k = $K;
    }
    $return_value = 0;

    // The outer for loop iterates values $i in the input array from the first
    // term to the second to the last term ($length_of_array - 1)
    for($i = 0; $i < $length_of_array - 1; $i++){
      $ith_value = $a[$i];

      // The inner for loop iterates values $j in the input array from the second
      // term to the last term
      for ($j = $i+1; $j < $length_of_array; $j++){
        $jth_value = $a[$j];
        // for i < j : A[i] + A[j]
        $sum_value = $ith_value + $jth_value;

        // The following line checks the problem condition: i < j with A[i] + A[j] = S and S < K
        if($sum_value < $k) {
          $result_array[] = $sum_value;
          // Display result. The following line can be uncommented to see the A[i] and A[j] that meet the problem condition.
          echo "$ith_value and $jth_value <br>";
        }
      }
    }
    // The result value.
    if (sizeof($result_array) == 0) {
      $result_value = -1;
    } else {
      // The maximum number of sums S that satisfy the problem condition.
      $result_value = sizeof($result_array);
    }
    // echo "<br>Debugger result value is $result_value <br>";

    return $result_value;
  }
}
// Array printer function.
// This function accepts an array as input and prints each value of the array.
function print_array($array_in) {
  foreach ($array_in as $value) {
    print($value);
    print(', ');
  }
  // print('<br>');
}

// Now let's test the code.
$A = array(34, 23, 1, 24, 75, 33, 54, 8);       // Test array
$K = 60;                                        // Test value K
$A2 = array(71, 72, 73, 74, 75, 7, 77, 78);
$K2 = 80;

// Creating an object (i.e. instance) of class Solution
$solution = new Solution;
echo "<b>Code Output</b><br><br>";
echo "<b>Array A1:</b>" ;
print_array($A);
echo "<br>";
$output = $solution -> twoSumsLessThanK($A, $K);
echo "<br>The maximum number, S, of sums of values i and j in the array A1 less than $K are $output<br><br>";

echo "<b>Array A2:</b>" ;
print_array($A2);
echo "<br>";
$output2 = $solution -> twoSumsLessThanK($A2, $K2);
echo "<br>The maximum number, S, of sums of values i and j in the array less than $K2 are $output2<br>";
?>
