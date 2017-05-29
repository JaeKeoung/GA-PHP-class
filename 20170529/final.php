<?php
class Test {
	final public function test_method() {
		// 처리가 기술됩니다.
	}
}

final class Test2 {
	public function test2_method() {
		// 처리가 기술됩니다.
	}
}

// final을 메소드에 쓰면 오버라이드가 불가능합니다.
// final을 클래스에 쓰면 상속이 불가능합니다.
// final은 상수(변수와 달리 변경 불가능한 수)를 선언할 때 주로 쓰죱.
?>