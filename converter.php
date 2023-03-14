<?php

$results = [
    [
        'title' => 'Example 1',
        'email' => 'zain@example.com',
    ],
];

$filename = 'userData.csv';
header('Content-type: text/csv');
header("Content-Disposition: attachment; filename=$filename");
$output = fopen('php://output', 'w');
$header = array_keys($results[0]);
fputcsv($output, $header);
foreach ($results as $row) {
    fputcsv($output, $row);
}
fclose($output); 

?>
