<!DOCTYPE html>
<html lang="en">
<head>
    <title>BeeSafe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
</head>
<body>

<div class="header">
    <h1>BeeSafe</h1>
    <p>A website created by me.</p>
</div>

<div class="navbar">
    <a href="#">Link</a>
    <a href="#">Link</a>
    <a href="#">Link</a>
    <a href="#" class="right">Link</a>
</div>

<div class="row">
    <div class="side">
        <h2>About Me</h2>
        <h5>Photo of me:</h5>
        <div class="fakeimg" style="height:200px;">Image</div>
        <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
        <h3>More Text</h3>
        <p>Lorem ipsum dolor sit ame.</p>
        <div class="fakeimg" style="height:60px;">Image</div><br>
        <div class="fakeimg" style="height:60px;">Image</div><br>
        <div class="fakeimg" style="height:60px;">Image</div>
    </div>
    <div class="main">
        <?php
        include_once 'vars.php';

        if (isset($servername) && isset($username) && isset($password) && isset($db) && isset($port)) {
            // Create connection
            $conn = new mysqli($servername, $username, $password, $db, $port);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve data from the database
            $query = "SELECT * FROM pages WHERE id = 1"; // Assuming you want to retrieve the row with id 1
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                // Output data of the first row
                $row = $result->fetch_assoc();
                echo "<h2>" . $row['title'] . "</h2>";
                echo "<p>" . $row['content'] . "</p>";
            } else {
                echo "No data found.";
            }

            // Close the database connection
            $conn->close();
        }
        ?>
    </div>
</div>

<div class="footer">
    <h2>Footer</h2>
</div>

</body>
</html>
