


<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: main.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoFood</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <header>

        <nav>

            <div class="logo">

                <img src="image/logo.png" alt="logo">

            </div>

            <ul>

                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href ="order.html">Menu</li>
                <li><a href ="contact.html">contact</a></li>
                <li><a href ="logout1.php">logout</li>

            </ul>

            <div class="register">

                <div class="login">

                    <a href="main.html">Login</a>

                </div>

                <div class="sign">

                    <a href="main.html">Sign Up</a>

                </div>

            </div>

        </nav>

        <div class="main">

            <div class="M_left">

                <h1>The <span>Best Food</span><br> For the Best<br> Moments</h1>

                <p class="M_tag">

                   Savor the taste of happiness with every bite.
                   At GO!FOOD, we serve more than just meals—we deliver moments of joy,
                   crafted with fresh ingredients and bursting flavors.
                   Whether you're dining solo or sharing with loved ones, 
                   our dishes make every occasion special. Discover a world of taste made just for you.

                </p>

                <button ><a href="order.html">order Now</a></button>
                
            </div>

            <div class="M_right">

                <img src="image/M_Img.png" alt="">

            </div>

        </div>

    </header>

    <!--About-->

    <div class="about">

        <p class="A_name">ABOUT US</p>
        
        <div class="A_box">

            <div class="A_left">

                <img src="image/A_1.jpeg" alt="">
                <img src="image/A_2.jpeg" alt="">
                <img src="image/A_3.jpeg" alt="">
                <img src="image/A_4.jpeg" alt="">

            </div>

            <div class="A_right">

                <h2>You will find Happiness and Food Here.</h2>

                <p class="A_text">

                    You Will Find Happiness and Food Here
                    Step into a world where flavors meet feelings. At GoFood, we don’t just 
                    serve meals—we create memories. Whether it’s a quick bite or a family feast, our 
                    dishes are crafted to bring joy with every bite.
                </p>

                <div class="A_icon">

                    <i class="fa-solid fa-address-book"></i>

                    <div class="A_tag">

                        <h5>AUTHENTIC TASTE</h5>

                        <p>
                          Experience the richness of tradition in every dish, made with 
                          recipes passed down through generations.
                        </p>

                    </div>

                </div>

                <div class="A_icon">

                    <i class="fa-solid fa-bowl-food"></i>

                    <div class="A_tag">

                        <h5>PREMIUM INGREDIENTS</h5>

                        <p>
                           We use only the freshest, handpicked ingredients 
                           to ensure every bite is wholesome and delicious.
                        </p>

                    </div>

                </div>

                <div class="A_icon">

                    <i class="fa-solid fa-book-open"></i>

                    <div class="A_tag">

                        <h5>CREATIVE MENU</h5>

                        <p>
                           From timeless classics to bold innovations, 
                           our menu has something to excite every taste bud.
                        </p>

                    </div>

                </div>

                <button>More Info<i class="fa-solid fa-arrow-right"></i></button>

            </div>

        </div>

    </div>


    <!--MENU-->

    <div class="menu">

        <p>MENU</p>

        <div class="M_box">

            <div class="M_card">

                <div class="M_img">

                    <img src="image/M_1.jpeg" alt="">

                </div>

                <div class="M_tag">

                    <div class="name_star">

                        <h1>Chicken Kebabs</h1>

                        <div class="star">

                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>

                        </div>

                    </div>

                    <p class="M_details">
                        Juicy, spice-marinated chicken skewers grilled to
                         perfection—bursting with smoky flavors in every bite.

                    </p>

                    <div class="price_btn">

                        <p class="M_price">Rs.100</p>
                        <button>Order Now<i class="fa-solid fa-arrow-right"></i></button>

                    </div>

                </div>

            </div>

            <div class="M_card">

                <div class="M_img">

                    <img src="image/M_2.jpeg" alt="">

                </div>

                <div class="M_tag">

                    <div class="name_star">

                        <h1>Chicken Biryani</h1>

                        <div class="star">

                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>

                        </div>

                    </div>

                    <p class="M_details">
                        Aromatic basmati rice layered with tender chicken,
                        infused with rich spices for a royal feast.
                    </p>

                    <div class="price_btn">

                        <p class="M_price">Rs.350</p>
                        <button>Order Now<i class="fa-solid fa-arrow-right"></i></button>

                    </div>

                </div>

            </div>

            <div class="M_card">

                <div class="M_img">

                    <img src="image/M_3.jpeg" alt="">

                </div>

                <div class="M_tag">

                    <div class="name_star">

                        <h1>Noodle</h1>

                        <div class="star">

                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>

                        </div>

                    </div>

                    <p class="M_details">
                        Wok-tossed noodles loaded with fresh veggies and
                        exotic sauces for a perfect Asian-style treat.
                    </p>

                    <div class="price_btn">

                        <p class="M_price">Rs.210</p>
                        <button>Order Now<i class="fa-solid fa-arrow-right"></i></button>

                    </div>

                </div>

            </div>

            <div class="M_card">

                <div class="M_img">

                    <img src="image/M_4.jpeg" alt="">

                </div>

                <div class="M_tag">

                    <div class="name_star">

                        <h1>Hamburger</h1>

                        <div class="star">

                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>

                        </div>

                    </div>

                    <p class="M_details">
                        A classic beef patty nestled in soft buns with crisp
                        lettuce, melty cheese, and tangy sauces.
                    </p>

                    <div class="price_btn">

                        <p class="M_price">Rs.140</p>
                        <button>Order Now<i class="fa-solid fa-arrow-right"></i></button>

                    </div>

                </div>

            </div>

            <div class="M_card">

                <div class="M_img">

                    <img src="image/M_5.jpeg" alt="">

                </div>

                <div class="M_tag">

                    <div class="name_star">

                        <h1>Pizza</h1>

                        <div class="star">

                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>

                        </div>

                    </div>

                    <p class="M_details">
                        A cheesy delight topped with fresh ingredients,
                        savory sauce, and a crispy golden crust.
                    </p>

                    <div class="price_btn">

                        <p class="M_price">Rs.20</p>
                        <button>Order Now<i class="fa-solid fa-arrow-right"></i></button>

                    </div>

                </div>

            </div>

            <div class="M_card">

                <div class="M_img">

                    <img src="image/M_6.jpeg" alt="">

                </div>

                <div class="M_tag">

                    <div class="name_star">

                        <h1>Burrito</h1>

                        <div class="star">

                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>

                        </div>

                    </div>

                    <p class="M_details">
                        A warm tortilla packed with seasoned meat, beans,
                        cheese, and veggies—flavor in every fold..
                    </p>

                    <div class="price_btn">

                        <p class="M_price">Rs.40</p>
                        <button>Order Now<i class="fa-solid fa-arrow-right"></i></button>

                    </div>

                </div>

            </div>

            <div class="M_card">

                <div class="M_img">

                    <img src="image/M_7.jpeg" alt="">

                </div>

                <div class="M_tag">

                    <div class="name_star">

                        <h1>Lasagna</h1>

                        <div class="star">

                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>

                        </div>

                    </div>

                    <p class="M_details">
                        Layered sheets of pasta, rich meat sauce, and 
                        gooey cheese baked to mouthwatering perfection.
                    </p>

                    <div class="price_btn">

                        <p class="M_price">Rs.120</p>
                        <button>Order Now<i class="fa-solid fa-arrow-right"></i></button>

                    </div>

                </div>

            </div>

            <div class="M_card">

                <div class="M_img">

                    <img src="image/M_8.jpeg" alt="">

                </div>

                <div class="M_tag">

                    <div class="name_star">

                        <h1>Pasta</h1>

                        <div class="star">

                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>

                        </div>

                    </div>

                    <p class="M_details">
                       Creamy, savory, and loaded with herbs—our 
                       pasta is a comfort dish you won’t forget.
                    </p>

                    <div class="price_btn">

                        <p class="M_price">Rs.180</p>
                        <button>Order Now<i class="fa-solid fa-arrow-right"></i></button>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!--Gallery-->

    <div class="gallery">

        <div class="G_left">

            <img src="image/G_1.jpeg" alt="">

        </div>

        <div class="G_right">

            <img src="image/G_2.jpeg" alt="">

            <div class="G_box">

                <h1>Pizza Burger</h1>

                <p>
                    When pizza meets burger—this fusion delight brings the best of 
                    both worlds! A juicy patty topped with marinara, pepperoni, 
                    and melted cheese, all tucked in a burger bun.
                </p>

            </div>

            <img src="image/G_4.jpeg" alt="">

            <div class="G_box">

                <h1>Chicken Biryani</h1>

                <p>
                    Dive into this royal dish made with fragrant basmati rice, 
                    tender chicken, and a rich blend of traditional spices. 
                    Every spoonful is a burst of flavor and heritage.
                </p>

            </div>

            <img src="image/G_3.jpeg" alt="">

            <div class="G_box">

                <h1>Nacho Cheese Beef Wrap</h1>

                <p>
                   When pizza meets burger—this fusion delight brings 
                   the best of both worlds! A juicy patty topped with marinara, 
                   pepperoni, and melted cheese, all tucked in a burger bun.
                </p>

            </div>

        </div>

    </div>


    <!--Banner-->

    <div class="banner">

        <h1>GET 40% OFF ALL DISHES</h1>

        <p>
            Craving something mouth-watering? Discover our handpicked menu crafted with love,
            spice, and everything nice. From sizzling street-style bites to gourmet indulgence—your
            next favorite dish is just a click away.
        </p>

        <button>View Menu<i class="fa-solid fa-arrow-right"></i></button>

    </div>


    <!--Contact-->

    <div class="contact"  id="contact">

        <div class="C_left">

            <h3>Contact Us</h3>
            <h1>Get In Touch</h1>

            <form action="../contact.php" method="post"> <!-- Link to PHP file -->

                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Your Name..." required>
        
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email..." required>
        
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Enter Your Subject..." required>
        
                <label for="comments">Comments</label>
                <textarea id="comments" name="comments" placeholder="Type Here" required></textarea>
        

            <button type="'submit">Send Now<i class="fa-solid fa-arrow-right"></i></button>

        </div>

        <div class="C_right">

            <p>
                We’d Love to Hear From You!
                Have a question, feedback, or craving that just can’t wait? 
                Reach out to us anytime—we’re here to serve you with delicious 
                food and warm hospitality. Whether you're planning a party, 
                looking for catering, or simply need help with your order, 
                our team is always ready to assist.
            </p>

            <div class="C_icon">

                <div class="icon">

                    <i class="fa-solid fa-phone"></i>
                    <h3>Phone Number</h3>
                    <p>+91 9579183398</p>

                </div>

                <div class="icon">

                    <i class="fa-solid fa-envelope"></i>
                    <h3>Email Address</h3>
                    <p>riteshnikode94@gmail.com</p>

                </div>

                <div class="icon">

                    <i class="fa-brands fa-whatsapp"></i>
                    <h3>Whatsapp</h3>
                    <p>+91  9579183398</p>

                </div>

                <div class="icon">

                    <i class="fa-solid fa-location-dot"></i>
                    <h3>Our Location</h3>
                    <p>Keshav Sity, Ring Road, Wardha</p>

                </div>

            </div>

            <div class="map">

                <iframe class="my_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7920.529770411735!2d79.9270585!3d6.97804065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae257fb99855535%3A0xcf2afe16fdea46bc!2sKiribathgoda!5e0!3m2!1sen!2slk!4v1728895265478!5m2!1sen!2slk" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

        </div>

    </div>


    <!--Footer Img-->

    <div class="footer_img">

        <img src="image/FI_1.jpeg" alt="">
        <img src="image/FI_2.jpg" alt="">
        <img src="image/FI_3.jpeg" alt="">
        <img src="image/FI_4.jpeg" alt="">
        <img src="image/FI_5.jpeg" alt="">
        <img src="image/FI_6.jpeg" alt="">
        <img src="image/FI_7.jpeg" alt="">
        <img src="image/FI_8.jpeg" alt="">
        <img src="image/FI_9.jpeg" alt="">
        <img src="image/FI_10.jpeg" alt="">

    </div>


    <!--Footer-->

    <footer>

        <div class="F_logo">

            <img src="image/logo.png" alt="">

            <p>
                At GO!FOOD, we believe great food brings people together. 
                Whether you're craving bold street flavors or gourmet indulgence,
                 our dishes are made with passion, precision, and the freshest
                ingredients. Taste happiness in every bite!
            </p>

            <a href="#">view more</a>

        </div>

        <div class="F_time">

            <h2>OPEN <span>TIME</span></h2>
            <p>Monday....................08.00 - 18.00</p>
            <p>Tuesday...................08.00 - 18.00</p>
            <p>Wednesday..............08.00 - 18.00</p>
            <p>Thursday..................08.00 - 18.00</p>
            <p>Friday.......................08.00 - 18.00</p>
            <p>Saturday...................08.00 - 15.00</p>

        </div>

        <div class="F_poster">

            <h2>LATEST <span>POST</span></h2>

            <div class="image">

                <img src="image/f_1.jpeg" alt="">

                <div class="F_text">

                    <p>
                        Stay tuned with our latest kitchen creations, 
                        food trends, and exclusive deals. Follow us and
                         never miss a moment of mouthwatering goodness.
                    </p>

                    <p class="date">15/01/2025</p>

                </div>

            </div>

            <div class="image">

                <img src="image/f_2.jpg" alt="">

                <div class="F_text">

                    <p>
                        Stay tuned with our latest kitchen creations,
                         food trends, and exclusive deals. Follow us and 
                         never miss a moment of mouthwatering goodness.
                    </p>

                    <p class="date">25/03/2025</p>

                </div>

            </div>

        </div>

        <div class="F_contact">

            <h2>CONTACT <span>DETAILS</span></h2>

            <p><i class="fa-solid fa-location-dot"></i>Keshav Sity, Ring Road, Wardha</p>

            <p><i class="fa-solid fa-envelope"></i>riteshnikode94@gmail.com</p>

            <div class="number"><i class="fa-solid fa-phone"></i>+91 9579182298</div>

            <div class="social_icon">

                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>

            </div>

        </div>

    </footer>

    <p class="end">Design By <i class="fa-solid fa-face-grin"></i><span> Ritesh Nikode</span></p>
 <script src="script.js"></script>
</body>
</html>