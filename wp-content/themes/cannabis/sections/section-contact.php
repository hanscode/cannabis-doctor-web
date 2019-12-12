<section class="section-contact">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-12 col-lg-7 offset-md-0 offset-lg-1 mb-4">
        <?php
        //variables
        $form = get_sub_field('contact_form');
        echo do_shortcode($form);
        ?>

      </div>
      <div class="col-lg-4 col-md-12">
        <div class="contact-info text-center">
          <p><i class="fas fa-envelope mr-1"></i> <?php the_sub_field('contact_email'); ?></p>
          <p> <i class="fas fa-phone mr-1"></i> <?php the_sub_field('contact_phone'); ?></p>
          <ul>
          <?php if (get_sub_field('contact_social')) {
            cannabis_social_links();
          } ?>
        </ul>
        </div>
      </div>
    </div>
  </div>
</section>