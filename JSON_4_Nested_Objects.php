<?php

$person = [
    "name" => "Alice Smith",
    "age" => 25,
    "email" => "alice.smith@example.com",
    "city" => "New York",
    "country" => "USA",
    "address" => [
        "street" => "123 Main St",
        "apartment" => "Apt 101",
        "zip" => "10001",
    ],
    "phone" => [
        "home" => "123-456-7890",
        "mobile" => "987-654-3210",
    ],
    "education" => [
        "degree" => "Bachelor of Science",
        "field" => "Computer Science",
        "year" => 2023,
    ],
];

$json = json_encode($person, JSON_PRETTY_PRINT);
echo "<h3>Nested JSON:</h3> <pre>$json</pre>";

$decoded = json_decode($json, true);

echo "<h3>Accessing Nested Data:</h3>";
echo "City: " . $decoded["city"] . "<br>";
echo "Country: " . $decoded["country"] . "<br>";
echo "Street: " . $decoded["address"]["street"] . "<br>";
echo "Apartment: " . $decoded["address"]["apartment"] . "<br>";
echo "Zip: " . $decoded["address"]["zip"] . "<br>";
echo "Home Phone: " . $decoded["phone"]["home"] . "<br>";
echo "Mobile Phone: " . $decoded["phone"]["mobile"] . "<br>";
echo "Education Degree: " . $decoded["education"]["degree"] . "<br>";
echo "Education Field: " . $decoded["education"]["field"] . "<br>";
echo "Graduation Year: " . $decoded["education"]["year"] . "<br>";

?>