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
     <style>

.main-container{
	position:absolute;
	background-color: #EFEEED;
	width: 1182px;
	height : 820px;
	margin-left:-591px;
	top:124px;
	left:50%;
}	

.footer{
	position:absolute;
	background-color: #EFEEED;
	width: 1182px;
	height : 124px;
	margin-left:-591px;
	left:50%;
	top:944px;
}
	    
    </style>
</head>
<body>

<!-- End Of Footer -->
<?Header::render();?>
<!-- START Content-->

<div class="main-container">
    <div class="greeting-content">
		<div class="main_text">
			<h3>학과장 인사말</h3>
		<p><strong class="style9">홍익대학교 과학기술대학 컴퓨터정보통신공학 프로그램을 방문해 주셔서 감사합니다.</strong></p> 
        <div style="width:100%;"><img src="../../assets/img/intro/robert_kim.jpg" width="100%" height="100%" alt="사진"></div>
		<div class="ur_text">
 			<p class="HStyle0">&nbsp;&nbsp;저희 컴퓨터정보통신의 교육목적은 </p>

<p class="HStyle0">소프트웨어와 네트워크 및 보안 분야의 창의적이고 유능한 공학도를 양성함으로써, 미래 정보화 사회에 대처하고, 자신의 발전은 물론 국가와 사회에 공헌할 수 있는 인재를 양성하는 것입니다. </p>

<p class="HStyle0">&nbsp;&nbsp;저희 프로그램에 개설된 소프트웨어 와 네트워크의 기본원리 및 효율적인 융합(convergence) 기술에 대한 이해와 공학적 활용능력, 설계능력, 그리고 인성을 고루 갖춘 실무 중심 엔지니어를 양성하는 교육을 하고 있습니다.</p>

<p class="HStyle0"></p>

<p class="HStyle0">&nbsp;&nbsp;현재 저희 학과의 특성화 강화 진행에 맞게,&nbsp; 모든 저희 학과 학생들은1) <span style="font-size:11.0pt;font-family:&quot;휴먼명조&quot;;line-height:160%">실무형 SW 개발 능력(8K LOC 이상의 프로그램), </span>2) <span style="font-size:11.0pt;font-family:&quot;휴먼명조&quot;;line-height:160%">네트워크 구성, 운영, 및 SW 개발 능력배양하여, 소프트웨어와 네트워크에 대한 지식과 연구개발 능력을 하나의 핵심 역량을 갖춘 인재를 길러내고자 합니다.</span></p>
            <p class="font_right">컴퓨터정보통신공학과  학과장  <span class="color1 font14">김 영 철</span></p>
		</div>
	</div>
    </div>
	<?Side::render('intro');?>
</div>
<!-- End Of Content -->




<!-- START Footer-->
<? Footer::render(); ?>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>
	$("#side-menu-item-a").addClass("hover");
</script>
<!-- End Of Footer-->
</body>
</html>