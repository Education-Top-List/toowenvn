<?php  
/* 
Template Name: page-template-gioithieu 
*/  
get_header();  
?>

<div id="content">
    <div class="g_content">
          <div class="container">
    <?php 
        $my_postid = 203;//This is page id or post id
        $content_post = get_post($my_postid);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
        ?>

</div>
    </div>
  
</div>


<?php get_footer(); ?>