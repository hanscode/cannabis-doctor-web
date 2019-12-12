<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerForm" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center text-white" id="registerForm">Formulario de Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
        <?php
        $shortcode = get_theme_mod( 'register_form' );
        echo do_shortcode($shortcode);
        ?>
    </div>
  </div>
</div>