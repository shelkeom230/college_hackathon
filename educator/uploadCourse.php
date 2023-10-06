<?php
include "navbar.php";
?>
<?php
include "db.php";

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $hours = $_POST['hours'];
    $lectures = $_POST['lectures'];
    $category = $_POST['category'];

    // Handle syllabus file upload
    if (isset($_FILES['syllabus']) && $_FILES['syllabus']['error'] === UPLOAD_ERR_OK) {
        // Read the contents of the uploaded file
        $syllabus_tmp_name = $_FILES['syllabus']['tmp_name'];
        $syllabus_contents = file_get_contents($syllabus_tmp_name);

        // Escape the contents to prevent SQL injection
        $escaped_syllabus_contents = mysqli_real_escape_string($con, $syllabus_contents);

        // Insert the course details and syllabus contents into the database
        $sql = "INSERT INTO `courses` (`title`, `hours`, `lectures`, `category`, `syllabus`) VALUES ('$title', '$hours', '$lectures', '$category', '$escaped_syllabus_contents')";

        if (mysqli_query($con, $sql)) {
            echo "<div class='alert alert-success' role='alert'>
            Course uploaded successfully!
            </div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>
            Failed to upload course.
            </div>";
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>
            Error uploading the syllabus file.
            </div>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Educator || upload course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
</head>
<body>
<form action="uploadCourse.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3"
         style="width: 600px;height:600px;border: 2px;border: radius 5px;margin-left:400px;margin-right:350px;margin-top:50px;margin-bottom:50px;">
        <label for="exampleFormControlInput1" class="form-label">course title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="intro to biodiversity"
               name="title" required>

        <label for="exampleFormControlInput1" class="form-label">no. of hours</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="10 hours" name="hours"
               required>

        <label for="exampleFormControlInput1" class="form-label">no. of lectures</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="10 lectures"
               name="lectures" required>

        <label for="exampleFormControlInput1" class="form-label">course category (environment / clean and green
            technology)</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="category" required>

        <label for="exampleFormControlInput1" class="form-label">syllabus (pdf,jpeg,word)</label>
        <input type="file" class="form-control" id="exampleFormControlInput1" name="syllabus" required>
        <br>
        <input type="submit" value="submit" class="btn btn-success" name="submit" style="margin-left:200px;">
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
