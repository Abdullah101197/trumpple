
 <!--HERO SECTION-->
 <div class="contact-hero-container">
    <h3>Contact Us</h3>
    <p class="container">
        Easily reach out to us with any questions or concerns. Our dedicated team is here to assist you with your inquiries and ensure a smooth experience.
    </p>
 </div>
 <!--HERO SECTION-->
 <!--CONTACT    SECTION-->
 <div class="container contact-container">
    <div class="row mx-0">
        <div class="col-lg-8 col-md-7 col-sm-12">
<div class="contact-fields-container">
    <div class="mb-3">
    <form method="post" action="<?php echo base_url('home/send_message'); ?>">

        <label for="exampleFormControlInput1" class="form-label">First Name</label>
        <input  class="form-control" id="exampleFormControlInput1" placeholder="YOUR FIRST NAME" name="name" type="text" />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="YOUR LAST NAME">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">First Name</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="YOUR EMAIL " name="email" type="email" inputmode="email" x-inputmode="email" required />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control contact-textarea" id="exampleFormControlTextarea1" rows="3" placeholder="YOUR MESSAGE" name="message" required></textarea>
      </div>

      <div class="input-wrp">
                        <?php if ($settings->enable_captcha == 1 && $settings->captcha_site_key != ''): ?>
                            <div class="g-recaptcha pull-left" data-sitekey="<?php echo html_escape($settings->captcha_site_key); ?>"></div>
                        <?php endif ?>
                    </div>
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
      <button class="contact-btn" type="submit" role="button">Send Message</button>
      <div class="formnote"></div>

      </form>
</div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="contact-right-container">
                <h3>Our Office</h3>
                <div class="contact-text-container">
                    <h5>Office Address</h5>
                    <p>138 E 12300 S Unit #887 Draper, UT 84020</p>
                    <h5>Our Email</h5>
                    <p>info@trumpple.com</p>
                    <h5>Phone Number</h5>
                    <p>+1 (385) 777-8214</p>
                    <h5>Social Media</h5>
                    <div class="d-flex align-items-center social-media">
                        <a href="https://www.facebook.com/trumpple" target="_blank">
                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16.2949" cy="16" r="16" fill="#541554"/>
                            <path d="M9.11092 20V11.6H14.5349V12.836H10.6469V15.188H13.7909V16.4H10.6469V20H9.11092ZM15.7203 20V11.6H19.0923C19.9643 11.6 20.6283 11.804 21.0843 12.212C21.5483 12.612 21.7803 13.128 21.7803 13.76C21.7803 14.288 21.6363 14.712 21.3483 15.032C21.0683 15.344 20.7243 15.556 20.3163 15.668C20.7963 15.764 21.1923 16.004 21.5043 16.388C21.8163 16.764 21.9723 17.204 21.9723 17.708C21.9723 18.372 21.7323 18.92 21.2523 19.352C20.7723 19.784 20.0923 20 19.2123 20H15.7203ZM17.2563 15.128H18.8643C19.2963 15.128 19.6283 15.028 19.8603 14.828C20.0923 14.628 20.2083 14.344 20.2083 13.976C20.2083 13.624 20.0923 13.348 19.8603 13.148C19.6363 12.94 19.2963 12.836 18.8403 12.836H17.2563V15.128ZM17.2563 18.752H18.9723C19.4283 18.752 19.7803 18.648 20.0283 18.44C20.2843 18.224 20.4123 17.924 20.4123 17.54C20.4123 17.148 20.2803 16.84 20.0163 16.616C19.7523 16.392 19.3963 16.28 18.9483 16.28H17.2563V18.752Z" fill="white"/>
                            </svg>
                            </a>
                            <a href="https://www.instagram.com/jointrumpple/?igshid=YmMyMTA2M2Y%3D" target="_blank">

                            <svg  width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16.2949" cy="16" r="16" fill="#541554"/>
                                <path d="M10.1109 20V11.6H11.6469V20H10.1109ZM16.947 20.144C16.155 20.144 15.463 19.964 14.871 19.604C14.279 19.244 13.819 18.744 13.491 18.104C13.163 17.456 12.999 16.704 12.999 15.848C12.999 14.984 13.167 14.224 13.503 13.568C13.847 12.904 14.331 12.388 14.955 12.02C15.587 11.644 16.335 11.456 17.199 11.456C18.183 11.456 18.999 11.692 19.647 12.164C20.295 12.636 20.715 13.288 20.907 14.12H19.191C19.063 13.728 18.831 13.424 18.495 13.208C18.159 12.984 17.727 12.872 17.199 12.872C16.359 12.872 15.711 13.14 15.255 13.676C14.799 14.204 14.571 14.932 14.571 15.86C14.571 16.788 14.795 17.508 15.243 18.02C15.699 18.524 16.315 18.776 17.091 18.776C17.851 18.776 18.423 18.572 18.807 18.164C19.199 17.748 19.435 17.204 19.515 16.532H17.391V15.38H21.063V20H19.647L19.527 18.896C19.255 19.296 18.915 19.604 18.507 19.82C18.099 20.036 17.579 20.144 16.947 20.144Z" fill="white"/>
                                </svg>
                                </a>
                                <a href="#" target="_blank">
                                   <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16.2949" cy="16" r="16" fill="#541554"/>
                                    <path d="M11.488 20V17.012L8.668 11.6H10.408L12.268 15.476L14.116 11.6H15.832L13.024 17.012V20H11.488ZM18.772 20V12.836H16.324V11.6H22.768V12.836H20.308V20H18.772Z" fill="white"/>
                                      </svg>   
                                    </a>
                                 <a href="https://www.linkedin.com/company/trumpple/" target="_blank">

                                <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="16.2949" cy="16" r="16" fill="#541554"/>
                                    <path d="M12.2242 20V11.6H13.7602V18.8H17.4802V20H12.2242ZM18.8336 20V11.6H20.3696V20H18.8336Z" fill="white"/>
                                    </svg>
                                    </a>
                                   
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

     <!--LAST SECTION-->
     <div class="landing-last-sec">
        <h3>
            Exceeding Expectations: Bring Your Vision to Life with Us
        </h3>
        <button>                          <a style="color:#662b66" class="link-text" href="<?php echo base_url('register') ?>">Let’s Get Started</a>
</button>
    </div>

   