<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form id="loginForm" action="#">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" id="loginBtn">Login</button>
            </div>
        </form>
    </div>
    <script src="app.js"></script>
</body>
</html>

<?php
// Database connection configuration
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Retrieve username and password from the request
$username = $_POST["username"];
$password = $_POST["password"];

// Create a new MySQLi object and establish the connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($mysqli->connect_errno) {
    die("Database connection failed: " . $mysqli->connect_error);
}

// Query the database for the user with the given username and password
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $mysqli->query($query);

// Check if the query was successful and if a matching user was found
if ($result && $result->num_rows > 0) {
    // Login successful
    $response = array("success" => true);
} else {
    // Login failed
    $response = array("success" => false);
}

// Close the database connection
$mysqli->close();

// Send the JSON response back to the client
header("Content-Type: application/json");
echo json_encode($response);
?>

