<?php
    
    $error = NULL;
    $sucess= false;
    //try{
    if (isset($_POST["email"]) && $email = $_POST["email"]){
            if (!strlen($email)) throw new Exception("E-mail n�o pode ser vazio.");
            
            require ("include/db.inc");
            $query = $db->query("INSERT INTO unbouce(email) VALUES(".$db->quote($_POST["email"]).");");
            
            $sucess = true;
	}
    /*                            
    } catch (Exception $e){
    	$error = $e->getMessage();
    }
      */                          
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0035)http://unbouncepages.com/mindshare/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!--a03a6026-43c6-11e3-b1f7-12313e02a4f0 a-->
<title>mindshare - Melhores ideias, Melhores pessoas</title>
<meta name="keywords" content="Ideias, rede, Pessoas ">
<meta name="description" content="A melhor redes social para o compartilhamento e desenvolvimento de ideias.">
<link href="./unbounce/reset.css" media="screen" rel="stylesheet" type="text/css">
<link href="./unbounce/page_defaults.css" media="screen" rel="stylesheet" type="text/css">
<style title="page-styles" type="text/css">
body { color:#392a61; }
a {
  color:#3e9ce3;
  text-decoration:none;
}
#lp-pom-image-9 {
  left:0px;
  top:30px;
  position:absolute;
  z-index:1;
}
#lp-pom-text-11 {
  left:8px;
  top:233px;
  position:absolute;
  z-index:2;
  width:86px;
  height:134px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-12 {
  left:674px;
  top:233px;
  position:absolute;
  z-index:3;
  width:86px;
  height:134px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-13 {
  left:119px;
  top:190px;
  position:absolute;
  z-index:4;
  width:608px;
  height:58px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-14 {
  left:121px;
  top:238px;
  position:absolute;
  z-index:5;
  width:544px;
  height:45px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-18 {
  left:124px;
  top:289px;
  position:absolute;
  z-index:6;
  width:515px;
  height:68px;
  behavior:url(/PIE.htc);
}
#lp-pom-box-23 {
  left:0px;
  top:443px;
  background:rgba(42,105,153,1);
  background:-webkit-linear-gradient(#3e9be2,#2a6999);
  background:-moz-linear-gradient(#3e9be2,#2a6999);
  background:linear-gradient(#3e9be2,#2a6999);
  background:-ms-linear-gradient(#3e9be2,#2a6999);
  background:-o-linear-gradient(#3e9be2,#2a6999);
  -pie-background:linear-gradient(#3e9be2,#2a6999);
  behavior:url(/PIE.htc);
  border-style:solid;
  border-width:1px;
  border-color:#2a6999;
  position:absolute;
  z-index:7;
  width:758px;
  height:75px;
  border-radius:6px;
}
#lp-pom-image-9 .lp-pom-image-container {
  width:231px;
  height:56px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-65 {
  position:absolute;
  left:577px;
  top:51px;
  z-index:27;
  width:87px;
  height:17px;
  behavior:url(/PIE.htc);
}
#lp-pom-button-66 {
  position:absolute;
  left:671px;
  top:45px;
  z-index:28;
  width:27px;
  height:27px;
  behavior:url(/PIE.htc);
  border-radius:3px;
  background-color:rgba(255,255,255,0);
  -pie-background-color:rgba(255,255,255,0);
  background-image:url(//unbouncepages-com.s3.amazonaws.com/unbouncepages.com/mindshare/1uaeijm-o-twitter-white-button-state.png);
  color:#fff;
  border-style:none;
  border-width:undefinedpx;
  border-color:#undefined;
  font-size:16px;
  line-height:19px;
  font-weight:bold;
  font-family:arial;
  text-align:center;
  background-repeat:no-repeat;
}
#lp-pom-button-66:hover {
  background-color:rgba(255,255,255,0);
  -pie-background-color:rgba(255,255,255,0);
  background-image:url(//unbouncepages-com.s3.amazonaws.com/unbouncepages.com/mindshare/b5a0f0-o-twitter-white-button-rollover.png);
  color:#fff;
}
#lp-pom-button-66:active {
  background-color:rgba(255,255,255,0);
  -pie-background-color:rgba(255,255,255,0);
  background-image:url(//unbouncepages-com.s3.amazonaws.com/unbouncepages.com/mindshare/1uaeijm-o-twitter-white-button-state.png);
  color:#fff;
}
#lp-pom-button-70 {
  position:absolute;
  left:702px;
  top:45px;
  z-index:29;
  width:27px;
  height:27px;
  behavior:url(/PIE.htc);
  border-radius:3px;
  background-color:rgba(255,255,255,0);
  -pie-background-color:rgba(255,255,255,0);
  background-image:url(//unbouncepages-com.s3.amazonaws.com/unbouncepages.com/mindshare/fdblqq-o-facebook-white-button-state.png);
  color:#fff;
  border-style:none;
  border-width:undefinedpx;
  border-color:#undefined;
  font-size:16px;
  line-height:19px;
  font-weight:bold;
  font-family:arial;
  text-align:center;
  background-repeat:no-repeat;
}
#lp-pom-button-70:hover {
  background-color:rgba(255,255,255,0);
  -pie-background-color:rgba(255,255,255,0);
  background-image:url(//unbouncepages-com.s3.amazonaws.com/unbouncepages.com/mindshare/2h7ge6-o-facebook-white-button-rollover.png);
  color:#fff;
}
#lp-pom-button-70:active {
  background-color:rgba(255,255,255,0);
  -pie-background-color:rgba(255,255,255,0);
  background-image:url(//unbouncepages-com.s3.amazonaws.com/unbouncepages.com/mindshare/fdblqq-o-facebook-white-button-state.png);
  color:#fff;
}
#lp-pom-button-71 {
  position:absolute;
  left:733px;
  top:45px;
  z-index:30;
  width:27px;
  height:27px;
  behavior:url(/PIE.htc);
  border-radius:3px;
  background-color:rgba(255,255,255,0);
  -pie-background-color:rgba(255,255,255,0);
  background-image:url(//unbouncepages-com.s3.amazonaws.com/unbouncepages.com/mindshare/1332jjz-o-linkedin-white-button-state.png);
  color:#fff;
  border-style:none;
  border-width:undefinedpx;
  border-color:#undefined;
  font-size:16px;
  line-height:19px;
  font-weight:bold;
  font-family:arial;
  text-align:center;
  background-repeat:no-repeat;
}
#lp-pom-button-71:hover {
  background-color:rgba(255,255,255,0);
  -pie-background-color:rgba(255,255,255,0);
  background-image:url(//unbouncepages-com.s3.amazonaws.com/unbouncepages.com/mindshare/fsilmw-o-linkedin-white-button-rollover.png);
  color:#fff;
}
#lp-pom-button-71:active {
  background-color:rgba(255,255,255,0);
  -pie-background-color:rgba(255,255,255,0);
  background-image:url(//unbouncepages-com.s3.amazonaws.com/unbouncepages.com/mindshare/1332jjz-o-linkedin-white-button-state.png);
  color:#fff;
}
#lp-pom-block-8 {
  background:rgba(255,255,255,0);
  -pie-background:rgba(255,255,255,0);
  border-style:none none solid none;
  border-width:1px;
  border-color:#eaeaea;
  margin-left:auto;
  margin-right:auto;
  margin-bottom:45px;
  position:relative;
  behavior:url(/PIE.htc);
}
#lp-pom-block-10 {
  background:rgba(255,255,255,0);
  -pie-background:rgba(255,255,255,0);
  margin-left:auto;
  margin-right:auto;
  margin-bottom:47px;
  position:relative;
  width:760px;
  height:235px;
  behavior:url(/PIE.htc);
}
#lp-pom-button-25 {
  position:absolute;
  left:572px;
  top:0px;
  z-index:9;
  width:148px;
  height:40px;
  behavior:url(/PIE.htc);
  border-radius:5px;
  background-color:#f7941d;
  background:-webkit-linear-gradient(#f7941d,#d75305);
  background:-moz-linear-gradient(#f7941d,#d75305);
  background:-ms-linear-gradient(#f7941d,#d75305);
  background:-o-linear-gradient(#f7941d,#d75305);
  background:linear-gradient(#f7941d,#d75305);
  box-shadow:inset 0px 1px 0px #ffbb6a,inset 0 -1px 2px #a33f03;
  text-shadow:1px 1px #521601;
  -pie-background:linear-gradient(#f7941d,#d75305);
  color:#fff;
  border-style:solid;
  border-width:1px;
  border-color:#333333;
  font-size:16px;
  line-height:19px;
  font-weight:bold;
  font-family:arial;
  text-align:center;
  background-repeat:no-repeat;
}
#lp-pom-button-25:hover {
  background-color:#eb8016;
  background:-webkit-linear-gradient(#eb8016,#cc4504);
  background:-moz-linear-gradient(#eb8016,#cc4504);
  background:-ms-linear-gradient(#eb8016,#cc4504);
  background:-o-linear-gradient(#eb8016,#cc4504);
  background:linear-gradient(#eb8016,#cc4504);
  box-shadow:inset 0px 1px 0px #ffb164,inset 0 -1px 2px #993302;
  -pie-background:linear-gradient(#eb8016,#cc4504);
  color:#fff;
}
#lp-pom-button-25:active {
  background-color:#de7312;
  background:-webkit-linear-gradient(#d75305,#d75305);
  background:-moz-linear-gradient(#d75305,#d75305);
  background:-ms-linear-gradient(#d75305,#d75305);
  background:-o-linear-gradient(#d75305,#d75305);
  background:linear-gradient(#d75305,#d75305);
  box-shadow:inset 0px 2px 4px #5e3007;
  -pie-background:linear-gradient(#d75305,#d75305);
  color:#fff;
}
#lp-pom-form-24 .lp-pom-form-field label {
  margin-top:13px;
  font-family:"arial";
  font-weight:bold;
  font-size:14px;
  line-height:15px;
  color:#fff;
}
#lp-pom-form-24 .lp-pom-form-field .option label {
  font-family:"arial";
  font-weight:normal;
  font-size:13px;
  line-height:15px;
  left:18px;
  color:#000;
}
#lp-pom-form-24 .lp-pom-form-field .option input { top:2px; }
#lp-pom-form-24 .lp-pom-form-field input.text {
  background-color:#f0f9ff;
  color:#333;
  box-shadow:inset 0px 2px 3px #d0d8dd;
  -webkit-box-shadow:inset 0px 2px 3px #d0d8dd;
  -moz-box-shadow:inset 0px 2px 3px #d0d8dd;
  border-radius:5px;
}
#lp-pom-form-24 .lp-pom-form-field textarea {
  background-color:#f0f9ff;
  color:#333;
  box-shadow:inset 0px 2px 3px #d0d8dd;
  -webkit-box-shadow:inset 0px 2px 3px #d0d8dd;
  -moz-box-shadow:inset 0px 2px 3px #d0d8dd;
  border-style:solid;
  border-width:1px;
  border-color:#666666;
  border-radius:5px;
}
#lp-pom-form-24 .lp-pom-form-field input[type=text] {
  border-style:solid;
  border-width:1px;
  border-color:#666666;
}
#lp-pom-form-24 .lp-pom-form-field select {
  border-style:solid;
  border-width:1px;
  border-color:#666666;
}
#lp-pom-form-24 {
  position:absolute;
  left:21px;
  top:17px;
  z-index:8;
  width:552px;
  height:40px;
  behavior:url(/PIE.htc);
}
#lp-pom-block-22 {
  background:rgba(255,255,255,0);
  -pie-background:rgba(255,255,255,0);
  margin-left:auto;
  margin-right:auto;
  margin-bottom:38px;
  position:relative;
  width:760px;
  height:78px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-35 {
  position:absolute;
  left:43px;
  top:5px;
  z-index:13;
  width:201px;
  height:26px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-36 {
  position:absolute;
  left:43px;
  top:31px;
  z-index:14;
  width:201px;
  height:60px;
  behavior:url(/PIE.htc);
}
#lp-pom-image-51 {
  position:absolute;
  left:1px;
  top:1px;
  z-index:16;
}
#lp-pom-image-51 .lp-pom-image-container {
  width:32px;
  height:32px;
  behavior:url(/PIE.htc);
}
#lp-pom-box-46 {
  background:rgba(62,156,227,1);
  -pie-background:rgba(62,156,227,1);
  border-style:none;
  position:absolute;
  left:0px;
  top:0px;
  z-index:15;
  width:35px;
  height:35px;
  behavior:url(/PIE.htc);
  border-radius:219px;
}
#lp-pom-box-38 {
  background:rgba(255,255,255,0);
  -pie-background:rgba(255,255,255,0);
  border-style:none;
  position:absolute;
  left:0px;
  top:559px;
  z-index:12;
  width:239px;
  height:96px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-55 {
  position:absolute;
  left:43px;
  top:4px;
  z-index:18;
  width:201px;
  height:25px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-56 {
  position:absolute;
  left:43px;
  top:31px;
  z-index:19;
  width:201px;
  height:57px;
  behavior:url(/PIE.htc);
}
#lp-pom-image-58 {
  position:absolute;
  left:2px;
  top:2px;
  z-index:21;
}
#lp-pom-image-58 .lp-pom-image-container {
  width:32px;
  height:32px;
  behavior:url(/PIE.htc);
}
#lp-pom-box-57 {
  background:rgba(62,156,227,1);
  -pie-background:rgba(62,156,227,1);
  border-style:none;
  position:absolute;
  left:0px;
  top:0px;
  z-index:20;
  width:35px;
  height:35px;
  behavior:url(/PIE.htc);
  border-radius:219px;
}
#lp-pom-box-54 {
  background:rgba(255,255,255,0);
  -pie-background:rgba(255,255,255,0);
  border-style:none;
  position:absolute;
  left:260px;
  top:559px;
  z-index:17;
  width:239px;
  height:96px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-60 {
  position:absolute;
  left:43px;
  top:4px;
  z-index:23;
  width:201px;
  height:25px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-61 {
  position:absolute;
  left:44px;
  top:31px;
  z-index:24;
  width:201px;
  height:80px;
  behavior:url(/PIE.htc);
}
#lp-pom-image-63 {
  position:absolute;
  left:1px;
  top:2px;
  z-index:26;
}
#lp-pom-image-63 .lp-pom-image-container {
  width:32px;
  height:32px;
  behavior:url(/PIE.htc);
}
#lp-pom-box-62 {
  background:rgba(62,156,227,1);
  -pie-background:rgba(62,156,227,1);
  border-style:none;
  position:absolute;
  left:0px;
  top:0px;
  z-index:25;
  width:35px;
  height:35px;
  behavior:url(/PIE.htc);
  border-radius:219px;
}
#lp-pom-box-59 {
  background:rgba(255,255,255,0);
  -pie-background:rgba(255,255,255,0);
  border-style:none;
  position:absolute;
  left:521px;
  top:559px;
  z-index:22;
  width:239px;
  height:96px;
  behavior:url(/PIE.htc);
}
#lp-pom-block-26 {
  background:rgba(255,255,255,0);
  -pie-background:rgba(255,255,255,0);
  margin-left:auto;
  margin-right:auto;
  margin-bottom:45px;
  position:relative;
  width:760px;
  height:108px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-33 {
  position:absolute;
  left:0px;
  top:731px;
  z-index:10;
  width:529px;
  height:17px;
  behavior:url(/PIE.htc);
}
#lp-pom-text-34 {
  position:absolute;
  left:658px;
  top:731px;
  z-index:11;
  width:102px;
  height:17px;
  behavior:url(/PIE.htc);
}
#lp-pom-block-32 {
  background:rgba(255,255,255,0);
  -pie-background:rgba(255,255,255,0);
  border-style:solid none none none;
  border-width:1px;
  border-color:#eaeaea;
  margin:auto;
  position:relative;
  width:760px;
  height:52px;
  behavior:url(/PIE.htc);
}
#lp-pom-root {
  background:rgba(255,255,255,1);
  -pie-background:rgba(255,255,255,1);
  margin:auto;
  behavior:url(/PIE.htc);
}
</style>
<link rel="stylesheet" media="screen" href="./unbounce/jquery.ubpoverlay.css" type="text/css">
<script async="" src="./unbounce/analytics.js"></script><script src="./unbounce/jquery.min.js" type="text/javascript"></script>
<script src="./unbounce/jquery.validate.min.js" type="text/javascript"></script>
<script src="./unbounce/additional-methods.js" type="text/javascript"></script>
<script src="./unbounce/jquery.ubpoverlay.js" type="text/javascript"></script>
<script type="text/javascript" src="./unbounce/unbounce.js"></script><script type="text/javascript">
window.ub.page.id = "a03a6026-43c6-11e3-b1f7-12313e02a4f0";
window.ub.page.variantId = "a";
window.ub.page.name = "First Variant";
</script>

<script type="text/javascript">
var lp = lp || {};
lp.jQuery = jQuery.noConflict( true );
</script>

<script src="./unbounce/main.js" type="text/javascript"></script>
<script src="./unbounce/main(1).js" type="text/javascript"></script>
<script src="./unbounce/main(2).js" type="text/javascript"></script>
<script src="./unbounce/jquery.min.js" type="text/javascript"></script>
<script>
window.module = window.module || {};
window.module.lp = window.module.lp || {};
window.module.lp.form = window.module.lp.form || {};
window.module.lp.form.data = {"formContainerId":"lp-pom-form-24","errorContainerId":"lp-pom-form-24-errors","confirmAction":"modal","confirmData":{"url":"a-form_confirmation.html","size":{"width":512,"height":180}},"validationRules":{"email":{"required":true,"email":true}},"validationMessages":{"email":{"required":"Email is required"}},"formButtonId":"lp-pom-button-25"};
</script>
<script>lp.jQuery().ready(function() {lp.jQuery("#lp-pom-button-25").click( function(e) {e.preventDefault();e.stopPropagation();lp.jQuery("div.lp-pom-form form").submit();});});</script>
<script src="./unbounce/webfont.js"></script>
<script>
</script>
<!--[if IE 7]>
<script>
(function() {
  var sheet = document.styleSheets[1];
  var rules = sheet.rules;
  var rule;
  var index = -1;
  for (var i=0, l=rules.length; i<l; i++){
    rule = rules[i];
    if (rule.selectorText.toLowerCase() == 'div.lp-pom-root .lp-pom-text span') {
      index = i;
      break;
    }
  }
  if (index > -1) {
    sheet.removeRule(index);
    sheet.addRule('div.lp-pom-root .lp-pom-text span', 'line-height:inherit');
  }
})();
</script>
<![endif]-->

</head>
<body class="lp-pom-body ">
<div class="lp-element lp-pom-root" id="lp-pom-root" style="min-width: 760px;">
<div class="lp-positioned-content" style="width: 760px; margin-left: -380px;">
<div class="lp-element lp-pom-image" id="lp-pom-image-9">
<div class="lp-pom-image-container" style="overflow: hidden;">
<img src="./image/logo.png" alt=""></div>
</div>
<div class="lp-element lp-pom-text" id="lp-pom-text-11" style="height: auto;">
<p xmlns="">
<light>
<span style="color:#eaeaea;"><span style="font-size: 250px; line-height: 86px;">{</span></span>
</light>
</p>
</div>
<div class="lp-element lp-pom-text" id="lp-pom-text-12" style="height: auto;">
<p>
<light>
<span style="color:#eaeaea;"><span style="font-size: 250px; line-height: 86px;">}</span></span>
</light>
</p>
</div>
<div class="lp-element lp-pom-text" id="lp-pom-text-13" style="height: auto;">
<h1>
<span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(102, 102, 102);"><span style="font-size: 50px; line-height: 58px;">Você possui uma ideia?</span></span></span>
</h1>
</div>
<div class="lp-element lp-pom-text" id="lp-pom-text-14" style="height: auto;">
<p class="lplh-45">
<font color="#999999" face="arial, helvetica, sans-serif"><span style="font-size: 28px;">Transforme sua ideia em uma grande ideia</span></font>
</p>
</div>
<div class="lp-element lp-pom-text" id="lp-pom-text-18" style="height: auto;">
<p>
	Qual a chave para se realizar essa transformação? As melhores pessoas. No mindShare você encontra uma rede de contato com as mentes mais empreendedoras do Brasil. Com o compartilhamento de ideias, sua ideia sairá da mente, e tomará a forma necessária para conquistar o mundo.</p>
</div>
<div class="lp-element lp-pom-box" id="lp-pom-box-23">
<div class="lp-element lp-pom-form" id="lp-pom-form-24">

<?php 

	if($sucess) {
		?>
		<h3 style="color: white !important">E-mail cadastrado com sucesso! Logo te avisaremos quando estivermos prontos =)</h3>
		<?php
	} else {
		
		?>

		
		<form action="./index.php" method="POST" id="email-form">
		<input type="hidden" name="pageId" value="a03a6026-43c6-11e3-b1f7-12313e02a4f0"><input type="hidden" name="pageVariant" value="a">
		<fieldset class="clearfix" style="width: 552px; height: 40px;">
		<div class="lp-pom-form-field clearfix" style="width: 552px; height: 42px; top: 0px;">
		<label for="email" class="main" style="top: 0px; width: 46px; height: auto;">Email&nbsp;*</label><input type="text" id="email" name="email" class="text" style="top: 0px; left: 58px; width: 470px; font-size: 15px; height: 38px; padding-left: 11px; padding-right: 11px; lineheight: 15px;">
		</div>
		</fieldset>
		</form>
		
		
		
		<?php

	}
?>



<?php 

	if(!$sucess) {
?>
<a class="lp-element lp-pom-button" id="lp-pom-button-25" href="#" onClick="$('#email-form').submit();"><span class="label" style="margin-top: -10px;">Seja notificado!</span></a>
<?php 
	}
?>
</div>
</div>



<div class="lp-element lp-pom-text" id="lp-pom-text-33" style="height: auto;">
<p>
<span style="color:#999999;"><span style="font-size: 13px; line-height: 17px;"><span style="font-family: arial,helvetica,sans-serif;">&nbsp;Copyright © 2013 MindShare. Todos os direitos reservados.</span></span></span>
</p>
</div>
<div class="lp-element lp-pom-text" id="lp-pom-text-34" style="height: auto;">
<p style="text-align: right;">
<!-- <span style="color:#999999;"><span style="font-size: 13px; line-height: 14px;"><span style="font-family: arial,helvetica,sans-serif;">Privacy Policy</span></span></span> -->
</p>
</div>
<div class="lp-element lp-pom-box" id="lp-pom-box-38">
<div class="lp-element lp-pom-text" id="lp-pom-text-35" style="height: auto;">
<h2>
<font color="#333333" face="arial, helvetica, sans-serif"><span style="font-size: 17px; line-height: 19px;">Imagine</span></font>
</h2>
</div>
<div class="lp-element lp-pom-text" id="lp-pom-text-36" style="height: auto;">
<p>
<span style="font-family: arial,helvetica,sans-serif;"><span style="font-size: 13px; line-height: 20px;">Compartilhe sua ideia e veja opiniões de pessoas de todas as partes do mundo!</span></span>
</p>
</div>
<div class="lp-element lp-pom-box" id="lp-pom-box-46">
<div class="lp-element lp-pom-image" id="lp-pom-image-51">
<div class="lp-pom-image-container" style="overflow: hidden;">
<img src="./unbounce/j79083-o-icons-users-32x32.png" alt=""></div>
</div>
</div>
</div>
<div class="lp-element lp-pom-box" id="lp-pom-box-54">
<div class="lp-element lp-pom-text" id="lp-pom-text-55" style="height: auto;">
<h2>
<span style="color:#333333;"><span style="font-size: 17px; line-height: 19px;"><span style="font-family: arial,helvetica,sans-serif;">Desenvolva</span></span></span>
</h2>
</div>
<div class="lp-element lp-pom-text" id="lp-pom-text-56" style="height: auto;">
<p class="lplh-19">
<span style="font-size:12px;">Melhore seu lado empreendedor! "Troque uma ideia" com pessoas de todas áreas do conhecimento!</span>
</p>
</div>
<div class="lp-element lp-pom-box" id="lp-pom-box-57">
<div class="lp-element lp-pom-image" id="lp-pom-image-58">
<div class="lp-pom-image-container" style="overflow: hidden;">
<img src="./unbounce/1kqdlqk-o-icons-tag-32x32.png" alt=""></div>
</div>
</div>
</div>
<div class="lp-element lp-pom-box" id="lp-pom-box-59">
<div class="lp-element lp-pom-text" id="lp-pom-text-60" style="height: auto;">
<h2>
<span style="color:#333333;"><span style="font-size: 17px; line-height: 19px;"><span style="font-family: arial,helvetica,sans-serif;">Colabore</span></span></span>
</h2>
</div>
<div class="lp-element lp-pom-text" id="lp-pom-text-61" style="height: auto;">
<p>
<font face="arial, helvetica, sans-serif" size="2"><span style="line-height: 20px;">Veja as melhores ideias nascendo e entenda como o mundo pensa! Ajude ideias a se tornarem grandes ideias.</span></font>
</p>
</div>
<div class="lp-element lp-pom-box" id="lp-pom-box-62">
<div class="lp-element lp-pom-image" id="lp-pom-image-63">
<div class="lp-pom-image-container" style="overflow: hidden;">
<img src="./unbounce/1dh3gzi-o-icons-cloud-32x32.png" alt=""></div>
</div>
</div>
</div>
<div class="lp-element lp-pom-text" id="lp-pom-text-65" style="height: auto;">
<p style="text-align: right;">
<span style="color:#999999;"><span style="font-size: 13px; line-height: 14px;"><span style="font-family: arial,helvetica,sans-serif;">Siga-nos </span></span></span>
</p>
</div>
<a class="lp-element lp-pom-button" id="lp-pom-button-66" href="http://unbouncepages.com/mindshare/clkn/http/twitter.com/" target="_blank"><span class="label" style="margin-top: 0px;"></span></a><a class="lp-element lp-pom-button" id="lp-pom-button-70" href="http://unbouncepages.com/mindshare/clkg/http/facebook.com/" target="_blank"><span class="label" style="margin-top: 0px;"></span></a><a class="lp-element lp-pom-button" id="lp-pom-button-71" href="http://unbouncepages.com/mindshare/clkn/http/linkedin.com/" target="_blank"><span class="label" style="margin-top: 0px;"></span></a>
</div>
<div class="lp-element lp-pom-block" id="lp-pom-block-8" style="width: 100%; height: 115px; position: relative;">
<div class="lp-pom-block-content" style="margin: auto; width: 760px; height: 115px;"></div>
</div>
<div class="lp-element lp-pom-block" id="lp-pom-block-10" style="position: relative;">
<div class="lp-pom-block-content" style="margin: auto; width: 100%; height: 100%;"></div>
</div>
<div class="lp-element lp-pom-block" id="lp-pom-block-22" style="position: relative;">
<div class="lp-pom-block-content" style="margin: auto; width: 100%; height: 100%;"></div>
</div>
<div class="lp-element lp-pom-block" id="lp-pom-block-26" style="position: relative;">
<div class="lp-pom-block-content" style="margin: auto; width: 100%; height: 100%;"></div>
</div>
<div class="lp-element lp-pom-block" id="lp-pom-block-32" style="position: relative;">
<div class="lp-pom-block-content" style="margin: auto; width: 100%; height: 100%;"></div>
</div>
</div>
<div id="lp-pom-form-24-errors" class="lp-form-errors" style="left: 1170px; top: 461px; width: 280px;"><div class="content"><div class="error">Please correct the following errors:</div><ul></ul></div></div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45352879-1', 'mindshare.co');
  ga('send', 'pageview');

</script>

<div id="ubpoverlay-tmp"></div><div id="ubpoverlay-loading"><div></div></div><div id="ubpoverlay-overlay"></div><div id="ubpoverlay-wrap"><div id="ubpoverlay-outer"><div class="ubpoverlay-bg" id="ubpoverlay-bg-n"></div><div class="ubpoverlay-bg" id="ubpoverlay-bg-ne"></div><div class="ubpoverlay-bg" id="ubpoverlay-bg-e"></div><div class="ubpoverlay-bg" id="ubpoverlay-bg-se"></div><div class="ubpoverlay-bg" id="ubpoverlay-bg-s"></div><div class="ubpoverlay-bg" id="ubpoverlay-bg-sw"></div><div class="ubpoverlay-bg" id="ubpoverlay-bg-w"></div><div class="ubpoverlay-bg" id="ubpoverlay-bg-nw"></div><div id="ubpoverlay-content"></div><a id="ubpoverlay-close"></a><div id="ubpoverlay-title"></div><a href="javascript:;" id="ubpoverlay-left"><span class="ubpoverlay-ico" id="ubpoverlay-left-ico"></span></a><a href="javascript:;" id="ubpoverlay-right"><span class="ubpoverlay-ico" id="ubpoverlay-right-ico"></span></a></div></div></body></html>