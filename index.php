<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Buslelo.pk</title>
  <link rel="website icon" href="assets/images/Buslelo.pk.png">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="assets/styling/style.css">
</head>
<body>
  <?php include("components/navbar.php"); ?>

  <!-- Hero Section -->
  <section>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url('assets/images/bus1.jpg')">
          <div class="banner-content text-center">
            <h1 class="mainheading">Book Local Buses in Pakistan – Aasaan, Fast &amp; Reliable</h1>
            <button class="learn-btn"><span>View Buses</span></button>
          </div>
        </div>
        <div class="swiper-slide" style="background-image:url('https://img.freepik.com/premium-photo/tourist-buses-parking-sunrise-sunset_106035-1198.jpg')">
          <div class="banner-content text-center">
            <h1 class="mainheading">Book Local Buses in Pakistan – Aasaan, Fast &amp; Reliable</h1>
            <button class="learn-btn"><span>View Buses</span></button>
          </div>
        </div>
        <div class="swiper-slide" style="background-image:url('https://preview.redd.it/public-bus-aquarium-on-a-modern-city-street-atitanstrawberry-v0-oojrbwovob6a1.png?width=1080&crop=smart&auto=webp&s=79de72bbc89dfebc31e74eb3307461e7cdab3594')">
          <div class="banner-content text-center">
            <h1 class="mainheading">Book Local Buses in Pakistan – Aasaan, Fast &amp; Reliable</h1>
            <button class="learn-btn"><span>View Buses</span></button>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
      <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
      <div class="swiper-pagination d-none"></div>
    </div>
  </section>

  <!-- Filter Section -->
  <section style="height: 200px;">
    <div class="filter_section container">
      <div class="filterborder">
        <div class="form-group">
          <select class="form-select">
            <option selected disabled>Select City</option>
            <option>Lahore</option>
            <option>Karachi</option>
            <option>Islamabad</option>
          </select>
        </div>
        <div class="form-group">
          <select class="form-select">
            <option selected disabled>Select Type</option>
            <option>Pickup</option>
            <option>Hiace / Coaster</option>
            <option>Coach</option>
            <option>Big Bus</option>
          </select>
        </div>
        <div class="form-group">
          <select class="form-select">
            <option selected disabled>Choose Seats</option>
            <option>Up to 10</option>
            <option>11–15</option>
            <option>16–20</option>
            <option>21–30</option>
            <option>31+</option>
          </select>
        </div>
      </div>
      <div class="text-center mt-4">
        <button class="view-buses-btn"><span>Search</span></button>
      </div>
    </div>
  </section>

  <!-- Featured Section -->
  <section class="featured-sec container">
    <div class="text-center mb-5">
      <h2 class="mainhrading">Featured & Popular Buses</h2>
    </div>
    <swiper-container class="mySwipercards mt-5" slides-per-view="4" space-between="30" centered-slides="true" loop="true" autoplay-delay="3000" autoplay-disable-on-interaction="false" pagination="true">
      <swiper-slide class="mx-4">
        <div class="card">
          <div class="card-image">
            <img src="https://t4.ftcdn.net/jpg/02/69/47/51/360_F_269475198_k41qahrZ1j4RK1sarncMiFHpcmE2qllQ.jpg" class="card-img-top" alt="Bus Image">
          </div>
          <div class="card-body">
            <h5 class="card-title">Hiace - Lahore</h5>
            <p><strong>Seats:</strong> 14</p>
            <p><strong>City:</strong> Karachi</p>
            <p><strong>Type:</strong> AC</p>
            <div class="text-center mt-2">
              <button class="view-buses-btn-cards"><span>View</span></button>
            </div>
          </div>
        </div>
      </swiper-slide>
      <swiper-slide class="mx-5">
        <div class="card">
          <div class="card-image">
            <img src="https://t4.ftcdn.net/jpg/02/69/47/51/360_F_269475198_k41qahrZ1j4RK1sarncMiFHpcmE2qllQ.jpg" class="card-img-top" alt="Bus Image">
          </div>
          <div class="card-body">
            <h5 class="card-title">Hiace - Lahore</h5>
            <p><strong>Seats:</strong> 14</p>
            <p><strong>City:</strong> Karachi</p>
            <p><strong>Type:</strong> AC</p>
            <div class="text-center mt-2">
              <button class="view-buses-btn-cards"><span>View</span></button>
            </div>
          </div>
        </div>
      </swiper-slide>
      <div class="swiper-pagination-cards text-center"></div>
    </swiper-container>
  </section>

  <!-- Events Section -->
  <section class="upcoming-events container py-5">
    <div class="text-center mb-5">
      <h2 class="mainhrading">Upcoming Events</h2>
    </div>
    <swiper-container class="mySwiper2" navigation="true" loop="true" space-between="20" slides-per-view="3">
      <swiper-slide>
        <div class="event_banner_main">
          <img src="https://t4.ftcdn.net/jpg/02/69/47/51/360_F_269475198_k41qahrZ1j4RK1sarncMiFHpcmE2qllQ.jpg" class="card-img-top" alt="Event 1">
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="event_banner_main">
          <img src="https://t4.ftcdn.net/jpg/02/69/47/51/360_F_269475198_k41qahrZ1j4RK1sarncMiFHpcmE2qllQ.jpg" class="card-img-top" alt="Event 1">
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="event_banner_main">
          <img src="https://t4.ftcdn.net/jpg/02/69/47/51/360_F_269475198_k41qahrZ1j4RK1sarncMiFHpcmE2qllQ.jpg" class="card-img-top" alt="Event 1">
        </div>
      </swiper-slide>
    </swiper-container>
  </section>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/JS/script.js"></script>
</body>
</html>
