<?php
include "navbar.php";
?>
<?php
include "db.php";

if (isset($_POST['submit'])) {
    $title = $_POST['title'];

    // Check if the lecture file was uploaded successfully
    if (isset($_FILES['lect']) && $_FILES['lect']['error'] === UPLOAD_ERR_OK) {
        $lect_tmp_name = $_FILES['lect']['tmp_name'];

        // Move the uploaded file to a directory of your choice
        $lect_destination = 'lectures/' . $_FILES['lect']['name'];

        // Move the file
        if (move_uploaded_file($lect_tmp_name, $lect_destination)) {
            $sql = "INSERT INTO `lectures`(`title`, `lect`) VALUES ('$title', '$lect_destination')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo '<div class="alert alert-success" role="alert">
                    Lecture uploaded successfully!
                </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">
                    Some error occurred!
                </div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">
                Error uploading the lecture file!
            </div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
            Lecture file was not uploaded or an error occurred!
        </div>';
    }
}
?>
<!-- rest of your HTML code -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->

  <form action="uploadLectures.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3" style="width: 600px;height:600px;border: 2px;border: radius 5px;margin-left:400px;margin-right:350px;margin-top:50px;margin-bottom:50px;">
  <label for="exampleFormControlInput1" class="form-label">course title</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="intro to biodiviersity"  name="title" required >
  
  <label for="exampleFormControlInput1" class="form-label">upload lecture (mp4 format)</label>
  <input type="file" class="form-control" id="exampleFormControlInput1" name="lect"  required>
  <br>
<input type="submit" value="submit" class="btn btn-success" name="submit" style="margin-left:200px;">
</div>
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


<?php 
include "footer.php";
?>