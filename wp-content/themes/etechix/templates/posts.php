<div class="post-list_item-post">
  <div class="item-post_image-wrapp">
    <div class="item-post_post-tag"><?php the_category() ?></div>

    <?php
    if (has_post_thumbnail()) {
    ?>
      <a class="item-post_img-link" href="<?php the_permalink(); ?>" alt="<?php the_title_attribute() ?> link">
        <?php the_post_thumbnail('post-thumbnails', array(
          'class' => 'item-post_img'
        )) ?>
      </a>
    <?php
    }
    ?>
  </div>
  <div class="item-post_info">
    <a class="item-post_title-link" href="<?php the_permalink() ?>">
      <h2 class="item-post_title">
        <?php the_title() ?>
      </h2>
    </a>
    <div class="item-post_meta">
      <span class="item-post_author">
        <a class="item-post_author-link" href="https://www.blogger.com/profile/17044352403253367656" target="_blank" title="Etechix Blog">
          <?php the_author() ?>
        </a>
      </span>
      <span class="item-post_date" datetime="2021-06-23T10:21:00-03:00">
        <?php the_date() ?>
      </span>
    </div>
    <div class="item-post_snippet">
      <?php the_excerpt() ?>
    </div>
  </div>
</div>