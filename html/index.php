<!DOCTYPE HTML>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, target-densitydpi=medium-dpi" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title></title>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecod.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<style type="text/css">
/* reset */
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,textarea,p,blockquote,th,td,input,select,textarea,button {margin:0;padding:0;}
fieldset,img {border:none;}
dl,ul,ol,menu,li {list-style:none;}
blockquote, q {quotes: none;}
blockquote:before, blockquote:after,q:before, q:after {content:'';content:none;}
input,select,textarea,button {vertical-align:middle;}
button {border:none;background-color:transparent;cursor:pointer;}
body {background:#fff;}
body,th,td,input,select,textarea,button {font-size:12px;line-height:1;font-family:'돋움',dotum,sans-serif;color:#333;}
a {color:#333;text-decoration:none;}
a:active, a:hover {text-decoration:none;}
address,caption,cite,code,dfn,em,var {font-style:normal;font-weight:normal;}

/* class */
.hide {display:none;}
.vis {width:1px; height:1px; line-height:0; text-indent:-999999%; overflow:hidden; position:absolute; left:-99999%;}
.clear:after{content:"";display:block;clear:both;}

/*datepicker*/
.datepicker + img{padding-left:10px;cursor:pointer;vertical-align:middle;}
		#wrap{width:79%;min-width:320px;margin:0 auto;}
		.com{height:60px;min-height:40px;max-height:60px;background-color:#d33;}

		#content ul{overflow:hidden;background-color:#333;}
		#content ul li{float:left;width:29.33333333333333%;margin:1%;padding:1%;text-align:center;font-size:20px;font-weight:900;color:#fff;}
		#content ul li:nth-child(2n){background-color:#1A4799;}
		#content ul li:nth-child(2n+1){background-color:#F9EF47;color:#222;}


		/*@media screen and (min-width:737px) and (max-width:1000px){
			#wrap{width:100%;margin:none;}
		}*/

		@media screen and (max-width:736px){
			#wrap{width:100%;margin:none;}

			#content ul li{float:none;width:96%;}
		}
	</style>
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$(window).resize(function(){
				$(".com").height($(this).innerWidth()*0.0395778364116095);
			});
		});
	</script>
</head>
<body>
	<div id="wrap">
		<div class="com"></div>
		<div id="content">
			<ul>
				<li>1</li>
				<li>2</li>
				<li>3</li>
				<li>4</li>
				<li>5</li>
				<li>6</li>
				<li>7</li>
				<li>8</li>
				<li>9</li>
			</ul>
		</div>
		<div class="com"></div>
	</div>
</body>
</html>