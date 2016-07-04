<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php'; // this is common library
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1182, initial-scale=1">
    <title>컴퓨터정보통신공학과</title>
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/side.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/intro.css">
</head>
<body>

<!-- End Of Footer -->
<?Header::render();?>
<!-- START Content-->

<div class="main-container">
	<?Side::render('intro');?>
    <div class="history-content">
		<table border="0" cellpadding="0" cellspacing="0" class="mab">
    <thead>
      <tr>
        <th width="12%">연도</th>
        <th width="25%">개선사업</th>
        <th width="63%">주요내용</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td class="num">1989년</td>
        <td>학과신설</td>
        <td><div align="left">전자전산기공학과 신설</div></td>
        </tr>
      <tr>
        <td class="num">1993년</td>
        <td>학과명칭 변경</td>
        <td><div align="left">전자전산기공학과에서 전자전산공학과로 명칭변경</div></td>
        </tr>
      <tr>
        <td class="num">1996년</td>
        <td>학부제 실시/ 학과명칭 변경</td>
        <td><div align="left">전자전산공학과에서 전자전기컴퓨터공학부로 명칭변경</div></td>
        </tr>
      <tr>
        <td class="num">1996년</td>
        <td>대학원 전자전산 공학과 신설</td>
        <td><div align="left">대학원 전자전산공학과 신설</div></td>
        </tr>
      <tr>
        <td class="num">2001년</td>
        <td>학과명칭 변경</td>
        <td><div align="left">전자전기컴퓨터공학부의 컴퓨터소프트웨어·정보통신으로 교과과정의 전면적인 개정</div></td>
        </tr>
      <tr>
        <td class="num">2002년</td>
        <td>학과명칭 변경</td>
        <td><div align="left">전자전기컴퓨터공학부의 컴퓨터정보통신으로 명칭변경</div></td>
        </tr>
      <tr>
        <td class="num">2004년개발<br>2005년 실시</td>
        <td>ABEEK 교육과정 개발</td>
        <td><div align="left">ABEEK기준을 참조한 교육과정 개발</div></td>
        </tr>
    </tbody>
  </table>
    </div>
</div>
<!-- End Of Content -->




<!-- START Footer-->
<? Footer::render(); ?>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>
	$("#side-menu-item-b").addClass("hover");
</script>
<!-- End Of Footer-->
</body>
</html>