<?php
$heroTextSmallHeader1 = get_field("small_header_1");
$heroTextHeader = get_field("big_header");
$heroTextSmallHeader2 = get_field("small_header_2");
$

?>

<section class="hero">
      <div class="hero-container">
        <div class="hero-text">
          <p class="hero-text-small-header"><?php echo esc_html($heroTextSmallHeader1) ?></p>
          <p class="hero-text-big-header"><?php echo esc_html($heroTextHeader) ?></p>
          <p class="hero-text-small-header"><?php echo esc_html($heroTextSmallHeader2) ?></p>
        </div>
        <div class="hero-search">
          <input type="search" name="" class="search-box" placeholder="Search">

        </div>
      </div>
    </section>