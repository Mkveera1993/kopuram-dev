<?php get_header(); ?>
<div id="fullpage">
    <section class="section1 vertical-scrolling">
        <header>
            <nav class="navbar navbar-expand-lg  ">
                <a class="navbar-brand" href="#"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="40" height="40"
                        alt="Kopuram Logo"><span class="logo_text">Kopuram</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="color:red"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Kopuram</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Why Kash?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Schemes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
        <div class="row">
            <div class="col-md-5 text-left" style="padding-left:5%">
                <h1 class="kp-text-secondory welcome_text">HASHKASH </h1>
                <p class="welcome_description">We want to make registered Chit Funds more Accessible,Credible and
                    Rewarding<p>
                        <button type="button" name="" id=""
                            class="btn text-white kp-bg-primary shadow_primary btn-lg mt-4 ">Read more</button>
            </div>
            <div class="col-md-7">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/wallet.jpg"
                    alt="Chit Fund Card">
            </div>
        </div>
    </section>
    <section class="section2 vertical-scrolling">
        <div class="row ">
            <div class="col-md-10 offset-md-1 text-center">
                <h1 class="kp-text-secondory title_text">Safe ,Interest and Convenience </h1>
                <p class="welcome_description ">We support our customers with complete financial solutions through
                    compatible
                    schemes and services.Our finance experts are prepared to customize the specific needs of customers
                    to
                    build a culture of integrity in all dealings with the wider community.<p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 offset-md-3">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/plant.svg"
                    alt="Chit Fund Card">
            </div>
        </div>
    </section>
    <section class="section3 vertical-scrolling">
        <div class="row ">
            <div class="col-md-10 offset-md-1 text-center">
                <h1 class="kp-text-secondory title_text">Why Kopuram </h1>
                <p class="welcome_description ">We support our customers with complete financial solutions through
                    compatible
                    schemes and services.Our finance experts are prepared to customize the specific needs of customers
                    to
                    build a culture of integrity in all dealings with the wider community.<p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 why-card">
                <div> <img src="" alt="" height="98" width="98"></div>
            </div>
            <div class="col-md-4 why-card">
                <h1>Lorem Ipsum</h1>
            </div>
            <div class="col-md-4 why-card">
                3
            </div>
        </div>
    </section>
    <section class="section4 vertical-scrolling" style=" background-color: red;">4</section>
    <section class="section5 vertical-scrolling" style=" background-color: blue;">5</section>
    <section class="section6 vertical-scrolling" style=" background-color: orange;">6</section>
    <section class="section7 vertical-scrolling" style=" background-color: black;">7</section>

</div>

<script>
$('#fullpage').fullpage({
    sectionSelector: '.vertical-scrolling',
    navigation: true,
    controlArrows: false,
    scrollingSpeed: 700,
    anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixthSection',
        'seventhSection'
    ]
});
</script>
<?php get_footer();  ?>