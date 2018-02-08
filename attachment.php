<?php get_header(); ?>
            <div class="posts col-lg-24 col-md-24 col-sm-24">
                <section class="item">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <!-- <a class="title" href="<?php the_permalink() ?>"><h2 dir="auto"><?php the_title(); ?></h2></a> -->
                            <?php if (has_post_thumbnail()) {
                              the_post_thumbnail();
                            } ?>
                            <div class="context <?php 
                              echo (isRTL(get_the_title())) ? "rtl " : "ltr "; 
                              echo ($pageTitle=="books") ? "book" : "book";
                            ?>" dir="auto">
                                <div class="row">
                                  <?php 
                                    $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" ); 
                                    $imageWidth = $image_data[1];
                                    $imageHeight = $image_data[2];
                                    if($imageWidth <= $imageHeight){
                                      $attachGridImage = "col-lg-12 col-md-10";
                                      $attachGridDetails = "col-lg-12 col-md-14";
                                    }
                                    else{
                                      $attachGridImage = "col-lg-24";
                                      $attachGridDetails = "col-lg-24";
                                    }
                                  ?>
                                  <div class="<?php echo $attachGridImage; ?>">
                                     <?php echo wp_get_attachment_image( get_the_ID(), array('1000px', 'auto'), "", array( "class" => "img-responsive" ) ); ?>
                                  </div>
                                  <div class="<?php echo $attachGridDetails; ?>">
                                    <div class="details">
                                      <h3>
                                        <?php the_title(); ?>
                                      </h3>
                                      <?php the_content(''); ?>
                                      <nav id="image-navigation" class="navigation image-navigation">
                                        <div class="nav-links">
                                          <div class="nav-previous"><?php previous_image_link( false, __( 'Prev', 'twentyfifteen' ) ); ?></div><div class="nav-next"><?php next_image_link( false, __( 'Next', 'twentyfifteen' ) ); ?></div>
                                        </div>
                                      </nav>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <div class="navigation">
                            <?php posts_nav_link(' ', 'Next Posts', 'Previous Posts'); ?>
                        </div>
                     <?php else : ?>
                          <h2>404</h2>
                          <span>There's nothing here. Try search:</span>
                          <form class="search" action="<?php bloginfo('home'); ?>">
                            <input type="text" placeholder="Type keywords & press Enter" id="search-input" name="s">
                          </form>
                     <?php endif; ?>
                </section>
            </div>
<?php get_footer(); ?>