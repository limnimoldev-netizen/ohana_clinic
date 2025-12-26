<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<section class="container-banner">
    <div class="hero-banner">
        <div class="logo-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner.png" alt="<?php bloginfo('clinic'); ?>">
        </div>

        <div class="banner">
            <h1>Your Family's Health, Our Family's Priority</h1>

            <p>where we believe in treating every patient like family. Our dedicated team <br> of healthcare 
                 professionals is committed to providing comprehensive, compassionate, <br> and personalized medical 
                  services. We focus on your overall <br> well-being, utilizing the latest medical advancements to ensure 
                  the highest <br> standard of care in a welcoming and supportive environment. <br> Because at Ohana, our 
                   focus is truly the Care of You.</p>
            <div class="btn-inbox">
                <button class="appoinment">Book Appointment</button>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
