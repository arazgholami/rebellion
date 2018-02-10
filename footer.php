            <div class="footer clearfix col-lg-24 col-md-24 col-sm-24">
	            <ul class="footer-menu">
					<?php
                       $topMenu = wp_get_nav_menu_items(get_nav_menu_locations()[bottom]);
                        foreach ($topMenu as $item){
                           echo "<li><a href=\"$item->url\">$item->title</a></li>";
                        }
                    ?>
				</ul>
                <div class="copyright">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nazar-amulet.png" alt="Nazar Amulet">
                No Copyright. <i><?php echo status(); ?></i></div>
            </div>
        </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>
</body>
</html>