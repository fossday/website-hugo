<!-- Get Header  -->
<?php get_header(); ?>

<?php 
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

    if(in_array('speaker', $curauth->roles) || in_array('editor', $curauth->roles))
    {
        include "partials/author-speaker.php";

    } else { 

        include "partials/author-post.php";
        
     }?>

<!-- Get Footer -->

<?php get_footer(); ?>