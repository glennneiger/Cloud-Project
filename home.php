<?php
	if(isset($_POST["submit2"])){
		//$command = exec("python openStack-tables.py");
		header('Location: resources.php');
			exit;
	}
	if(isset($_POST["submit3"])){
		$command = escapeshellcmd("python openStack-tables.py");
		$output=shell_exec($command);
		}
		
?>
<html>
<head>
<meta charset="UTF-8">
  <title>thunderboltTw0</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/mystyles.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
 <link href="css/bootstrap-social.css" rel="stylesheet">
 <style>
 .btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
 .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
 .btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
 .btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
 .btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
 .btn-primary.active { color: rgba(255, 255, 255, 0.75); }
 .btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
 .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
 .btn-block { width: 100%; display:block; }
 body{
   background: #34495E;
 }
 .breadcrumb{
   background: #34495E;
   color: white;
 }
 </style>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
              <!--to make the nav bar responsive- to replace by a toggle button-->
              <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.html">Thunderbolt Cloud</a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"
                       aria-hidden="true"></span> Home</a></li>
                    <li ><a href="aboutUs.html"><span class="glyphicon glyphicon-info-sign"
                      aria-hidden="true"></span>About</a></li>
                      <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container">
          <ol class="breadcrumb">
            <li><class="active">Home</a></li>
          </ol>
        </div>
  <div class="container">
    <div class="row row-content">
        <div class="col-xs-12 col-sm-3 col-sm-push-9">
            <p style="padding:20px;"></p>
  	<form method="post" action="http://192.168.1.4">
            <button type="submit" class="btn btn-primary btn-block btn-large"align=center>Open Stack</button></form>
        </div>
        <div class="col-xs-12 col-sm-9 col-sm-pull-3">
            <h3>Open Stack</h3>
            <p>OpenStack software controls large pools of compute, storage, and networking resources throughout a datacenter, managed through a dashboard or via the OpenStack API. OpenStack works with popular enterprise and open source technologies making it ideal for heterogeneous infrastructure.</p>
            <p><a  href="#">More &raquo;</a></p>
        </div>
    </div>

    <div class="row row-content">
        <div class="col-xs-12 col-sm-3 col-sm-push-9">
            <p style="padding:20px;"></p>
     <form method="post" action="">
            <button type="submit" name="submit3" class="btn btn-primary btn-block btn-large" align=center>You should update your resources</button></form>
	<form method="post" action="">
            <button type="submit" name="submit2" class="btn btn-primary btn-block btn-large" align=center>You can view your resources</button></form>
     
        </div>
        <div class="col-xs-12 col-sm-9 col-sm-pull-3">
            <h3>Open Stack Resources</h3>
            <p>Hundreds of the world’s largest brands rely on OpenStack to run their businesses every day, reducing costs and helping them move faster. OpenStack has a strong ecosystem, and users seeking commercial support can choose from different OpenStack-powered products and services in the Marketplace.</p>
            <p><a  href="#">More &raquo;</a></p>
        </div>
  </div>
  <footer class="row-footer">
      <div class="container">
          <div class="row">
              <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-1">
                  <h5>Links</h5>
                  <ul class="list-unstyled">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Contact</a></li>
                  </ul>
              </div>

              </div>
              <div class="col-xs-12 col-sm-4">
                <div class="nav navbar-nav" style="padding: 40px 10px;">
                    <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                    <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                    <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                    <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                </div>

              </div>
              <div class="col-xs-12">
                  <p style="padding:10px;"></p>
                  <p align=center>© Copyright 2015 Ristorante Con Fusion</p>
              </div>
          </div>
      </div>
  </footer >
</body>
</html>
