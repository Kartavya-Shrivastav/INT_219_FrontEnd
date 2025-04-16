<?php

$fruits = ["Apple", "Banana", "Mango"];

// Step 2: Encode the array to JSON format
$json_array = json_encode($fruits, JSON_PRETTY_PRINT);
echo "<h3>JSON Array Output : </h3><pre>$json_array</pre>";

// Step 3: Decode the JSON back to PHP array
$decoded_array = json_decode($json_array, true);

// Step 4: Accessing elements
echo "<h3>Accessing Elements : </h3>";
echo "First Fruit: " . $decoded_array[0] . "<br>";
echo "Second Fruit: " . $decoded_array[1] . "<br>";


// Step 5: Modify the Array
$decoded_array[2] = "Orange";

// Step 6: Encode the modified array to JSON
$updated_json = json_encode($decoded_array, JSON_PRETTY_PRINT);
echo "<h3>Updated JSON Array: </h3><pre>$updated_json</pre>";
?>