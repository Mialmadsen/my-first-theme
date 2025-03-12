<?php
function recipe_load_resources() {
    wp_enqueue_style("icons", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css");
    wp_enqueue_style("main-css", get_template_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "recipe_load_resources");
