<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php'; // this is common library
	include_once $_SERVER['DOCUMENT_ROOT'].'/home/config/db.php'; // this is common library
		if(!empty($_POST["votecode"])){
			$votecode = $_POST["votecode"];
			$votecheck = mysql_query("select * from vote_num where random_num='".$votecode."'");	
			$pollcheck = mysql_query("select * from vote_end where randomend='".$votecode."'");
			$f = "코드번호를 정확하게 입력하세요";
			$f2 = "이미 투표에 응모하셨습니다.";
			$test="잘됨";
			
			$check1 = mysql_num_rows($votecheck);
			$check2 = mysql_num_rows($pollcheck);
			if($check1!=1){
				echo "<script>window.alert('".$f."'); location.replace('./result')</script>";
			}else if($check2==1){
					echo "<script>window.alert('".$f2."'); location.replace('./result')</script>";
			}else{
				$tt=mysql_query("insert into vote_end (randomend) values ('".$votecode."')");
			}
			if(isset($_SESSION["vocode"])){
				session_destroy();	
			}
			
			session_start();
			$_SESSION['vocode']=$votecode;
		}else{
			echo "<script>location.replace('./result')</script>";
		}
?>
<!DOCTYPE HTML>
<html> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1182, initial-scale=1">
    <title>컴퓨터정보통신공학과</title>
    <!--<link rel="stylesheet" type="text/css" href="/home/assets/css/default.css">-->
    <link rel="stylesheet" type="text/css" href="/home/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/result.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/polls.css">
</head>
<body>
<!-- End Of Footer -->
<?php Header::render();?>
<!-- START Content-->
<div class="main-container2">

				<div id="polls_cicname">
  				<h3>학과이름 투표하기</h3>
  			<form id='poll' action="polling.php" method="post" accept-charset="utf-8">
				<div id="poll-container">
		
			<p>
			<?php
			$q = "select * from collect";
			$result = mysql_query($q);
			while($row = mysql_fetch_array($result)){
				echo"
					<input type='radio' name='choice' value=".$row[5]." id='opt".$row[5]."' /><label for='opt".$row[5]."'>&nbsp;".$row[3]."</label><br />
					<br/>
					";
			}
			?>
			</p>
				</div>
				<br/>
					<input class ="votesubmit" type="submit" value="투표하기" />
			</form>
		</div>
</div>
<!-- End Of Content -->

<!-- START Footer-->
<div class="footer">
    <div class="content">
        <div class="bar"></div>
        <div class="logo"></div>
        <div class="menu">
           
        </div>
    </div>
</div>

<script src="/home/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="/home/assets/js/header.js"></script>
<script type="text/javascript" src="http://openapi.map.naver.com/openapi/naverMap.naver?ver=2.0&key=756db721b31636565a3f43ae98ffbb46"></script>
<script src="/home/assets/js/contact.js"></script>
<!-- End Of Footer-->

<script>
function write_ok(){
	if(write.votecode.value ==""){
		alert("코드를 입력하세요");
		write.votecode.focus();
		return false;
	}else{
		document.write.submit();
	}
}

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66909995-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>