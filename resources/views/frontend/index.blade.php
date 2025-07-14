@extends('frontend.layouts.app')
@section('content')


  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container-fluid hero-container" data-aos="fade-up">
        <div class="row g-0 align-items-center">
          <div class="col-lg-6 content-col">
            <div class="content-wrapper">
              <div class="status-badge">Reservations Open</div>
              <h2>Savor the Moment, One Bite at a Time</h2>
              <p>Discover a journey of flavors at our exquisite restaurant. Immerse yourself in a delightful dining experience crafted with passion and precision.</p>

            <div class="opening-hours" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <span>Open Monday to Saturday: Lunch 12pm–1:30pm | Dinner 5:30pm–8:30pm | Bar 8pm–11pm</span>
            </div>
            <div class="opening-hours" data-aos="fade-up" data-aos-delay="600">
                <i class="bi bi-calendar-x"></i>
                <span>Closed on Sundays</span>
            </div>


              <div class="btn-group">
                <a href="#book-a-table" class="btn btn-book">Book a Table</a>
                <a href="#menu" class="btn btn-menu">Explore Our Menu</a>
              </div>

              <div class="social-links">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 swiper-col">
            <div class="swiper hero-swiper init-swiper" data-aos="zoom-out" data-aos-delay="100">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 800,
                  "autoplay": {
                    "delay": 5000
                  },
                  "effect": "fade",
                  "slidesPerView": 1,
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="assets/img/restaurant/misc-square-1.webp" alt="Restaurant Ambience">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="assets/img/restaurant/misc-square-2.webp" alt="Signature Dish">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="assets/img/restaurant/misc-square-3.webp" alt="Expert Chefs">
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content">
            <h3>Our Culinary Journey</h3>
            <p class="fst-italic">The story of our evolution, so far.</p>
            <p>
                Our little spaceship, designed to follow the course set by nature, has completed its first full lap around the sun (yup, Locavore NXT is now over a year old).  
                And here we find ourselves...  
                <strong>Evolving.</strong>
            </p>
            <p>
                Like any other living organism (or bold idea), we're growing through stages, getting stronger, a bit more mature, and finding new ways to express our ideas.  
                On many levels, we are unrecognisable from where we were only a year ago, both in how we feel about the progress of the menu itself and also the way nature is reclaiming our space.
            </p>
            <p>
                The habitat is rich and diverse, the bees have plenty of flowers to enjoy, and the rooftop Food Forest is established and acts as our 'living calendar', marking the rhythms of the hyper-local seasons.
            </p>
            <p>
                And so, this brings us full circle to the new season's tasting menu;  
                <strong>Nature's Compass 2.0</strong>.  
                You could say that we're starting to bud and flower.
            </p>
            <p>
                Discover more of our story.  
                <strong><a href="#reservation">Book your table now.</a></strong>
            </p>

            <div class="chef-signature mt-4">
                <div class="row align-items-center">
                <div class="col-auto">
                    <img src="assets/img/restaurant/chef-1.webp" class="chef-avatar rounded-circle" alt="Chef Portrait">
                </div>
                <div class="col">
                    <p class="chef-message mb-2">"Cooking is a language through which all the following properties may be expressed: harmony, creativity, happiness, beauty, poetry, complexity, magic, humor, provocation and culture."</p>
                    <p class="chef-name">Head Chef</p>
                </div>
                </div>
            </div>

            </div>
        </div>

        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="about-image-wrapper">
            <img src="assets/img/restaurant/showcase-4.webp" class="img-fluid main-image shadow" alt="Restaurant Interior">
            <img src="assets/img/restaurant/showcase-2.webp" class="img-fluid accent-image shadow" alt="Chef Preparing Food">
            <span class="establishment-year d-flex align-items-center justify-content-center text-center">Est. 2013</span>
            </div>
        </div>
        </div>

        <!-- Feature Boxes -->
        <div class="row mt-5 pt-4 features-section">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                <div class="feature-icon">
                    <i class="bi bi-award"></i>
                </div>
                <h4>International Recognition</h4>
                <p>Locavore is globally acclaimed for its exploration of local ingredients, progressive dining experiences, and sustainable approach.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box">
                <div class="feature-icon">
                    <i class="bi bi-egg-fried"></i>
                </div>
                <h4>Fresh Local Ingredients</h4>
                <p>Every dish is crafted using seasonal ingredients grown in-house or directly sourced from local farming communities.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-box">
                <div class="feature-icon">
                    <i class="bi bi-people"></i>
                </div>
                <h4>Expert Culinary Team</h4>
                <p>Led by experienced chefs who blend modern techniques with the rich cultural heritage of the Indonesian archipelago.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-box">
                <div class="feature-icon">
                    <i class="bi bi-heart"></i>
                </div>
                <h4>Cooked with Love</h4>
                <p>Each of our menus reflects a love for nature, a diversity of flavors, and a meaningful culinary journey.</p>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="row mt-3">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                <div class="stats-container">

                <div class="stat-item">
                    <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="10" class="purecounter">10</span>+</span>
                    <p class="stat-label">Years of Culinary Innovation</p>
                </div>

                <div class="stat-item">
                    <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="6" class="purecounter">6</span></span>
                    <p class="stat-label">Chefs & Flavor Researchers</p>
                </div>

                <div class="stat-item">
                    <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="12" class="purecounter">12</span></span>
                    <p class="stat-label">Gastronomy Awards</p>
                </div>

                <div class="stat-item">
                    <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="18000" class="purecounter">18000</span>+</span>
                    <p class="stat-label">Delighted Guests</p>
                </div>

                </div>
            </div>
        </div>


    </div>

    </section><!-- /About Section -->

