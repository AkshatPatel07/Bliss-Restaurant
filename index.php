<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bliss</title>
    <link rel="shortcut icon" href="./images/Capture2.png" type="image/x-icon">

    <!-- Custom Links -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/aos.css">
    <!-- <link rel="stylesheet" href="order.php"> -->

    <!-- Font Awseome Link -->
    <script src="https://kit.fontawesome.com/f9dd486211.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/regular.min.css" integrity="sha512-YoxvmIzlVlt4nYJ6QwBqDzFc+2aXL7yQwkAuscf2ZAg7daNQxlgQHV+LLRHnRXFWPHRvXhJuBBjQqHAqRFkcVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Swiper  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- Bootstrap CDN -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
</head>

<body>
    <!-- Header Section -->
    <nav class="navbar">
        <div class="conatiner">
            <a href="#home" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
                <img class="image" src="./images/Capture2.png" alt="Bliss">
            </a>
        </div>
        <ul class="nav-list" id="navi-List" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
            <li class="list-items">
                <a href="#home">HOME</a>
            </li>
            <li class="list-items">
                <a href="#about">ABOUT</a>
            </li>
            <li class="list-items">
                <a href="#menu">MENU</a>
            </li>
            <li class="list-items">
                <a href="#team">CHEFS</a>
            </li>
            <!-- <li class="list-items">
                <a href="#contact">CONTACT</a>
            </li> -->
            <li class="list-items">
                <a href="#testimonials">TESTIMONIALS</a>
            </li>
            <!-- <li class="list-items">
                <a href="#team">OUR TEAM</a>
            </li> -->
            <li class="list-items">
                <a href="#order">ORDER</a>
            </li>
        </ul>
        <div class="menu" id="toggle-button">
            <!-- Nav -->
            <i class="fa-solid fa-bars" id="menu-bars"></i>
        </div>
    </nav>
    <!-- Header Close -->

    <!-- Home Section -->
    <section class="home" id="home">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background: url(./images/Slide1.jpg) no-repeat;">
                    <div class="content" data-aos="fade-zoom-in" data-aos-easing="ease-in-out" data-aos-delay="200" data-aos-offset="0">
                        <h1>BLISS</h1>
                        <span>Food like never before</span> <br>
                        <a href="#menu" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background: url(./images/Slide2.jpg) no-repeat;">
                    <div class="content">
                        <h1>BLISS</h1>
                        <span>Food like never before</span> <br>
                        <a href="#menu" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background: url(./images/Slide3.jpg) no-repeat;">
                    <div class="content">
                        <h1>BLISS</h1>
                        <span>Food like never before</span> <br>
                        <a href="#menu" class="btn">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Home Close -->

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="about_wrapper" data-aos="fade-right" data-aos-delay="200">
                <div class="left_side">
                    <h1 class="about_heading">
                        We Pride Ourselves on Making Tastiest Food From The Best Ingredients.
                    </h1>
                    <p class="about_info">
                        We are a multi-cuisine farm-based restaurant offering a wide variety of food experience in both
                        casual and fine dining environment. That's why we source our ingredients carefully and put our
                        community at the center of everything we do.
                    </p>
                    <div class="button">
                        <a href="#menu" class="about_btn">Explore Our Menu</a>
                        <a href="#order" class="about_btn">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="right_side" data-aos="zoom-in" data-aos-delay="300">
                <div class="about_image">
                    <img class="abt_img1" src="./images/Food4.jpg" alt="">
                    <div class="box2">
                        <img class="abt_img2" src="./images/Food1.jpg" alt="">
                        <br>
                        <img class="abt_img3" src="./images/Food2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Close -->

    <!-- Menu Section -->
    <!-- food section starts  -->

    <section class="food" id="menu">

        <div class="heading_food" data-aos="fade-right">
            <span>Popular Dishes</span>
            <h3>Some of our bestseller dishes!</h3>
            <div class="border"></div>
        </div>

        <div class="swiper food-slider" data-aos="fade-up">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" data-name="food-1">
                    <img src="./images/food-img-1.png" alt="">
                    <h3>Sea Food Salad</h3>
                    <div class="price">350 ₹</div>
                </div>

                <div class="swiper-slide slide" data-name="food-2">
                    <img src="./images/food-img-2.png" alt="">
                    <h3>Thai Platter</h3>
                    <div class="price">310 ₹</div>
                </div>

                <div class="swiper-slide slide" data-name="food-3">
                    <img src="./images/food-img-3.png" alt="">
                    <h3>Hot Chicken Wings</h3>
                    <div class="price">300 ₹</div>
                </div>

                <div class="swiper-slide slide" data-name="food-4">
                    <img src="./images/food-img-4.png" alt="">
                    <h3>Tuna Salad</h3>
                    <div class="price">250 ₹</div>
                </div>

                <div class="swiper-slide slide" data-name="food-5">
                    <img src="./images/food-img-5.png" alt="">
                    <h3>Steak</h3>
                    <div class="price">290 ₹</div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- food section ends -->

    <!-- food preview section starts  -->

    <section class="food-preview-container">

        <div id="close-preview" class="fas fa-times"></div>

        <div class="food-preview" data-target="food-1">
            <img src="./images/food-img-1.png" alt="">
            <h3>Sea Food Salad</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Best Sea Food Salad in Bliss Restaurant!</p>
            <div class="price">350 ₹</div>
            <a href="#order" class="btn">Add to Cart</a>
        </div>

        <div class="food-preview" data-target="food-2">
            <img src="./images/food-img-2.png" alt="">
            <h3>Thai Platter</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Best Thai Platter in Bliss Restaurant!</p>
            <div class="price">310 ₹</div>
            <a href="#order" class="btn">Add to Cart</a>
        </div>

        <div class="food-preview" data-target="food-3">
            <img src="./images/food-img-3.png" alt="">
            <h3>Hot Chicken Wings</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Best Hot Chicken Wings in Bliss Restaurant!</p>
            <div class="price">300 ₹</div>
            <a href="#order" class="btn">Add to Cart</a>
        </div>

        <div class="food-preview" data-target="food-4">
            <img src="./images/food-img-4.png" alt="">
            <h3>Tuna Salad</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Best Tuna Salad Wings in Bliss Restaurant!</p>
            <div class="price">250 ₹</div>
            <a href="#order" class="btn">Add to Cart</a>
        </div>

        <div class="food-preview" data-target="food-5">
            <img src="./images/food-img-5.png" alt="">
            <h3>Steak</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Best Steak in Bliss Restaurant!</p>
            <div class="price">290 ₹</div>
            <a href="#order" class="btn">Add to Cart</a>
        </div>

    </section>

    <!-- food preview section ends -->
    <!-- Menu Close -->


    <section class="menu_food" id="menu_food">

        <div class="heading" data-aos="flip-left">
            <span>Our Full Menu</span>
        </div>

        <div class="swiper menu-slider" data-aos="zoom-in">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <h3 class="title">Breakfast</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>Brekky Deluxe</h3>
                                <p>German sausages, crispy bacon, mushrooms, röschti, oven baked tomatoes, with your
                                    choice of eggs, served with rocket salad and bread.</p>
                            </div>
                            <div class="price">250₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Scambled Eggs</h3>
                                <p>Smoked ham, smoked salmon, bacon, German sausages, asparagus, avocado, capsicum,
                                    eggplant, Spanish onions, oven baked tomato, shallots, mushrooms, zucchini.</p>
                            </div>
                            <div class="price">190₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>BroadBreakfast Burger</h3>
                                <p>Bacon, two eggs, röschti with your choice of cheese.</p>
                            </div>
                            <div class="price">200₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Eggs on Toast</h3>
                                <p>Scrambled, fried or poached, served with bread.</p>
                            </div>
                            <div class="price">100₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Crepes</h3>
                                <p>With your choice of upto three fillings.</p>
                            </div>
                            <div class="price">150₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Bliss Special Breakfast</h3>
                                <p>Our choice of smoked ham or smoked salmon, topped with röschti, asparagus, served
                                    with rocket salad, bread and hollandaise.</p>
                            </div>
                            <div class="price">200₹</div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">Lunch</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>The Classic Burger</h3>
                                <p>A great flame grilled patty standing alone in all its glory.</p>
                            </div>
                            <div class="price">290₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Avacado Toast</h3>
                                <p>Thick cut sourdough, avocado smash, 2 poached eggs, friseé, arugula, feta, dukka,
                                    chimichurri sauce.</p>
                            </div>
                            <div class="price">390₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>The Full Irish</h3>
                                <p>2 sausage, 2 bacon, 2 white pudding, 2 black pudding, beans. fried eggs, tomato,
                                    white toast.</p>
                            </div>
                            <div class="price">400₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>The Sizzler</h3>
                                <p>Chorizo, black beans, jalepeño, red onion, pepperjack cheese.</p>
                            </div>
                            <div class="price">300₹</div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">Dinner</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>Lobster Stew</h3>
                                <p>Tender pieces of fresh lobster in a creamy sherry broth, served with crispy bread</p>
                            </div>
                            <div class="price">350₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Frenchman bay clam chowder</h3>
                                <p>Bacon, onion, thyme, thickened with potato</p>
                            </div>
                            <div class="price">240₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Fork & Knife Caesar</h3>
                                <p>Romaine spear, crouton crumble, toasted parmesan, caramelized lemon</p>
                            </div>
                            <div class="price">190₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Steak Frites</h3>
                                <p>Grilled flat iron steak with fried Maine potato wedges and mesclun lettuces with
                                    seasonal vinaigrette</p>
                            </div>
                            <div class="price">300₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Chicken Supreme</h3>
                                <p>Served with a wild mushroom and caramelized onion Marsala sauce, garlic whipped
                                    potatoes and seasonal vegetables</p>
                            </div>
                            <div class="price">200₹</div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">Drinks</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>APEROL SPRITZ</h3>
                                <p>Sparkling wine, aperol & a splash of soda topped with a slice of orange</p>
                            </div>
                            <div class="price">400₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>GINGER FIZZ</h3>
                                <p>Sparkling wine, vodka & ginger lime cordial</p>
                            </div>
                            <div class="price">350₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>MIMOSA</h3>
                                <p>Sparkling wine & orange juice</p>
                            </div>
                            <div class="price">300₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>BELLINI</h3>
                                <p>Sparkling wine & peach liqueur</p>
                            </div>
                            <div class="price">500₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>BLOOD ON THE ROOFTOP</h3>
                                <p>Sparkling wine, brandy, grenadine liqueur & red wine</p>
                            </div>
                            <div class="price">450₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>BERRY PUNCH</h3>
                                <p>Berry puree, sparkling wine & bitters topped with a mint foam</p>
                            </div>
                            <div class="price">400₹</div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">Desserts</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>Cheese Cake</h3>
                                <p>New York style cheesecake drizzled with raspberry syrup and garnished with a mint
                                    leaf</p>
                            </div>
                            <div class="price">200₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Tiramisu</h3>
                                <p>Our house favorite! made fresh every morning. you can taste the essence of Italy
                                    within</p>
                            </div>
                            <div class="price">350₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>French Gelato</h3>
                                <p>Made solely in house everyday. ask your server about our daily flavor</p>
                            </div>
                            <div class="price">250₹</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Triple Layer Cake</h3>
                                <p>A point layer cake made of chocolate vanilla and mascarpone cream</p>
                            </div>
                            <div class="price">300₹
                                <!-- <div class="button-area-full-menu">
                                    <button type="submit">Order Now</button>
                                    <span></span> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- menu section ends -->



    <!-- Teams Section -->

    <section class="team-section" id="team">
        <div class="container">
            <div class="row">
                <div class="section-title" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                    <h1>Our Chefs</h1>
                </div>
            </div>
        </div>

        <div class="cols" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(./images/Chef3.jpg)">
                        <div class="inner">
                            <h2>Mary Jane</h2>
                            <span>Chef Head</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>Hey its Mary Jane and I am the Chef Head of Bliss Restaurant.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(./images/Chef2.jpg)">
                        <div class="inner">
                            <h2>Tobey Maguire</h2>
                            <span>Assistant Chef Head</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>Hey I am Tobey Maguire and I am the Assistant Chef Head of The Bliss Restaurant.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(./images/Chef4.jpg)">
                        <div class="inner">
                            <h2>Gwen Stacy</h2>
                            <span>Co Chef Head</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>Hey I am Gwen Stacy and I am the Co Chef Head of the Bliss Restaurant.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Team Close -->

    <!-- Testimonials Start -->
    <section class="testimonials" id="testimonials" data-aos="fade-right">
        <div class="inner_test">
            <h1 class="testi">
                Testimonials
            </h1>
            <p class="testi2">
                Some Feedbacks from our happy Customers :)
            </p>
            <div class="border"></div>

            <div class="row_test" data-aos="zoom-in-up">
                <div class="col_test">
                    <div class="testimonial">
                        <img src="./images/Woman1.jpg" alt="Client1">
                        <div class="name">Natalie Portman</div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="review">
                            I stumbled on this undiscovered gem right in our neighboorhood. This was one of the best
                            mouth-watering burgers I've had grace my taste buds in a long time. Everything I tried was
                            bursting with flavor. Everything was just so yummy!
                        </p>
                    </div>
                </div>

                <div class="col_test">
                    <div class="testimonial">
                        <img src="./images/Man2.jpg" alt="Client1">
                        <div class="name">Ryan Reynolds</div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="review">
                            My taste buds are still tingling from our last visit! I found the ambiance to be very
                            charming. The experience was heavenly as I was served a meal fit for God himself. The waiter
                            did an excellent job. They got a new customer for life!
                        </p>
                    </div>
                </div>

                <div class="col_test">
                    <div class="testimonial">
                        <img src="./images/Woman2.jpg" alt="Client1">
                        <div class="name">Blake Lively</div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="review">
                            Oh my God! So awesome! The decor was unique and incredible. The food is simply to die for.
                            After my meal, I was knocked into a food coma. Everything I tried was bursting with flavor.
                            I'd give more than 5 stars if I could!
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!-- Testimonials Close -->


    <!-- Contact Page Start -->
    <section class="order" id="order">
        <div class="wrapper" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="1000">
            <header>Order your Food</header>
            <form name="order-form" action="save.php" method="post" id="order-form">
                <div class="dbl-field">
                    <div class="field">
                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter your name" required>
                        <i class='fas fa-user'></i>
                    </div>
                    <div class="field">
                        <input type="text" id="Email" class="form-control" name="email" placeholder="Enter your email" required>
                        <i class='fas fa-envelope'></i>
                    </div>
                </div>

                <div class="dbl-field">
                    <div class="field">
                        <input type="text" id="Phone" class="form-control" name="phone" placeholder="Enter your phone" required>
                        <i class='fas fa-phone-alt'></i>
                    </div>
                    <div class="field">
                        <input type="text" name="dish" class="form-control" placeholder="Order your dish name" required>
                        <i class="fa-solid fa-asterisk"></i>
                    </div>
                </div>

                <div class="dbl-field">
                    <div class="field">
                        <input type="text" name="quantity" class="form-control" placeholder="Enter quantity" required>
                        <i class="fa-solid fa-asterisk"></i>
                    </div>
                    <div class="field">
                        <input type="text" name="details" class="form-control" placeholder="Enter Details i.e if you want spicy, jain" required>
                        <i class="fa-solid fa-asterisk"></i>
                    </div>
                </div>
                <div class="message">
                    <textarea placeholder="Write your Address" class="form-control" name="message" required></textarea>
                    <i class="material-icons">message</i>
                </div>

                <div class="button-area">
                    <button type="submit" id="submit">Order Now</button>
                    <span>Sending your Order...</span>
                </div>
            </form>
        </div>
    </section>


    <!-- Contact Page Close -->

    <!-- Footer Start -->
    <footer class="footer" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
        <div class="container_footer">
            <div class="row_foot">
                <div class="footer_item">
                    <h2>Quick Links</h2>
                    <ul class="nav-list_footer" id="navi-List_footer">
                        <li class="list-items_foot">
                            <a class="active" href="#home">HOME</a>
                        </li>
                        <li class="list-items_foot">
                            <a class="active" href="#about">ABOUT</a>
                        </li>
                        <li class="list-items_foot">
                            <a class="active" href="#menu">MENU</a>
                        </li>
                        <li class="list-items_foot">
                            <a class="active" href="#testimonials">TESTIMONIALS</a>
                        </li>
                    </ul>
                </div>
                <div class="footer_item">
                    <h2>Opening Hours</h2>
                    <p>Monday to Sunday <br> 11:00AM - 1:00AM</p>
                </div>
                <div class="footer_item">
                    <h2>Follow Us On:</h2>
                    <div class="social_links">
                        <a href="#"> <i class="fab fa-facebook"></i> </a>
                        <a href="#"> <i class="fab fa-instagram"></i> </a>
                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                        <a href="#"> <i class="fab fa-youtube"></i> </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="copyright">
                    &copy; 2022 - BLISS RESTAURANT
                </div>
            </div>
        </div>
    </footer>


    <!-- Custom JS Links -->
    <script src="./js/aos.js"></script>
    <script src="./js/script.js">
    </script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 20,
            effect: "fade",
            loop: true,
            grabCursor: true,
            centeredSlides: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        var swiper = new Swiper(".food-slider", {
            loop: true,
            grabCursor: true,
            centeredSlides: true,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                700: {
                    slidesPerView: 2,
                },
                1000: {
                    slidesPerView: 3,
                },
            },

        })

        var swiper = new Swiper(".menu-slider", {
            loop: true,
            grabCursor: true,
            centeredSlides: true,
            spaceBetween: 20,
            autoHeight: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        })
    </script>
</body>

</html>


