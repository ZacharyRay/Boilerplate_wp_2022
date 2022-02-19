<?php 

/*

Template Name: Login

*/

get_header();

/* Get custom fields */

$login_shotcode = get_post_meta(get_the_ID(), 'shortcode') ;
?>


<section class="page-login-shortcode-wrapper">
    <div class="page-login-shortcode__inner">
        <?=
        do_shortcode($login_shotcode[0]);
        
        ?>
    </div>
</section>

<?php 

get_footer();

?>