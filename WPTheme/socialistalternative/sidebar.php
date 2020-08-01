<div class="salt-sidebar">
    <h2>LATEST NEWS</h2>
    <div class="sidebar-content">
    <?php 
        $sidebar_loop = new WP_Query(array(
            "category_name" => "Uncategorized",
            "posts_per_page" => 3
        ));
        if ($sidebar_loop->have_posts()) {
            while ($sidebar_loop->have_posts()) {
                $sidebar_loop->the_post();
                get_template_part("content", "sidebar");
            }
        }
    ?>
    </div>
    <div class='sidebar-buttons'>
        <button class="salt-articlepreview-prev salt-button-link">
            <i class="fas fa-chevron-left prev"></i>
        </button>
        <button class="salt-articlepreview-next salt-button-link">
            <i class="fas fa-chevron-right next"></i>
    </button>

    </div>


</div>