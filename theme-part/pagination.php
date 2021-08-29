<div class="container">
    <div class="row">
        <div class="col-md-6"></div>
      <div class="col-md-6 post-pagination">
      <?php the_posts_pagination(
                    array(
                        "screen_reader_text" => " ",
                        "prev_text" => __("Latest Posts", "saf"),
                        "next_text" => __("Old Posts", "saf")
                    )
                ) ?>
      </div>  
      
    </div>
</div>