<!-- Menu Section -->
<section id="menu" class="menu section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
    <h2>Nature's Compass 2.0</h2>
    <p>A journey of flavors through the seasons, from earth to plate, via local ingredients and natural fermentation.</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <!-- Filter Tabs -->
    <div class="menu-filters isotope-filters mb-5">
        <ul>
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-vegan">Vegan</li>
        <li data-filter=".filter-ocean">Ocean</li>
        <li data-filter=".filter-ferment">Fermentations</li>
        <li data-filter=".filter-dessert">Desserts</li>
        <li data-filter=".filter-pairing">Beverage Pairing</li>
        </ul>
    </div>

    <!-- Menu Items -->
    <div class="menu-container isotope-container row gy-4">

        <!-- Garden Starter -->
        <div class="col-lg-6 isotope-item filter-vegan">
        <div class="menu-item d-flex align-items-center gap-4">
            <img src="assets/img/locavore/starter-edible-bouquet.jpeg" alt="Edible Bouquet" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
            <h5>Edible Bouquet <span class="menu-tag">Vegan</span></h5>
            <p>Seasonal flowers and leaves from our rooftop garden, with fresh herbal fermented dressing.</p>
            <div class="price">Included</div>
            </div>
        </div>
        </div>

        <!-- Main: Ocean -->
        <div class="col-lg-6 isotope-item filter-ocean">
        <div class="menu-item d-flex align-items-center gap-4">
            <img src="assets/img/locavore/main-lobster-bisque.jpeg" alt="Lobster" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
            <h5>Lobster with Palm Kimchi <span class="menu-tag">Seafood</span></h5>
            <p>Fresh ocean lobster in creamy bisque, paired with young coconut kimchi and grilled pineapple.</p>
            <div class="price">Included</div>
            </div>
        </div>
        </div>

        <!-- Fermentation Highlight -->
        <div class="col-lg-6 isotope-item filter-ferment">
        <div class="menu-item d-flex align-items-center gap-4">
            <img src="assets/img/locavore/fermented-tempe.jpeg" alt="Tempe Ferment" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
            <h5>Tempe & Chayote <span class="menu-tag">Fermented</span></h5>
            <p>House-fermented mushroom-based tempe, served with fresh chayote and citrus leaves.</p>
            <div class="price">Included</div>
            </div>
        </div>
        </div>

        <!-- Dessert -->
        <div class="col-lg-6 isotope-item filter-dessert">
        <div class="menu-item d-flex align-items-center gap-4">
            <img src="assets/img/locavore/dessert-kluwak-choco.jpeg" alt="Kluwak Chocolate" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
            <h5>Kluwak Chocolate <span class="menu-tag">Chef's Pick</span></h5>
            <p>Kluwak mousse and local chocolate in a harmony of unique flavors, topped with spices and fermented honey.</p>
            <div class="price">Included</div>
            </div>
        </div>
        </div>

        <!-- Pairing: Non-Alcoholic -->
        <div class="col-lg-6 isotope-item filter-pairing">
        <div class="menu-item d-flex align-items-center gap-4">
            <img src="assets/img/locavore/pairing-non-alcoholic.jpeg" alt="Nature Pairing" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
            <h5>Nature’s Pairing <span class="menu-tag">Non-Alcoholic</span></h5>
            <p>A combination of herbal drinks, wild fruits, and lightly fermented infusions tailored to each course.</p>
            <div class="price">Add Rp650.000++</div>
            </div>
        </div>
        </div>

    </div><!-- /menu-container -->

    </div><!-- /isotope-layout -->

    <!-- PDF Download -->
    <div class="text-center mt-5" data-aos="fade-up">
    <a href="assets/pdf/natures-compass-menu.pdf" class="download-menu" target="_blank">
        <i class="bi bi-file-earmark-pdf"></i> Download Full Menu
    </a>
    </div>

    <!-- Fermentation Lab Specials -->
    <div class="col-12 mt-5" data-aos="fade-up">
    <div class="specials-badge">
        <span><i class="bi bi-beaker"></i> From the Fermentation Lab</span>
    </div>
    <div class="specials-container">
        <div class="row g-4">
        <div class="col-md-6">
            <div class="menu-item special-item">
            <div class="menu-item-img">
                <img src="assets/img/locavore/ferment-garam.jpeg" alt="Fermented Salt" class="img-fluid">
                <div class="menu-item-badges">
                <span class="badge-special">Special</span>
                <span class="badge-vegan">Vegan</span>
                </div>
            </div>
            <div class="menu-item-content">
                <h4>Fermented Flower Salt</h4>
                <p>Local sea salt fermented with dried flowers and natural yeast, delivering a unique umami to every dish.</p>
                <div class="menu-item-price">Lab Feature</div>
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="menu-item special-item">
            <div class="menu-item-img">
                <img src="assets/img/locavore/ferment-kombucha.jpeg" alt="Coffee Leaf Kombucha" class="img-fluid">
                <div class="menu-item-badges">
                <span class="badge-special">Special</span>
                <span class="badge-ferment">Ferment</span>
                </div>
            </div>
            <div class="menu-item-content">
                <h4>Coffee Leaf Kombucha</h4>
                <p>Experimental kombucha made from Balinese coffee leaves, lightly fermented for a fresh earthy flavor.</p>
                <div class="menu-item-price">Lab Feature</div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

