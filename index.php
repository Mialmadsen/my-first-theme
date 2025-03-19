<?php get_header(); ?>
<?php if(have_posts()): ?>

		<?php while(have_posts()): the_post() ?>

			<?php get_template_part("template-parts/index", "hero") ?>
      <?php get_template_part("template-parts/index", "todays") ?>
      <?php get_template_part("template-parts/index", "categories") ?>


		<?php endwhile ?>
	<?php endif ?>





   

    <section class="content_image">
      <div class="content_image_form">
        <div class="content_image_box">
          <div class="content_image_box_small_header">
            <p>In the kitchen</p>
          </div>
          <div class="content_image_box_header">
            <p>All-star showdown</p>
          </div>
          <div class="content_image_box_text">
            <p>Big brawl in kitchen. Who takes it? 
              Winner gets to take home the desserts! 
              Losers can wave goodbye! </p>
          </div>
        </div>
      </div>
      
    </section>



    <section class="content_area">
      <div class="content_area_headline">
        <h2>In the kitchen</h2>
      </div>

      <div class="content_area_box">
        <div class="content_area_boxes box-one">
          <div class="content_area_box_one_container">
            <div class="content_area_box_one_small_header">
              <p>In the kitchen</p>
            </div>
            <div class="content_area_box_one_header">
              <p>How to plate as a pro</p>
            </div>
            <div class="content_area_box_one_text">
              <p>Plating techniques - no salt bae crap. 
                See how to properly arrange and design
                a plate. </p>
            </div>
            <div class="content_area_box_one_button">
              <button>
                <a href="#">Plating</a>
              </button>
            </div>
          </div>
        </div>
        
        <div class="content_area_boxes box-two"></div>
        <div class="content_area_boxes box-three"></div>

        <div class="content_area_boxes box-four">
          <div class="content_area_box_four_container">
            <div class="content_area_box_four_small_header">
              <p>In the kitchen</p>
            </div>
            <div class="content_area_box_four_header">
              <p>Recipes are for...</p>
            </div>
            <div class="content_area_box_four_text">
              <p>Big brawl in kitchen. Who takes it? 
                Winner gets to take home the desserts! 
                Losers can wave goodbye!  </p>
            </div>
            <div class="content_area_box_four_button">
              <button>
                <a href="#">Recipe</a>
              </button>
            </div>
          </div>
        </div>

      <div class="content_area_boxes box-five">
        <div class="content_area_box_five_container">
          <div class="content_area_box_five_small_header">
            <p>In the kitchen</p>
          </div>
          <div class="content_area_box_five_header">
            <p> Meats - how to baste</p>
          </div>
          <div class="content_area_box_five_text">
            <p>Big brawl in kitchen. Who takes it? 
              Winner gets to take home the desserts! 
              Very scrumptious!</p>
          </div>
          <div class="content_area_box_five_button">
            <button>
              <a href="#">Guides</a>
            </button>
          </div>
        </div>
      </div>

      <div class="content_area_boxes box-six"></div>
    </div>
    </section>
<?php get_footer(); ?>