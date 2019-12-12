<div class="layer-default"></div>
<header class="bg-primary py-5 cover-area-default" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-5 text-white text-center mb-2"><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
</header>

<div class="container py-5 content-style">
  <div class="row">
      <div class="col-sm-12 col-lg-8 offset-sm-0 offset-lg-2 mt-5">
          <?php the_content(); ?>
      </div>
  </div>
</div>