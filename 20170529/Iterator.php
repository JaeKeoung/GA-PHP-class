<?php
// 관련 파일을 읽어들입니다.
require_once 'memberclass.php';
require_once 'membersclass.php';

//회원 데이터 Dummy 작성
$members = new Members();
for($a = 0; $a < 5; $a++) {
	$members->add(new Member("id".$a, "lastname".$a, "firstname".$a, "email".$a, "password".$a));
}
/* 책에서 나온 더미
$member1 = new Member(1, "성1", "이름1", "email1@abreqadhabra.com", "password1");
$member2 = new Member(2, "성2", "이름2", "email2@abreqadhabra.com", "password2");
$member3 = new Member(3, "성3", "이름3", "email3@abreqadhabra.com", "password3");
$member4 = new Member(4, "성4", "이름4", "email4@abreqadhabra.com", "password4");
$member5 = new Member(5, "성5", "이름5", "email5@abreqadhabra.com", "password5");

// Members 클래스에 회원 데이터를 추가
$members = new Members();
$members->add($member1);
$members->add($member2);
$members->add($member3);
$members->add($member4);
$members->add($member5); */

// getIterator에서 Iterator 취득
$iterator = $members->getIterator();

// 반복 처리
/* foreach ($iterator as $member) {
	print $member->getId()." ";
	print $member->getLastname()." ";
	print $member->getFirstname()." ";
	print $member->getEmail()." ";
	print $member->getPassword()."<br>";
} */

// iterator 표현 방식
$iterator = $members->GetMember();
foreach ($iterator as $data) {
	print $data->GetId()."   ";
	print $data->GetLastname()."   ";
	print $data->GetFirstname()."   ";
	print $data->GetEmail()."   ";
	print $data->GetPassword()."<br>";
}
?>