<?php
/**
* Overrides theme_more_link().
* - Changed the text from "More" to "Show me More"
* - Changed the class from "more-link" to "more"
*/

function dgd7_more_link($variables) {
    return '<div class="more-link">' . l(t('Show me More'), $variables['url'], 
        array('attributes' => array('title' => $variables['title']))) . '</div>';
}


