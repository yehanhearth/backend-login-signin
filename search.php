<?php
// 1. Get the search query from the URL
if (isset($_GET['query'])) {
    $searchQuery = $_GET['query'];

    // 2. Establish a connection to your MySQL database
    $conn = mysqli_connect("localhost", "username", "password", "database_name");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // 3. Sanitize the search query to prevent SQL injection
    $searchQuery = mysqli_real_escape_string($conn, $searchQuery);

    // 4. Query the database to search for results
    $sql = "SELECT * FROM table_name WHERE column_name LIKE '%$searchQuery%'";
    $result = mysqli_query($conn, $sql);

    // 5. Display search results
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div>";
            echo "<h3>" . $row['column_name'] . "</h3>"; // Adjust based on your table structure
            echo "<p>" . $row['description'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No results found.";
    }

    // 6. Close the database connection
    mysqli_close($conn);
}
?>
