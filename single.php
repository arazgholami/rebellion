<?php get_header(); ?>
            <div class="posts col-lg-16 col-md-16 col-sm-24">
                <section class="item <?php echo (isRTL(get_the_title())) ? "right" : "left" ?>">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <a class="title" href="<?php the_permalink() ?>"><h2 dir="auto"><?php the_title(); ?></h2></a>
                            <div class="context" dir="auto">

                                <?php 
                                  if(isRTL(get_the_title())){$continue='ادامه‌ی نوشته';}
                                  else{ $continue='Read full article';}

                                  the_content($continue);

                                  $link=get_edit_post_link( $id, $context ); 
								  if($link){ echo "<a href='$link'>Edit</a>"; }
                                ?>
                                <div class="meta">
                                    <span class="author"><?php echo (isRTL(get_the_title())) ? "آراز غلامی" : "Araz Gholami" ?></span><br>
                                    <span class="date"><?php  (isRTL(get_the_title())) ? toRTL(get_the_time('l,j,m,Y')) : the_time('l, M jS, Y') ?>.</span>
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
                            
                        <?php endwhile; ?>
                     <?php else : ?>
                          <h2>404</h2>
                          <span>There's nothing here. Try search.</span>
                          <form class="search" action="<?php bloginfo('home'); ?>">
                            <input type="text" placeholder="Type keywords & press Enter" id="search-input" name="s">
                     <?php endif; ?>
                </section>
                <div class="comments">
                    <?php comments_template(); ?>
                </div>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>