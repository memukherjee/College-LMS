<?php
$conn = new mysqli('localhost', 'root', '', 'notice');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}   
$qu = "SELECT * FROM notice";
$res = mysqli_query($conn,$qu); 

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="images/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="images/favicon/site.webmanifest" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/templete.css">
    <link rel="stylesheet" href="css/notice.css">
    <title>Notice</title>
  </head>
  <body onload="onLoad()">
    <!-- navbar -->
    <div class="navbar-college"></div>

    <!-- Content -->
    <main class="flex-shrink-0">
      <div class="container">
        <!-- Write from here -->
        <h1 id="heading">Notices</h1>

        <div id="carousel-notice" class="carousel slide" data-bs-ride="carousel" data-bs-pause="hover" style="padding-top: 2rem;">
          <div class="carousel-indicators">
            <button class="carousel-btn active" type="button" data-bs-target="#carousel-notice" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
            <button class="carousel-btn" type="button" data-bs-target="#carousel-notice" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button class="carousel-btn" type="button" data-bs-target="#carousel-notice" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <!-- <img src="images\carousel-image.jpg" class="d-block w-100" alt="First"> -->
              <?php $res1=mysqli_fetch_array($res);?>
              <h3><?php echo $res1['title']; ?></h3>
              <p><?php echo $res1['body']; ?>
              </p>
            </div>
            <div class="carousel-item">
              <!-- <img src="images\carousel-image.jpg" class="d-block w-100" alt="Second"> -->
              <?php $res1=mysqli_fetch_array($res);?>
              <h3><?php echo $res1['title']; ?></h3>
              <p><?php echo $res1['body']; ?>
             </p>
            </div>
            <div class="carousel-item">
              <!-- <img src="images\carousel-image.jpg" class="d-block w-100" alt="Third"> -->
              <?php $res1=mysqli_fetch_array($res);?>
              <h3><?php echo $res1['title']; ?></h3>
              <p><?php echo $res1['body']; ?>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel-notice" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel-notice" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>




        <!-- to here -->
      </div>
    </main>

    <!-- Footer -->
    <div class="footer-college"></div>

    <script src="js/templete.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
