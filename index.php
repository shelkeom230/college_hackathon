<?php
  include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GreenWave Innovation || index</title>
</head>

<body>
  
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slider1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slider2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slider3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slider4.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slider5.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/QQYgCxu988s?si=_8Srtet3CQ0-nD03?autoplay=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-6" style="overflow-y:hidden">
              <br><br>
                <h4 style="color: green; font-weight:bold">Enjoy our animated lectures<br> created by India's best educators.</h4><br>

                <br>
                <div class="container">
              <!-- <button class="btn btn-success">download our E-book</button> -->
        <a href="E-book.pdf" download class="btn btn-success">Download E-Book</a>
    </div>
            </div>
        </div>
    </div>
    <br>
    
    <div class="container mt-5" id="educator">
        <h1 class="text-center mb-4">Educator Profiles</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Educator Profile Card 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="educator1.jpg" class="card-img-top" alt="Educator 1" style="height:350px;">
                    <div class="card-body">
                        <h5 class="card-title">Educator 1</h5>
                        <p class="card-text">Description or bio of Educator 1 goes here.</p>
                    </div>
                    
                </div>
            </div>

            <!-- Educator Profile Card 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="educator2.png" class="card-img-top" alt="Educator 2" style="height:350px;">
                    <div class="card-body">
                        <h5 class="card-title">Educator 2</h5>
                        <p class="card-text">Description or bio of Educator 2 goes here.</p>
                    </div>
                    
                </div>
            </div>

            <!-- Educator Profile Card 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="educator3.png" class="card-img-top" alt="Educator 3" style="height:350px;">
                    <div class="card-body">
                        <h5 class="card-title">Educator 3</h5>
                        <p class="card-text">Description or bio of Educator 3 goes here.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<div class="container mt-5" id="testinomials">
        <h1 class="text-center mb-4">Student Testimonials</h1>
        <div class="row">
            <!-- Testimonial 1 -->
            <div class="col-md-4">
                <div class="testimonial-card">
                    <!-- <img src="student1.jpg" class="img-fluid rounded-circle" alt="Student 1"> -->
                    <p class="mt-3">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Cras justo odio, dapibus ac facilisis in."</p>
                    <p class="font-weight-bold">Student Name 1</p>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-md-4">
                <div class="testimonial-card">
                    <!-- <img src="student2.jpg" class="img-fluid rounded-circle" alt="Student 2"> -->
                    <p class="mt-3">"Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Morbi leo risus, porta ac consectetur ac."</p>
                    <p class="font-weight-bold">Student Name 2</p>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="testimonial-card">
                    <!-- <img src="student3.jpg" class="img-fluid rounded-circle" alt="Student 3"> -->
                    <p class="mt-3">"Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue."</p>
                    <p class="font-weight-bold">Student Name 3</p>
                </div>
            </div>
        </div>
    </div>
<br>

<div class="container mt-5" id="contactus">
        <h1 class="text-center mb-4">Contact Us</h1>
        <form action="index.php" method="POST"> <!-- Replace "submit_form.php" with your form handling script -->
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control"  name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control"  name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<div class="container mt-5" id="faq">
        <h1 class="text-center mb-4">Frequently Asked Questions</h1>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                        Question 1: What is Lorem Ipsum?
                    </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod magna in tortor commodo, in vehicula ligula tincidunt.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                        Question 2: How can I contact support?
                    </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can contact our support team by emailing support@example.com or by calling +1-800-123-4567.
                    </div>
                </div>
            </div>

            <!-- Add more FAQ items as needed -->

        </div>
    </div>

</body>
</html>
<?php
include "footer.php";
?>