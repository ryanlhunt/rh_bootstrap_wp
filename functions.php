<?php
/*
Requires Theme Plugins 
*/
  require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

  add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

  function my_theme_register_required_plugins() {

    $plugins = array(
      // This is an example of how to include a plugin bundled with a theme.
  		array(
  			'name'               => 'Advanced Custom Fields', // The plugin name.
  			'slug'               => 'advanced-custom-fields', // The plugin slug (typically the folder name).
  		//	'source'             => get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
  			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
  			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
  			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
  			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
  			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
  			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
  		),

      // This is an example of how to include a plugin bundled with a theme.
      array(
        'name'               => 'TGM Example Plugin', // The plugin name.
        'slug'               => 'black-studio-tinymce-widget', // The plugin slug (typically the folder name).
      //  'source'             => get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
        'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
        'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
        'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
      ),

      // This is an example of how to include a plugin bundled with a theme.
      array(
        'name'               => 'TGM Example Plugin', // The plugin name.
        'slug'               => 'bootstrap-shortcodes', // The plugin slug (typically the folder name).
      //  'source'             => get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
        'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
        'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
        'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
      ),

      // This is an example of how to include a plugin bundled with a theme.
      array(
        'name'               => 'TGM Example Plugin', // The plugin name.
        'slug'               => 'custom-post-type-ui', // The plugin slug (typically the folder name).
    //    'source'             => get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
        'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
        'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
        'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
      ),


  );

  /*
   * Array of configuration settings. Amend each line as needed.
   *
   * TGMPA will start providing localized text strings soon. If you already have translations of our standard
   * strings available, please help us make TGMPA even better by giving us access to these translations or by
   * sending in a pull-request with .po file(s) with the translations.
   *
   * Only uncomment the strings in the config array if you want to customize the strings.
   */
  $config = array(
    'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to bundled plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'parent_slug'  => 'themes.php',            // Parent menu slug.
    'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => false,                   // Automatically activate plugins after installation or not.
    'message'      => '',                      // Message to output right before the plugins table.

    /*
    'strings'      => array(
      'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
      'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
      'installing'                      => __( 'Installing Plugin: %s', 'theme-slug' ), // %s = plugin name.
      'oops'                            => __( 'Something went wrong with the plugin API.', 'theme-slug' ),
      'notice_can_install_required'     => _n_noop(
        'This theme requires the following plugin: %1$s.',
        'This theme requires the following plugins: %1$s.',
        'theme-slug'
      ), // %1$s = plugin name(s).
      'notice_can_install_recommended'  => _n_noop(
        'This theme recommends the following plugin: %1$s.',
        'This theme recommends the following plugins: %1$s.',
        'theme-slug'
      ), // %1$s = plugin name(s).
      'notice_cannot_install'           => _n_noop(
        'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
        'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
        'theme-slug'
      ), // %1$s = plugin name(s).
      'notice_ask_to_update'            => _n_noop(
        'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
        'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
        'theme-slug'
      ), // %1$s = plugin name(s).
      'notice_ask_to_update_maybe'      => _n_noop(
        'There is an update available for: %1$s.',
        'There are updates available for the following plugins: %1$s.',
        'theme-slug'
      ), // %1$s = plugin name(s).
      'notice_cannot_update'            => _n_noop(
        'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
        'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
        'theme-slug'
      ), // %1$s = plugin name(s).
      'notice_can_activate_required'    => _n_noop(
        'The following required plugin is currently inactive: %1$s.',
        'The following required plugins are currently inactive: %1$s.',
        'theme-slug'
      ), // %1$s = plugin name(s).
      'notice_can_activate_recommended' => _n_noop(
        'The following recommended plugin is currently inactive: %1$s.',
        'The following recommended plugins are currently inactive: %1$s.',
        'theme-slug'
      ), // %1$s = plugin name(s).
      'notice_cannot_activate'          => _n_noop(
        'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
        'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
        'theme-slug'
      ), // %1$s = plugin name(s).
      'install_link'                    => _n_noop(
        'Begin installing plugin',
        'Begin installing plugins',
        'theme-slug'
      ),
      'update_link' 					  => _n_noop(
        'Begin updating plugin',
        'Begin updating plugins',
        'theme-slug'
      ),
      'activate_link'                   => _n_noop(
        'Begin activating plugin',
        'Begin activating plugins',
        'theme-slug'
      ),
      'return'                          => __( 'Return to Required Plugins Installer', 'theme-slug' ),
      'plugin_activated'                => __( 'Plugin activated successfully.', 'theme-slug' ),
      'activated_successfully'          => __( 'The following plugin was activated successfully:', 'theme-slug' ),
      'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'theme-slug' ),  // %1$s = plugin name(s).
      'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'theme-slug' ),  // %1$s = plugin name(s).
      'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'theme-slug' ), // %s = dashboard link.
      'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'tgmpa' ),

      'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
    ),
    */
  );

  tgmpa( $plugins, $config );
  }

/* ---end plugin requires--*/

  function theme_styles() {

    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  }
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

    global $wp_scripts;

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);

    $wp_scripts->add_data( 'html5shiv', 'conditional', 'lt IE9');
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE9');

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true  );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu')
        )
    );
}
add_action( 'init', 'register_theme_menus' );


function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}

create_widget( 'Front Page Left', 'front-left', 'Displays widgets on the left of the front page');
create_widget( 'Front Page Center', 'front-center', 'Displays widgets in the center of the front page');
create_widget( 'Front Page Right', 'front-right', 'Displays widgets on the right of the front page');

create_widget( 'Page Sidebar', 'page', 'Displays widgets in the sidebar of a page');
create_widget( 'Blog Sidebar', 'blog', 'Displays widgets in the sidebar of a blog');

/**
 * Remove the text - 'You may use these <abbr title="HyperText Markup
 * Language">HTML</abbr> tags ...'
 * from below the comment entry box.
 */

add_filter('comment_form_defaults', 'remove_comment_styling_prompt');

function remove_comment_styling_prompt($defaults) {
	$defaults['comment_notes_after'] = '';
	return $defaults;
}


?>
