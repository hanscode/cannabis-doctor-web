<section class="section-partners text-center py-5">
    <div class="container">
      <?php if (get_sub_field('partners_title')): ?>
        <h2 class="text-center"><?php the_sub_field('partners_title'); ?></h2>
      <?php endif; ?>

      <?php if (get_sub_field('partners_description')): ?>
        <p class="text-center my-4"><?php the_sub_field('partners_description'); ?></p>
        <div class="divider mx-auto mb-5"></div>
      <?php endif; ?>

      <?php if( have_rows('partners_logos') ): ?>

    	<div class="row">

    	<?php while( have_rows('partners_logos') ): the_row();

    		// vars
        $image = get_sub_field('company_logo');
        $company = get_sub_field('company_title');
        $logo = $image['sizes']['logos-size'];
        $link = get_sub_field('company_link');

    		?>

    		<div class="col-lg-3 col-md-4 col-sm-6 my-3 mx-auto">

    			<?php if( $link ): ?>
    				<a target="_blank" href="<?php echo $link; ?>">
    			<?php endif; ?>

    				<img src="<?php echo $logo; ?>" alt="<?php echo $company ?>" />

    			<?php if( $link ): ?>
    				</a>
    			<?php endif; ?>

    		</div><!-- /.col-md-3 -->

    	<?php endwhile; ?>

    </div>
    <!-- /.row -->

<?php endif; ?>

  </div>
  <!-- /.container -->
</section>