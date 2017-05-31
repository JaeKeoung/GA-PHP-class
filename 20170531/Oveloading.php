<?php
//php는 원래 오버로딩이 없다.
//Oveloading을 해보자.
	class Test {
// 		$this->;
// 		$this는 메소드(함수)안에 둬야지.
		public $dumydata = 1;
		function dumy() {
			$this->dumy;
		}
		public function __call($method, $parameter) {
			print "함수 이름 : $method <br>";
			foreach ($parameter as $data) {
				print "파라미터 : $data <br>";		// 파라미터는 Array형식이라 foreach를 써줘야 에러가 안나더라.
			}
			if($method == "functionOverLoading") {
				switch (count($parameter)) {
					case 0:
						$this->test1();
						break;
					case 1:
						$this->test2();
						break;
					case 2:
						$this->test3();
						break;
				}
			}
		}
		
		private function test1() {
			print "test1 파라메터 0 <br>";
		}
		private function test2() {
			print "test2 파라메터 1 <br>";
		}
		private function test3() {
			print "test3 파라메터 2 <br>";
		}
	}
	$a = new Test();
	$a->nomalFunction(1);
	$a->TempFunction(2);
	$a->functionOverLoading();
	$a->functionOverLoading();
	
?>