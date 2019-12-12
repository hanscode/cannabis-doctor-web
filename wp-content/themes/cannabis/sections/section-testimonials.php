<section class="section-testimonials py-5">
  <div class="container clearfix">
    <?php if (get_sub_field('testimonials_section_title')): ?>
      <div class="float-testimony">
        <h2><?php the_sub_field('testimonials_section_title'); ?></h2>
        <div class="divider mt-3 mb-5 mx-auto mx-sm-auto mx-lg-0"></div>
      </div>
    <?php endif; ?>

    <?php if( have_rows('testimonials_list') ): ?>
        <span class="prev"></span>
        <span class="next"></span>
        <div class="clearfix"></div>
      <div class="stories">

    <?php while( have_rows('testimonials_list') ): the_row();

      // vars
      $photo = get_sub_field('author_photo');
      $author = get_sub_field('author_name');
      $title = get_sub_field('author_title');
      $avatar = $photo['sizes']['avatar'];
      $testimony = get_sub_field('testimony');

      ?>

      <div class="slide m-5 m-lg-3 clearfix">

        <img class="float-left" src="<?php echo $avatar; ?>" alt="<?php echo $author ?>" />

        <div class="testimony">
          <p><?php echo $testimony ?></p>
          <h4><?php echo $author ?></h4>
          <p><span><?php echo $title ?></span></p>
        </div>

      </div>
      <!-- /.slide -->

    <?php endwhile; ?>

  </div>
  <!-- /.stories -->

<?php endif; ?>
  </div>
  <!-- /.container -->
</section>