<?php
    $pattern = '[a-z]'; //cocokkan huruf kecil
    $text = 'This is a sample text.';
    if (preg_match($pattern, $text)){
        echo "Huruf kecil ditemukan!";
    } else {
        echo "Tidak ada huruf kecil!";
    }

    echo "<br><hr>";

    $pattern = '/[0-9]/';
    $text = 'There are 123 apples.';
    if (preg_match($pattern, $text, $matches)){
        echo "Cocokkan: ". $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<br><hr>";

    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie.';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text; // output

    echo "<br><hr>";

    $pattern = '/go*d/';
    $text = 'god is good';
    if (preg_match($pattern, $text, $matches)){
        echo "Cocokkan: ". $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<br><hr>";

    $pattern = '/go?d/';
    $text = 'god is good';
    if (preg_match($pattern, $text, $matches)){
        echo "Cocokkan: ". $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<br><hr>";

    $pattern = '/go{2,2}d/';
    $text = 'god is good';
    if (preg_match($pattern, $text, $matches)){
        echo "Cocokkan: ". $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
?>