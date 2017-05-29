<?php
	class Members implements IteratorAggregate {
		private $members = [];
		public function add(Member $member) {
			$this->member[] = $member;
		}
		
		public function getMember() {
			return $this->member;
		}
		
		public function getIterator() {
			return new ArrayIterator($this->members);
		}
	}
?>