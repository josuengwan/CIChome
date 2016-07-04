<?
ob_start("ob_gzhandler"); //페이지 압축
include_once("../session.php"); 
include_once("../mysqlconnect.php");
$id = $_SESSION['session_id'];
$select=$_GET[select];
$num=$_GET[n];
$num=preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $num);  //특수문제 제거
$num=preg_replace("/[a-z]|[A-Z]/", "", $num);  //문자열 제거
$select=preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $select);  //특수문제 제거
if($num == ''){
	echo "<script>alert('존재하지 않는 페이지 입니다.');history.back(-1);</script>";
	exit;
}
switch ($select)
{
	case "1":
		$board = 'notice';
		$name = '공지사항';
		break;
	case "2":
		$board = 'freeboard';
		$name = '자유게시판';
		break;
	case "3":
		$board = 'project';
		$name = '자료실';
		break;
	case "4":
		$board = 'event';
		$name = '행사/공모전';
		break;
	case "5":
		$board = 'graduate';
		$name = '졸업게시판';
		break;
	case "6":
		$board = 'job';
		$name = '취업게시판';
		break;
	case "7":
		$board = 'faq';
		$name = 'FAQ';
		break;
	default :
		echo "<script>alert('존재하지 않는 게시판 입니다.');history.back(-1);</script>";
		exit;
		break;
} 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?echo $name?> :: 컴퓨터정보통신공학과</title>
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="./css/style.css" type="text/css" />
	<!--[IF IE]><link rel="stylesheet" href="./css/IEstyle.css" type="text/css" /><![ENDIF]-->
	<!--[IF IE 6]><link rel="stylesheet" href="./css/IE6.css" type="text/css" /><![ENDIF]-->
	<!--[IF IE 7]><link rel="stylesheet" href="./css/IE7.css" type="text/css" /><![ENDIF]-->
	<script type="text/javascript" src="../js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
	<script src="../js/commom.js" type="text/javascript"></script>
	<script src="../js/jquery.hoverIntent.js" type="text/javascript"></script>
	<script src="../js/ssubnav.js" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
	<?include_once("../top.php");?>
	<div id="main">
		<div class="sidebar">
            <ul>	
               <li>
                    <h4><span>커뮤니티 <strong>Community</strong></span></h4>
                    <ul class="blocklist">
                        <li><a href="../community/bbs?select=1">학과공지사항</a></li>
						<li><a href="../community/photo">사진게시판</a></li>
						<li><a href="../community/bbs?select=2">자유게시판</a></li>
						<li><a href="../community/bbs?select=3">자료실</a></li>
						<li><a href="../community/bbs?select=4">행사/공모전</a></li>
						<li><a href="../community/graduate">졸업게시판</a></li>
						<li><a href="../community/bbs?select=6">취업게시판</a></li>
						<li><a href="../community/bbs?select=7">FAQ</a></li>
                    </ul>
                </li>
            </ul> 
        </div>
		<div class="main_text">
		<h3><?echo $name;?></h3>
<?


		$query="select num,title,id,name,date,count,text,file from $board where num=$num";
		$result = mysql_query($query) or die('쿼리 실패 : ' . mysql_error());
		$row = mysql_fetch_array($result, MYSQL_NUM);
		
		//날짜 구하기
		$year = mb_substr($row[4],0,4,"utf-8");
		$month = mb_substr($row[4],4,2,"utf-8");
		$day = mb_substr($row[4],6,2,"utf-8");
		$hour = mb_substr($row[4],8,2,"utf-8");
		$min = mb_substr($row[4],10,2,"utf-8");
		
		//세션 중복 카운팅 방지
		$read_on = 0; // 초기화
		if(isset($_SESSION['read_chk'])){ 
			$read_chk_array = explode("/",$_SESSION['read_chk']);
			for($i = 0; $i < sizeof($read_chk_array); $i++)
			{
				if($read_chk_array[$i] == $select."_".$num)
				{
					$read_on = 1;
					break;				
				}

			}
		}
		if($read_on == 0)
		{
			$row[5] = $row[5] + 1;
			$count=$row[5];
			$update="update $board set count=$count where num=$num";
			mysql_query($update) or die('쿼리 실패 : ' . mysql_error());
			$_SESSION['read_chk'] .= "/".$select."_".$num;
		}



		echo"
		
		<form method=get name=nmodi action='./bbs_delete'>
		<table border=0 CELLSPACING = 0 CELLPADDING = 0 >
		<tr>
			<td colspan=6 width=680 height=1 bgcolor='#898989'>
			</td>
		</tr>
		<tr height=25>
			<td bgcolor='#efefef' width=60 class='center'>글번호</td>
			<td width=300 bgcolor='#efefef' class='center'>제목</td>
			<td width=60 bgcolor='#efefef' class='center'>작성자</td>
			<td width=60 bgcolor='#efefef' class='center'>작성일</td>
			<td width=30 bgcolor='#efefef' class='center'>조회</td>
		</tr>
		<tr>
			<td colspan=6 width=680 height=1 bgcolor='#898989'></td>
		</tr>
		<tr>
			<td width=60  bgcolor='#ffffff' class='center'>$num</td>
			<td width=300 bgcolor='#ffffff' class='center'>$row[1]</td>
			<td width=60  bgcolor='#ffffff' class='center'>$row[3]</td>
			<td width=60 bgcolor='#ffffff' class='center'>$year-$month-$day<br />$hour:$min </td>
			<td width=25  bgcolor='#ffffff' class='center'>$row[5]</td>
		</tr>
		<tr>
			<td colspan=6 width=680 height=1 bgcolor='#898989'></td>
		</tr>
		";
		if($row[7]!="none")
		{
		echo"
		<tr>
		<td width=100 class='center'>첨부파일</td><td colspan=4><a href='upload/$row[7]'>$row[7]</a></td>
		</tr>
		<tr><td height=10></td></tr>
		";
		}
		echo"
		<tr>
			
			<td colspan=6 width=675 height=1 bgcolor='#898989'></td>
		</tr>
		<tr>
			
			<td width=680 height=20 colspan=5 bgcolor='#efefef' class='center'>내용</td>
		</tr>
		<tr>
			
			<td colspan=6 width=675 height=1 bgcolor='#898989'></td>
		</tr>
		<tr>
			
			<td colspan=6><div style='width:680;height:300;padding:10px 10px 0'><pre>$row[6]</pre></div></td>
		</tr>
		</table>
		<br />
</form>
		<table border=0 CELLSPACING = 0 CELLPADDING = 0 class='mab80'>
		<tr>";
			if($id=="Admin" || $select == 2 && $id == $row[2]  && $id != guest || $select == 5 && $id == $row[2]) 
			{
				            echo "<td width=575></td>
				<td><a href='./bbs?select=$select'><img src='../images/list.gif'></a></td><td>
				<a href='./bbs_delete?select=$select&num=$num'><img src='../images/delete.gif'></a>";
			}else{
				echo "<td width=640></td><td>&nbsp;<a href='./bbs?select=$select'><img src='../images/list.gif'></a>";
			}
			echo"
			</td>
		</tr>
		</table>
		<br />
		";


		

?>			


	</div>
		</div>
			<?include_once("../footer.php");?>
	</div>
</div>

<?include_once("../bottom_login.php");?>

</body>
</html>
