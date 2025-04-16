<?php

$person = [
    "name" => "John Doe",
    "age" => 30,
    "email" => "john.doe@example.com0",
    "is_student" => false,
    "skills" => [ "PHP", "JavaScript", "HTML","CSS"],
];

// Step 2: Encode the array to JSON format
// JSON PRETTY_PRINT makes the JSON more readable (adds indentation and new lines)
$json = json_encode($person, JSON_PRETTY_PRINT);

// <pre> preserves line breaks and indetation in the browser
echo "<h3>JSON Output : </h3><pre>$json_data</pre>";


// Step 3: Decode the JSON back to PHP array
$decoded = json_decode($json_data, true);
// The second parameter true ensures that the result is an associative array, not a PHP object

// Step 4: Accessing data from the decoded JSON
echo "<h3>Accessing Data : </h3>";
echo "<p>Name: " . $decoded['name'] . "</p>";
echo "<p>Email: " . $decoded['email'] . "</p>";
echo "<p>Skills: " . implode(", ", $decoded['skills']) . "</p>";
// implode(", ", ")  joins the skills arrays into a string like "PHP, JavaScript, HTML, CSS"

// Step 5: Modify the Array
$decoded['age'] = 29;
$decoded['skills'][] = "Python";

// Step 6: Encode the modified array back to JSON
$updated_json = json_encode($decoded, JSON_PRETTY_PRINT);
echo "<h3>Updated JSON: </h3><pre>$updated_json</pre>";


?>