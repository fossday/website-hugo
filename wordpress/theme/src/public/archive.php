<?php $post = $posts[0]; ?>
<?php if (is_category()) {

include "partials/archive/categories.php";

} elseif (is_tag()) {

    include "partials/archive/categories.php";

} elseif (is_day()) {

    include "partials/archive/categories.php";

} elseif (is_month()) {

    include "partials/archive/categories.php";

} elseif (is_year()) {

    include "partials/archive/categories.php";

} elseif (is_author()) { 

    include "partials/archive/categories.php";

} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {

    echo '<h3>Postagens do blog</h3>';
    
} ?>
<?php if (get_post_type() == 'podcast') {

    include "partials/archive/categories.php";

} elseif (get_post_type() == 'talks') {

    include "partials/archive/talks.php";

} ?>