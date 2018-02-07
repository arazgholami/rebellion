<?php

function replace_em_with_i($content) {
$content = str_replace('<em>', '<i>', $content);
$content = str_replace('</em>', '</i>', $content);
return $content;
}
add_filter('the_content', 'replace_em_with_i');