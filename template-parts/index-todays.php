<section class="todays_recipe">
      <div class="todays_recipes_headline">
        <h2>Today's recipes</h2>
      </div>

      
      <div class="todays_recipes_content">
        <?php
        $arguments = array(
          "post_type" => "todays-recipe-card",
          "post_per_page" => 4
        );
        
        <div class="todays_recipes_content_block">
          <div class="todays_recipes_content_block_image">
            <img src="https://picsum.photos/300/175" alt="">
          </div>
          <div class="todays_recipes_content_block_text">
            <div class="todays_recipes_content_block_text_top">
              <h5>FoodName</h5>
              <p>Lorem Ipsum is simply dummy text of the</p>
            </div>
            <div class="todays_recipes_content_block_text_bottom">
              <div class="todays_recipes_content_block_bottom_area">
                <div class="todays_recipes_content_block_bottom_area_left" data-category="seafood">
                  <p id="cat-test" data-category="seafood"></p>
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
      </div>

    </section>