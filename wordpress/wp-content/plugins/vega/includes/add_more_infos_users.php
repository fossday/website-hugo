<?php

function custom_author_links($author_social_link)
{

  $author_social_link['linkedin_profile'] = '<span class="dashicons dashicons-schedule"></span> Linkedin:';
  $author_social_link['github_profile'] = '<span class="dashicons dashicons-nametag"></span> GitHub:';
  $author_social_link['twitter_profile'] = '<span class="dashicons dashicons-twitter"></span> Twitter:';
  $author_social_link['instagram_profile'] = '<span class="dashicons dashicons-instagram"></span> Intagram:';
  $author_social_link['facebook_profile'] = '<span class="dashicons dashicons-facebook"></span> Facebook:';
  $author_social_link['youtube_profile'] = '<span class="dashicons dashicons-video-alt3"></span> YouTube:';

  return $author_social_link;
}

add_filter('user_contactmethods', 'custom_author_links', 10, 1);

/* add custom profile field */
add_action( 'show_user_profile', '_extra_profile_fields' );
add_action( 'edit_user_profile', '_extra_profile_fields' );

function _extra_profile_fields( $user ) { ?>

    <h3>Informações extras</h3>

    <table class="form-table">

        <tr>
            <th><label for="professional_title">Título</label></th>

            <td>
                <textarea class="regular-text" name="professional_title" id="professional_title" rows="2" cols="50" maxlength="130"><?php echo esc_attr( get_the_author_meta( 'professional_title', $user->ID ) ); ?></textarea><br />
                <span class="description">Em até 130 carácteres, descreva seu título professional.</span>
            </td>
        </tr>

    </table>
<?php }

/* save custom profile field */
add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;
    update_usermeta( $user_id, 'professional_title', $_POST['professional_title'] );
}