<?php

/* Template Name: Homepage */

get_header();

?>

<!-- Homepage start -->
<?php 
//prijungiam dalinius failus is partials katalogo
get_template_part('partials/hero');
get_template_part('partials/offers');
get_template_part('partials/hol_types');
get_template_part('partials/clients');

?>
<!-- Homepage end -->
<?php get_footer(); ?>