<!-- Header -->
<?php $layout = get_sub_field('layout_type'); ?>

<div class="layer-<?php echo get_sub_field('layout_type'); ?>"></div>
  <header class="bg-primary py-5 cover-area-<?php echo $layout; ?>" style="background-image:url('<?php echo get_sub_field('background_cover'); ?>');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <?php if (get_sub_field('text_cover') && $layout == 'home') : ?>
          <h1 class="text-white mb-2"><?php the_sub_field('text_cover'); ?></h1>
        <?php elseif (get_field('custom_title') && $layout == 'default' ) : ?>
          <h1 class="display-5 text-white text-center mb-2"><?php the_field('custom_title'); ?></h1>
        <?php else : ?>
          <h1 class="display-5 text-white text-center mb-2"><?php the_title(); ?></h1>
        <?php endif ?>

        <?php if (get_sub_field('button_cover_link') && $layout = 'home') : ?>
          <a href="<?php the_sub_field('button_cover_link'); ?>" role="button" class="btn btn-outline-light" data-toggle="modal" data-target="#register"><?php the_sub_field('button_cover_text'); ?></a>
          <?php endif ?>
        </div>
      </div>
    </div>
  </header>


