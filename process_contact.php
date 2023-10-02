<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title/title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <?php
// Include the database connection code
include "db.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Insert the form data into the "replies" table
    $sql = "INSERT INTO `replies` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
    
    if (mysqli_query($con, $sql)) {
        // Data inserted successfully
        echo "<div class='container mt-5'>
                <div class='alert alert-success' role='alert'>
                    Thank you for contacting us! We will get back to you soon.
                </div>
              </div>";
    } else {
        // Error in inserting data
        echo "<div class='container mt-5'>
                <div class='alert alert-danger' role='alert'>
                    Oops! Something went wrong. Please try again later.
                </div>
              </div>";
    }
}

// Close the database connection
mysqli_close($con);
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
