<?php

function lastUpdate() {
    return get_the_time('l, M jS, Y');
}
add_shortcode('lastupdate', 'lastUpdate');
