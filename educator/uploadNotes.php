<?php
    include "navbar.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->

  <form action="" method="POST">
  <div class="mb-3" style="width: 600px;height:600px;border: 2px;border: radius 5px;margin-left:400px;margin-right:350px;margin-top:50px;margin-bottom:50px;">
  <label for="exampleFormControlInput1" class="form-label">course title</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="intro to biodiviersity"  name="title" required >
  
  
  <label for="exampleFormControlInput1" class="form-label">upload notes (pdf only)</label>
  <input type="file" class="form-control" id="exampleFormControlInput1" name="lecture"  required>
  <br>
<input type="submit" value="submit" class="btn btn-success" style="margin-left:200px;">
</div>
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>



<?php 
include "footer.php";
?>