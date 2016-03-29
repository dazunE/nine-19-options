<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://919.press
 * @since      1.0.0
 *
 * @package    Nine_19_Options
 * @subpackage Nine_19_Options/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap ninteen-options">
    <div id="option-panel" class="option-panel">
	    <h1><?php echo esc_html( get_admin_page_title() ); ?></h2>
	    <h2 class="nav-tab-wrapper">
	    <?php
		if( isset( $_GET[ 'tab' ] ) ) {
		    $active_tab = $_GET[ 'tab' ];
		} else{
			$active_tab = 'general_options';
		}
		?>
			<a href="?page=nineteen-options&tab=general_options" class="nav-tab <?php echo $active_tab == 'general_options' ? 'nav-tab-active' : ''; ?>">
				<?php echo __( 'General Settings' ,'nineteen-options')?>
			</a>
			<a href="?page=nineteen-options&tab=social_options" class="nav-tab <?php echo $active_tab == 'social_options' ? 'nav-tab-active' : ''; ?>">
				<?php echo __( 'Social Settings' ,'nineteen-options')?>
			</a>
		</h2>
	    <form action="options.php" method="post">
	        <?php

	        	if( $active_tab == 'general_options' ) {

	        		echo '<div class="section-wrap">';

	            	settings_fields( $this->plugin_name);
	            	do_settings_sections( $this->plugin_name);

	            	echo '</div>';
	            } else {

	            	echo 'comming soon';
	            }

	            submit_button();

	        ?>
	    </form>
	</div>
</div>