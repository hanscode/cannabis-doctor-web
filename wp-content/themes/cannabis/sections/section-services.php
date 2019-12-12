<section class="section-services text-center py-5">

  <?php if (get_sub_field('services_title')): ?>
  <h2 class="text-center"><?php the_sub_field('services_title'); ?></h2>
  <?php endif; ?>

  <?php if (get_sub_field('services_sub_title')): ?>
  <p class="text-center my-4"><?php the_sub_field('services_sub_title'); ?></p>
  <div class="divider mx-auto mb-5"></div>
  <?php endif; ?>

  <div class="container mx-auto">

      <?php
      $rows = get_sub_field('all_services');
      $icon = '<img src="'. get_template_directory_uri() . '/dist/img/cannabis2.svg" alt="cannabis-icon">';
          if($rows) {
            echo '<div class="row text-center py-5">';

            foreach ($rows as $row) {
                echo '<div class="col-sm-12 col-lg-4">
                      <span class="service-icon mb-2">'. $icon .'</span>
                         <h5>' . $row['service_title'] .'</h5>
                         <p class="my-3">' . $row['service_description'] .'</p>
                         <a href="' . $row['more_btn_link'] .'" role="button" class="btn btn-primary btn-lg mb-5">' . $row['more_btn_text'] .'</a>
                     </div>'; //.cold-md-4
            }
            echo '</div>'; //.row
          }
       ?>

  </div>
  <!-- /.container -->
</section>