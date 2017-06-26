<?php
// 게시목록 보여주기
class ListModel extends BaseModel {
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
			print $no/10+1;
			print "페이지<br>";
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
