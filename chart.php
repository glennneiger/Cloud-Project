<?php
	include('session.php');
	$varRes=$_SESSION['varRes'];
	$varMet=$_SESSION['varMet'];
	$result = mysqli_query($db,"SELECT * FROM  Samples WHERE ID = '$varMet' AND ResourceId = '$varRes'");
	
	$res = mysqli_query($db,"SELECT * FROM  Metrics WHERE Name = '$varMet'");
	$yname = mysqli_fetch_array($res,MYSQLI_ASSOC);
	
	 $rows =array();
	 $table = array();
	 $table['cols'] = array(
		  array('label' => 'TimeStamp', 'type' => 'string'),
		  array('label' => $varMet.' ( type = '.$yname['Type'].', unit = '.$yname['Unit'].' )' , 'type' => 'number'));
	
	  foreach($result as $r){
		  $temp = array();
		  $temp[] = array('v' => (string) $r['TimeStamp']);
		  $temp[] = array('v' => (int) $r['Volume']);
		  $rows[] = array('c' => $temp);
	 }
	
	 $table['rows'] = $rows;
	$jsonTable = json_encode($table);
	
?>
<html>
<head>
 <title>Resources</title>

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript">
	google.load('visualization', '1', {'packages':['corechart']});
	google.setOnLoadCallback(drawChart);

    	function drawChart() {
      
      // Create our data table out of JSON data loaded from server.
	      var data = new google.visualization.DataTable(<?=$jsonTable?>);
	
	      var options = {
		   title: 'The Resource Utilization',
		   hAxis: {direction: -1},
		  is3D: 'true',
		  width: 800,
		  height: 600
		};
      // Instantiate and draw our chart, passing in some options.
      // Do not forget to check your div ID
      		var chart = new google.visualization.LineChart(document.getElementById('chart_div'))
      chart.draw(data, options);
    }
    </script>
</head>
<body >
 <div id = "chart_div">
 </div>
</body>
</html>
