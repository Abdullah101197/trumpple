<!-- start section -->
<section class="section-">

  <!--HERO SECTION-->
  <div class="pricing-hero-container">
    <h3>Achieving Growth with a Strategic Plan</h3>
    <p class="container">
      Clear, budget-friendly pricing with no hidden charges
    </p>
  </div>
  <!--HERO SECTION-->
  <!--PRICING CARD     SECTION-->

  <div class="payment-container container">
    <h5>Easy payment</h5>
    <h3>Value-Driven Pricing Options</h3>
    <p>Safe online payments and flexible booking management on desktop or mobile.</p>
    <nav>
      <div class="nav nav-payment-tabs" id="nav-tab" role="tablist">
        <button class="nav-payment-tab-item active" id="nav-monthly-tab" data-bs-toggle="tab"
          data-bs-target="#nav-monthly" type="button" role="tab" aria-controls="nav-monthly"
          aria-selected="true">Monthly</button>
        <button class="nav-payment-tab-item  yearly-text" id="nav-yearly-tab" data-bs-toggle="tab"
          data-bs-target="#nav-yearly" type="button" role="tab" aria-controls="nav-yearly" aria-selected="false">
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
  <!--PRICING PLANS TABS-->
  <div class="plans-tabs-container">
    <h3>Plan comparison chart ( For Businesses )</h3>

    <div class="container d-flex justify-content-center align-items-center">
      <div class="tabs-container mt-5 container">
        <div class="d-flex tabs-parent align-items-start justify-content-center">
          <div class="w-100">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <p>Select Plan</p>
              <button class="nav-pill-btn active" id="v-pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                aria-selected="true">Monthy</button>
              <button class="nav-pill-btn" id="v-pills-profile-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                aria-selected="false">Yearly</button>
              <div class="d-flex align-items-start justify-content-center">
                <svg width="33" height="35" viewBox="0 0 33 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M32.0666 1.9005C32.0666 1.9005 31.0316 16.5473 28.1749 22.488C22.8259 33.6195 16.3804 34.6875 16.3804 34.6875C16.3804 34.6875 9.93561 33.6195 4.58511 22.488C1.73061 16.5473 0.693359 1.9005 0.693359 1.9005L16.3796 0.1875L32.0666 1.9005Z"
                    fill="#541554" />
                  <path
                    d="M22.7117 10.8458L24.0137 12.1478L14.7939 21.3675L10.2017 16.773L11.5037 15.4718L14.7962 18.7643L22.7117 10.8458Z"
                    fill="#FDC27B" />
                </svg>

                <h5 class="pill-text">
                  Fast, Secure
                  and Affordable
                </h5>
              </div>

            </div>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="nav-pills-tabs">
                <div class="tabs-inner">
                  <h3>Creator</h3>
                  <p>First Priority Support</p>
                  <h5>US$ 99</h5>
                  <h6>Per Month</h6>
                </div>
                <div class="tabs-inner tab-inner-active">
                  <div class="best-val-cont">
                    <p>Best Value</p>
                  </div>
                  <h3>Startup</h3>
                  <p>First Priority Support</p>
                  <h5>US$ 199</h5>
                  <h6>Per Month</h6>
                </div>
                <div class="tabs-inner">
                  <h3>Growth</h3>
                  <p>First Priority Support</p>
                  <h5>US$ 299</h5>
                  <h6>Per Month</h6>
                </div>
                <div class="tabs-inner">
                  <h3>Expansion</h3>
                  <p>First Priority Support</p>
                  <h5>US$ 399</h5>
                  <h6>Per Month</h6>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <div class="nav-pills-tabs">
                <div class="tabs-inner">
                  <h3>Creator</h3>
                  <p>First Priority Support</p>
                  <h5>US$ 990</h5>
                  <h6>Per Year</h6>
                </div>
                <div class="tabs-inner tab-inner-active">
                  <div class="best-val-cont">
                    <p>Best Value</p>
                  </div>
                  <h3>Startup</h3>
                  <p>First Priority Support</p>
                  <h5>US$ 1990</h5>
                  <h6>Per Year</h6>
                </div>
                <div class="tabs-inner">
                  <h3>Growth</h3>
                  <p>First Priority Support</p>
                  <h5>US$ 2990</h5>
                  <h6>Per Year</h6>
                </div>
                <div class="tabs-inner">
                  <h3>Expansion</h3>
                  <p>First Priority Support</p>
                  <h5>US$ 3990</h5>
                  <h6>Per Year</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="table-parent">
          <h3 class="table-text">TRACK AND ORGANIZE CLIENT INFO</h3>
          <div class="plan-color-row">
            <h6>Billable Clients</h6>
            <p>50</p>
            <p>50</p>
            <h5>Unlimited</h5>
            <h5>Unlimited</h5>
          </div>
          <div class="plan-simple-row">
            <h6>Client profiles and account statements</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <div class="plan-color-row">
            <h6>Clients can store credit card info</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-simple-row">
            <h6>Client self-service portal</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <div class="plan-color-row">
            <h6>Client Credits</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <div class="plan-simple-row">
            <h6>Automated Recurring Invoices</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-color-row">
            <h6>Customized email templates & signatures</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-simple-row">
            <h6>Automated client emails with dynamic fields</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-color-row">
            <h6>Remove Trumple branding from client emails</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <div class="custm-width">
              <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
              </svg>

            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <h3 class="table-text">BILLING SOLUTIONS</h3>
          <div class="plan-simple-row">
            <h6>Unlimited Estimates</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <div class="plan-color-row">
            <h6>Accept e-Signatures</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-simple-row">
            <h6>Unlimited + Customized Invoices</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <div class="plan-color-row">
            <h6>Scheduled Late Fees</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>

            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <div class="plan-simple-row">
            <h6>Automated Late Payment Reminders</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-color-row">
            <h6>Accept Deposits</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-simple-row">
            <h6>Manage budget and billing for projects</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-color-row">
            <h6>Unlimited Proposals</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <div class="custm-width">
              <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
              </svg>

            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-simple-row">
            <h6>Client Retainers</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <div class="custm-width">
              <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
              </svg>

            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <h3 class="table-text">CLIENT PAYMENT OPTIONS</h3>
          <div class="plan-color-row">
            <h6>Online Credit Card Payments</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
          </div>
          <div class="plan-simple-row">
            <h6>Online ACH Bank Transfers (US Only)</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
          </div>
          <div class="plan-color-row">
            <h6>Checkout Links</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
          </div>
          <div class="plan-simple-row">
            <h6>Access to lower credit card transaction fees and capped ACH fees*</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
          </div>
          <div class="plan-color-row">
            <h6>Subscription-based payments</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
          </div>
          <div class="plan-simple-row">
            <h6>Securely accept credit cards over the phone</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
          </div>
          <div class="plan-color-row">
            <h6>Secure Card Storage</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
          </div>
          <div class="plan-simple-row">
            <h6>Users can charge client credit cards</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
          </div>



          <h3 class="table-text">Managing Your Business Options</h3>
          <div class="plan-color-row">
            <h6>Unlimited Time-Tracking</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
          </div>
          <div class="plan-simple-row">
            <h6>Unlimited Expenses</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <div class="plan-color-row">
            <h6>Automatic Expense receipt data capture</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-simple-row">
            <h6>Automatic Bills receipt data capture</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <div class="plan-color-row">
            <h6>Automated Bank Import</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>

            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <div class="plan-simple-row">
            <h6>Mobile Mileage Tracking</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>

            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-color-row">
            <h6>Tax time reports</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>

            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-simple-row">
            <h6>Business health reports</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>

            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-color-row">
            <h6>At-a-glance performance dashboards</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>

            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>

            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
          </div>
          <div class="plan-simple-row">
            <h6>Double-entry accounting reports</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <div class="plan-color-row">
            <h6>Advanced Accounting [Beta]</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-simple-row">
            <h6>Project Profitability</h6>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <div class="plan-color-row">
            <h6>Accountant Access</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>

          <div class="plan-simple-row">
            <h6>Accounts Payable</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                fill="#541554" />
            </svg>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-color-row">
            <h6>2 team member accounts included</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-simple-row">
            <h6>Dedicated account manager</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-color-row">
            <h6>Customized onboarding services</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <div class="custm-width">
              <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
              </svg>

            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
          <div class="plan-simple-row">
            <h6>Data migration services</h6>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>
            <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
            </svg>

            <div class="custm-width">
              <svg width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 0H0V2.25H18V0Z" fill="#C72A2A" />
              </svg>

            </div>
            <div class="custm-width">
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.4549 0.532227L19.1859 2.26323L6.92343 14.5257L0.81543 8.41548L2.54643 6.68448L6.92568 11.0637L17.4549 0.532227Z"
                  fill="#541554" />
              </svg>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!--    fAQS-->
    <div class="faqs-container">
      <h3>Frequently Asked Questions</h3>
      <div class="d-flex justify-content-center align-items-center">
        <div class="row mx-0 container d-flex justify-content-center faqs-row mt-5">
          <div class="col-lg-12 col-md-10 col-sm-12 d-flex justify-content-center">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-controls="collapseOne">
                    How does the 14 days free trial work?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Our 14 days free trial allows you to fully test our service and features for a period of 30 days, at
                    no cost to you. You can sign up for the trial from our website and start using the service
                    immediately. You will have full access to all features during the trial period.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What happens after my free trial?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    After your free trial ends, you will need to select a paid subscription plan to continue using our
                    service. You can choose from one of our flexible monthly plans based on your business needs and the
                    number of users.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Do I need to install any software?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    No, you do not need to install any software. Our service is fully cloud-based and accessible from
                    any device with an internet connection.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Is my data safe?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Yes, your data is secure. We use industry-standard security measures, including encryption and
                    regular backups, to ensure the safety and privacy of your information.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    What if I need help getting started?
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    If you need help getting started, our support team is here to help. We offer a range of resources,
                    including a comprehensive knowledge base, video tutorials, and email support. You can also reach out
                    to our team for personalized assistance.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    How do client limits work in the pricing?
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse " aria-labelledby="headingSix"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Our pricing plans are based on the number of clients you have in your account. Each plan has a limit
                    on the number of clients you can have, and if you reach the limit, you will need to upgrade to a
                    higher-tier plan to add more clients. If you need to add more clients than what is available in your
                    current plan, our sales team can assist you with a custom plan to meet your needs.

                  </div>
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
        <a style="color:#662b66" class="link-text" href="<?php echo base_url('register?trial=start') ?>">Let’s Get
          Started</a>


      </button>
    </div>



</section>
<!-- end section -->
