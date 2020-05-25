<?php
$my_list = array(9, 7, 3, 11, 17, 19, 5, 13, 15);
echo 'Mảng cần sắp xếp: ';
// Sắp xếp nổi bọt theo thứ tự tăng dần
function bubbleSort($list)
{
    for ($i = 0; $i < count($list) - 1; $i++) {
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$j] < $list[$i]) {
                $temp = $list[$i];
                $list[$i] = $list[$j];
                $list[$j] = $temp;
            }
        }
    }
    return $list;
}

echo implode(', ', $my_list) . "<br>";
echo 'Mảng sắp xếp tăng dần: ';
echo implode(', ', bubbleSort($my_list)) . '<br>';

// Sắp xếp nổi bọt theo thứ tự giảm dần
function bubbleSort1($list)
{
    for ($i = 0; $i < count($list) - 1; $i++) {
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$j] > $list[$i]) {
                $temp = $list[$i];
                $list[$i] = $list[$j];
                $list[$j] = $temp;
            }
        }
    }
    return $list;
}

echo 'Mảng sắp xếp giảm dần: ';
echo implode(', ', bubbleSort1($my_list));