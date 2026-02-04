<?php
$conn = mysqli_connect("localhost", "root", "", "userdb");

if (!$conn) {
    die("DB Connection Failed");
}

echo "Connected<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "Form Submitted<br>";

    print_r($_POST);

    // Clean input
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Validation
    if (strlen($name) < 3) {
        die("Name must be at least 3 characters");
    }

    if (strlen($message) < 10) {
        die("Message must be at least 10 characters");
    }

    // Formatting & security
    $name = ucwords(strtolower($name));
    $email = strtolower($email);
    $message = htmlspecialchars($message);

    // Insert query
    $sql = "INSERT INTO contact_us (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Inserted Successfully";
    } else {
        die(mysqli_error($conn));
    }
}
?>