</div><!-- /container -->

</section><!-- /Menu Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>What our guests say about their Locavore experience</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
            {
            "loop": true,
            "speed": 600,
            "autoplay": {
                "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
            },
            "breakpoints": {
                "320": {
                "slidesPerView": 1,
                "spaceBetween": 40
                },
                "1200": {
                "slidesPerView": 3,
                "spaceBetween": 1
                }
            }
            }
        </script>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
            <div class="testimonial-item">
                <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>"An unforgettable journey through nature-inspired cuisine. Every course was a story. Locavore is more than a restaurant — it’s a narrative on a plate."</p>
                <div class="profile mt-auto">
                <img src="assets/img/person/person-m-9.webp" class="testimonial-img" alt="">
                <h3>David L.</h3>
                <h4>Food Critic</h4>
                </div>
            </div>
            </div>

            <div class="swiper-slide">
            <div class="testimonial-item">
                <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>"A sensory masterpiece! The Nature’s Compass menu is thoughtful and bold. The rooftop garden and zero-waste concept made it even more meaningful."</p>
                <div class="profile mt-auto">
                <img src="assets/img/person/person-f-5.webp" class="testimonial-img" alt="">
                <h3>Ayaka Mori</h3>
                <h4>Travel Blogger</h4>
                </div>
            </div>
            </div>

            <div class="swiper-slide">
            <div class="testimonial-item">
                <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>"Locavore redefines what local food can be. From fermented jackfruit to edible flowers, each dish is a discovery. Can’t wait to return!"</p>
                <div class="profile mt-auto">
                <img src="assets/img/person/person-f-12.webp" class="testimonial-img" alt="">
                <h3>Marco Chen</h3>
                <h4>Chef & Restaurateur</h4>
                </div>
            </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
        </div>

    </div>

    </section><!-- /Testimonials Section -->


    <!-- Chefs Section -->
    <section id="chefs" class="chefs section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Culinary Team</h2>
        <p>The minds and hands behind Locavore’s revolutionary flavors</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
        <div class="col-lg-5">
            <div class="chef-highlight" data-aos="fade-right" data-aos-delay="200">
            <figure class="chef-image">
                <img src="assets/img/restaurant/chef-1.webp" class="img-fluid" alt="Executive Chef">
            </figure>
            <div class="chef-details">
                <h3>Executive Chef</h3>
                <h2>Ray Adriansyah</h2>
                <div class="chef-awards">
                <span><i class="bi bi-star-fill"></i> Asia’s 50 Best</span>
                <span><i class="bi bi-star-fill"></i> Locavore NXT Pioneer</span>
                </div>
                <p>As one of the co-founders of Locavore, Chef Ray leads the vision of redefining Indonesian ingredients with modern techniques. His passion lies in building a sustainable ecosystem — from farm to fork.</p>
                <div class="chef-signature">
                <img src="assets/img/misc/signature-1.webp" alt="Chef Signature">
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="team-container" data-aos="fade-left" data-aos-delay="300">
            <div class="row g-4">

                <div class="col-md-6">
                <div class="chef-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="chef-img">
                    <img src="assets/img/restaurant/chef-2.webp" class="img-fluid" alt="Chef Portrait">
                    <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                    </div>
                    </div>
                    <div class="chef-info">
                    <h4>Daniele G.</h4>
                    <p class="role">Creative Director</p>
                    <p class="details">Daniele crafts immersive dining narratives by combining indigenous techniques with progressive presentation.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-6">
                <div class="chef-card" data-aos="zoom-in" data-aos-delay="250">
                    <div class="chef-img">
                    <img src="assets/img/restaurant/chef-3.webp" class="img-fluid" alt="Chef Portrait">
                    <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                    </div>
                    <div class="chef-info">
                    <h4>Siska L.</h4>
                    <p class="role">Fermentation Specialist</p>
                    <p class="details">Specializes in fermentation and preservation using traditional Indonesian methods — turning local bounty into umami-rich delicacies.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-6">
                <div class="chef-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="chef-img">
                    <img src="assets/img/restaurant/chef-4.webp" class="img-fluid" alt="Chef Portrait">
                    <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                    </div>
                    <div class="chef-info">
                    <h4>Hendri P.</h4>
                    <p class="role">Head Mixologist</p>
                    <p class="details">Creates stunning drinks using native herbs, edible flowers, and fermentation techniques from the Food Forest rooftop.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-6">
                <div class="chef-card" data-aos="zoom-in" data-aos-delay="350">
                    <div class="chef-img">
                    <img src="assets/img/restaurant/chef-5.webp" class="img-fluid" alt="Chef Portrait">
                    <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                    </div>
                    <div class="chef-info">
                    <h4>Putri S.</h4>
                    <p class="role">Pastry & Plating Artist</p>
                    <p class="details">Focuses on visual storytelling through textures and colors in every plated dessert and foraged ingredient.</p>
                    </div>
                </div>
                </div>

            </div>
            </div>
        </div>
        </div>

    </div>

    </section><!-- /Chefs Section -->

