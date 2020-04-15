<?php 
	class Student {
		private $name, $class, $CSS_score, $PHP_score, $Java_score;
		public function __construct($name, $class, $CSS_score, $PHP_score, $Java_score) {
			$this->name = $name;
			$this->class = $class;
			$this->CSS_score = $CSS_score;
			$this->PHP_score = $PHP_score;
			$this->Java_score = $Java_score;
		}

		public function set_Name($value) {
			$this->name = $value;
		}
		public function set_class($value) {
			$this->class = $value;
		}
		public function set_CSS_score($value) {
			$this->CSS_score = $value;
		}
		public function set_PHP_score($value) {
			$this->PHP_score = $value;
		}
		public function set_Java_score($value) {
			$this->Java_score = $value;
		}
		public function get_name() {
			return $this->name;
		}
		public function get_class() {
			return $this->class;
		}
		public function get_CSS_score() {
			return $this->CSS_score;
		}
		public function get_PHP_score() {
			return $this->PHP_score;
		}
		public function get_Java_score() {
			return $this->Java_score;
		}
	}

	class StudentXuly {
		public static function list_student() {
			global $arr_student;
			$list_student = array();
			foreach ($arr_student as $key => $value) {
				$s_list = new Student($value['name'], $value['class'], $value['CSS_score'], $value['PHP_score'], $value['Java_score']);
				$list_student[] = $s_list;
			}
			return $list_student;
		}
		return $list_student;

	}

 ?>