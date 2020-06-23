<?php 
//Fisher–Yates shuffle
//https://www.geeksforgeeks.org/shuffle-a-given-array-using-fisher-yates-shuffle-algorithm/

// PHP Program to shuffle  
// a given array 
  
// A function to generate 
// a random permutation of arr[] 
function randomize ($arr, $n) 
{ 
    // Start from the last element  
    // and swap one by one. We  
    // don't need to run for the 
    // first element that's why i > 0 
    for($i = $n - 1; $i >= 0; $i--) 
    { 
        // Pick a random index 
        // from 0 to i 
        $j = rand(0, $i+1); 
  
        // Swap arr[i] with the  
        // element at random index 
        $tmp = $arr[$i]; 
        $arr[$i] = $arr[$j]; 
        $arr[$j] = $tmp; 
    } 
    for($i = 0; $i < $n; $i++) 
    echo $arr[$i]." "; 
} 
  
// Driver Code 
$arr = array(1, 2, 3, 4,  
             5, 6, 7, 8); 
$n = count($arr); 
randomize($arr, $n); 
  
// This code is contributed by mits 
?>