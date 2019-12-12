<section class="section-benefits pt-5 pb-lg-5" style="background-image:url('<?php echo get_sub_field('background_features'); ?>');">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 col-lg-8">
          <?php if (get_sub_field('features_title')): ?>
            <h2 class="text-center"><?php the_sub_field('features_title'); ?></h2>
          <?php endif; ?>

          <?php if (get_sub_field('features_sub_title')): ?>
            <p class="text-center my-4"><?php the_sub_field('features_sub_title'); ?></p>
            <div class="divider mx-auto mb-5"></div>
          <?php endif; ?>
            <?php
              $rows = get_sub_field('features_list'); // get all the rows
              $icon = '<img src="'. get_template_directory_uri() . '/dist/img/cannabis.svg" alt="cannabis-icon">';

              if ($rows) {
                  echo '<div class="row">';

                  foreach ($rows as $row) {
                      echo '<div class="col-sm-12 col-lg-6 mb-3 clearfix">
                            <span class="feature-icon float-left">'. $icon .'</span>
                             <div class="feature-item float-right;">
                               <h4>' . $row['benefit_title'] .'</h4>
                               <p>' . $row['benefit_description'] .'</p>
                            </div>
                           </div>'; //.col
                  }
                  echo '</div>'; //.row
              }
            ?>
        </div><!-- /.col-lg-8 -->
      <div class="col-sm-12 col-lg-4"></div> <!-- this block needs to be empty -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>