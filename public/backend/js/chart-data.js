
	// console.log(chart);
	// Object.keys(chart).forEach(function(key) {
	// 	console.log(key);
	//   });
	var keys = Object.keys(chart);
	var keyArray = Array.from(keys);

	var keys = Object.keys(chart);
	var values = keys.map(function(key) {
		return chart[key];
	});
	// console.log(values);
	var lineChartData = {
			labels : keyArray,
			datasets : [
			
				{
					label: "My Second dataset",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : values
				}
			]

		}
		


			


window.onload = function(){
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true
	});
	// var chart2 = document.getElementById("bar-chart").getContext("2d");
	// window.myBar = new Chart(chart2).Bar(barChartData, {
	// 	responsive : true
	// });
	// var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	// window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {responsive : true
	// });
	// var chart4 = document.getElementById("pie-chart").getContext("2d");
	// window.myPie = new Chart(chart4).Pie(pieData, {responsive : true
	// });
	
};