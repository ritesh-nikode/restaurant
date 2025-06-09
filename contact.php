<?php
// Step 1: Connect to MySQL
$host = "localhost";
$user = "root";
$password = "";
$database = "restaurant"; 

$conn = new mysqli($host, $user, $password, $database);

// Step 2: Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 3: Create the table if it doesn't exist
$createTableSQL = "
CREATE TABLE IF NOT EXISTS contact_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(200),
    comment TEXT,
    at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if (!$conn->query($createTableSQL)) {
    die("Error creating table: " . $conn->error);
}

// Step 4: Get form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$comments = trim($_POST['comments'] ?? '');

// Step 5: Insert data if valid
if (!empty($name) && !empty($email)) {
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, subject, comment) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $comment);

    if ($stmt->execute()) {
        // ✅ Redirect after successful submission
        header("Location: ../index.php");
        exit(); // Stop executing the rest of the script
    } else {
        echo "❌ Error inserting data: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "❌ Name and Email are required.";
}

// Step 6: Close connection
$conn->close();
?>
