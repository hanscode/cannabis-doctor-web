<section class="section-about py-5">
  <div class="container">
  <div class="row">
    <div class="col-sm-12 col-lg-6">
      <?php if (get_sub_field('about_image')) : ?>
      <img src="<?php the_sub_field('about_image'); ?>" alt="" class="img-fluid mb-4">
      <?php endif ?>
    </div>
    <div class="col-sm-12 col-lg-6">
      <h2><?php get_sub_field('about_title') ? the_sub_field('about_title')  : '' ?></h2>
      <div class="divider my-3 mx-auto mx-sm-auto mx-lg-0"></div>
      <p class="my-4"><?php get_sub_field('about_text') ? the_sub_field('about_text')  : '' ?></p>
      <?php if (get_sub_field('more_button_link')) : ?>
      <a href="<?php the_sub_field('more_button_link');  ?>" role="button" class="btn btn-lg btn-outline-success"><?php the_sub_field('more_button_text');  ?></a>
      <?php endif ?>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
</section>