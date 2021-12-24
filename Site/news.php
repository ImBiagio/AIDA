<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aida Onlus</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>


<div id="wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="index.html"><img src="images/logo.jpg" width="60%"></a></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.html" accesskey="1" title="">Homepage</a></li>
				<li><a href="chisiamo.html" accesskey="" title="">Chi Siamo</a></li>
				<li class="current_page_item"><a href="#" accesskey="3" title="">News e Iniziative</a></li>
				<li><a href="aiuto.html" accesskey="4" title="">Come Aiutarci</a></li>
				<li><a href="guide.html" accesskey="5" title="">Guida Antiviolenza</a></li>
				<li><a href="contatti.html" accesskey="6" title="">Contatti</a></li>
			</ul>
		</div>
	</div>


	<div id="banner">
		<div class="container">
			<div class="title" class="inner">
				<h2>a.i.d.a. Onlus Cremona</h2>
				<span class="byline">Associazione incontro donne antiviolenza</span> </div>
			<ul class="actions">
			</ul>
		</div>
	</div>


	<div id="page" class="container">
			<div class="title">
				<h2>NEWS E INIZIATIVE</h2>
				<?php
				  $template = "Bootstrap";   
				  include("CuteNews/show_news.php");
				?>
			</div>
		</div>
</div>

	<div id="copyright" class="container">
	<p>&copy; a.i.d.a Onlus Cremona 2019 | Webmaster: Biagio Caracciolo.&nbsp;<a href="https://www.linkedin.com/in/biagiocaracciolo/"><img src="images/in.png" width="2%"></a> &nbsp; <a href="mailto:caracciolo.biagio1996@gmail.com"><img src="images/mail.png" width="2%"></a> </p>
	</div>
</body>
</html>
