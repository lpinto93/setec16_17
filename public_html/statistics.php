<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">SETEC-B</a></h1>
			<span>By <a href="http://fe.up.pt">FEUP</a></span> </div>
		<div id="menu">
			<ul>
				<li><a href="index.html" accesskey="1" title="">Homepage</a></li>
				<li class="current_page_item"><a href="statistics.php" accesskey="2" title="">Statistics</a></li>
                <li><a href="heatmap.php" accesskey="3" title="">Heatmaps</a></li>
				<li><a href="#" accesskey="4" title="">About Us</a></li>
			</ul>
		</div>
	</div>
</div>

<div id="chartContainer" style="height: 400px; width: 100%;">
        <script type="text/javascript">
  window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer",
    {
      zoomEnabled: true,
	  animationEnabled: true,
      title:{
        text: "Try Zooming And Panning (with dates)"
      },
      data: [						//data,  // random generator below
	  {
		type: "line",
		
		dataPoints: [
        { x: new Date(2012, 00, 1), y: 450 },
        { x: new Date(2012, 01, 1), y: 414 },
        { x: new Date(2012, 02, 1), y: 520 },
        { x: new Date(2012, 03, 1), y: 460 },
        { x: new Date(2012, 04, 1), y: 450 },
        { x: new Date(2012, 05, 1), y: 500 },
        { x: new Date(2012, 06, 1), y: 480 },
        { x: new Date(2012, 07, 1), y: 480 },
        { x: new Date(2012, 08, 1), y: 410 },
        { x: new Date(2012, 09, 1), y: 500 },
        { x: new Date(2012, 10, 1), y: 480 },
        { x: new Date(2012, 11, 1), y: 510 }
        ]
		
	  }
	  ]
	  });

    chart.render();
  }

   /*var limit = 1000;    //increase number of dataPoints by increasing this

    var y = 0;
    var data = []; var dataSeries = { type: "line" };
    var dataPoints = [];
    for (var i = 0; i < limit; i += 1) {
        y += (Math.random() * 10 - 5);
         dataPoints.push({
          x: i - limit / 2,
          y: y
           });
        }
     dataSeries.dataPoints = dataPoints;
     data.push(dataSeries);*/

	</script>
	<script src="canvasjs.min.js"></script>
	<title>CanvasJS Example</title>
	</div>
</body>
</html>