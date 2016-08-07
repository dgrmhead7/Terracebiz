<?
	/* 회사별 DB 선택
	 * $session_db 가 login_header.php(login_app_header.php)에 선언되어 있어야한다.
	 */
		//$connect = mysql_connect("localhost", "root", "apmsetup") or  
		$connect = mysql_connect("localhost", $_SERVER['DB_USER'], $_SERVER['DB_PASS']) or  
      	  die( "SQL server에 연결할 수 없습니다. error : ".mysql_error()); //DB가 있는 주소(이것은 웹서버로 직접 접속하는 것이기 때문에 루프백 주소를 써도 됨)
	//mysql_select_db("samwon",$connect); //DB 선택
	mysql_select_db($_SESSION["company_db"],$connect); //DB 선택
	mysql_query("set names utf8"); //이것 또한 한글(utf8)을 지원하기 위한 것
?>
