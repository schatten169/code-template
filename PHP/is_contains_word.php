<?php

function IsContainWords($haystack, $needle) : bool {
    $string = $haystack;
    $word = $needle;
    $pattern = '/' . $word . '/i';

    if (preg_match($pattern, $string)) {
        return true;
    } else {
        return false;
    }
}

echo IsContainWords("hello-world", "hello"); echo "<br>";
echo IsContainWords("hello-world", "ello"); echo "<br>";
echo IsContainWords("hello-world", "hello-world"); echo "<br>";
echo IsContainWords("hello-world", "hello-word"); echo "<br>";
echo IsContainWords("hello-world2", "world"); echo "<br>";
echo IsContainWords("hello-world2", "rld2"); echo "<br>";