<?php get_header(); ?>
            <div class="posts col-lg-16 col-md-16 col-sm-24">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <section class="item <?php echo (isRTL(get_the_title())) ? "right" : "left" ?>">
                            <a class="title" href="<?php the_permalink() ?>"><h2 dir="auto"><?php the_title(); ?></h2></a>
                            <div class="context" dir="auto">
                                <?php 
                                  if(isRTL(get_the_title())){$continue='ادامه‌ی نوشته';}
                                  else{ $continue='Read full article';}
                                  $continue = "<button class='btn'>" . $continue . "</button>";
                                  the_content($continue);
                                 
                                  $link=get_edit_post_link( $id, $context ); 
								  if($link){ echo "<a href='$link'>Edit</a>"; }
                                 
                                ?>
                                <!-- <a href="#" class="btn btn-contact btn-download clearfix"><span>Download</span><i>256kbps</i><i>16MB</i></a> -->
                                <div class="meta">
                                    <span class="author"><?php echo (isRTL(get_the_title())) ? "آراز غلامی" : "Araz Gholami" ?></span><br>
                                    <a href="<?php the_permalink() ?>"><span class="date"><?php  (isRTL(get_the_title())) ? toRTL(get_the_time('l,j,m,Y')) : the_time('l, M jS, Y') ?></span></a>
                                    <span class="location">
                                      <?php 
                                        if(get_post_meta($post->ID, 'Location', true)){
                                          echo get_post_meta($post->ID, 'Location', true);
                                          echo ".";
                                        }
                                      ?>
                                    </span>
                                </div>
                                <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                                <i class="caption"><?php echo the_post_thumbnail_caption(); ?></i>
                                <?php endif; ?>
                            </div>
                        </section>
                        <?php endwhile; ?>
                        <div class="navigation clearfix">
                            <?php posts_nav_link(' ', 'Next Posts', 'Previous Posts'); ?>
                        </div>
                     <?php else : ?>
                          <h2>404</h2>
                          <span>There's nothing here. Try search:</span>
                          <form class="search" action="<?php bloginfo('home'); ?>">
                            <input type="text" placeholder="Type keywords & press Enter" id="search-input" name="s">
                          </form>
                     <?php endif; ?>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>