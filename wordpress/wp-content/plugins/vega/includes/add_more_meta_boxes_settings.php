<?php

add_action('admin_init', 'sap_general_section');
function sap_general_section()
{

  add_settings_section(
    'sap_settings_section',
    'Campos personalizados',
    'sap_section_options_callback',
    'general'
  );

  add_settings_field(
    'email_field',
    '<label for="email_field"><span class="dashicons dashicons-email"></span> ' . __('E-mail de contato', 'email_field') . '</label>',
    'sap_fields_callback',
    'general',
    'sap_settings_section',
    array(
      'email_field'
    )
  );

  add_settings_field(
    'facebook_field',
    '<label for="facebook_field"><span class="dashicons dashicons-facebook"></span> ' . __('Página no Facebook', 'facebook_field') . '</label>',
    'sap_fields_callback',
    'general',
    'sap_settings_section',
    array(
      'facebook_field'
    )

  );

  add_settings_field(
    'github_field',
    '<label for="github_field"><span class="dashicons dashicons-networking"></span> ' . __('Página GitHub', 'github_field') . '</label>',
    'sap_fields_callback',
    'general',
    'sap_settings_section',
    array(
      'github_field'
    )
  );

  add_settings_field(
    'youtube_field',
    '<label for="youtube_field"><span class="dashicons dashicons-video-alt3"></span> ' . __('Canal no Youtube', 'youtube_field') . '</label>',
    'sap_fields_callback',
    'general',
    'sap_settings_section',
    array(
      'youtube_field'
    )
  );

  add_settings_field(
    'instagram_field',
    '<label for="instagram_field"><span class="dashicons dashicons-instagram"></span> ' . __('Perfil no Instagram', 'instagram_field') . '</label>',
    'sap_fields_callback',
    'general',
    'sap_settings_section',
    array(
      'instagram_field'
    )
  );
  add_settings_field(
    'whatsapp_field',
    '<label for="whatsapp_field"><span class="dashicons dashicons-megaphone"></span> ' . __('Número de WhatsApp', 'whatsapp_field') . '</label>',
    'sap_fields_callback',
    'general',
    'sap_settings_section',
    array(
      'whatsapp_field'
    )
  );

  add_settings_field(
    'telegram_field',
    '<label for="telegram_field"><span class="dashicons dashicons-admin-site-alt"></span> ' . __('Telegram', 'telegram_field') . '</label>',
    'sap_fields_callback',
    'general',
    'sap_settings_section',
    array(
      'telegram_field'
    )
  );

  add_settings_field(
    'feed_field',
    '<label for="feed_field"><span class="dashicons dashicons-rss"></span> ' . __('Feed do Podcast', 'feed_field') . '</label>',
    'sap_fields_callback',
    'general',
    'sap_settings_section',
    array(
      'feed_field'
    )
  );

  add_settings_field(
    'analytics_field',
    '<label for="analytics_field"><span class="dashicons dashicons-analytics"></span> ' . __('Código do G. Analytics', 'analytics_field') . '</label>',
    'sap_fields_callback',
    'general',
    'sap_settings_section',
    array(
      'analytics_field'
    )
  );

  add_settings_field(
    'description_field',
    '<label for="description_field"><span class="dashicons dashicons-store"></span> ' . __('Descrição', 'description_field') . '</label>',
    'sap_fields_callback_description',
    'general',
    'sap_settings_section',
    array(
      'description_field'
    )
  );

  register_setting('general', 'email_field', 'esc_attr');
  register_setting('general', 'facebook_field', 'esc_attr');
  register_setting('general', 'github_field', 'esc_attr');
  register_setting('general', 'youtube_field', 'esc_attr');
  register_setting('general', 'instagram_field', 'esc_attr');
  register_setting('general', 'whatsapp_field', 'esc_attr');
  register_setting('general', 'telegram_field', 'esc_attr');
  register_setting('general', 'feed_field', 'esc_attr');
  register_setting('general', 'analytics_field', 'esc_attr');
  register_setting('general', 'description_field', 'esc_attr');
}

function sap_section_options_callback()
{
  echo '<p>Informaçoes de contato, redes sociais e rastreamento.</p>';
}

function sap_section_date_callback()
{
  echo '<p>Quando será o próximo evento?.</p>';
}

function sap_fields_callback_date($args)
{
  $option = get_option($args[0]);
  echo '<input type="date" id="' . $args[0] . '" name="' . $args[0] . '" value="' . $option . '" class="regular-text ltr"/>';
}

function sap_fields_callback_description($args)
{
  $option = get_option($args[0]);
  echo '<textarea type="textarea" id="' . $args[0] . '" name="' . $args[0] . '" value="' . $option . '" class="regular-text ltr" cols="50" rows="10"/>' . $option . '</textarea>';
}

function sap_fields_callback($args)
{
  $option = get_option($args[0]);
  echo '<input type="text" id="' . $args[0] . '" name="' . $args[0] . '" value="' . $option . '" class="regular-text ltr"/>';
}