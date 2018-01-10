<?php get_header(); ?>
            <div class="posts col-lg-16 col-md-16 col-sm-24">
                <section class="item <?php echo (isRTL(get_the_title())) ? "right" : "left" ?>">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <a class="title" href="<?php the_permalink() ?>"><h2 dir="auto"><?php the_title(); ?></h2></a>
                            <div class="context" dir="auto">
                               <?php the_excerpt(); ?>
                            </div>
                        <?php endwhile; ?>
                        <div class="navigation">
                            <?php posts_nav_link(' ', 'Next Posts', 'Previous Posts'); ?>
                        </div>
                     <?php else : ?>
                          <h2>Results</h2>
                          <span>Not found! Try another search:</span>
                          <form class="search" action="<?php bloginfo('home'); ?>">
                            <input type="text" placeholder="Type keywords & press Enter" id="search-input" name="s">
                          </form>
                     <?php endif; ?>
                </section>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>