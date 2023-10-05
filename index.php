<?php
  include "header.php";
?>
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
        echo "
                <div class='alert alert-success' role='alert'>
                    Thank you for contacting us! We will get back to you soon.
                </div>
              ";
    } else {
        // Error in inserting data
        echo "
                <div class='alert alert-danger' role='alert'>
                    Oops! Something went wrong. Please try again later.
                </div>
              ";
    }
}

// Close the database connection
mysqli_close($con);
?>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>


<!-- educator profiles  -->
<h3 style="text-align:center;" id="educators">Meet Our Top Educators <img src="down-arrow.png" alt="" style="width:30px;height:30px;"></h3><br>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="educator1.jpg" class="card-img-top" alt="Educator 1">
        <div class="card-body">
          <h5 class="card-title">Educator 1</h5>
          <p class="card-text">Description of Educator 1. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-success">Visit Profile</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="educator2.png" class="card-img-top" alt="Educator 2">
        <div class="card-body">
          <h5 class="card-title">Educator 2</h5>
          <p class="card-text">Description of Educator 2. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-success">Visit Profile</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="educator3.png" class="card-img-top" alt="Educator 3">
        <div class="card-body">
          <h5 class="card-title">Educator 3</h5>
          <p class="card-text">Description of Educator 3. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-success">Visit Profile</a>
        </div>
      </div>
    </div>
  </div>
</div>

<br>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="educator4.jpeg" class="card-img-top" alt="Educator 4">
        <div class="card-body">
          <h5 class="card-title">Educator 4</h5>
          <p class="card-text">Description of Educator 4. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-success">Visit Profile</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="educator5.avif" class="card-img-top" alt="Educator 5">
        <div class="card-body">
          <h5 class="card-title">Educator 5</h5>
          <p class="card-text">Description of Educator 5. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-success">Visit Profile</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="educator6.jpg" class="card-img-top" alt="Educator 6">
        <div class="card-body">
          <h5 class="card-title">Educator 6</h5>
          <p class="card-text">Description of Educator 6. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-success">Visit Profile</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="educator7.jpg" class="card-img-top" alt="Educator 6">
        <div class="card-body">
          <h5 class="card-title">Educator 7</h5>
          <p class="card-text">Description of Educator 6. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-success">Visit Profile</a>
        </div>
      </div>
    </div>
  </div>
</div>

<br>

<h3 style="text-align:center;" id="testinomials">Check our Inspiring Student Testimonials</h3><br>

<!-- Carousel wrapper -->
<div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
  <!-- Controls -->
  <div class="d-flex justify-content-center mb-4">
    <button class="carousel-control-prev position-relative" type="button"
      data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next position-relative" type="button"
      data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Anna Deynah</h5>
            <p>UX Designer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">John Doe</h5>
            <p>Web Developer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Maria Kate</h5>
            <p>Photographer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">John Doe</h5>
            <p>UX Designer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Alex Rey</h5>
            <p>Web Developer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(5).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Maria Kate</h5>
            <p>Photographer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <br>


    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(6).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Anna Deynah</h5>
            <p>UX Designer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(8).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">John Doe</h5>
            <p>Web Developer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(7).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Maria Kate</h5>
            <p>Photographer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->

<br>
<section id="about-us" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" style="text-align:center;">
                <h2>About Us</h2>
                <p>Welcome to GreenWaveInnovation.in, your trusted source for online education. We are dedicated to providing high-quality, accessible, and affordable education to students worldwide.</p>
                <p>Our team of experienced educators and technology experts work tirelessly to create engaging and effective learning experiences. Whether you're a student looking to enhance your skills or an institution seeking innovative solutions, we're here to help you succeed.</p>
            </div>
           
        </div>
    </div>
</section>
<br>

<section>

<div class="container mt-5">
        <h1 class="text-center">Contact Us</h1>
        <form method="POST" action="index.php">
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-success margin-auto">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</section>

<section>
<div class="container mt-5">
        <h1 class="mb-4">Clean and Green Technology FAQs</h1>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                        What is clean and green technology?
                    </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Clean and green technology refers to innovative solutions and practices that aim to reduce the environmental impact of various industries. It includes renewable energy sources, sustainable agriculture, waste reduction, and more.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                        What courses are available on clean and green technology?
                    </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Our platform offers a variety of courses related to clean and green technology, including courses on renewable energy, sustainable agriculture, eco-friendly practices, and more. You can explore the course catalog for details.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                        How can I enroll in a clean and green technology course?
                    </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        To enroll in a course, simply create an account on our platform, browse the available courses, and select the one you're interested in. Follow the enrollment process, and you'll gain access to the course materials.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                        Are there any prerequisites for these courses?
                    </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Prerequisites vary depending on the course. Some courses may require basic knowledge in science or environmental studies, while others are designed for beginners. Check the course description for specific requirements.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                        Can I access course materials on mobile devices?
                    </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, our platform is mobile-friendly. You can access course materials, videos, and resources on your smartphone or tablet, making it convenient for on-the-go learning.
                    </div>
                </div>
            </div>
        </div>
    </div>

<br>
</section>
<?php
include "footer.php";

?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script type="module">
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'

  const swiper = new Swiper(...)
</script>
</body>

</html>