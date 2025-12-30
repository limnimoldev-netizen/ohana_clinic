<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<section class="service-page">

    <div class="hero-banner2">
        <div class="logo-banner2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner1.png" alt="<?php bloginfo('clinic'); ?>">
        </div>

        <div class="banner2">
            <h1>Our Services</h1>
            <p>Comprehensive healthcare services tailored to meet your needs. </p>
            <div class="btn-inbox2">
                <button class="appoinment">Book Appointment</button>
            </div>
        </div>

    </div>

</section>

<section class="svervice-page">
    <h1 class="tittle"><span>Our Provided</span> Pervices</h1>
    
        <div class="service-content">
            
            <div class="service-item">
                
                <div class="service-box">
                    
                        <i class="fas fa-heartbeat"></i>
                    <h3>Cardiology</h3>
                    <p>Comprehensive cardiac care including diagnostics, treatment, and rehabilitation for heart conditions conditions.</p>

                    <div class="btn-readmore">
                        <button class="readmore">Read More</button>
                    </div>

                </div>

                <div class="service-box">
                        <i class="fa-solid fa-baby"></i>
                    <h3>Pediatrics</h3>
                    <p>Dedicated healthcare services for infants, children, and adolescents to ensure healthy growth and development.</p>

                    <div class="btn-readmore">
                        <button class="readmore">Read More</button>
                    </div>

                </div>

                <div class="service-box">
                        <i class="fa-solid fa-wheelchair"></i>
                    <h3>Orthopedics</h3>
                    <p>Advanced treatment for musculoskeletal issues including fractures, joint problems, and sports injuries.</p>

                    <div class="btn-readmore">
                        <button class="readmore">Read More</button>
                </div>

                </div>

                

            </div>
        
            <div class="service-item">
                
                <div class="service-box">
                        <i class="fa-solid fa-brain"></i>
                    <h3>Neurology</h3>
                    <p>Expert care for neurological disorders such as epilepsy, stroke, and neurodegenerative diseases.</p>

                    <div class="btn-readmore">
                        <button class="readmore">Read More</button>
                    </div>
                </div>
                
                <div class="service-box">
                       <i class="fas fa-viruses"></i>
                    <h3>Gynecology</h3>
                    <p>Comprehensive women's health services including reproductive care, prenatal, and postnatal support.</p>

                    <div class="btn-readmore">
                        <button class="readmore">Read More</button>
                    </div>
                </div> 
                
                <div class="service-box">
                        <i class="fas fa-lungs-virus"></i>
                    <h3 class="">pulmonary</h3>
                    <p>Specialized care for respiratory conditions such as asthma, COPD, and lung infections.</p>
                    
                    <div class="btn-readmore">
                        <button class="readmore">Read More</button>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/doctors.png" alt="<?php bloginfo('clinic'); ?>">
            </div>

        </div>

</section>

<section class="about-page">
    <h1 class="tittle"><span>What Our </span> Patients Say!</h1>

    <div class="patient-content">
        
        <div class="patient-items">
            <div class="image-patient">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/patient.png" alt="<?php bloginfo('clinic'); ?>">
            </div>
            <div class="patient-says">
                <h3> Sarah Lou</h3> 
                <p>"I had an amazing experience at Ohana Clinic. The staff were incredibly friendly and attentive, and the doctors took the time to explain everything to me. I felt truly cared for and supported throughout my treatment. Highly recommend!"</p>
                <div class="icon-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>    
                </div>
            </div>
        </div>


        <div class="patient-items">
            <div class="image-patient">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/patient2.png" alt="<?php bloginfo('clinic'); ?>">
            </div>
            <div class="patient-says">
                <h3> Emily Clark</h3> 
                <p>"I can't thank Ohana Clinic enough for the outstanding care I received. The staff went above and beyond to ensure my comfort and well-being. The doctors were thorough and attentive, making me feel valued as a patient. I highly recommend Ohana Clinic to anyone seeking quality healthcare."</p>
                <div class="icon-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>             
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

    
        <div class="patient-items">
            <div class="image-patient">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/patient3.png" alt="<?php bloginfo('clinic'); ?>">
            </div>
            <div class="patient-says">
                <h3> Emily Clark</h3> 
                <p>"I can't thank Ohana Clinic enough for the outstanding care I received. The staff went above and beyond to ensure my comfort and well-being. The doctors were thorough and attentive, making me feel valued as a patient. I highly recommend Ohana Clinic to anyone seeking quality healthcare."</p>
                <div class="icon-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>             
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

    </div>
     
</section>







<?php get_footer(); ?>
