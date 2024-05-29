<?php
// Connect to the database
$conn = mysqli_connect("sql213.infinityfree.com", "if0_36620480", "gdrTJejFpcKI", "if0_36620480_mysitedb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Get form data
$name = mysqli_real_escape_string($conn, $_POST['name']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);
$rating = (int)$_POST['rating'];

// Insert data into the database
$sql = "INSERT INTO comments (name, comment, rating) VALUES ('$name', '$comment', $rating)";
if ($conn->query($sql) === TRUE) {
    echo "Коментар опубліковано успішно!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>