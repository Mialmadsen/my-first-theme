<?php get_header(); ?>

<?php
$recipeImage = get_field("recipe_image");
$recipeHeader = get_field("recipe_header");
$recipeSmallHeader = get_field("recipe_small_header");
$recipeTime = get_field("cooking_time");
$recipeCalories = get_field("calorie_description");
$recipeDifficulty = get_field("difficulty");
$recipeInstructionsOne = get_field("instructions_1");
$recipeBulletPoints = get_field("ingredients_bullet_point_1");
$recipeInstructionsTwo = get_field("instructions_2");
$recipeBulletPointsTwo = get_field("ingredient_bullet_point_2");


?>
<section class="recipe_details">
      <div class="recipe_details_left">
        <div class="recipe-hero-text">
          <p class="recipe-hero-text-medium"><?php echo esc_html($recipeHeader) ?></p>
          <p class="recipe-hero-text-large"><?php echo esc_html($recipeSmallHeader) ?></p>

        </div>
        
        <!-- div element to contain 3 info, checkboxes and 2 buttons -->
        <div class="recipe_details_ingredient_block">

          <!-- Part I -->
          <!-- div element .recipe_details_ingredient_block_info_three + .recipe_details_ingredient_block_info_three_item*3 with i+p as children -->
          <div class="recipe_details_ingredient_block_info_three">
            <div class="recipe_details_ingredient_block_info_three_item">
                <i class="fas fa-clock"></i>
                <p><?php echo esc_html($recipeTime) ?></p>
            </div>
            <div class="recipe_details_ingredient_block_info_three_item">
                <i class="fas fa-fire"></i>
                <p><?php echo esc_html($recipeCalories) ?></p>
            </div>
            <div class="recipe_details_ingredient_block_info_three_item">
                <i class="fas fa-chart-simple"></i>
                <p><?php echo esc_html($recipeDifficulty) ?></p>
            </div>



          </div> 

       
          <div class="recipe_details_ingredients">
            <!-- Part II -->
            <!-- header (h4) + div element (.recipe_details_ingredient_block_checkboxes) & input fields-->
            <h4>Ingredients</h4>
            <div class="recipe_details_ingredient_block_checkboxes">
            <?php
            $arguments = array(
              "post_type" => "checkbox",
              "post_per_page" => -1
             );
             $loop = new WP_Query($arguments);
             ?>

        <?php if($loop->have_posts()): ?>
          <?php while($loop->have_posts()): $loop->the_post() ?>
          
            <?php 
            // Fetch recipe data
            $recipeIngredient = get_field("ingredient");
            
            ?>
            <!-- HTML output -->
                <label><input type="checkbox"><?php echo esc_html($recipeIngredient) ?></label>
            <?php endwhile ?>
           <?php wp_reset_postdata() ?>
            <?php endif ?>
            </div>
          </div>

          <!-- Part III -->
          <!-- div element .recipe_details_ingredient_block_buttons with 2 buttons and i + a as children -->
          <div class="recipe_details_ingredient_block_buttons">
            <button class="button">
              <i class="fas fa-print"></i>  
              <a href="#" class="button-text">Print</a>
            </button>
            <button class="button">
                <i class="fas fa-heart"></i>  
                <a href="#" class="button-text">Favorite</a>
            </button>

          </div>

        </div>
      </div>

      <!-- right side contains image -->
      <div class="recipe_details_right">
        <div class="recipe_details_right_image">
        <img src="<?php echo esc_url($recipeImage["url"]) ?>" alt="">
        </div>
      </div>
    </section>

    <div class="instructions_and_ingredient_headline">
      <div class="instructions_headline">
        <h2>Instructions</h2>
      </div>
      <div class="ingredients_headline">
        <h2>Ingredients</h2>
      </div>
    </div>

    <div class="instructions_and_ingredients_list">
      <div class="instructions_box">
        
          <p><?php echo $recipeInstructionsOne ?></p>         
        
      </div>
      <div class="ingredients_box">
          <p><?php echo $recipeBulletPoints ?></p>
      </div>

    
    </div>

    <div class="instructions_and_ingredient_headline_2">
      <div class="instructions_headline">
        <h2>Instructions</h2>
      </div>
      <div class="ingredients_headline">
        <h2>Ingredients</h2>
      </div>
    </div>

    <div class="instructions_and_ingredients_list_2">
      <div class="instructions_box_2">
        <ol>
          <li class="step_1">
            Warm the olive oil in a large Dutch oven or pot over medium heat. One-fourth cup olive oil may seem like a lot, but it adds a lovely richness and heartiness to this nutritious soup. 
          </li>
  
          <li class="step_2">Once the oil is shimmering, add the chopped onion and carrot and cook, stirring often, until the onion has softened and is turning translucent, about 5 minutes. 
          </li>
  
          <li class="step_3">
            Add the garlic, cumin, curry powder and thyme. Cook until fragrant while stirring constantly, about 30 seconds. Pour in the drained diced tomatoes and cook for a few more minutes, stirring often, in order to enhance their flavor. 
          </li>
  
          <li class="step_4">
            Pour in the lentils, broth and the water. Add 1 teaspoon salt and a pinch of red pepper flakes. Season generously with freshly ground black pepper. Raise heat and bring the mixture to a boil, then partially cover the pot and reduce the heat to maintain a gentle simmer. Cook for 25 to 30 minutes, or until the lentils are tender but still hold their shape. 
          </li>
  
          <li class="step_5">Transfer 2 cups of the soup to a blender. Securely fasten the lid, protect your hand from steam with a tea towel placed over the lid, and purée the soup until smooth. Pour the puréed soup back into the pot. (Or, use an immersion blender to blend a portion of the soup.)  
          </li>
  
          <li class="step_6">
            Add the chopped greens and cook for 5 more minutes, or until the greens have softened to your liking. Remove the pot from the heat and stir in 1 tablespoon of lemon juice. Taste and season with more salt, pepper and/or lemon juice until the flavors really sing. For spicier soup, add another pinch or two of red pepper flakes. 
          </li>
  
          <li class="step_7">Serve while hot. Leftovers will keep well for about 4 days in the refrigerator, or can be frozen for several months (just defrost before serving).
          </li>
        </ol>
      </div>
      <div class="ingredients_box_2">
        <ul>
          <li>
            ¼ cup extra virgin olive oil
          </li>

          <li>
            1 medium yellow or white onion, chopped
          </li>

          <li>
            2 carrots, peeled and chopped
          </li>

          <li>
            4 garlic cloves, pressed or minced
          </li>

          <li>
            2 teaspoons ground cumin
          </li>

          <li>
            1 teaspoon curry powder
          </li>

          <li>
            ½ teaspoon dried thyme
          </li>

          <li>
            1 large can (28 ounces) diced tomatoes, lightly drained
          </li>

          <li>
            1 cup brown or green lentils, picked over and rinsed
          </li>

          <li>
            4 cups vegetable broth
          </li>

          <li>
            2 cups water
          </li>

          <li>
            1 teaspoon salt, more to taste
          </li>

          <li>
            Pinch of red pepper flakes
          </li>

          <li>
            Freshly ground black pepper, to taste
          </li>

          <li>
            1 cup chopped fresh collard greens or kale, tough ribs removed
          </li>

          <li>
            1 to 2 tablespoons lemon juice (½ to 1 medium lemon), to taste
          </li>
        </ul>
      </div>

    
    </div>

    <!-- div element .recipe_instruction_one with .filler_block as child :: just to take up space for future ul>li -->
    <section class="recipe_instruction_one">
      <div class="filler_block"></div>
    </section>

    <section class="recipe_instruction_one">

    </section>







   

    


    
<?php get_footer(); ?>
<?php
