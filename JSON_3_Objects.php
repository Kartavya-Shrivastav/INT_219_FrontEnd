<?php

$person = [
    "name" => "John Doe",
    "age" => 28,
    "email" => "john.doe@example.com",
    "is_student" => false,
    "skills" => ["css", "javascript", "html"],
];

$json_data = json_encode($person, JSON_PRETTY_PRINT);

echo "<h3>JSON Output:</h3><pre>$json_data</pre>";

$decoded = json_decode($json_data, true);

echo "<h3>Accessing Data:</h3>";
echo "Name: " . $decoded["name"] . "<br>";
echo "Email: " . $decoded["email"] . "<br>";
echo "Skills: " . implode(", ", $decoded["skills"]) . "<br>";

$decoded["age"] = 29;
$decoded["skills"][] = "PHP";

$updated_json = json_encode($decoded, JSON_PRETTY_PRINT);
echo "<h3>Updated JSON Output:</h3><pre>$updated_json</pre>";

?>