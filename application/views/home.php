

    <!--LANDING PAGE HERO-->
    <div class="landing-hero-container">
        <div class="landing-hero-inner-container">
            <div class="landing-hero-inner-items-container">
                <h1>
                <?php echo html_escape(settings()->description) ?>

                
                </h1>
                <div class="landing-hero-btn-container">
                <?php if (!is_admin() && !is_user() && settings()->trial_days != 0): ?>
                            <button class="free-btn" data-aos="fade-left" data-aos-delay="400"><a class="link-text" href="<?php echo base_url('register?trial=start') ?>">Try For Free</a> </button>
                            <?php endif; ?>
                    <button class="our-service" data-aos="fade-left" data-aos-delay="400"><a href="#">Our Services</a></button>
                </div>
            </div>
            <div class="landing-image-container">
            <img  class="hero-landing-img" src="<?php echo base_url(settings()->hero_img) ?>" alt="landing-image">

                <div class="landing-logo-images-container">
                    <img src="./assets/images/image1.png" alt="image-1" class="img-1" />
                    <img src="./assets/images/image2.png" alt="image-1" class="img-2" />
                    <img src="./assets/images/image3.png" alt="image-1" class="img-3" />
                    <img src="./assets/images/image4.png" alt="image-1" class="img-4" />
                    <img src="./assets/images/image5.png" alt="image-1" class="img-5" />
                    <img src="./assets/images/image6.png" alt="image-1" class="img-6" />

                </div>
            </div>
        </div>
    </div>
    <!--LANDING PAGE HERO-->
    <!--LANDING PAGE FEATURES-->
    <div class="landing-features-container container">
        <h5>Features</h5>
        <h3>Get benefits and advantages</h3>
        <p>while we can customize your plan to suit your needs, most clients schedule regular services</p>
        <div class="row mx-0 features-items-row">
            <div class="col-lg-4 col-md-6 col-sm-12  d-flex align-items-center justify-content-center">
                <div class="feature-items-container">
                    <img src="./assets/images/accounts.png" alt="features-icons" />
                    <h3>Accounting</h3>
                    <p>Consolidate accounting operations for all accounts in one centralized platform with in-depth
                        reports.</p>
                        
                    <button><a class="link-text" href="<?php echo base_url('pricing') ?>">See Plans</a></button>
                    <h6>
                    <a class="text-explore" href="<?php echo base_url('accounting') ?>">Explore</a>

                    </h6>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                <div class="feature-items-container">
                    <img src="./assets/images/sales.png" alt="features-icons" />
                    <h3>Sales & Purchases</h3>
                    <p>Streamline your sales and purchases process with our accounting software. Easily manage invoices,
                        receipts, and payments all in one place.</p>
                    <button><a class="link-text" href="<?php echo base_url('pricing') ?>">See Plans</a></button>
                    <h6>
                    <a class="text-explore" href="<?php echo base_url('sales') ?>">Explore</a>

                    </h6>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                <div class="feature-items-container">
                    <img src="./assets/images/book.png" alt="features-icons" />
                    <h3>Bookkeeping</h3>
                    <p>Stay organized and in control with our bookkeeping feature. Keep track of all your financial
                        transactions with ease.</p>
                        <button><a class="link-text" href="<?php echo base_url('pricing') ?>">See Plans</a></button>

                        <h6>
                    <a class="text-explore" href="<?php echo base_url('book_keeping') ?>">Explore</a>

                    </h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                <div class="feature-items-container">
                    <img src="./assets/images/invoice.png" alt="features-icons" />
                    <h3>Invoicing</h3>
                    <p>Streamline your invoicing process with our accounting software. Create and send professional
                        invoices with ease.</p>

                        <button><a class="link-text" href="<?php echo base_url('pricing') ?>">See Plans</a></button>
                        <h6>
                    <a class="text-explore" href="<?php echo base_url('invocie-customization') ?>">Explore</a>

                    </h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                <div class="feature-items-container">
                    <img src="./assets/images/estimates.png" alt="features-icons" />
                    <h3>Estimates</h3>
                    <p>Send accurate and professional estimates with our accounting software. Streamline your sales
                        process and win more business.</p>
                    
                        <button><a class="link-text" href="<?php echo base_url('pricing') ?>">See Plans</a></button>

                        <h6>
                    <a class="text-explore" href="<?php echo base_url('estimate') ?>">Explore</a>

                    </h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                <div class="feature-items-container">
                    <img src="./assets/images/payment.png" alt="features-icons" />
                    <h3>Payment</h3>
                    <p>Streamline your payments process with our accounting software. Accept payments, track
                        transactions, and monitor cash flow with ease.</p>

                        <button><a class="link-text" href="<?php echo base_url('pricing') ?>">See Plans</a></button>

                        <h6>
                    <a class="text-explore" href="<?php echo base_url('payment-setting') ?>">Explore</a>

                    </h6>
                        
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <p class="mb-0 feature-bottom-text">                     <a class="text-explore" href="<?php echo base_url('features') ?>">All Features</a>
 </p>
            <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.125 0.999999C12.125 0.585786 11.7892 0.249999 11.375 0.249999L4.625 0.25C4.21078 0.25 3.875 0.585787 3.875 1C3.875 1.41421 4.21078 1.75 4.625 1.75L10.625 1.75L10.625 7.75C10.625 8.16421 10.9608 8.5 11.375 8.5C11.7892 8.5 12.125 8.16421 12.125 7.75L12.125 0.999999ZM1.90533 11.5303L11.9053 1.53033L10.8447 0.469669L0.84467 10.4697L1.90533 11.5303Z"
                    fill="#541554" />
            </svg>

        </div>
    </div>
    <!--LANDING PAGE FEATURES-->
    <!--LANDING PAGE PERSONALIZE JOURNEY-->
    <div class="personalize-journey-container container ">
        <div class="row mx-0 personalize-row">
            <div class="col-lg-6 col-md-12 personalize-journey-left">
                <div class="dark-rounded-bg">
                    <img src="./assets/images/features.png" alt="features-img" class="personalize-img" />
                    <div class="blue-circle"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="personalize-journey-text-container">
                    <h6>what’s next?</h6>
                    <h3>Personalize Your Journey for Optimal Results</h3>
                    <p>Tailor your time saving approach to suit your individual needs and financial situation. By
                        customizing your approach, you can maximize your savings and achieve greater financial growth
                        over time.</p>
                    <button><a class="link-text" href="<?php echo base_url('invocie-customization') ?>">Learn More</a></button>
                </div>
            </div>
        </div>
    </div>
    <!--LANDING PAGE PERSONALIZE JOURNEY-->
    <!--LANDING PAGE TRUMPPLE OFFERING-->
    <div class="offering-container container ">
        <div class="row mx-0 offering-row">
            <div class="col-lg-7 col-md-12 offering-section-left">
                <img src="./assets/images/Hero.png" class="" />
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="offering-text-container">
                    <h3>Trumpple offering versatile functionality for Multiple Purposes</h3>
                    <div class="offering-text-items">
                        <svg style="margin-top: 5px;" width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M28.6001 18.1867V19.52C28.6001 19.88 28.3201 20.1734 27.9468 20.1867H26.0001C25.2934 20.1867 24.6534 19.6667 24.6001 18.9734C24.5601 18.56 24.7201 18.1734 24.9868 17.9067C25.2268 17.6534 25.5601 17.52 25.9201 17.52H27.9334C28.3201 17.5334 28.6001 17.8267 28.6001 18.1867Z"
                                fill="#171620" />
                            <path
                                d="M23.9866 16.92C23.3199 17.5733 22.9999 18.5466 23.2666 19.56C23.6133 20.8 24.8266 21.5866 26.1066 21.5866H27.2666C27.9999 21.5866 28.5999 22.1866 28.5999 22.92V23.1733C28.5999 25.9333 26.3466 28.1866 23.5866 28.1866H8.27993C5.51994 28.1866 3.2666 25.9333 3.2666 23.1733V14.2C3.2666 12.56 4.05327 11.1066 5.2666 10.2C6.1066 9.55998 7.1466 9.18665 8.27993 9.18665H23.5866C26.3466 9.18665 28.5999 11.44 28.5999 14.2V14.7866C28.5999 15.52 27.9999 16.12 27.2666 16.12H25.9066C25.1599 16.12 24.4799 16.4133 23.9866 16.92Z"
                                fill="#171620" />
                            <path
                                d="M21.5999 6.42669C21.9599 6.78669 21.6532 7.34669 21.1466 7.34669L10.9066 7.33335C10.3199 7.33335 10.0132 6.61335 10.4399 6.20002L12.5999 4.02669C14.4266 2.21335 17.3866 2.21335 19.2132 4.02669L21.5466 6.38669C21.5599 6.40002 21.5866 6.41335 21.5999 6.42669Z"
                                fill="#171620" />
                        </svg>
                        <div class="offering-text-items-inner">
                            <h5 class="mb-0">Saving</h5>
                            <p>Empowering financial resilience through proactive saving strategies.</p>
                        </div>

                    </div>


                    <div class="offering-text-items">
                        <svg style="margin-top: 7px;" width="26" height="26" viewBox="0 0 26 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.0933 2.00002C22.2133 1.34669 20.9466 1.97335 20.9466 3.08002V3.21335C20.9466 4.77335 19.8266 6.21335 18.2666 6.37335C16.4666 6.56002 14.9466 5.14669 14.9466 3.38669V2.00002C14.9466 1.26669 14.3466 0.666687 13.6133 0.666687H12.3866C11.6533 0.666687 11.0533 1.26669 11.0533 2.00002V3.21335C11.0533 4.38669 10.4266 5.48002 9.45325 6.01335C9.39992 6.05335 9.34659 6.08002 9.29325 6.10669C9.27992 6.10669 9.27992 6.12002 9.26659 6.12002C9.17325 6.16002 9.07992 6.20002 8.97325 6.24002C8.94658 6.25335 8.91992 6.25335 8.89325 6.26669C8.73325 6.32002 8.55992 6.36002 8.37325 6.37335H8.35992C8.15992 6.40002 7.94659 6.40002 7.74659 6.37335H7.73325C7.54659 6.36002 7.37325 6.32002 7.21325 6.26669C7.07992 6.22669 6.94659 6.17335 6.81325 6.10669C5.77325 5.64002 5.05325 4.60002 5.05325 3.38669V3.08002C5.05325 2.05335 3.95992 1.44002 3.09325 1.88002C3.07992 1.89335 3.06659 1.89335 3.05325 1.90669H3.03992C2.94659 1.97335 2.86659 2.04002 2.77325 2.10669C2.62659 2.22669 2.47992 2.34669 2.34659 2.48002C2.25325 2.57335 2.15992 2.66669 2.07992 2.76002C1.97325 2.86669 1.87992 2.97335 1.78659 3.09335C1.71992 3.17335 1.63992 3.25335 1.58659 3.34669C1.51992 3.42669 1.46659 3.52002 1.41325 3.60002C1.39992 3.61335 1.38659 3.62669 1.37325 3.65335C1.25325 3.82669 1.14659 4.02669 1.05325 4.21335C1.02659 4.24002 1.01325 4.25335 1.01325 4.28002C0.933252 4.44002 0.853252 4.60002 0.799919 4.77335C0.759919 4.84002 0.746585 4.89335 0.719919 4.96002C0.693252 5.01335 0.679919 5.08002 0.653252 5.13335C0.613252 5.26669 0.573252 5.41335 0.533252 5.56002C0.479919 5.74669 0.439919 5.94669 0.413252 6.14669C0.386585 6.29335 0.373252 6.44002 0.359919 6.60002C0.346585 6.78669 0.333252 6.97335 0.333252 7.16002V18.84C0.333252 22.4267 3.23992 25.3334 6.82659 25.3334H13.2533C13.9866 25.3334 14.5866 24.7334 14.5866 24V19.8134C14.5866 16.7467 17.1333 14.2534 20.2666 14.2534C20.9733 14.24 22.6933 14.24 24.3333 14.24C25.0666 14.24 25.6666 13.64 25.6666 12.9067V7.16002C25.6666 5.04002 24.6533 3.18669 23.0933 2.00002ZM11.8399 17.2134C11.7199 17.6134 11.3466 17.8934 10.9066 17.8934H6.05325C5.98659 17.8934 5.93325 17.8934 5.87992 17.8667C5.39992 17.8 5.05325 17.3867 5.05325 16.8934C5.05325 16.3334 5.49325 15.88 6.05325 15.88H10.9066C11.4533 15.88 11.9066 16.3334 11.9066 16.8934C11.9066 17 11.8933 17.12 11.8399 17.2134ZM15.5466 12.2667C15.4266 12.6667 15.0533 12.9467 14.6133 12.9467H6.05325C5.98659 12.9467 5.93325 12.9467 5.87992 12.92C5.39992 12.8534 5.05325 12.44 5.05325 11.9467C5.05325 11.3867 5.49325 10.9334 6.05325 10.9334H14.6133C15.1733 10.9334 15.6133 11.3867 15.6133 11.9467C15.6133 12.0534 15.5999 12.1734 15.5466 12.2667Z"
                                fill="#171620" />
                        </svg>
                        <div class="offering-text-items-inner">
                            <h5>Payment</h5>
                            <p>
                                Save time and increase efficiency with our payments feature. Automated reminders and
                                follow-ups, and customizable payment plans help ensure timely payment.
                            </p>
                        </div>

                    </div>

                    <div class="offering-text-items">
                        <svg style="margin-top: 7px;" width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.9599 0.533348C6.59993 0.560014 0.639926 6.54668 0.666593 13.9067C0.69326 21.2667 6.67993 27.2267 14.0399 27.2C21.3999 27.1733 27.3599 21.1867 27.3333 13.8267C27.3066 6.46668 21.3199 0.520014 13.9599 0.533348ZM17.0133 14C18.0533 14.36 19.4533 15.1333 19.4533 17.52C19.4533 19.5733 17.8399 21.2267 15.8666 21.2267H14.9999V22C14.9999 22.5467 14.5466 23 13.9999 23C13.4533 23 12.9999 22.5467 12.9999 22V21.2267H12.5199C10.3333 21.2267 8.55993 19.3867 8.55993 17.12C8.55993 16.5733 9.01326 16.12 9.55993 16.12C10.1066 16.12 10.5599 16.5733 10.5599 17.12C10.5599 18.28 11.4399 19.2267 12.5199 19.2267H12.9999V14.72L10.9866 14C9.94659 13.64 8.54659 12.8667 8.54659 10.48C8.54659 8.42668 10.1599 6.77335 12.1333 6.77335H12.9999V6.00001C12.9999 5.45335 13.4533 5.00001 13.9999 5.00001C14.5466 5.00001 14.9999 5.45335 14.9999 6.00001V6.77335H15.4799C17.6666 6.77335 19.4399 8.61335 19.4399 10.88C19.4399 11.4267 18.9866 11.88 18.4399 11.88C17.8933 11.88 17.4399 11.4267 17.4399 10.88C17.4399 9.72001 16.5599 8.77335 15.4799 8.77335H14.9999V13.28L17.0133 14Z"
                                fill="#171620" />
                        </svg>
                        <div class="offering-text-items-inner">

                            <h5>Multi-currencies</h5>
                            <p>Save time and increase efficiency with our payments feature. Automated reminders and
                                follow-ups, and customizable payment plans help ensure timely payment.</p>
                        </div>

                    </div>
                    <button>Learn More</button>
                </div>
            </div>
        </div>
    </div>
    <!--ORGANIZE WORK SECTION-->
    <div class="organize-work-container">
        <div class="container organize-work-inner-container">
            <h5>FEATURES</h5>
            <h3>Organize work your way.</h3>
            <div class="nav-pills-parent">
                <ul class="nav landing-nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-pills-item" role="presentation">
                        <button class="nav-pills-item active" id="pills-Invoice-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Invoice" type="button" role="tab" aria-controls="pills-Invoice"
                            aria-selected="true">Invoice Customization</button>
                    </li>
                    <li class="nav-pills-item" role="presentation">
                        <button class="nav-pills-item" id="pills-Payments-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Payments" type="button" role="tab" aria-controls="pills-Payments"
                            aria-selected="false">Payments</button>
                    </li>
                    <li class="nav-pills-item" role="presentation">
                        <button class="nav-pills-item" id="pills-Categories-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Categories" type="button" role="tab" aria-controls="pills-Categories"
                            aria-selected="false">Categories</button>
                    </li>
                    <li class="nav-pills-item" role="presentation">
                        <button class="nav-pills-item" id="pills-Tax-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Tax" type="button" role="tab" aria-controls="pills-Tax"
                            aria-selected="false">Tax</button>
                    </li>
                    <li class="nav-pills-item" role="presentation">
                        <button class="nav-pills-item" id="pills-Currencies-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Currencies" type="button" role="tab" aria-controls="pills-Currencies"
                            aria-selected="false">Multiple Currencies</button>
                    </li>
                    <li class="nav-pills-item" role="presentation">
                        <button class="nav-pills-item" id="pills-Managment-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Managment" type="button" role="tab" aria-controls="pills-Managment"
                            aria-selected="false">Role Access & Managment</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content work-tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-Invoice" role="tabpanel"
                    aria-labelledby="pills-Invoice-tab">
                    <div class="tabSetting">
                        <div class="row">
                            <div class="col-lg-5 organize-work-text-container">
                                <h5>Invoice Customization</h5>
                                <h3>Customize Invoices Instantly</h3>
                                <p>Quickly and easily personalize invoices to match your brand, with flexible options
                                    for font, color, and logos. Save time and make a professional impression on clients
                                    with custom invoices.</p>
                            </div>
                            <div class="col-lg-7  organize-work-tab-img">

                                <img src="./assets\images\image 118.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Payments" role="tabpanel" aria-labelledby="pills-Payments-tab">
                    <div class="tabSetting">
                        <div class="row">
                            <div class="col-lg-5 organize-work-text-container">
                                <h5>Payments</h5>
                                <h3>Automate Payment Processing</h3>
                                <p>Accelerate and simplify your payment process with our advanced automation
                                    features. Effortlessly
                                    manage and track payments, reducing manual effort and errors.</p>
                            </div>
                            <div class="col-lg-7 organize-work-tab-img">

                                <img src="./assets\images\work_organize.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Categories" role="tabpanel" aria-labelledby="pills-Categories-tab">
                    <div class="tabSetting">
                        <div class="row">
                            <div class="col-lg-5 organize-work-text-container">
                                <h5>Categories</h5>
                                <h3>Easily Categorize Transactions</h3>
                                <p>Our software simplifies bookkeeping. Easy categorization, bank data input, and report
                                    generation. Goodbye manual data entry, welcome stress-free accounting.</p>
                            </div>
                            <div class="col-lg-7 organize-work-tab-img">

                                <img src="./assets\images\organize_categories.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Tax" role="tabpanel" aria-labelledby="pills-Tax-tab">
                    <div class="tabSetting">
                        <div class="row">
                            <div class="col-lg-5 organize-work-text-container">
                                <h5>Tax</h5>
                                <h3>Stay Tax Compliant</h3>
                                <p>Keep up with tax law changes to avoid penalties. So you can focus on building your
                                    business without worrying about audits or fines, our software keeps your firm tax
                                    compliant.</p>
                            </div>
                            <div class="col-lg-7 organize-work-tab-img">

                                <img src="./assets\images\tax.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Currencies" role="tabpanel" aria-labelledby="pills-Currencies-tab">
                    <div class="tabSetting">
                        <div class="row">
                            <div class="col-lg-5 organize-work-text-container">
                                <h5>Multiple Currencies</h5>
                                <h3>Manage Global Finances</h3>
                                <p>Take control of your global finances with ease. Our software supports multiple
                                    currencies, so you can manage financial information from anywhere in the world,
                                    without the hassle of currency conversions.</p>
                            </div>
                            <div class="col-lg-7 organize-work-tab-img">

                                <img src="./assets\images\Multi_currencies.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Managment" role="tabpanel" aria-labelledby="pills-Managment-tab">

                    <div class="tabSetting">
                        <div class="row">
                            <div class="col-lg-5 organize-work-text-container">
                                <h5>Role Access and management</h5>
                                <h3>Manage Team Roles & Access</h3>
                                <p>Lead with confidence. You may set user roles and assign permissions in our software
                                    to provide each team member the access they need to complete their job.</p>
                            </div>
                            <div class="col-lg-7 organize-work-tab-img">
                                <img src="./assets\images\role_magment.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--ACCOUNTING SOLUTION-->
    <div class="accounting-sol-container">
        <h3>A custom accounting solution for diverse business needs</h3>
        <div class="row mx-0 account-row gx-0 ">
            <div class="row account-inner">
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="account-col-1">
                        <h5 class="account-col-heading">Startups</h5>
                        <p class="account-col-text">Empower your startup with seasoned financial professionals</p>
                        <button class="account-col-btn"><a class="last-sec-link-text" href="<?php echo base_url('pricing') ?>">See Plans</a></button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="account-col-2">
                        <h5 class="account-col-heading">Businesses</h5>
                        <p class="account-col-text">Focus on growth while we manage your finances</p>
                        <button class="account-col-btn"><a class="last-sec-link-text" href="<?php echo base_url('pricing') ?>">See Plans</a></button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="account-col-3">
                        <h5 class="account-col-heading">Accountants</h5>
                        <p class="account-col-text">Provide a hassle-free financial experience for your clients</p>
                        <button class="account-col-btn"><a class="last-sec-link-text" href="<?php echo base_url('pricing') ?>">See Plans</a></button>
                    </div>
                </div>
            </div>
            <img src="./assets/images/Subtract.png" alt="" class="account-sub-img" />

        </div>
    </div>
    <!--PAYMENT SECTION-->
    <div class="payment-container container">
        <h5>easy payment</h5>
        <h3>Value-Driven Pricing Options</h3>
        <p>Safe online payments and flexible booking management on desktop or mobile.</p>
        <nav>
            
            <div class="nav nav-payment-tabs" id="nav-tab" role="tablist">
                <button class="nav-payment-tab-item active" id="nav-monthly-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-monthly" type="button" role="tab" aria-controls="nav-monthly"
                    aria-selected="true">Monthly</button>
                   
                <button class="nav-payment-tab-item  yearly-text" id="nav-yearly-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-yearly" type="button" role="tab" aria-controls="nav-yearly"
                    aria-selected="false">
                    <span class="">Yearly</span>
                    <div id="discount_id"></div>
                    
                </button>

        </nav>
        <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-monthly" role="tabpanel" aria-labelledby="nav-monthly-tab">
        <div class="d-flex justify-content-center">
          <div class="row payment-row mx-0">
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
              <div class="pricing-plan-card-1">
                <?php $i = 1;
                foreach ($packages as $package): ?>
                  <?php if ($package->name == "Basic"): ?>

                    <h2 class="plans-heading-text">
                      <?php echo round($package->monthly_price); ?>
                      <?php echo currency_to_symbol(settings()->currency); ?> <span>/ month</span>
                    </h2>
                    <h3 class="plans-heading">
                      <?php echo html_escape($package->name); ?>
                    </h3>
                    <p class="plans-heading-body">Essential toolkit for the minimalist professional.</p>
                    <div class="plan-list">
                      <ul>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Send unlimited invoices to up to 5 clients</p>
                        </li>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Track unlimited expenses</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p>Send unlimited estimates</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Get paid with credit cards and bank transfers</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Track sales tax and see reports</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Accessible on iOS and Android devices(Coming soon)</p>
                        </li>
                      </ul>
                    </div>
                    <button class="btn-choose-Plan"><a style="color:#662b66" class="link-text"
                        href="<?php echo base_url('register?plan=' . $package->slug) ?>"> Choose Plan</a></button>



                  <?php endif ?>
                  <?php $i++; endforeach; ?>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
              <div class="pricing-plan-card-2">

                <?php $i = 1; foreach ($packages as $package): ?>
                  <?php if ($package->name == "Standard"): ?>

                    <h2 class="plans-heading-text">
                      <?php echo round($package->monthly_price); ?>
                      <?php echo currency_to_symbol(settings()->currency); ?> <span>/ month</span>
                    </h2>
                    <h3 class="plans-heading">
                      <?php echo html_escape($package->name); ?>
                    </h3>
                    <p class="plans-heading-body">Get more data-driven insights & smart automation.</p>
                    <div class="plan-list">
                      <ul>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Send unlimited invoices to up to 50 clients</p>
                        </li>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Automatically track expenses</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p>Send unlimited estimates and proposals</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Get paid with credit cards and bank transfers</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Run business health reports</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Double-entry accounting reports</p>
                        </li>

                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p> Invite your accountant for collaboration</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p> Accessible on iOS and Android devices(Coming soon)</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Mobile mileage tracking for on-the-go expenses</p>
                        </li>
                      </ul>
                    </div>
                    <button class="btn-choose-Plan"><a style="color:#662b66" class="link-text"
                        href="<?php echo base_url('register?plan=' . $package->slug) ?>"> Choose Plan</a></button>



                  <?php endif ?>
                  <?php $i++; endforeach; ?>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
              <div class="pricing-plan-card-3">
                <?php $i = 1; foreach ($packages as $package): ?>
                  <?php if ($package->name == "Premium"): ?>

                    <h2 class="plans-heading-text">
                      <?php echo round($package->monthly_price); ?>
                      <?php echo currency_to_symbol(settings()->currency); ?> <span>/ month</span>
                    </h2>
                    <h3 class="plans-heading">
                      <?php echo html_escape($package->name); ?>
                    </h3>
                    <p class="plans-heading-body">Fuel up your growth by empowering employees.</p>
                    <div class="plan-list">
                      <ul>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Send unlimited invoices to an unlimited number of clients</p>
                        </li>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Track bills, bill payments, and vendors with Accounts Payable</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p>Track project profitability</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Customize email templates with dynamic fields</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Customize email signatures</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Automatically track expenses</p>
                        </li>

                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Automatically send late payment reminders and bill late fees</p>
                        </li>
                        </li>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Send unlimited estimates and proposals</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p>Get paid with credit cards and bank transfers</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Get paid with checkout links</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Set up recurring billing and client retainers</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Run business health reports</p>
                        </li>

                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Run financial and accounting reports</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Invite your accountant for collaboration</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Accessible on iOS and Android devices(Coming soon)</p>
                        </li>
                      </ul>
                    </div>
                    <button class="btn-choose-Plan"><a style="color:#662b66" class="link-text"
                        href="<?php echo base_url('register?plan=' . $package->slug) ?>"> Choose Plan</a></button>



                  <?php endif ?>
                  <?php $i++; endforeach; ?>

              </div>
            </div>


          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-yearly" role="tabpanel" aria-labelledby="nav-yearly-tab">
        <div class="d-flex justify-content-center">
          <div class="row payment-row mx-0">
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
              <div class="pricing-plan-card-1">

                <?php $i = 1; foreach ($packages as $package): ?>
                  <?php if ($package->name == "Basic"): ?>

                    <h2 class="plans-heading-text">
                      <?php echo round($package->price); ?>
                      <?php echo currency_to_symbol(settings()->currency); ?> <span>/ year</span>
                    </h2>
                    <h3 class="plans-heading">
                      <?php echo html_escape($package->name); ?>
                    </h3>
                    <p class="plans-heading-body">Essential toolkit for the minimalist professional.</p>
                    <div class="plan-list">
                      <ul>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Send unlimited invoices to up to 5 clients</p>
                        </li>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Track unlimited expenses</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p>Send unlimited estimates</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Get paid with credit cards and bank transfers</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Track sales tax and see reports</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Accessible on iOS and Android devices(Coming soon)</p>
                        </li>
                      </ul>
                    </div>
                    <button class="btn-choose-Plan"><a style="color:#662b66" class="link-text"
                        href="<?php echo base_url('register?plan=' . $package->slug) ?>"> Choose Plan</a></button>



                  <?php endif ?>
                  <?php $i++; endforeach; ?>

              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
              <div class="pricing-plan-card-2">

                <?php $i = 1; foreach ($packages as $package): ?>
                  <?php if ($package->name == "Standard"): ?>

                    <h2 class="plans-heading-text">
                      <?php echo round($package->price); ?>
                      <?php echo currency_to_symbol(settings()->currency); ?> <span>/ year</span>
                    </h2>
                    <h3 class="plans-heading">
                      <?php echo html_escape($package->name); ?>
                    </h3>
                    <p class="plans-heading-body">Get more data-driven insights & smart automation.</p>
                    <div class="plan-list">
                      <ul>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Send unlimited invoices to up to 50 clients</p>
                        </li>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Automatically track expenses</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p>Send unlimited estimates and proposals</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Get paid with credit cards and bank transfers</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Run business health reports</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Double-entry accounting reports</p>
                        </li>

                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p> Invite your accountant for collaboration</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p> Accessible on iOS and Android devices(Coming soon)</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Mobile mileage tracking for on-the-go expenses</p>
                        </li>
                      </ul>
                    </div>
                    <button class="btn-choose-Plan"><a style="color:#662b66" class="link-text"
                        href="<?php echo base_url('register?plan=' . $package->slug) ?>"> Choose Plan</a></button>



                  <?php endif ?>
                  <?php $i++; endforeach; ?>


              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
              <div class="pricing-plan-card-3">

                <?php $i = 1; foreach ($packages as $package): ?>
                  <?php if ($package->name == "Premium"): ?>

                    <h2 class="plans-heading-text">
                      <?php echo round($package->price); ?>
                      <?php echo currency_to_symbol(settings()->currency); ?> <span>/ year</span>
                    </h2>
                    <h3 class="plans-heading">
                      <?php echo html_escape($package->name); ?>
                    </h3>

                    <p class="plans-heading-body">Fuel up your growth by empowering employees.</p>
                    <div class="plan-list">
                      <ul>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Send unlimited invoices to an unlimited number of clients</p>
                        </li>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Track bills, bill payments, and vendors with Accounts Payable</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p>Track project profitability</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Customize email templates with dynamic fields</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Customize email signatures</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Automatically track expenses</p>
                        </li>

                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Automatically send late payment reminders and bill late fees</p>
                        </li>
                        </li>
                        <li class="">
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p class="">Send unlimited estimates and proposals</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />

                          <p>Get paid with credit cards and bank transfers</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Get paid with checkout links</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Set up recurring billing and client retainers</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Run business health reports</p>
                        </li>

                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Run financial and accounting reports</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Invite your accountant for collaboration</p>
                        </li>
                        <li>
                          <img src="./assets/images/check.png" alt="check-icon" />
                          <p>Accessible on iOS and Android devices(Coming soon)</p>
                        </li>
                      </ul>
                    </div>
                    <button class="btn-choose-Plan"><a style="color:#662b66" class="link-text"
                        href="<?php echo base_url('register?plan=' . $package->slug) ?>"> Choose Plan</a></button>



                  <?php endif ?>
                  <?php $i++; endforeach; ?>



              </div>
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
        <button>
                                  <a style="color:#662b66" class="link-text" href="<?php echo base_url('register') ?>">Let’s Get Started</a>

            
        </button>
    </div>

    <script>
$(document).ready(function(){
  $("#nav-yearly-tab").click(function(){
    $("yearly-discount p").append(" <b>Appended text</b>.");
  });
 
});
</script>
    