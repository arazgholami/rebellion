            <div class="sidebar col-lg-8 col-md-8 col-sm-24">
                <div class="item subscribe">
                    <a href="/feed"><i class="icon-rss"></i>RSS Feed</a>
                    <p>Enter your email address in the box below to join my private mail list. I'll send you new posts in minimalist way.</p>
                    <form method="post" action="<?php bloginfo('home'); ?>/?na=s" onsubmit="return newsletter_check(this)">
                        <input  class="btn" type="submit" value="Subscribe">
                        <div style="overflow: hidden;">
                           <input class="email tnp-email" type="email" name="ne" required="" placeholder="Your Email">
                        </div>
                    </form>
                   <span class="nocharge"> No charge. Unsubscribe anytime.</span>
                </div>
                <?php dynamic_sidebar( 'sidebar' ); ?>
            </div>