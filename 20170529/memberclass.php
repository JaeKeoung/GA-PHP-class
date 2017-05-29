<?php
	class Member {
		private $id;
		private $lastname;
		private $firstname;
		private $email;
		private $password;
		
		public function GetId() {
			return $this->id;
		}
		public function GetLastname() {
			return $this->lastname;
		}
		public function GetFirstname() {
			return $this->firstname;
		}
		public function GetEmail() {
			return $this->email;
		}
		public function GetPassword() {
			return $this->password;
		}
		
// 		function __construct() {} // construct기본생성자는
		// 우리가 생성자를 만들지 않으면 제공하면서 숨겨져있다.
		// 그러나 아래와 같이 생성자를 재 정의하면 기본생성자는 사라진다.
		// 그래서 기본생성자를 호출하는 객체를 생성하지 못한다.
		
		//뭔가 이거 없어지면 에러 1개 날 게 5-6개가 난다.
		
		public function __construct($id, $lastname, $firstname, $email, $password) {
			// 이걸 만드면서 위에 function __construct가 없어지는(?)거다. 고로 따로 function __construct를 해두자.
		// 책 내용	
		/* $this->setId($id);
			$this->setLastname($lastname);
			$this->setFirstname($firstname);
			$this->setEmail($email);
			$this->setPassword($password); */
			
		// 쌤이 한거
			$this->id = $id;
			$this->lastname = $lastname;
			$this->firstname = $firstname;
			$this->email = $email;
			$this->password = $password;
			
			// 둘이 딱히 다른점은 없는데...?
		}
	}
	
// 	$test = new Member();
	class Member_child /*여기에 extends Member 하면 에러남 ㅋ*/ {
		// 여기에 function __construct(){}가 숨어서 제공되고 있다.
	}
	$memberchild = new Member_child();	// 이게 에러를 불러오고있다.
?>