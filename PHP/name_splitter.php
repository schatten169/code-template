<?php

// Get name split by whitespace with max length
// If joined with next word and pass max length, abort

function get_name(string $name, int $length = 10): string
{
    $result = [];
    foreach (explode(" ", $name) as $x) {
        $x = trim($x);

        if (strlen(join(" ", [...$result, $x])) < $length)
            $result[] = $x;
    };

    if (count($result) == 0)
        return trim(current(explode(" ", $name)));

    return trim(join(" ", $result));
}

echo get_name("  Konoha   Gakure  ", 12);