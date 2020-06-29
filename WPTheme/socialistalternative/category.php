<?php 
    $search = get_query_var("search");
    $queryString = "";
    $failString = "No posts found";
    $category = get_the_category(); 
    if ($search && $search != "") {
		$search = preg_replace("/[^\w ]/", "", $search);
		$queryString = $queryString."s=".sanitize_title($search);
		query_posts($queryString);
		$failString .= " for search term '$search'";
	}
    get_header("fullwidth");
    echo '<main class="salt-maincontent">';
    echo '<h1 class="salt-cat-title">'.$category[0]->cat_name.'</h1>';
    echo '<ul class="salt-newsblock">';
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part("content", "preview");
        }
    } else {
		echo "<h1 class='salt-error'>".$failString."</h1>";
	}
    echo '</ul></main>';
    get_sidebar();
    get_footer();
?>
