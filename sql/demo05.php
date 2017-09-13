<?php
/*function getJoin($alue, $arr) {
$link = '';
foreach ($arr as $v) {
if (empty($link)) {
$link .= $v;
} else {
$link .= $alue . $v;
}

return $link;
}

}
$arr = array('a', 'b', 'c', 'd');
$str = getJoin('|', $arr);
echo $str;*/
function getarr($arr1, $arr2) {
	foreach ($arr1 as $v) {
		if (in_array($v, $arr2)) {
			$newarray[] = $v;
		}
	}
	return $newarray;

}
$arr1 = array(1, 2, 3, 5, 6, 7);
$arr2 = array(15, 2, 3, 5);

print_r(getarr($arr1, $arr2));
?>