<?php

 function onetarek_wpmut_admin_scripts()
 {
 if (isset($_GET['page']) && $_GET['page'] == 'oneTarek_wpmut_plugin_page')
 {
 wp_enqueue_script('jquery');
 wp_enqueue_script('media-upload');
 wp_enqueue_script('thickbox');
 wp_register_script('my-upload', ONETAREK_WPMUT_PLUGIN_URL.'onetarek-wpmut-admin-script.js', array('jquery','media-upload','thickbox'));
 wp_enqueue_script('my-upload');
 }
 }
 
 function onetarek_wpmut_admin_styles()
 {
 if (isset($_GET['page']) && $_GET['page'] == 'oneTarek_wpmut_plugin_page')
 {
 wp_enqueue_style('thickbox');
 }
 }
 add_action('admin_print_scripts', 'onetarek_wpmut_admin_scripts');
 add_action('admin_print_styles', 'onetarek_wpmut_admin_styles');





function add_theme_menu_item()
{
	add_menu_page("Rebellion", "Rebellion", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");

function theme_settings_page()
{
    ?>
	    <div class="wrap">
	    <h1>Rebellion Theme</h1>
	    <p>by Araz Gholami</p>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
}

function display_title_element()
{
	?>
    	<input type="text" name="title" id="title" value="<?php echo get_option('title'); ?>">
    <?php
}

function display_description_element()
{
	?>
            <textarea style="width:500px; height:250px;" name="description" id="description"><?php echo get_option('description'); ?></textarea>
    <?php
}

function display_contact_element()
{
	?>
		<input type="checkbox" name="contact" value="1" <?php checked(1, get_option('contact'), true); ?>> 
	<?php
}
function logo_display()
{
	?>
	 <input type="text" name="background" id="background" value="<?php echo get_option('background'); ?>">
	 <p>type: png,jpg <br> size: 1920 x 600 <br> I know it's not best way, maybe next version :)</p>
   <?php
}



function display_theme_panel_fields()
{
	add_settings_section("section", "Header", null, "theme-options");
	
	add_settings_field("title", "Title", "display_title_element", "theme-options", "section");
    add_settings_field("description", "Description", "display_description_element", "theme-options", "section");
    add_settings_field("contact", "Contact button?", "display_contact_element", "theme-options", "section");
    add_settings_field("logo", "Header Background", "logo_display", "theme-options", "section");  

    register_setting("section", "title");
    register_setting("section", "description");
    register_setting("section", "contact");
    register_setting("section", "background");
    
    add_settings_section("section", "Header Options", null, "theme-options");
    
}

add_action("admin_init", "display_theme_panel_fields");