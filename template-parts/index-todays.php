<section class="todays_recipe">
      <div class="todays_recipes_headline">
        <h2>Today's recipes</h2>
      </div>

      
      <div class="todays_recipes_content">
        <?php
        $arguments = array(
          "post_type" => "todays-recipe-card",
          "post_per_page" => 4
        );?>

        <?php if($loop->have_posts()): ?>
          <?php while($loop->have_posts()): $loop->the_post() ?>
          
            <?php 
            // Fetch recipe data
            $recipeImage = get_field("todays_recipes_card_image_");
            $recipeCardHeader = get_field("todays_recipe");
            $recipeCardText = get_field("todays_recipes_text_");
            $recipeCardCategory = get_field("todays_recipes_category_");
            ?>
            <!-- HTML output -->
            <div class="todays_recipes_content_block">
          <div class="todays_recipes_content_block_image">
            <img src="<?php echo esc_url($recipeImage["url"]) ?>" alt="">
          </div>
          <div class="todays_recipes_content_block_text">
            <div class="todays_recipes_content_block_text_top">
              <h5><?php echo esc_html($recipeCardHeader) ?></h5>
              <p><?php echo esc_html($recipeCardText) ?></p>
            </div>
            <div class="todays_recipes_content_block_text_bottom">
              <div class="todays_recipes_content_block_bottom_area">
                <div class="todays_recipes_content_block_bottom_area_left" data-category="seafood">
                  <p ><?php echo esc_html($recipeCardCategory) ?></p>
                  <p>Recipe</p>
                </div>
                <div class="todays_recipes_content_block_bottom_area_right">
                  <button>
                    <a href="#">How to</a>
                  </button>
                </div>

              </div>
            </div>
          </div>
        </div>
            
         <?php endwhile ?>
         <?php wp_reset_postdata() ?>
        <?php endif ?>
       
      </div>

    </section>