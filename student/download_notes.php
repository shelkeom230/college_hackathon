<?php
include "navbar.php";
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>PDF Notes</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <!-- Card 1 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Environment</h5>
                        <p class="card-text">Category: Enviroment</p>
                        <p class="card-text">Instructor: Stephen Hawking</p>
                        <a href="notes/enviroment.pdf" class="btn btn-success" download>Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Wind power plants</h5>
                        <p class="card-text">Category: clean and green technology</p>
                        <p class="card-text">Instructor: Omkar Shelke</p>
                        <a href="notes/wind.pdf" class="btn btn-success" download>Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thermal Energy</h5>
                        <p class="card-text">Category: clean and green technology</p>
                        <p class="card-text">Instructor: Kartik Gadhave</p>
                        <a href="notes/thermal.pdf" class="btn btn-success" download>Download PDF</a>
                    </div>
                </div>
            </div> <!-- Card 3 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Introduction to biodversity</h5>
                        <p class="card-text">Category: Environment</p>
                        <p class="card-text">Instructor: Ayan Pathan</p>
                        <a href="notes/biodiversity.pdf" class="btn btn-success" download>Download PDF</a>
                    </div>
                </div>
            </div> 
            <!-- Card 3 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ozone layer depletion</h5>
                        <p class="card-text">Category: environment</p>
                        <p class="card-text">Instructor: Gauri Patil</p>
                        <a href="notes/ozone.pdf" class="btn btn-success" download>Download PDF</a>
                    </div>
                </div>
            </div>
             <!-- Card 3 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rain Water Harvesting</h5>
                        <p class="card-text">Category: clean and green technology</p>
                        <p class="card-text">Instructor: Prof. Marks Stephen</p>
                        <a href="notes/rain.pdf" class="btn btn-success" download>Download PDF</a>
                    </div>
                </div>
            </div> 
          
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include "footer.php";
?>