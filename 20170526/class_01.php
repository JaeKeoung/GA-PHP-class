<?php
class class_name {		// class statement 선택해야한다...
	public $data = 0;
	function function_name() {		// php에서 function은 기본적으로 public.
		print "클래스 함수";
	}
	private function private_func() {
		print "사적인 함수다. 다른 곳에선 못씀ㅇㅇ.";	// 일종의 은닉화
		$data = 100;	// $this->data = 100
		// this라는 것은 자신을 가리키기 위한 포인터다. 중요.
	}
	protected $data2;
	
}

$use_class = new TestClass();
$use_class->function_name();
?>