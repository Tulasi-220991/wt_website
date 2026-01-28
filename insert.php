<?php
$conn = mysqli_connect("localhost", "root", "", "userdb");

if (!$conn) {
    die("DB Connection Failed");
}

echo "Connected<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form Submitted<br>";

    print_r($_POST);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_us (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Inserted Successfully";
    } else {
        echo mysqli_error($conn);
    }
}
?>