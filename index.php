<!--theme header-->
<?php get_header(); ?>

<!--homepagesection start-->
<section id="homepage">

    <!--landingPage Top Section-->
    <?php get_template_part('topsec'); ?>
    <!--landingPage Top Section END-->

    <section class="deptsec container-fluid">
    <div class="row">
        <div data-aos="fade-right" class="col-sm-6 introsec d-flex align-items-center" style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('introsec_identity_bg')); ?>')">
        <p class="px-4">Check out the work of our highly talented graduate students from our three departments: Digital Video and Film Production, Recording Arts and Show Production, and Graphic Design and Web Development</p>
        </div>
        <div data-aos="fade-left" class="col-sm-6 raspsec d-flex flex-column justify-content-center" style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('raspsec_identity_bg')); ?>')">
        <h1>Recording Arts & Show Production</h1>
        <a href="https://firstportfol.io/rasp/">Graduates</a>
        </div>
    </div>
    <div class="row">
        <div data-aos="fade-right" class="col-sm-6 dfvpsec d-flex flex-column justify-content-center" style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('dfvpsec_identity_bg')); ?>')">
        <h1>Digital Filmmaking & Video Production</h1>
        <a href="https://firstportfol.io/dfvp/">Graduates</a>
        </div>
        <div data-aos="fade-left" class="col-sm-6 gdwdsec d-flex flex-column justify-content-center" style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('gdwdsec_identity_bg')); ?>')">
        <h1>Graphic Design & Web Development</h1>
        <a href="https://firstportfol.io/gdwd/">Graduates</a>
        </div>
    </div>
    </section><!--deptsec container END-->

<!--theme footer-->
<?php get_footer(); ?>