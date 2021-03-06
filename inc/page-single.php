  <!-- Single Carousel feature post section -->
  <div class="container-fluid c-f-padd">
    <div class="top-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/category.jpg); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-origin: initial">
      <div style="height: 100%; background-color: rgba(0,0,0,0.5); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-origin: initial">
      <div class="banner container flexbox text-center">
        <div class="mx-auto align-self-center">
          <h3 class="white text-uppercase feat-wid bigger black-hans"><?php the_title(); ?></h3>
        </div>
      </div>
    </div>
    </div>
  </div>
  <!-- Single Carousel feature post section end -->

  <!-- Main blog post and sidebar section -->
  <div class="container bg-white blog-container shadow-sm">
    <!-- WYSIWYG here in one css line -->
    <div class="content">

    <?php the_content(); ?>

    </div>
    <!-- WYSIWYG here in one css line -->
  </div>
  <!-- Main blog post and sidebar section end -->