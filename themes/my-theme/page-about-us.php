<?php get_header(); ?>

<section class="container-banner">
    <div class="hero-banner">
        <div class="logo-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/about.jpg" alt="<?php bloginfo('clinic'); ?>">
        </div>

        <div class="banner">
            <h1>About us </h1>
            <p>Home/page/About</p>
        </div>
    </div>
    <div class="section">
        <div class="section-image">
            <div class="section-image1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/service-one.jpg" alt="<?php bloginfo('clinic'); ?>">
            </div>
        </div>
        <div class="section-box">
            <h1>Our Story</h1>
            <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, minima."</p>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus totam ducimus <br> est vero, officiis, placeat optio. Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>  Alias aliquam nesciunt fugit optio illum aut. Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Neque assumenda, est quam perferendis expedita autem?</span>
            <h3>Mission</h3>
            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam nihil dolorum beatae <br>consequatur mollitia iure?</span>
            <h3>Vision</h3>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda consectetur <br> adipisci, voluptatum dolores nostrum omnis.</span>
        </div>
        </div>
    </div>
</section>


<section class="doctor-section">
        <h1 class="tittle"><span>Our Experience</span> Doctors</h1>
        
        <div class="doctor-list">
            
            <div class="doctor-box">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor12.png" alt="<?php bloginfo('clinic'); ?>">
                </div>
                
                <div class="name-dr">
                    <h3 class="name">Dr. Jane Smith </h3>
                    <p>Department</p>
                    
                    <div class="icon-dr">
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="btn-pf">
                        <button class="profile">View Profile</button>
                    </div>
                </div>
            </div>

            <div class="doctor-box">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor22.png" alt="<?php bloginfo('clinic'); ?>">
                </div>
                
                <div class="name-dr">
                    <h3 class="name">Dr. Marry Lou</h3>
                    <p>Department</p>
                    
                    <div class="icon-dr">
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="btn-pf">
                        <button class="profile">View Profile</button>
                    </div>
                </div>
            </div>

            <div class="doctor-box">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor33.png" alt="<?php bloginfo('clinic'); ?>">
                </div>
                
                <div class="name-dr">
                    <h3 class="name">Dr. Sansa Stark</h3>
                    <p>Department</p>
                    
                    <div class="icon-dr">
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="btn-pf">
                        <button class="profile">View Profile</button>
                    </div>
                </div>
            </div>

            <div class="doctor-box">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor44.png" alt="<?php bloginfo('clinic'); ?>">
                </div>
                
                <div class="name-dr">
                    <h3 class="name">Dr. John Doe</h3>
                    <p>Department</p>
                    
                    <div class="icon-dr">
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="btn-pf">
                        <button class="profile">View Profile</button>
                    </div>
                </div>
            </div>

        </div>
    
    </div>   
</section>



<section class="appointment-page">
    <h1 class="tittle"><span>Make an Appointment</span> To Visit Our Dovtor</h1>
    <div class="content"></div>
        <div class="appt-content">

            <div class="appt-box">
                <form action="">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <input type="tel" placeholder="Your Mobile" required>
                    <input type="date" placeholder=" Date" required>


                    <select required>
                        <option value="" disabled selected>Choose Doctor</option>
                        <option value="cardiology">Dr. Jane Smith</option>
                        <option value="pediatrics">Dr. John Doe</option>
                        <option value="orthopedics">Dr. Emily Johnson</option>
                        <option value="neurology">Dr. Michael Brown</option>
                        <option value="gynecology">Dr. Sarah Davis</option>
                        <option value="pulmonary">Dr. Robert Wilson</option>
                    </select>

                    
                    <select required>
                        <option value="cardiology">Cardiology</option>
                        <option value="pediatrics">Pediatrics</option>
                        <option value="orthopedics">Orthopedics</option>
                        <option value="neurology">Neurology</option>
                        <option value="gynecology">Gynecology</option>
                        <option value="pulmonary">Pulmonary</option>
                    </select>
                    <div class="message">    
                        <input type="text" placeholder="Your Message" required>

                    </div>
                    <button type="submit" class="submit-btn">Book Appointment</button>
                </form>
            </div>

            <div class="appt-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor55.png" alt="<?php bloginfo('clinic'); ?>">
            </div>

        </div>

</section>






<?php get_footer(); ?>