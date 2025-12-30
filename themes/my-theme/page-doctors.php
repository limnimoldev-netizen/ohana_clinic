<?php get_header(); ?>

<section class="container-banner">
    <div class="hero-banner">
        <div class="logo-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/about.jpg" alt="<?php bloginfo('clinic'); ?>">
        </div>

        <div class="banner">
            <h1>Your health is our priorty</h1>
             <div class="btn-inbox">
                <button class="appoinment">Book Appointment</button>
            </div>
        </div>
    </div>
</section>


<section class="doctor-section">
        <h1 class="tittle"><span>Our Experience</span> Doctors</h1>
        
        <div class="doctor-list">
            
            <div class="doctor-box">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor1.png" alt="<?php bloginfo('clinic'); ?>">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor2.png" alt="<?php bloginfo('clinic'); ?>">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor3.png" alt="<?php bloginfo('clinic'); ?>">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor4.png" alt="<?php bloginfo('clinic'); ?>">
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

<section class="doctor-section">
        
        <div class="doctor-list">
            
            <div class="doctor-box">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor3.png" alt="<?php bloginfo('clinic'); ?>">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor4.png" alt="<?php bloginfo('clinic'); ?>">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor1.png" alt="<?php bloginfo('clinic'); ?>">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor2.png" alt="<?php bloginfo('clinic'); ?>">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctor5.png" alt="<?php bloginfo('clinic'); ?>">
            </div>

        </div>

</section>
<?php get_footer(); ?>