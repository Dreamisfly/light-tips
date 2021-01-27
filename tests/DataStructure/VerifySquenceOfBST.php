<?php


/**
 * 代码中的类名、方法名、参数名已经指定，请勿修改，直接返回方法规定的值即可
 *
 * @param sequence int整型一维数组
 * @return bool布尔型
 */
function VerifySquenceOfBST( $sequence )
{
    // write code here
    if(count($sequence) == 0 ){
        return false;
    }

    $count = count($sequence);

    $root = $sequence[$count-1];

    for($i = 0;$i<$count-1;$i++){

        if($sequence[$i]>$root){
            break;
        }

    }

    for($j = $i;$j<=$count-1;$j++){
        if($sequence[$j] < $root){
            return false;
        }
    }
    $left = true;
    $right = true;
    //遍历左子树
    if($i >0){
        $left = VerifySquenceOfBST(array_slice($sequence,0,$i));
    }
    //遍历右子树

    if($i < $count - 1){
        $right = VerifySquenceOfBST(array_slice($sequence,$i,-1));
    }
    return $left && $right;

}

var_dump(VerifySquenceOfBST([4,6,7,5]));