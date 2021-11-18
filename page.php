<!--theme header-->
<?php get_header(); ?>

<!--nonhomepagesection start-->
<section id="nonhomepage">

    <!--landingPage Top Section-->
    <?php get_template_part('topsec'); ?>
    <!--landingPage Top Section END-->

    <!--main section-->
    <section class="container-fluid mainarea">
    <?php 
        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content();
          }
        }
      ?>
    </section><!--mainarea section end-->

<!--theme footer-->
<?php get_footer(); ?>
