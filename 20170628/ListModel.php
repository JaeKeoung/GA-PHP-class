<?php
// 게시목록 보여주기
class ListModel extends BaseModel {
	// id 값을 가지고 데이터를 가져오는 함수
	function getDataFromId($id) {
		$data;
		try {
			$sql = "SELECT * FROM board WHERE id = :id";
			$stmh = $this->pdo->prepare($sql);
			$stmh->bindValue(':id',$id,PDO::PARAM_STR);
			$stmh->execute();
			$data = $stmh->fetch(PDO::FETCH_ASSOC);
		} catch (Exception $e) {
			print "오류:".$e->getMessage();
		}
		return $data;
	}
	// board에 데이터를 삭제하는 함수
	function deleteBoard($list) {
		;
	}
	//다중 insert문
	function multiInsert($list) {
		try {
			$this->pdo->beginTransaction();
			foreach ($list as $datas) {
				$sql = "INSERT INTO board";
				$sql .= " (title, name, email, pass, content, ip, view)";
				$sql .= " VALUES (:title, :name, :email, :pass, :content, :ip, :view)";
				$stmh = $this->pdo->prepare($sql);
				foreach ($datas as $column => $value) {
					$stmh->bindParam(":{$column}", $value);
				}
				$stmh->execute();
			}
			$this->pdo->commit();
		} catch (PDOException $e) {
			print "오류:".$e->getMessage();
		}
	}
	// board에 데이터를 추가하거나 업데이트하는 함수
	function insertUpdateBoard($list) {
		if ($list["id"] != null) {
			$sql = "UPDATE board SET title=:title, name=:name, email=:email, pass=:pass, content=:content";
			$sql .= " WHERE id=:id";
			$stmh = $this->pdo->prepare($sql);
			$stmh->bindValue(':id',$list["id"],PDO::PARAM_INT);
			$stmh->bindValue(':title',$list["title"],PDO::PARAM_STR);
			$stmh->bindValue(':name',$list["name"],PDO::PARAM_STR);
			$stmh->bindValue(':email',$list["email"],PDO::PARAM_STR);
			$stmh->bindValue(':pass',$list["password"],PDO::PARAM_STR);
			$stmh->bindValue(':content',$list["content"],PDO::PARAM_STR);
			$stmh->execute();
		} else {
// 			try {
				$sql = "INSERT INTO board (title, name, email, pass, content, wdate, ip, view) ";
				$sql .= "VALUES (:title, :name, :email, :pass, :content, now(), :ip, :view)";
				$stmh = $this->pdo->prepare($sql);
				$stmh->bindValue(':title',$list["title"],PDO::PARAM_STR);
				$stmh->bindValue(':name',$list["name"],PDO::PARAM_STR);
				$stmh->bindValue(':email',$list["email"],PDO::PARAM_STR);
				$stmh->bindValue(':pass',$list["password"],PDO::PARAM_STR);
				$stmh->bindValue(':content',$list["content"],PDO::PARAM_STR);
				$stmh->bindValue(':ip',"127.0.0.1",PDO::PARAM_STR);
				$stmh->bindValue(':view',0,PDO::PARAM_STR);
				$stmh->execute();
// 			} catch (Exception $e) {
// 				print "오류:".$e->getMessage();
// 			}
		}
// 		print "name = ".$list["name"];
	}
	
	// board의 총 갯수를 구하는 함수
	function get_tatal_count() {
		$count = -1;
		try {
			$sql = "SELECT count(*)as cnt FROM board";
			$stmh = $this->pdo->prepare($sql);
			$stmh->execute();
			$row = $stmh->fetch(PDO::FETCH_ASSOC);			
			$count = $row["cnt"];
		} catch (Exception $e) {
			print "오류:".$Exception->getMessage();
		}
		return $count;
	}
	
	// $no는 페이지 넘버.
	// 이 페이지 넘버에 해당하는 리스트를 가져옴.
	function get_list($no) {
		$data = [];
		$page_list_size = 10;
		try{
			$no = ($no - 1) * 10;
			$sql = "SELECT * FROM board ORDER BY id DESC LIMIT :no, :page_list_size";
			$stmh = $this->pdo->prepare($sql);
			$stmh->bindValue(':no',$no,PDO::PARAM_STR);
			$stmh->bindValue(':page_list_size',$page_list_size,PDO::PARAM_STR);
			$stmh->execute();
			$i = 0;
			$data = [];
// 			print $no/10+1;
// 			print "페이지<br>";
			while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
				foreach($row as $key => $value){
					$data[$i][$key] = $value;
				}
				$i ++;
			}
		} catch(PDOException $Exception) {
			print "오류:".$Exception->getMessage();
		}
		return $data;
	}
}
?>
