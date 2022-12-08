<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="home.css" />
    <!-- Bootstrap CSS -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../global.css" />
    <script src="../global.js"></script>

    <title>Home</title>
  </head>
  <body>
    <?php include '../topbar.php' ?>
    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="../image/kampusMerdeka.png"
            alt="First slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="../image/uph_logo.png"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="../image/eternak.jpeg"
            alt="Third slide"
          />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleControls"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleControls"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div>
      <img src="../image/smart_point.png" alt="" width="100%" />
    </div>
    <div class="news-container">
      <p>News</p>
      <div class="news-picture">
        <img src="../image/tsunami.png" alt="news" />
      </div>
    </div>
    <br />
    <div class="news-container reminder">
      <p>Reminder</p>
      <div class="reminder-scroll">
        <div class="reminder-container">
          <div class="reminder-info">
            <img
              class="reminder-picture"
              src="../image/maths.jpg"
              alt=""
              width="100%"
            />
            <p class="reminder-text">Quick Count Maths</p>
            <p class="reminder-text">Maths</p>
            <p class="reminder-text">
              Hi dont forget to do your maths homework!
            </p>
          </div>
        </div>
        <div class="reminder-container">
          <div class="reminder-info">
            <img
              class="reminder-picture"
              src="../image/maths.jpg"
              alt=""
              width="100%"
            />
            <p class="reminder-text">Quick Count Maths</p>
            <p class="reminder-text">Maths</p>
            <p class="reminder-text">
              Hi dont forget to do your maths homework!
            </p>
          </div>
        </div>
      </div>
    </div>

    <!--  JavaScript -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <?php include '../nav.php'?>
  </body>
</html>
