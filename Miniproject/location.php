<?php
// Simulated database with parking space information
$parkingSpaces = [
    ["name" => "Parking Space 1", "location" => "Location A", "price" => "$10"],
    ["name" => "Parking Space 2", "location" => "Location B", "price" => "$12"],
    ["name" => "Parking Space 3", "location" => "Location C", "price" => "$8"],
    // Add more parking space data here
];

$destination = $_GET['destination'];
$results = [];

// Simulated search logic (you would replace this with actual search logic)
foreach ($parkingSpaces as $space) {
    if (strpos($space['location'], $destination) !== false) {
        $results[] = $space;
    }
}

// Return results as JSON
header('Content-Type: application/json');
echo json_encode($results);
?>
