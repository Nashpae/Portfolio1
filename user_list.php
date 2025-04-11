<?php
include 'db_connect.php';

$result = $conn->query("SELECT name, email FROM users");
if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['name']) . " (" . htmlspecialchars($row['email']) . ")</li>";
    }
    echo "</ul>";
} else {
    echo "No users found.";
}
?>
