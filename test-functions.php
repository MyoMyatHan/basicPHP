<?php
    function p($content) {
        return "<p> $content </p>";
    }

    $output = p(" I want this text in my first paragraph..");
    $output .= p(".....and this is my second.");
    echo $output;
    