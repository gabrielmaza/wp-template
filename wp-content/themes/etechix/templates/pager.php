<div class="blog-pager">
  <?php
  $pagination = paginate_links(array(
    'mid_size' => 2,
    'prev_text' => __('', 'textdomain'),
    'next_text' => __('', 'textdomain'),
  ));
  echo $pagination;
  ?>
</div>