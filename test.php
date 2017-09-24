<?php 

function cast_postsbycategory() {

	global $post;

$args = array(
    'post_type'   => 'post',
    'category' => 'all',
    'posts_per_page' => 3,
  );

ob_start();
$posts = get_posts($args); ?>

<div class="linklist"
<?php foreach($posts as $post){ setup_postdata($post);  ?>
	
<a href="<?php the_permalink(); ?>" class="dark" rel="bookmark"><?php the_title(); ?></a>

<?php }
?> </div> <?php
 return ob_get_clean();

wp_reset_postdata();
 }
 
/*add_shortcode*/
add_shortcode('cust_news_block', 'cast_postsbycategory');