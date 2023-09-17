<?php
/*
Template Name: Category-page
*/
get_header();
?>

<h1>Product Categories</h1>

<?php
$categories = get_terms(
    array(
        'taxonomy' => 'product-category', 
        'hide_empty' => false, 
    )
);

if ($categories && !is_wp_error($categories)) {
    echo '<ul>';
    foreach ($categories as $category) {
        echo '<li> * <a href="' . get_term_link($category->term_id) . '">' . $category->name . '</a></li>';
    }
    echo '</ul>';
}
?>

