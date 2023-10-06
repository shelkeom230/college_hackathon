<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educator || profile</title>
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

                        $query = "SELECT username, password FROM educator_list WHERE username = 'kartik'";
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
</body>
</html>
<?php
include "footer.php";
?>