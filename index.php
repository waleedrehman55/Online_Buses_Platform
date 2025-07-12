<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Buslelo.pk</title>
    <link rel="website icon" href="assets/images/Buslelo.pk.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="assets/styling/style.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
</head>
<body>
    <?php
      include("components/navbar.php")
    ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url('image.png')">
                    <div class="banner-content text-center">
                        <h1 class="mainheading">Book Local Buses in Pakistan – Aasaan, Fast &amp; Reliable</h1>
                        <button class="learn-btn"><span>View Buses</span></button>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url('image.png')">
                    <div class="banner-content text-center">
                        <h1 class="mainheading">Book Local Buses in Pakistan – Aasaan, Fast &amp; Reliable</h1>
                        <button class="learn-btn"><span>View Buses</span></button>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url('image.png')">
                    <div class="banner-content text-center">
                        <h1 class="mainheading">Book Local Buses in Pakistan – Aasaan, Fast &amp; Reliable</h1>
                        <button class="learn-btn"><span>View Buses</span></button>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
            <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
            <div class="swiper-pagination"></div> 
        </div>
    </section>

    <section class="filter-section-wrapper">
        <div class="filter_section container px-4 px-md-5">
            <div class="filterborder p-4 p-md-5">
                <div class="row g-3">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <select class="form-select w-100">
                                <option selected disabled>Select City</option>
                                <option>Lahore</option>
                                <option>Karachi</option>
                                <option>Islamabad</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <select class="form-select w-100">
                                <option selected disabled>Select Type</option>
                                <option>Pickup</option>
                                <option>Hiace / Coaster</option>
                                <option>Coach</option>
                                <option>Big Bus</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <select class="form-select w-100">
                                <option selected disabled>Choose Seats</option>
                                <option>Up to 10</option>
                                <option>11–15</option>
                                <option>16–20</option>
                                <option>21–30</option>
                                <option>31+</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 mb-5">
                <button class="view-buses-btn"><span>Search</span></button>
            </div>
        </div>
    </section>

    <section class="featured-sec container py-5">
        <div class="text-center mb-5">
            <h2 class="mainhrading">Featured & Popular Buses</h2>
        </div>
        
        <div class="container-fluid">
            <div class="row justify-content-center">
                <swiper-container class="mySwipercards mt-5" 
                    slides-per-view="1" 
                    space-between="30" 
                    loop="true" 
                    autoplay-delay="3000" 
                    autoplay-disable-on-interaction="false" 
                    pagination="true"
                    breakpoints='{
                        "640": {
                            "slidesPerView": 2,
                            "spaceBetween": 20
                        },
                        "768": {
                            "slidesPerView": 3,
                            "spaceBetween": 30
                        },
                        "1024": {
                            "slidesPerView": 4,
                            "spaceBetween": 40
                        }
                    }'>
                    
                    <swiper-slide>
                        <div class="card mx-auto">
                            <div class="card-image">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/052/073/395/small_2x/a-modern-bus.jpg" class="card-img-top" alt="Bus Image">
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
                    <swiper-slide>
                        <div class="card mx-auto">
                            <div class="card-image">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/052/073/395/small_2x/a-modern-bus.jpg" class="card-img-top" alt="Bus Image">
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
                    <swiper-slide>
                        <div class="card mx-auto">
                            <div class="card-image">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/052/073/395/small_2x/a-modern-bus.jpg" class="card-img-top" alt="Bus Image">
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
                    <swiper-slide>
                        <div class="card mx-auto">
                            <div class="card-image">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/052/073/395/small_2x/a-modern-bus.jpg" class="card-img-top" alt="Bus Image">
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
                </swiper-container>
            </div>
            <div class="swiper-pagination-cards text-center"></div>
        </div>
    </section>

    <section class="upcoming-events container py-5">
        <div class="text-center mb-5">
            <h2 class="mainhrading">Upcoming Events</h2>
        </div>
        <swiper-container class="mySwiper2" navigation="true" loop="true" space-between="20" slides-per-view="1"
            breakpoints='{
                "640": {
                    "slidesPerView": 2,
                    "spaceBetween": 20
                },
                "992": {
                    "slidesPerView": 3,
                    "spaceBetween": 30
                }
            }'>
            <swiper-slide>
                <img src="https://static.vecteezy.com/system/resources/thumbnails/052/073/395/small_2x/a-modern-bus.jpg" class="img-fluid" alt="Event 1">
            </swiper-slide>
            <swiper-slide>
                <img src="https://static.vecteezy.com/system/resources/thumbnails/052/073/395/small_2x/a-modern-bus.jpg" class="img-fluid" alt="Event 2">
            </swiper-slide>
            <swiper-slide>
                <img src="https://static.vecteezy.com/system/resources/thumbnails/052/073/395/small_2x/a-modern-bus.jpg" class="img-fluid" alt="Event 3">
            </swiper-slide>
        </swiper-container>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>