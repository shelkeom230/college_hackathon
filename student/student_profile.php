<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>My Profile</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">My Profile</h2>
                        <?php
                        // Include your PHP code to fetch and display user information from the database here
                        $connection = mysqli_connect("localhost", "root", "", "hackathon");

                        if (!$connection) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        // Assuming you have a session or some way to identify the current user
                        // $userId = $_SESSION['user_id'];

                        $query = "SELECT username, password FROM student_list WHERE mem_id = 3";
                        $result = mysqli_query($connection, $query);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            echo '<p>Username: ' . $row["username"] . '</p>';
                            // Don't display the password in a real application; this is just for demonstration purposes
                            echo '<p>Password: ' . $row["password"] . '</p>';
                        } else {
                            echo "User not found.";
                        }

                        mysqli_close($connection);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<br>
<?php
include "footer.php";
?>