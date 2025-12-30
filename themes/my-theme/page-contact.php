<?php get_header(); ?>

    <section class="container-banner">
    <div class="hero-banner">
        <div class="logo-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/about.jpg" alt="<?php bloginfo('clinic'); ?>">
        </div>

        <div class="banner">
            <h1>Contact us </h1>
            <p>Home/page/Contact</p>
        </div>
    </div>

    <div class="contact-page">
        <div class="contact-section">
            <div class="icon">
                <div class="icon-box">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
            </div>
            <div class="text">
                <p>Address</p>
                <h3>123street USA</h3>
            </div>
        </div>

         <div class="contact-section">
            <div class="icon">
                <div class="icon-box">
                   <i class="fa-solid fa-phone"></i>
                </div>
            </div>
            <div class="text">
                <p>Call Us Now</p>
                <h3>+885 87978591</h3>
            </div>
        </div>

         <div class="contact-section">
            <div class="icon">
                <div class="icon-box">
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div>
            <div class="text">
                <p>Mail Us Now</p>
                <h3>hehe@example.com</h3>
            </div>
        </div>

    </div>

    <div class="contact-box">
        <div class="forms">
            <p>contact</p>
            <h1>Have Any Query ? please Contact Us!</h1>
            <form action="">
                <input type="email" name="email" placeholder="Your Name">
                <input type="email" name="email" placeholder="Your Email">
                <input type="email" name="email" placeholder="Subject">
                <input type="email" name="email" placeholder="Message" style="padding= 20%;">
                <button type="submit">Send Message </button>
            </form>
        </div>
        <div class="contact-map">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/map.png" alt="<?php bloginfo('clinic'); ?>">
        </div>
    </div>


<?php get_footer(); ?>