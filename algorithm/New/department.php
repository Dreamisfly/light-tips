<?php



/**
 * - （必答）部⻔优化
 * @param array $department 部门数组（关联数组）
 * @param int $m 月份
 * @return array
 *
 * 不是最优解,有特殊情况，如果都相同应不调整，题目不清楚，如限制死输入数组是一种循环问题。
 */
function getPeople(array $departments, int $m): array
{

    for ($i = 0; $i < $m; $i++) {
        $max = max($departments);
        foreach ($departments as $key => &$value) {
            if($value == $max){
                $value -= 3;
            }else{
                $value += 1;
            }
        }
    }
    return ($departments);

}

var_dump(getPeople(['a' => 10, 'b' => 7, 'c' => 5, 'd' => 4], 120));