<!-- Book A Table Section -->
<section id="book-a-table" class="book-a-table section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-5 mb-5">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="reservation-info">
          <div class="text-content">
            <h3>Reserve Your Experience</h3>
            <p>Dining at Locavore is more than a meal — it’s a journey through Indonesia’s biodiversity. Our tasting menus change with the micro-seasons and are crafted with hyper-local, ethical ingredients.</p>

            <div class="reservation-details mt-4">
              <div class="detail-item">
                <i class="bi bi-clock"></i>
                <div>
                  <h5>Opening Hours</h5>
                    <div class="day">Monday – Sunday</div>
                    <div class="time">11:00 AM – 10:00 PM</div>
                </div>
              </div>

              <div class="detail-item">
                <i class="bi bi-geo-alt"></i>
                <div>
                  <h5>Location</h5>
                  <p>Jl. Dewi Sita, Ubud, Bali 80571<br>Indonesia</p>
                </div>
              </div>

              <div class="detail-item">
                <i class="bi bi-telephone"></i>
                <div>
                  <h5>Call Us</h5>
                  <p>+62 361 977733</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="reservation-image">
          <img src="assets/img/restaurant/showcase-7.webp" alt="Restaurant interior" class="img-fluid rounded">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12" data-aos="fade-up" data-aos-delay="400">
        <div class="reservation-form-wrapper">
          <div class="form-header">
            <h3>Book A Table</h3>
            <p>Fill in the form below to reserve your Locavore experience</p>
          </div>

          <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form mt-4">
            <div class="row gy-4">
              <div class="col-lg-4 form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="col-lg-4 form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>
              <div class="col-lg-4 form-group">
                <input type="text" class="form-control" name="phone" placeholder="Your Phone" required>
              </div>
              <div class="col-lg-4 form-group">
                <select name="people" class="form-select" required>
                  <option value="">Number of guests</option>
                  <option value="1">1 Person</option>
                  <option value="2">2 People</option>
                  <option value="3">3 People</option>
                  <option value="4">4 People</option>
                  <option value="5">5 People</option>
                  <option value="6">6+ People</option>
                </select>
              </div>
              <div class="col-lg-4 form-group">
                <input type="date" name="date" class="form-control" required>
              </div>
              <div class="col-lg-4 form-group">
                <input type="time" class="form-control" name="time" required>
              </div>
              <div class="form-group mt-4">
                <textarea class="form-control" name="message" rows="3" placeholder="Special Requests (Optional)"></textarea>
              </div>
            </div>

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking request was sent. We will confirm your reservation soon. Thank you!</div>
            </div>

            <div class="text-center mt-4">
              <button type="submit" class="btn-book-table">Book Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</section><!-- /Book A Table Section -->


    <!-- Location Section -->
    <section id="location" class="location section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Location</h2>
        <p>Find us in the heart of the city – the perfect spot for your unforgettable dining experience.</p>

      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.684949335945!2d-73.98658242357565!3d40.75853057126168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ1JzMwLjciTiA3M8KwNTknMDcuNyJX!5e0!3m2!1sen!2sus!4v1654321234567!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="info-container">
              <div class="section-header">
                <h2>Find Us</h2>
                <p>Visit Us Today</p>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                <div class="info-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="info-content">
                  <h3>Our Location</h3>
                    <p>Jl. Dewi Sita No.10, Ubud, Gianyar, Bali 80571 – Indonesia</p>

                </div>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="400">
                <div class="info-icon">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="info-content">
                  <h3>Reservations</h3>
                  <p>+62 361 977733</p>
                  <p class="small-text">Please make your reservation in advance</p>
                </div>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="500">
                <div class="info-icon">
                  <i class="bi bi-clock"></i>
                </div>
                <div class="info-content">
                  <h3>Hours</h3>
                    <div class="hours-grid">
                    <div class="day">Monday – Sunday</div>
                    <div class="time">11:00 AM – 10:00 PM</div>
                  </div>

                </div>
              </div>

              <div class="cta-wrapper" data-aos="fade-up" data-aos-delay="600">
                <a href="#" class="btn-book">Make a Reservation</a>
                <a href="#" class="btn-contact">Contact Us</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Location Section -->

