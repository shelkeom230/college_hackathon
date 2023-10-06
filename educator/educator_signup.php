<br>
<br>
<?php
// Include your database connection file here
include "../db.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["nam"];
    $surname = $_POST["surn"];
    $email = $_POST["email"];
    $contactnumber = $_POST["contactnumber"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password for security (you can use password_hash())
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the "educator_list" table
    $sql = "INSERT INTO educator_list (`Name`, `Surname`, `Email`, `Contact_Number`, `Username`, `Password`) 
            VALUES ('$name', '$surname', '$email', '$contactnumber', '$username', '$hashedPassword')";

    // Execute the SQL query
    if ($con->query($sql) === TRUE) {
        // Data inserted successfully
        echo "Registration successful. You can now <a href='educator_signin.php'>sign in</a>.";
    } else {
        // Error occurred while inserting data
        echo "Error: " . $sql . "<br>" . $con->error;
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Educator || sign up</title>
</head>
<style>
    h1{
    overflow-y: hidden;
    }

</style>
<body>
    <div class="container", style="width: 400px;height: 500px">
        <h2>Educator Signup</h2>
        <form action="educator_profile.php" method="POST" enctype="multipart/form-data">
            <div class="mb-0">
               <label for="username" class="form-label">Name</label>
               <input type="text" class="form-control" id="username" name="nam" required>
           </div>
           <div class="mb-0">
               <label for="username" class="form-label">Surname</label>
               <input type="text" class="form-control" id="username" name="surn" required>
           </div>
           <div class="mb-0">
               <label for="username" class="form-label">Email</label>
               <input type="text" class="form-control" id="username" name="email" required>
           </div>
           <div class="mb-0">
               <label for="username" class="form-label">Contact Number</label>
               <input type="text" class="form-control" id="username" name="contactnumber" required>
           </div>
            <div class="mb-0">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required placeholder="like abc@1234">
            </div>
            <div class="mb-0">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="create a strong password">
            </div>
             <br>
            <button type="submit"  value="submit" class="btn btn-success">Signup</button><br>
            <p>Already have an account ?<a href="educator_signin.php">sign in</a></p>
        </form>
    </div>
</body>
</html>
<br><br><br><br><br><br><br>
<?php
include "footer.php";
?>