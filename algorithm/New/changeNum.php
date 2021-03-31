<?php
/**（选答）有趣的两位数
 * @return array
 */

function change() :array
{
    $res = array();
    for ($a = 11; $a < 100; $a++) {
        //翻转$a
        $ten = floor($a / 10);
        $one = $a % 10;
        if ($ten != 0 && $one != 0) {
            $c = $one * 10 + $ten;
        } else {
            continue;
        }

        for ($b = $c ; $b < 100; $b++) {
            //不要两个两位数相同
            if($b == $a){
                continue;
            }

            //翻转$b
            $ten = floor($b / 10);
            $one = $b % 10;
            if ($ten != 0 && $one != 0) {
                $d = $one * 10 + $ten;
            } else {
                continue;
            }

            // b是a翻转后的整数倍且翻转b是a的整数倍
            if ($b / $c == $d / $a && $b % $c == 0 && $d % $a == 0 ) {
                array_push($res, "$a" . '_' . "$b");
            }
        }
    }
    return $res;
}

var_dump(change());