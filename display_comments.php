<?php
$servername = "sql213.infinityfree.com";
$username = "if0_36620480";
$password = "gdrTJejFpcKI";
$database = "if0_36620480_mysitedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch comments
$sql = "SELECT name, comment, rating FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='comment'>";
        echo "<p><strong>" . htmlspecialchars($row['name']) . "</strong></p>";
        echo "<p>" . htmlspecialchars($row['comment']) . "</p>";
        echo "<div class='star-rating'>";
        $rating = (int)$row['rating'];
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $rating) {
                echo "<span class='star'>★</span>";
            } else {
                echo "<span class='star'>☆</span>";
            }
        }
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "Коментарів ще немає.";
}

$conn->close();
?>