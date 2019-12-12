<?php
/**
* CREATE cannabis LOGO SETTING AND UPLOAD CONTROL
*/
function cannabis_logo_settings($wp_customize) {
// add a setting for the site logo
$wp_customize->add_setting('cannabis_logo');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cannabis_logo',
array(
'label' => 'Upload Logo',
'section' => 'title_tagline',
'settings' => 'cannabis_logo',
) ) );
}
add_action('customize_register', 'cannabis_logo_settings');


/**
* ADD FOOTER SETTINGS SECTION TO CUSTOMIZER
*/

function cannabis_footer_settings($wp_customize) {
 //adding footer section in customizer panel
$wp_customize->add_section('footer_settings_section', array(
  'title'          => 'Footer Settings'
 ));
//adding setting for footer text area
$wp_customize->add_setting('text_setting', array(
 'default'        => 'Cannabis Doctor, All rights reserved.',
 ));
$wp_customize->add_control('text_setting', array(
 'label'   => 'Copyright Text',
  'section' => 'footer_settings_section',
 'type'    => 'textarea',
));
//adding setting for footer logo
$wp_customize->add_setting('cannabis_footer_logo');
$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'cannabis_footer_logo',array(
 'label'      => __('Footer Logo'),
 'section'    => 'footer_settings_section',
 'settings'   => 'cannabis_footer_logo',
 )));
}
add_action('customize_register', 'cannabis_footer_settings');

/**
* REGISTER FORM INFO: INSERT CF7 SHORTCODE
*/
function cannabis_register_settings($wp_customize) {
  $wp_customize->add_section('register_settings_section', array(
    'title'          => 'Modal Register CF7 Form'
   ));
   $wp_customize->add_setting('register_form');
   $wp_customize->add_control('register_form', array(
    'label'   => 'CF7 Form Shortcode',
     'section' => 'register_settings_section',
    'type'    => 'text',
   ));
}
add_action('customize_register', 'cannabis_register_settings');
/**
* TOP INFO: EMAIL AND PHONE
*/

function cannabis_contact_settings($wp_customize) {
 //adding contact info section in customizer panel
$wp_customize->add_section('contact_settings_section', array(
  'title'          => 'Contact Info'
 ));
//adding setting for Contact email text input
$wp_customize->add_setting('email_info');
$wp_customize->add_control('email_info', array(
 'label'   => 'E-mail',
  'section' => 'contact_settings_section',
 'type'    => 'text',
));
//adding setting for footer logo
$wp_customize->add_setting('phone_info');
$wp_customize->add_control('phone_info', array(
 'label'      => __('Phone'),
 'section'    => 'contact_settings_section',
 'settings'   => 'phone_info',
 ));
}
add_action('customize_register', 'cannabis_contact_settings');

/**
* SOCIAL HEADER ICONS SETTINGS TO CUSTOMIZER
*/

//social media icons helper functions
function cannabis_get_social_sites() {

     // Store social site names in array
     $social_sites = array(
         'twitter',
         'facebook',
         'instagram',
         'whatsapp',
         'pinterest',
         'youtube',
         'vimeo'
     );
 return $social_sites;
}

//Add section to customizer
function social_customizer_sections( $wp_customize ) {

$wp_customize->add_section( 'social_settings', array(
    'title' => __( 'Social Links', 'theme_slug' ),
    'priority' => 100,
));

$social_sites = cannabis_get_social_sites();
$priority = 5;

foreach( $social_sites as $social_site ) {

    $wp_customize->add_setting( "$social_site", array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control( $social_site, array(
        'label' => ucwords( __( "$social_site URL:", 'social_icon' ) ),
        'section' => 'social_settings',
        'type' => 'text',
        'priority' => $priority,
    ));

    $priority += 5;
  }
}
add_action( 'customize_register', 'social_customizer_sections' );

// Get user input from the Customizer and output the linked social media icons
function cannabis_social_links() {

     $social_sites = cannabis_get_social_sites();

     // Any inputs that aren't empty are stored in $active_sites array
     foreach( $social_sites as $social_site ) {
         if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
             $active_sites[] = $social_site;
         }
     }

     // For each active social site, add it as a list item
     if ( !empty( $active_sites ) ) {

         foreach ( $active_sites as $active_site ) { ?>

             <li class="nav-item">
             <a class="nav-link" href="<?php echo get_theme_mod( $active_site ); ?>" target="_blank">
             <?php if( $active_site == 'vimeo' ) { ?>
                 <i class="fab fa-<?php echo $active_site; ?>-v"></i> <?php
             } else if( $active_site == 'facebook' ) { ?>
                 <i class="fab fa-facebook-f"></i> <?php
             } else { ?>
                 <i class="fab fa-<?php echo $active_site; ?>"></i> <?php
             } ?>
             </a>
             </li> <?php
         }
     }
}
?>
