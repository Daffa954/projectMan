<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    http_response_code(403);
    echo "Access denied";
    exit();
}

// Validate the requested image
if (!isset($_GET['file'])) {
    http_response_code(400);
    echo "No file specified";
    exit();
}

$file = basename($_GET['file']); // Get the filename
$path = realpath('../app/uploads/' . $file); // Resolve the path

// Check if the file exists and is within the allowed directory
if ($path && strpos($path, realpath('../app/uploads/')) === 0 && file_exists($path)) {
    // Serve the file
    header('Content-Type: ' . mime_content_type($path));
    header('Content-Length: ' . filesize($path));
    readfile($path);
    exit();
} else {
    http_response_code(404);
    echo "File not found";
    exit();
}
?>
