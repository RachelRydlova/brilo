<?php

$pages = array(
    'index' => 'Homepage',
);



// Output
include 'header.php';

component('page-header', ['title' => 'Seznam stránek']);

echo '<section class="section">';
    echo '<div class="container">';
        echo '<div class="apply-formatting">';
            echo '<ul style="line-height: 1.8;">';

                foreach ($pages as $url => $title) {
                    echo '<li><a href="'.$url.'" target="_blank">'.$title.'</a></li>';
                }

            echo '</ul>';
        echo '</div>';
    echo '</div>';
echo '</section>';

include 'footer.php';
