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
if (empty($data['username']) || empty($data['password'])) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

// Database credentials
$host = 'localhost';
$dbname = 'study_planner';
$username = 'root';
$password = ''; // Default XAMPP password is empty

try {
    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        throw new Exception('Database connection failed');
    }

    // Prepare statement to check user credentials
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    if (!$stmt) {
        throw new Exception('Prepare statement failed');
    }
    
    $stmt->bind_param("s", $data['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user) {
        echo json_encode(['success' => false, 'message' => 'Invalid username or password']);
        exit;
    }

    // Verify password
    if (password_verify($data['password'], $user['password'])) {
        // Generate a simple token (in production, use a proper JWT implementation)
        $token = bin2hex(random_bytes(32));
        
        echo json_encode([
            'success' => true,
            'message' => 'Login successful',
            'token' => $token
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid username or password']);
    }

    $stmt->close();
    $conn->close();
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>