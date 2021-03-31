<?php

/**
 * - （必答）邀请码检测
 * @param string $str  需要测的验证码
 * @param int $len    验证码的长度
 * @return bool
 */
function getCheckRes(string $str, int $len) :bool
{
    if (strlen($str) != $len) {
        return false;
    } else {

        //是否小写字母和数组组成
        $get_info = preg_match('/[a-z0-9]+$/', $str);

        if ($get_info) {
            //翻转字符串
            $str = strrev($str);

            $sum = 0;

            for ($i = 0; $i < $len; $i++) {
                if (($i + 1) % 2 == 1) {
                    $sum += $str[$i];
                } else {
                    if (intval($str[$i])) {
                        $sum += $str[$i];
                    } else {
                        $ascii_info = (ord($str[$i]) - ord('a')) % 9 +1;
                        $sum += $ascii_info;
                    }
                }
            }

            if($sum%10 == 0){
                return true;
            }else{
                return false;
            }
        } else {
            return false;
        }

    }
}

var_dump(getCheckRes('19191919191919a9',16));