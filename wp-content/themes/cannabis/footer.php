<!-- Footer -->
<footer class="bg-primary">
  <section class="footer-menu py-5">
    <?php has_nav_menu( 'secondary-menu' ) ? secondary_menu() : '' ?>

    <div class="text-center mx-auto mb-3">
      <?php if (get_theme_mod( 'cannabis_footer_logo' )) : ?>
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img height="53" width="auto" src="<?php echo get_theme_mod( 'cannabis_footer_logo' );  ?>"></a>
     <?php else : ?>
       <h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name');  ?></a></h2>
      <?php endif ?>
    </div>

    <ul class="nav justify-content-center">
      <?php cannabis_social_links(); ?>
    </ul>
  </section>

  <section class="footer-copyright pt-3">
    <div class="container clearfix pb-sm-4 pb-lg-0">
      <p class="text-white">Copyright &copy; <?php echo date('Y'); ?> <?php echo get_theme_mod( 'text_setting' ); ?></p>
      <?php has_nav_menu( 'footer-menu' ) ? footer_menu() : '' ?>

    </div>
    <!-- /.container -->
  </section>

</footer>

<?php wp_footer(); ?>

<!-- Modal -->
<?php get_template_part('partials/content', 'modal'); ?>

</body>

</html>