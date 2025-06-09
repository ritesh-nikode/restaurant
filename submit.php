<?php
// DB connection info
$host = "localhost";
$user = "root";
$password = "";
$database = "restaurant";

// Connect to MySQL server
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// DROP existing orders table to avoid old schema issues
$conn->query("DROP TABLE IF EXISTS orders");

// Create new orders table with proper schema
$sqlCreateTable = "
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    table_number VARCHAR(20) NOT NULL,
    appetizers TEXT,
    main_course TEXT,
    desserts TEXT,
    beverages TEXT,
    instructions TEXT,
    payment_method VARCHAR(50) NOT NULL,
    order_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if (!$conn->query($sqlCreateTable)) {
    die("Error creating table: " . $conn->error);
}

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name         = $conn->real_escape_string($_POST["name"] ?? '');
    $table        = $conn->real_escape_string($_POST["table"] ?? '');
    $appetizers   = isset($_POST["appetizers"]) ? implode(", ", $_POST["appetizers"]) : '';
    $main_course  = isset($_POST["main_course"]) ? implode(", ", $_POST["main_course"]) : '';
    $desserts     = isset($_POST["desserts"]) ? implode(", ", $_POST["desserts"]) : '';
    $beverages    = isset($_POST["beverages"]) ? implode(", ", $_POST["beverages"]) : '';
    $instructions = $conn->real_escape_string($_POST["instructions"] ?? '');
    $payment      = $conn->real_escape_string($_POST["payment"] ?? '');

    // Prepare insert statement
    $stmt = $conn->prepare("INSERT INTO orders (name, table_number, appetizers, main_course, desserts, beverages, instructions, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters and execute
    $stmt->bind_param("ssssssss", $name, $table, $appetizers, $main_course, $desserts, $beverages, $instructions, $payment);

    if ($stmt->execute()) {
        echo "<h2>✅ Order Submitted Successfully!</h2>";
        echo "<p><a href='order.html'>Submit Another Order</a></p>";
    } else {
        echo "Execute failed: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
