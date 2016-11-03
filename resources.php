<?php
	include('var.php');
	
?>
<html>
<head>
  

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/mystyles.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap-social.css" rel="stylesheet">
  <style>
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
          <li><a href = "home.html">Home</a>>></li>
          <l1><class ="active">Resources</a></li>
       </ol>
      </div>
      <div class="container-fluid">
        <div class="row row-content">
	<div class="col-xs-12 col-sm-3 col-sm-pull-6"
        <div> 
	<h4>Select the Resource:</h4>
	<form method="POST" action="">
	<select name="res">
	<?php
	
	$sql = mysqli_query($db,"SELECT ResourceId FROM  resourceInfo WHERE UserId = '$login_session'");
	
	while ($row = mysqli_fetch_array($sql)){
	echo "<option value=$row[ResourceId]>$row[ResourceId]</option>";			
        }
        ?>
	</select>
	<input type="submit" name="submit2" value="post">
	</form>
	<h4>Select the Meter:</h4>
	<form method="POST" action="">
	<select name="met">
	<?php
		$sql = mysqli_query($db,"SELECT MetricName FROM  MeterResource WHERE ResourceId = '$varResource'");
	
	while ($row = mysqli_fetch_array($sql)){
	echo "<option value=$row[MetricName]>$row[MetricName]</option>";			
        }
        ?>
	</select>
	<input type="submit" name="submit3" value="post">
	</form>
	</div>
        </div>
       </div>
   
</body>
</html>
