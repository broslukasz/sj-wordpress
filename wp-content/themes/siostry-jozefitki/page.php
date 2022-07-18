<?php get_header(); ?>

<main class="sj-page">
  <nav class="sj-side-nav">
  <ul class="sj-navigation-links">
    <div class="sj-parent-nav-item">
      <li><a href="/">Aktualności</a></li>
    </div>  
    <?php
      $menuPages = new WP_Query(array(
        'posts_per_page' => 30,
        'post_type'=> 'page',
      ));

      $currentPageName = get_post(get_the_ID())->post_name;

      while($menuPages -> have_posts()) {
        $menuPages -> the_post();?>
        <div class="sj-parent-nav-item">
          <li><a href="<?php echo get_permalink()?>"><?php echo get_the_title() ?></a></li>

          <?php
          if(get_post()->post_name == 'domy-prowincji') {
            $domyProwincji = new WP_Query(array(
              'posts_per_page' => 30,
              'post_type'=> 'domy',
            ));
            ?>
            <input type="checkbox" <?php if ($currentPageName == 'domy-prowincji') echo 'checked'?>>
            <ul class="sj-child-link">
            <?php

              while($domyProwincji -> have_posts()) {
                $domyProwincji -> the_post();
                ?>
                
                <li><a href="<?php echo get_permalink()?>"><?php echo get_the_title() ?></a></li>

                <?php
              } wp_reset_postdata();
              ?>
            </ul> <?php
          };
          ?>

        </div>
      <?php }; wp_reset_postdata();
    ?>
  </ul>

  </nav>

  <section>
    <ul class="sj-breadcrumbs">
      <li><a href="<?php echo site_url()?>">Strona główna</a></li>
      <li><?php the_title() ?></li>
    </ul>

    <h1><?php the_title() ?></h1>

    <div class="sj-page-content">
        <?php
          echo get_the_content();
        ?>
      </div>
    <?php

      if (get_page(get_the_ID())->post_name == 'domy-prowincji') {
        $domyProwincji = new WP_Query(array(
          'posts_per_page' => 10,
          'post_type'=> 'domy',
        ));
    
        while($domyProwincji -> have_posts()) {
          $domyProwincji->the_post(); ?>
          <div class="sj-single-post-item">
            <div class="sj-post-contents">
              <div>
                <h2><a href="<?php the_permalink()?>" class="sj-post-link"><?php the_title() ?></a></h2>
                <?php
                  if (has_excerpt()) {
                    echo get_the_excerpt();
                    
                  } else {
                    echo wp_trim_words(get_the_content(), 18);
                  }
                ?>
              </div>
              <?php
              $thumbnail_img = get_field('zdjecie_pomniejszone');
               if($thumbnail_img) {
                 ?>
                <div class="sj-thumbnail-container">
                  <img src="<?php the_field('zdjecie_pomniejszone'); ?>" alt="Zdjęcie miniaturka aktualności">
                 </div>
                 <?php
               }
              ?>

              </div>
            <p class="sj-read-more">
              <a href="<?php the_permalink();?>" class="sj-post-link">Czytaj więcej &raquo;</a>
            </p>
          </div>
        <?php } wp_reset_postdata();
      }
      ?>
  </section>

</main>

<?php get_footer();?>

