<?php
    include "header.php";
?>
<br>
<!-- student_signup.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Student Signup</title>
</head>
<style>
    h1{
    overflow-y: hidden;
    }

</style>
<body>
    <div class="container", style="width: 400px;height: 500px">
        <h2>Student Signup</h2>
        <form action="educator/dashboard.php" method="POST" enctype="multipart/form-data">
            <div class="mb-0">
               <label for="username" class="form-label">Name</label>
               <input type="text" class="form-control" id="username" name="name" required>
           </div>
           <div class="mb-0">
               <label for="username" class="form-label">Surname</label>
               <input type="text" class="form-control" id="username" name="surname" required>
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
            <button type="submit" class="btn btn-success">Signup</button><br>
            <p>Already have an account ?<a href="signin_educator.php">sign in</a></p>
        </form>
    </div>
</body>
</html>
