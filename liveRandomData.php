<!DOCTYPE HTML>
<html>
hiiii
<head>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
	window.onload = function () {

		var dps = []; // dataPoints

		var chart = new CanvasJS.Chart("chartContainer",{
			title :{
				text: "Live Random Data Jaaa"
			},
			data: [{
				type: "line",
				dataPoints: dps
			}]
		});

		var xVal = 0;
		var yVal = 100;
		var updateInterval = 100;
		var dataLength = 500; // number of dataPoints visible at any point

		var updateChart = function (count) {
			count = count || 1;
			// count is number of times loop runs to generate random dataPoints.

			for (var j = 0; j < count; j++) {
				yVal = yVal +  Math.round(5 + Math.random() *(-5-5));
				dps.push({
					x: xVal,
					y: yVal
				});
				xVal++;
			};
			if (dps.length > dataLength)
			{
				dps.shift();
			}

			chart.render();

		};

		// generates first set of dataPoints
		updateChart(dataLength);

		// update chart after specified time.
		setInterval(function(){updateChart()}, updateInterval);

	}
	</script>
	<script type="text/javascript" src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
	<div id="chartContainer" style="height: 300px; width:100%;">
	</div>
</body>
</html>
