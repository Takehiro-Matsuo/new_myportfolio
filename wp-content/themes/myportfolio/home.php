<?php get_header(); ?>
<div id="contents">
      <div id="works">
        <h1 class="worksTitle font_sniglet">Works</h1>
        <section class="worksDesign">
          <h2 class="worksDesign_title font_sniglet">Design</h2>
          <ul class="worksDesign_items row">
            <?php
            if(have_posts()):
              while(have_posts()):
                the_post();
                ?>
            <?php  $categories = get_the_category();
                  foreach ($categories as $aCategory) :
                    if($aCategory->parent) $childCategoryName = $aCategory -> cat_name;
                  endforeach;
                ?>
            <li id="post_<?php the_ID();?>" class="worksDesign_items_item wow fadeInUp col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <a class="worksDesign_items_item_inner" href="<?php the_permalink();?>">
              <div class="worksDesign_items_item_body">
                <h4 class="transition"><span><?php the_title();?></span></h4>
                <img class="item_body_img transition" src="<?php echo get_template_directory_uri();?>/img/<?php echo $childCategoryName;?>1.png" alt="<?php the_title();?>のホームページ">
              </div><!-- .worksDesign_items_item_body -->
              <h3 class="worksDesign_items_item_title"><?php the_title();?></h3>
            </a><!-- worksDesign_items_item_inner -->
            </li><!-- .worksDesign_items_item -->
          <?php endwhile;
        endif;?>
            </ul><!-- worksDesign_items -->
        </section><!-- .worksDesign -->
      <section class="worksProduct">
          <h2 class="worksProduct_title font_sniglet">Product</h2>
          <h3>今後増える予定です。</h3>
        </section><!-- .worksProduct -->
      </div><!-- #works -->
      </div><!-- #contents -->
      <script>
      $(".worksDesign_items_item_inner").hover(function() {
        $(this).find(".worksDesign_items_item_body").addClass("hoverWorks");
      },function () {
        $(this).find(".worksDesign_items_item_body").removeClass("hoverWorks");
      });
      </script>
      <?php get_footer(); ?>
