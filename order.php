
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bliss</title>
    <link rel="shortcut icon" href="/images/Capture2.png" type="image/x-icon">

    <!-- Custom Links -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/aos.css">
    <link rel="stylesheet" href="/save.php">

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
                <img class="image" src="/images/Capture2.png" alt="Bliss">
            </a>
        </div>
        <ul class="nav-list" id="navi-List" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
            <li class="list-items">
                <a class="active" href="">HOME</a>
            </li>
            <li class="list-items">
                <a href="#about">ABOUT</a>
            </li>
            <li class="list-items">
                <a href="#menu">MENU</a>
            </li>
            <li class="list-items">
                <a href="#contact">CONTACT</a>
            </li>
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
    
    
    
    <!-- Contact Page Start -->

    <section class="order">
        <div class="wrapper">
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

</body>
</html>
