<section class="categories">
    <div class="categories_selection_headline">
        <h2>Category selection</h2>
    </div>
      <div class="categories_selection_box">
      <?php
            $arguments = array(
              "post_type" => "category-selection",
              "post_per_page" => -1
             );
             $loop = new WP_Query($arguments);
             ?>

        <?php if($loop->have_posts()): ?>
          <?php while($loop->have_posts()): $loop->the_post() ?>
          
            <?php 
            // Fetch recipe data
            $categoryIcon = get_field("category_icon");
            $categoryName = get_field("category_name_");
            ?>
        <div class="category_selection_box_vegetarian">
        <div class="category_selection_box_icon">
        <img src="<?php echo esc_url($categoryIcon["url"]) ?>">
        </div>
        <div class="category_selection_box_text">
          <p><?php echo esc_html($categoryName) ?></p>
        </div>

      </div>
       <?php endwhile ?>
         <?php wp_reset_postdata() ?>
        <?php endif ?>
      </div>
      
      
</section>