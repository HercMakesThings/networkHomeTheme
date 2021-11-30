<!--Front Page Top Section START-->
<section class="topsec container-fluid" style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('topsec_identity_bg')); ?>')">
  <nav class="navbar navbar-light nav py-0">
    <a href="https://firstportfol.io"><img width="150px" src="<?php echo wp_get_attachment_url(get_theme_mod('first_identity_logo')); ?>" width="150px"></a>
    <?php $args = array(
        'theme_location' => 'primary' 
      );
      ?>
      <?php wp_nav_menu( $args ); ?>
    <!--<div class="">
      <ul>
        <li class="nav-item"><a href="page.html">RASP</a></li>
        <li class="nav-item"><a href="#">DFVP</a></li>
        <li class="nav-item"><a href="#">GDWD</a></li>
      </ul>
    </div>-->
  </nav>
  <div id="toptitle">
    <h1>Student Alumni Network</h1>
  </div>
</section><!--tOP sECTION END-->