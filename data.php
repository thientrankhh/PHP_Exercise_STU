<?php 
	$arr_student = array(
		array('name' => 'Gussie Fahey', 'class' => 'PHP_27', 'CSS_code' => '90', 'PHP_score' => '89', 'Java_score' => '67'),
		array('name' => 'Germaine Feeney', 'class' => 'Java_06', 'CSS_code' => '80', 'PHP_score' => '77', 'Java_score' => '65'),
		array('name' => 'Marjory Weissnat', 'class' => 'Java_10', 'CSS_code' => '67', 'PHP_score' => '87', 'Java_score' => '70'),
		array('name' => 'Hollie Wintheiser', 'class' => 'PHP_27', 'CSS_code' => '79', 'PHP_score' => '78', 'Java_score' => '56')
	);

	function print_arr_student($arr) {
		foreach ($arr as $key => $value) {
			echo "<tr>";
			echo "<td>".$value['name']."</td>";
			echo "<td>".$value['class']."</td>";
			echo "<td>".$value['CSS_code']."</td>";
			echo "<td>".$value['PHP_score']."</td>";
			echo "<td>".$value['Java_score']."</td>";
			echo "</tr>";
		}
	}

	function student_has_highest_CSS_score($arr_student) {
		$max = 0;
		foreach ($arr_student as $key => $value) {
			if (($value['CSS_code'] > $max) && (strpos($value['class'],'PHP') !== false)) {
				$max = $value['CSS_code'];
			} 
		}
		return $max;
	}

	function list_student_classPHP_asc($arr) {
	
		for ($i = 0; $i < count($arr)-1; $i++) {
			for ($j=$i+1; $j < count($arr); $j++) { 
				if ($arr[$i]['PHP_score'] > $arr[$j]['PHP_score']) {
					$temp = $arr[$i];
					$arr[$i] = $arr[$j];
					$arr[$j] = $temp;	
				}
			}
		}
		return $arr;
	}

	function search_student($name, $arr) {
		$a;
		foreach ($arr as $key => $value) {
			if (strpos($value['name'], $name) !== false) {
				$a[] = $value;
			}
		}
		return $a;
	}

 ?>