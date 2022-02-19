<?php 

/*

Template Name: Calculators

*/

get_header();

/* Get custom fields */

$robot_shotcode = get_post_meta(get_the_ID(), 'shortcode') ;
$title_shotcode = get_post_meta(get_the_ID(), 'title') ;
$subtitle_shotcode = get_post_meta(get_the_ID(), 'subtitle') ;
?>


<section class="page-calculator-shortcode-wrapper">
    <div class="page-calculator-shortcode__inner">

        <h1><?= do_shortcode($title_shotcode[0]); ?></h1>
        <h4><?= do_shortcode($subtitle_shotcode[0]); ?></h4>

        <?=
        do_shortcode($robot_shotcode[0]);
        
        ?>
    </div>
</section>

<?php 

get_footer();
