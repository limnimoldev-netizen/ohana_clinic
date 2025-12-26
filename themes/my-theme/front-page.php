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

<section class="feature-section">
    <h1 class="tittle"> <span>Best Features</span> Of Our Hospital</h1>
    
    <div class="feature-content">
        
        <div class="feature-box">
            <div class="icon-feature">
                <i class="fa-solid fa-hospital"></i>
            </div>
            <h3>24/7 Service</h3>
            <p>We provide round-the-clock medical services to ensure that you and your family receive care whenever you need it.</p>
        </div>

        <div class="feature-box">
            <div class="icon-feature">
                <i class="fa-solid fa-user-doctor"></i>
            </div>
            <h3>Expert Doctors</h3>
            <p>Our team of highly skilled and experienced doctors are dedicated to providing the best possible care for our patients.</p>
        </div>

        <div class="feature-box">
            <div class="icon-feature">
                <i class="fa-solid fa-briefcase-medical"></i>
            </div>
            <h3>Modern Equipment</h3>
            <p>We utilize state-of-the-art medical equipment to ensure accurate diagnoses and effective treatments for our patients.</p>
        </div>

        <div class="feature-box">
            <div class="icon-feature">
                <i class="fa-solid fa-ambulance"></i>
            </div>
            <h3>Emergency Care</h3>
            <p>Our emergency care services are designed to provide immediate medical attention for urgent health situations.</p>
        </div>
        
</section>
 
<section class="doctor-section">
    <div class="doctors-content">
        <h1 class="tittle"><span>Our Expert</span> Doctors</h1>
        
        <div class="doctor-list">
            <div class="doctor-box">
                
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor.png" alt="<?php bloginfo('clinic'); ?>">
                </div>
                
                <div class="infor-dr">
                    <h2 class="name">Dr. John Doe</h2>
                    <p>Department</p>
                    
                    <div class="icon-dr">
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                        
                </div>
               
            </div>
        </div>
    
    </div>

    
</section>


<?php get_footer(); ?>
