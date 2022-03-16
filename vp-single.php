<!--theme header-->
<?php 
/* 
Template Name: Student Portfolios
Template Post Type: post, portfolio
*/

get_header(); ?>

<!--nonhomepagesection start-->
<section id="nonhomepage">

    <!--main section-->
    <section id="vpitem-sec" class="container-fluid">
    <?php 
        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content();
          }
        }
      ?>

      <!-- loading roller -->
      <div class="roller-container container-fluid d-flex justify-content-center flex-column align-items-center">

        <img id="redir-logo" src="<?php echo wp_get_attachment_url(get_theme_mod('first_redir_logo')); ?>" alt="F.I.R.S.T. Logo">

        <p style="color: #fff; font-weight: 600;">Loading some awesome work...</p>

        <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      </div>
    </section><!--mainarea section end-->

<!--theme footer-->
<?php get_footer('vp'); ?>
