<section class="section-cta mt-5">
  <div class="container text-center py-5">
    <h2 class="mt-3 mb-5"><?php get_sub_field('cta_msg') ? the_sub_field('cta_msg') : '' ?></h2>

    <?php if (get_sub_field('cta_btn_link')) : ?>
    <a href="<?php the_sub_field('cta_btn_link');  ?>" role="button" class="btn btn-primary btn-lg mb-4"><?php the_sub_field('cta_btn_text');  ?></a>
    <?php endif ?>
  </div>
</section>