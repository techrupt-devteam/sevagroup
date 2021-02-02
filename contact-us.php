<?php include('header.php')?>
  <div class="text-center bg-fixed breadcrumb-area dark padding-xl shadow text-light" style="background-image:url(assets/images/12.png);background-position: center center;background-size: cover;">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 text-center">
	        <h2 class="text-uppercase text-bold">Contact Us</h2>
	      </div>
	    </div>
	  </div>
	</div>
<main id="main">
	<section id="contact" class="contact-section contact">
            <div class="container">
               <!-- Sec Title -->
               <div class="sec-title text-center">
                  <h2><span class="theme_color">GET IN  </span> TOUCH</h2>
                  <div class="text">Thank you very much for your interest in our company and our services </div>
               </div>
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
               <!--End Default Form-->
            </div>
         </section>
</main>

<?php include('footer.php');?>	