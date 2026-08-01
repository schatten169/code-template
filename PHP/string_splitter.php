<?php

// In case you want to get string by max length n
// Then you have option to append it with something like (...)
// Can be used in name splitter or summary

function getDetailPost(string $name, int $length = 10, ?string $append = null): string
{
    $result = [];
    foreach (explode(" ", $name) as $x) {
        $x = trim($x);

        if (strlen(join(" ", [...$result, $x])) < $length)
            $result[] = $x;
        elseif ($append) {
            $result[] = $append;
            break;
        }
    };

    if (count($result) == 0)
        return trim(current(explode(" ", $name)));

    $joined = trim(join(" ", $result));
    if ($append) {
        $removeLastPos = strrpos($joined, ' ');
        if ($removeLastPos)
            $joined = substr_replace($joined, '', $removeLastPos, 1);
    }

    return $joined;
}

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

echo getDetailPost($text, 12, '...');
