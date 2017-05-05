<?php /* Template Name: CV */

// $args = array('posts_per_page'=>10);
// $posts = get_posts($args);
// foreach ($posts as $post) {
//
//     setup_postdata($post);
//     the_title();
//     the_excerpt();
// }




$cats = get_categories();
foreach ($cats as $cat) {
   $args = array('category' => $cat->cat_ID);
   $posts = get_posts($args);
   $category_link = sprintf(
   '<a href="%1$s" alt="%2$s">%3$s</a>',
    esc_url(get_category_link($cat->term_id)),
    esc_attr(sprintf(__('textdomain'), $cat->name)),
    esc_html($cat->name)
    );
    echo $category_link;
    foreach ($posts as $post) {
        setup_postdata($post);
        the_title('<h1>', '</h1>');
        the_excerpt();
        if (has_tag('New Tag')){
           echo "New Tag";
        }
        edit_post_link();
   }

   }

// $categories = get_categories();
// foreach ($categories as $category) {
// $args = array('category'=>"$cat->cat_ID");
//
//
//     $posts = get_posts($posts);
//     setup_postdata($post);
//     the_title();
//     the_excerpt();
// }

?>
