<!DOCTYPE html>
<html class="no-js" lang="en" dir="<?php echo text_dir(); ?>">
<?php $settings = get_settings(); ?>

<head>
    <meta charset="utf-8">
    <title>
        <?php echo html_escape($settings->site_name) ?> -
        <?php echo html_escape($settings->site_title) ?>
    </title>
    <meta charset="utf-8">
    <meta name="author" content="<?php echo html_escape($settings->site_name) ?>">
    <meta name="description" content="<?php echo html_escape($settings->description) ?>">
    <meta name="keywords" content="<?php echo html_escape($settings->keywords) ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="theme-color" content="#056EB9" />
    <meta name="msapplication-navbutton-color" content="#056EB9" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#056EB9" />

    <link rel="icon" href="<?php echo base_url($settings->favicon) ?>">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.html">
    
   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,700,500,600,300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/header.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/footer.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/landing.css">


    <?php if (text_dir() == 'rtl'): ?>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/custom-rtl.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/bootstrap-rtl.min.css"
            crossorigin="anonymous">
    <?php endif ?>

    <!-- styles ================================================== -->
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/cristal.min.css?var=1.9&time=<?= time(); ?>" type="text/css"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/style.min.css?var=1.9&time=<?= time(); ?>"
        type="text/css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/font-awesome.min.css">
    <link href="<?php echo base_url() ?>assets/admin/css/toast.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/admin/css/sweet-alert.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/simple-line-icons.css">
    <link href="<?php echo base_url() ?>assets/front/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/front/css/aos.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/front/css/career.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/front/css/contact.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/front/css/meeting.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/front/css/pricing.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/front/css/sale.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/front/css/career.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/front/css/slick.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/front/css/team.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/front/css/about.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/front/css/slick-theme.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap', 'Quicksand:300,400,700&display=swap"
        rel="stylesheet">

    <script type="text/javascript">
        var csrf_token = '<?php echo $this->security->get_csrf_hash(); ?>';
        var token_name = '<?php echo $this->security->get_csrf_token_name(); ?>'
    </script>

    <script type="text/javascript">
        var _html = document.documentElement,
            isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));
        _html.className = _html.className.replace("no-js", "js");
        _html.classList.add(isTouch ? "touch" : "no-touch");
    </script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/device.min.js"></script>



    <!-- google analytics -->
    <?php if (!empty($settings->google_analytics)): ?>
        <?php echo base64_decode($settings->google_analytics); ?>
    <?php endif ?>

    <?php if ($settings->enable_captcha == 1 && $settings->captcha_site_key != ''): ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php endif; ?>

</head>

<body>
    <div>





        <!-- new Header start -->
        <?php if (isset($page_title) && $page_title != 'Register'): ?>



            <!--NABVAR-->
            <nav class="navbar navbar-expand-md navbar-container">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo base_url() ?>">
                        <img src="./Icon.png" alt="header-logo" class="" />
                        <span>Trumpple</span>
                    </a>
                    <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <div class="navbar-items-container">

                                <a class="nav-link <?php if (isset($page_title) && $page_title == 'Home') {
                                    echo "active";
                                } ?>" aria-current="page" href="<?php echo base_url() ?>" <?php echo trans('home') ?>
                                    data-bs-toggle="" data-bs-target=".navbar-collapse.show">Home</a>
                                <div class="nav-link nav-dropdown">
                                    <p class="mb-0 dropbtn">Features</button>
                                    <div class="dropdown-content">

                                        <a class="nav-link <?php if (isset($page_title) && $page_title == 'accounting') {
                                            echo "active";
                                        } ?>" data-bs-target=".navbar-collapse.show"
                                            href="<?php echo base_url('accounting') ?>">Accounting</a>

                                        <a class="nav-link <?php if (isset($page_title) && $page_title == 'sales') {
                                            echo "active";
                                        } ?>" data-bs-target=".navbar-collapse.show"
                                            href="<?php echo base_url('sales') ?>">Sales</a>

                                        <a class="nav-link <?php if (isset($page_title) && $page_title == 'front-purchase') {
                                            echo "active";
                                        } ?>" data-bs-target=".navbar-collapse.show"
                                            href="<?php echo base_url('front-purchase') ?>">Purchase</a>

                                        <a class="nav-link <?php if (isset($page_title) && $page_title == 'book_keeping') {
                                            echo "active";
                                        } ?>" data-bs-target=".navbar-collapse.show"
                                            href="<?php echo base_url('book_keeping') ?>">Book keeping</a>


                                        <a class="nav-link <?php if (isset($page_title) && $page_title == 'invocie-customization') {
                                            echo "active";
                                        } ?>" data-bs-target=".navbar-collapse.show"
                                            href="<?php echo base_url('invocie-customization') ?>">Invoicing</a>
                                        <a class="nav-link <?php if (isset($page_title) && $page_title == 'estimate') {
                                            echo "active";
                                        } ?>" data-bs-target=".navbar-collapse.show"
                                            href="<?php echo base_url('estimate') ?>">Estimates</a>
                                        <a class="nav-link <?php if (isset($page_title) && $page_title == 'payment-setting') {
                                            echo "active";
                                        } ?>" data-bs-target=".navbar-collapse.show"
                                            href="<?php echo base_url('payment-setting') ?>">Payments</a>

                                    </div>
                                </div>
                                <a class="nav-link <?php if (isset($page_title) && $page_title == 'About Us') {
                                    echo "active";
                                } ?>" href="<?php echo base_url('about-us') ?>" aria-current="page" data-bs-toggle=""
                                    data-bs-target=".navbar-collapse.show">About Us</a>
                                <a class="nav-link <?php if (isset($page_title) && $page_title == 'Contact Us') {
                                    echo "active";
                                } ?>" href="<?php echo base_url('contact') ?>" aria-current="page" 
                                    data-bs-toggle="" data-bs-target=".navbar-collapse.show">Contact</a>
                            </div>
                            <div class="nav-btn-container">
                            <?php if (is_admin()): ?>
                                                <a class="btn btn-sm" style="color: white;" data-bs-target=".navbar-collapse.show"
                                                    href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-sign-out"></i>
                                                    <?php echo trans('logout') ?>
                                                </a>

                                                <a class="btn btn-sm" style="color: white;" data-bs-target=".navbar-collapse.show"
                                                    href="<?php echo base_url('admin/dashboard') ?>"><i
                                                        class="fa fa-dashboard"></i>
                                                    <?php echo trans('dashboard') ?>
                                                </a>
                                            <?php elseif (is_user()): ?>
                                                <a class="btn  btn-sm" style="color: white;"
                                                    href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-sign-out"></i>
                                                    <?php echo trans('logout') ?>
                                                </a>

                                                <a class="btn btn-sm " style="color: white;"
                                                    href="<?php echo base_url('admin/dashboard/business') ?>"><i
                                                        class="fa fa-dashboard"></i>
                                                    <?php echo trans('dashboard') ?>
                                                </a>
                                            <?php else: ?>
                                                <a class="btn-login" data-bs-target=".navbar-collapse.show"  href="<?php echo base_url('login') ?>">Log in</a>
                                                <a class="btn-sign-up btn-animate"  data-bs-target=".navbar-collapse.show" href="<?php echo base_url('register') ?>"><button> Sign up </button></a>
                                            <?php endif ?>



                              
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!--NABVAR-->


        <?php endif ?>

        
        <main role="main">