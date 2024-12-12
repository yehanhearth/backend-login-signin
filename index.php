<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<label>First Name</label>
    <input type="text" id="fname" required>
<label>Last  Name</label>
    <input type="text" id="lname" required>
    <label> Email</label>
    <input type="email" id="email" required>
    <label> Password</label>

    <input type="password" id="password" required>
    <label> mobile</label>

    <input type="text" id="mobile" required>
    <label> adress</label>

    <input type="text" id="adress" required>
    <button type="submit" onclick="send();">done</button>



<!-- <form action="search.php" method="GET">
    <input type="text" name="query" placeholder="Search..." required>
    <button type="submit">Search</button>
</form> -->

<!-- <div class="search-results"> -->
    <!-- Results will be displayed here dynamically -->
    <?php
    // include "db.php";

    // if (isset($_GET['query'])) {
    //     $searchquery = $_GET['query'];

        // Sanitize input
        // $searchquery = mysqli_real_escape_string($conn, $searchquery);

        // Execute query
        // $sql = "SELECT * FROM product WHERE name LIKE '%$searchquery%'";
        // $result = mysqli_query($conn, $sql);

        // Check if the query executed successfully
        // if (!$result) {
        //     echo "Error: " . mysqli_error($conn);
        //     exit;
        // }

        // Display results
        // if (mysqli_num_rows($result) > 0) {
            // while ($row = mysqli_fetch_assoc($result)) {
                // echo "<div>";
                // echo "<h3>" . $row['name'] . "</h3>"; // Adjust based on your table structure
                // echo "<p>" . $row['description'] . "</p>"; // Ensure this column exists
                // echo "</div>";
            // }
        // } else {
            // echo "No results found.";
        // }

        // Close connection
    //     mysqli_close($conn);
    // }
    // ?>
</div>



    <script src="script.js"></script>
</body>

</html>