<?php get_header(); ?>
            <div class="posts col-lg-16 col-md-16 col-sm-24">
                <div class="item">
                      <h2>404</h2>
                      <span>There's nothing here. Try search:</span>
                      <form class="search" action="<?php bloginfo('home'); ?>">
                            <input type="text" placeholder="Type keywords & press Enter" id="search-input" name="s">
                      </form>
                </div>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>