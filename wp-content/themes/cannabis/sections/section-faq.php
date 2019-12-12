<div class="container">
  <div class="row">
      <div class="col-sm-12 col-lg-8 offset-sm-0 offset-lg-2 mt-5">

        <h2 class="text-center py-2"><?php the_sub_field('faq_sub_title'); ?></h2>

        <div class="divider mx-auto mb-4"></div>

        <p><?php the_sub_field('faq_intro') ?></p>

        <section class="faq-accordion">
          <div class="accordion" id="accordionFAQ">

            <?php if( have_rows('faq_items') ): ?>

            	<?php while( have_rows('faq_items') ): the_row(); ?>

                <div class="card my-4">
                  <div class="card-header" id="heading-<?php echo get_row_index(); ?>" data-toggle="collapse" data-target="#collapse-<?php echo get_row_index(); ?>" aria-expanded="true" aria-controls="collapse-<?php echo get_row_index(); ?>">
                    <h4 class="mb-0"><?php the_sub_field('question'); ?></h4>
                  </div>

                  <div id="collapse-<?php echo get_row_index(); ?>" class="collapse" aria-labelledby="heading-<?php echo get_row_index(); ?>" data-parent="#accordionFAQ">
                    <div class="card-body">
                      <?php the_sub_field('answer'); ?>
                    </div>
                  </div>
                </div>

            	<?php endwhile; ?>

            <?php endif; ?>

          </div>
           <!--/.accordion -->
        </section>



      </div>
      <!-- /.col-md-8 -->
  </div>
  <!--/.row -->
</div>
<!--/.container -->