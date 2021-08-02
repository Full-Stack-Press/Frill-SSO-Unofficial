<?php

namespace unofficial\frill\sso;

class Settings
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'frill_sso_settings_page']);
        add_action('admin_init', [$this, 'frill_sso_register_settings']);
    }
    public function frill_sso_settings_page()
    {
        add_options_page('Frill SSO Settings', 'Frill SSO', 'manage_options', 'frill-sso', [$this, 'frill_sso_render_settings_page']);
    }
    public function frill_sso_render_settings_page()
    {
        if (!current_user_can('manage_options')) {
            return;
        }
        ?>
		<div class="wrap">
			<h2><?php 
        _e('Frill SSO settings', 'frill-sso');
        ?></h2>
			<form action="options.php" method="post">
				<?php 
        settings_fields('frill_sso_settings');
        ?>
				<?php 
        do_settings_sections('frill_sso_settings');
        ?>
				<input name="submit" class="button button-primary" type="submit" value="<?php 
        esc_attr_e('Save');
        ?>" />
			</form>
		</div>

		<?php 
    }
    public function frill_sso_register_settings()
    {
        register_setting('frill_sso_settings', 'frill_sso_settings');
        add_settings_section('frill_sso_api', 'Api Settings', [$this, 'frill_sso_section_text'], 'frill_sso_settings');
        add_settings_field('frill_sso_key', 'SSO KEY *', [$this, 'frill_sso_key_callback'], 'frill_sso_settings', 'frill_sso_api');
        add_settings_field('frill_sso_url', 'Frill Url *', [$this, 'frill_sso_url_callback'], 'frill_sso_settings', 'frill_sso_api');
    }
    public function frill_sso_section_text()
    {
        echo '<p>' . __('Enter the credentials found on your frill settings page', 'frill-sso') . '</p>';
    }
    public function frill_sso_key_callback()
    {
        $options = get_option('frill_sso_settings');
        $value = $options['key'];
        $placeholder = $value;
        if (!isset($options['key']) || !$options['key']) {
            $value = '';
        }
        ?>
			<input id="frill_sso_settings_key" name="frill_sso_settings[key]" type="password" value="<?php 
        echo esc_attr($value);
        ?>" placeholder="<?php 
        echo esc_attr($placeholder);
        ?>" required/>
		<?php 
    }
    public function frill_sso_url_callback()
    {
        $options = get_option('frill_sso_settings');
        ?>
		<input id="frill_sso_settings_key" name="frill_sso_settings[url]" type="url" value="<?php 
        echo esc_url($options['url']);
        ?>" placeholder="https://example.frill.co" "/>
		<?php 
    }
}
\class_alias('unofficial\\frill\\sso\\Settings', 'Settings', \false);
