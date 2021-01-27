<?php

function getCions($n, $m)
{
    $res = [];

    for ($i = 0; $i <= $n; $i++) {
        for ($j = 0; $j <= $n - $i; $j++) {
            for ($k = 0; $k <= $n - $i - $j; $k++) {
                $l = $n - $i - $j - $k;
                if ($i * 10 + $j * 5 + $k * 2 + $l == $m) {
                    array_push($res, "$i" . '_' . "$j" . '_' . "$k" . '_' . "$l");
                } else {
                    continue;
                }
            }
        }
    }

    return $res;
}

var_dump(getCions(3, 12));