<!-- Events Section -->
<section id="events" class="events section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="intro-text text-center mb-5" data-aos="fade-up" data-aos-delay="150">
      <h2>Create Unforgettable Moments</h2>
      <p>We present a variety of special events to celebrate your precious moments at Locavore NXT. From weddings to exclusive gatherings.</p>
    </div>

    <div class="event-types">
      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="event-type-card">
            <div class="icon-wrapper">
              <i class="bi bi-calendar-heart"></i>
            </div>
            <h3>Weddings & Celebrations</h3>
            <p>Our elegant space is ready to witness your special day with a capacity of up to 150 guests.</p>
            <span class="capacity">Up to 150 guests</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
          <div class="event-type-card">
            <div class="icon-wrapper">
              <i class="bi bi-building"></i>
            </div>
            <h3>Corporate Events</h3>
            <p>The ideal venue for presentations, product launches, and business dinners of up to 100 guests.</p>
            <span class="capacity">Up to 100 guests</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="event-type-card">
            <div class="icon-wrapper">
              <i class="bi bi-people"></i>
            </div>
            <h3>Private Gatherings</h3>
            <p>Celebrate special moments with family or close friends of up to 50 people.</p>
            <span class="capacity">Up to 50 guests</span>
          </div>
        </div>
      </div>
    </div>

    <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="150">
      <div class="row g-3">
        <div class="col-lg-8">
          <div class="main-image" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/restaurant/event-1.webp" alt="Event Space" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row g-3">
            <div class="col-lg-12 col-md-6">
              <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                <img src="assets/img/restaurant/event-5.webp" alt="Event" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-12 col-md-6">
              <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                <img src="assets/img/restaurant/event-7.webp" alt="Event" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="event-cta" data-aos="fade-up" data-aos-delay="200">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h3>Ready to Plan Your Special Event?</h3>
          <p>Contact us to discuss your event needs. Our team is here to assist you every step of the way.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="#" class="btn-reserve">Reserve Venue</a>
        </div>
      </div>
    </div>

    <div class="featured-events" data-aos="fade-up" data-aos-delay="200">
      <h3>Upcoming Featured Events</h3>

      <div class="row g-4">
        <div class="col-lg-6 col-md-6">
          <div class="featured-event-card" data-aos="fade-up" data-aos-delay="250">
            <div class="event-date">
              <span class="month">Jun</span>
              <span class="day">18</span>
            </div>
            <div class="event-content">
              <div class="event-image">
                <img src="assets/img/restaurant/event-3.webp" alt="Summer Wine Festival" class="img-fluid">
              </div>
              <div class="event-info">
                <h4>Summer Wine Festival</h4>
                <ul class="event-meta">
                  <li><i class="bi bi-clock"></i> 6:00 PM - 10:00 PM</li>
                  <li><i class="bi bi-geo-alt"></i> Garden Terrace</li>
                </ul>
                <p>A summer wine festival featuring the finest local wines and special pairing dishes.</p>
                <a href="#" class="btn-details">View Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div class="featured-event-card" data-aos="fade-up" data-aos-delay="300">
            <div class="event-date">
              <span class="month">Jul</span>
              <span class="day">05</span>
            </div>
            <div class="event-content">
              <div class="event-image">
                <img src="assets/img/restaurant/event-8.webp" alt="Gourmet Tasting Night" class="img-fluid">
              </div>
              <div class="event-info">
                <h4>Gourmet Tasting Night</h4>
                <ul class="event-meta">
                  <li><i class="bi bi-clock"></i> 7:30 PM - 11:00 PM</li>
                  <li><i class="bi bi-geo-alt"></i> Main Dining Hall</li>
                </ul>
                <p>Savor the best culinary creations from Locavore NXT's chefs in a flavorful evening.</p>
                <a href="#" class="btn-details">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Events Section -->



    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Have questions or want to book a table? Reach out to us — we’d love to hear from you!</p>

      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Contact Info Boxes -->
        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="info-content">
                <h4>Our Address</h4>
                 <p>Jl. Dewi Sita No.10Ubud, Bali 80571,Indonesia</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="info-content">
                <h4>Email Address</h4>
                <p>eelke@locavorenxt.com </p>
                <p>reservation@locavore.co.id/p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-headset"></i>
              </div>
              <div class="info-content">
                <h4>Hours of Operation</h4>
                <p>Sunday-Fri: 9 AM - 6 PM</p>
                <p>Saturday: 9 AM - 4 PM</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Google Maps (Full Width) -->
      <div class="map-section" data-aos="fade-up" data-aos-delay="200">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.051179065389!2d115.2624780759466!3d-8.516122086879956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd220579bd84ab7%3A0xb3f1b6269a14d67f!2sLocavore%20NXT!5e0!3m2!1sid!2sid!4v1720859323989!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Contact Form Section (Overlapping) -->
      <div class="container form-container-overlap">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-10">
            <div class="contact-form-wrapper">
              <h2 class="text-center mb-4">Get in Touch</h2>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-person"></i>
                        <input type="text" class="form-control" name="name" placeholder="First Name" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-envelope"></i>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-text-left"></i>
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-chat-dots message-icon"></i>
                        <textarea class="form-control" name="message" placeholder="Write Message..." style="height: 180px" required=""></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>

                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-submit">SEND MESSAGE</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

@stop