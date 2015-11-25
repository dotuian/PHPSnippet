<?php

function detailAction($oldValue, $newValue) {
	if (!(is_array($oldValue) && is_array($newValue))) {
		return null;
	}

	$diff = array();
	foreach ($newValue as $key => $value) {
		if (array_key_exists($key, $oldValue)) {
			// 両方値は違う場合
			if ($oldValue[$key] != $value) {
				$diff[$key]['old'] = $oldValue[$key];
				$diff[$key]['new'] = $value;
			}
		} else {
			// 新しく追加された項目
			$diff[$key]['old'] = '---';
			$diff[$key]['new'] = $value;
		}
	}

	// 削除された項目
	foreach ($oldValue as $key => $value) {
		if (!array_key_exists($key, $newValue)) {
			$diff[$key]['old'] = $value;
			$diff[$key]['new'] = '---';
		}
	}
	
	return $diff;
}

$oldValue = array(
	'1' => 1,
	'2' => 2,
	'3' => 3,
);

$newValue = array(
	'2' => 2,
	'3' => 4,
	'5' => 5,
);

echo print_r(detailAction($oldValue, $newValue));






?>