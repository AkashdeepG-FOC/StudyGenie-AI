<?php
// Prevent any unwanted output
error_reporting(0);
ini_set('display_errors', 0);

// Set proper headers
header('Content-Type: application/json');

// Read raw JSON input
$raw = file_get_contents('php://input');
$data = json_decode($raw, true);

// Check for JSON parse error
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['success' => false, 'message' => 'Invalid JSON']);
    exit;
}

// Validate required fields
if (
    empty($data['firstName']) ||
    empty($data['lastName']) ||
    empty($data['email']) ||
    empty($data['password'])
) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

// Validate email format
if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email format']);
    exit;
}

// Database credentials
$host = 'localhost';
$dbname = 'study_planner';
$username = 'root';
$password = ''; // Empty password is default for XAMPP

try {
    // Create connection using consistent variable names
    $conn = new mysqli($host, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        throw new Exception('Database connection failed');
    }

    // Prepare and bind to check if email exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    if (!$stmt) {
        throw new Exception('Prepare statement failed');
    }
    
    $stmt->bind_param("s", $data['email']);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        echo json_encode(['success' => false, 'message' => 'Email already registered']);
        $stmt->close();
        $conn->close();
        exit;
    }
    $stmt->close();

    // Hash the password securely
    $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

    // Prepare insert statement
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        throw new Exception('Prepare statement failed');
    }
    
    $stmt->bind_param("ssss", $data['firstName'], $data['lastName'], $data['email'], $hashedPassword);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'User registered successfully']);
    } else {
        throw new Exception('Failed to insert user');
    }

    $stmt->close();
    $conn->close();
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>
