<?php

// 冒泡排序
// 两两相邻的元素进行比较，如果反序就交换，否则不交换。

function bubbleSort($arr)
{
	$len = count($arr);
	if ($len <= 1) {
		return $arr;
	}
	for ($i = 1; $i < $len; $i++) {
		for ($j = 0; $j < $len - $i; $j++) {
			if ($arr[$j] > $arr[$j + 1]) {
				$tmp = $arr[$j];
				$arr[$j] = $arr[$j + 1];
				$arr[$j + 1] = $tmp;
			}
		}
	}

	return $arr;
}