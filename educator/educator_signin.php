
<?php
include "navbar.php";
?>
<br>
<?php
// Include your database connection file here
include "../db.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    // SQL query to retrieve the user's record by username
    $sql = "SELECT * FROM `educator_list` WHERE Username = '$username'";

    // Execute the SQL query
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        // User with the given username exists
        $row = $result->fetch_assoc();
        $hashedPassword = $row["Password"];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, redirect to student_profile.php
            header("Location: student_profile.php");
            exit;
        } else {
            // Password is incorrect
            echo "Incorrect password. Please try again.";
        }
    } else {
        // User with the given username does not exist
        echo "User not found. Please check your username.";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenWave Innovation || signup</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Sign In
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Sign In</button>
                        </form>
                        <p>Dont have an account ? <a href="educator_signup.php">sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include "footer.php";
?>