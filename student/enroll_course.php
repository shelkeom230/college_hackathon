<?php
include "navbar.php";
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student || enroll course</title>
    <!-- Include Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
                // Replace with your database connection details
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "hackathon";

                // Create a connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // SQL query to fetch course details
                $sql = "SELECT * FROM courses";
                $result = $conn->query($sql);

                // Check if there are any rows in the result
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Generate Bootstrap card for each course
                        echo '<div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"> Course Name :' . $row["title"] . '</h5>
                                        <p class="card-text"> No. of hours :' . $row["hours"] . '</p>
                                        <p class="card-text"> No. of lectures :' . $row["lectures"] . '</p>
                                        <p class="card-text"> Category :' . $row["category"] . '</p>
                                       <a href="course1.php"><button class="btn btn-success">Enroll course</button></a>
                                    </div>
                                </div>
                              </div>';
                    }
                } else {
                    echo "No courses found.";
                }

                // Close the database connection
                $conn->close();
            ?>
        </div>
    </div>
    
    <!-- Include Bootstrap 5 JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
<br>
<?php
include "footer.php";
?>
