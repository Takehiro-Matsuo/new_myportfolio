<?php get_header(); ?>
<?php $categories = get_the_category();
  foreach ($categories as $aCategory) :
    if($aCategory->parent) $childCategoryName = $aCategory -> cat_name;
  endforeach;
?>
<?php
if(have_posts()):
  while(have_posts()):
    the_post();
    ?>
    <div id="contents">
      <div id="aWork">
        <h1 class="aWorkTitle"><?php the_title();?></h1>
        <div class="aWorkWebsite">
          <div class="aWorkWebsite_inner wow fadeInUp">
            <img class="aWorkWebsite_img" src="<?php echo get_template_directory_uri();?>/img/<?php echo $childCategoryName;?>1.png" alt="<?php the_title();?>website1">
          </div>
          <div class="aWorkWebsite_inner wow fadeInUp">
            <img class="aWorkWebsite_img" src="<?php echo get_template_directory_uri();?>/img/<?php echo $childCategoryName;?>2.png" alt="<?php the_title();?>website2">
          </div>
          <div class="aWorkWebsite_inner wow fadeInUp">
            <img class="aWorkWebsite_img" src="<?php echo get_template_directory_uri();?>/img/<?php echo $childCategoryName;?>3.png" alt="<?php the_title();?>website3">
          </div>
          <div class="aWorkWebsite_inner wow fadeInUp">
            <img class="aWorkWebsite_img" src="<?php echo get_template_directory_uri();?>/img/<?php echo $childCategoryName;?>4.png" alt="<?php the_title();?>website4">
          </div>
        </div><!-- .aWork_website -->
        <div class="aWorkResponsive row">
          <div class="aWorkResponsive_item left wow fadeInUp col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="aWorkResponsive_inner">
            <img class="aWorkResponsive_img" src="<?php echo get_template_directory_uri();?>/img/<?php echo $childCategoryName;?>_responsive1.png" alt="<?php the_title();?>responsive1">
            <div class="aWorkResponsive_circle"><span></span></div>
          </div>
          </div>
          <div class="aWorkResponsive_item middle wow fadeInUp col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="aWorkResponsive_inner">
            <img class="aWorkResponsive_img" src="<?php echo get_template_directory_uri();?>/img/<?php echo $childCategoryName;?>_responsive2.png" alt="<?php the_title();?>responsive2">
            <div class="aWorkResponsive_circle"><span></span></div>
          </div>
          </div>
          <div class="aWorkResponsive_item right wow fadeInUp col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="aWorkResponsive_inner">
            <img class="aWorkResponsive_img" src="<?php echo get_template_directory_uri();?>/img/<?php echo $childCategoryName;?>_responsive3.png" alt="<?php the_title();?>responsive3">
            <div class="aWorkResponsive_circle"><span></span></div>
          </div>
          </div>
        </div><!-- .aWork_responsive -->
        <?php the_content();  ?>
        <div class="aWorkNavi">
          <?php if(get_next_post()):?>
          <span class="aWorkNavi_next"><?php next_post_link('＜ %link')?></span>
          <?php endif;?>
          <?php if(get_previous_post()):?>
          <span class="aWorkNavi_previous"><?php previous_post_link('%link ＞')?></span>
          <?php endif;?>
        </div><!-- .aWorkNavi -->
      </div><!-- #awork -->
    </div>
  <?php
    endwhile;
  endif;
  ?>
<?php get_footer(); ?>
