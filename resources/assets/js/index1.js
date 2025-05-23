
import ApexCharts from 'apexcharts'


/* Peity charts */

export function index(myVarVal, hexToRgba) {
	'use strict'


	/*LIne-Chart */
	var ctx = document.getElementById("project").getContext('2d');
	var myChart = new Chart(ctx, {

		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Aug', 'Sep', 'Oct'],
			datasets: [{
				label: 'TOTAL BUDGET',
				data: [100, 210, 180, 454, 454, 230, 230, 656, 656, 350, 350, 210, 410],
				borderWidth: 3,
				backgroundColor: 'transparent',
				borderColor: myVarVal,
				pointBackgroundColor: '#ffffff',
				pointRadius: 0,
				type: 'line',
			},
			{

				label: 'AMOUNT USED',
				data: [200, 530, 110, 110, 480, 520, 780, 435, 475, 738, 454, 454, 230,],
				borderWidth: 3,
				backgroundColor: 'transparent',
				borderColor: 'rgb(183, 179, 220,0.5)',
				pointBackgroundColor: '#ffffff',
				pointRadius: 0,
				type: 'line',
				borderDash: [7, 3],

			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				enabled: true,
			},
			tooltips: {
				mode: 'index',
				intersect: false,
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#c8ccdb",
					},
					barPercentage: 0.7,
					display: true,
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)',
						zeroLineColor: 'rgba(119, 119, 142, 0.2)',
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#77778e",
					},
					display: true,
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)',
						zeroLineColor: 'rgba(119, 119, 142, 0.2)',
					},
					ticks: {
						min: 0,
						max: 1050,
						stepSize: 150
					},
					scaleLabel: {
						display: true,
						labelString: 'Thousands',
						fontColor: 'transparent'
					}
				}]
			},
			legend: {
				display: true,
				width: 30,
				height: 30,
				borderRadius: 50,
				labels: {
					fontColor: "#77778e"
				},
			},
		}
	});
}

export function barchart(myVarVal, hexToRgba) {
	'use strict'
	var ctx = document.getElementById('bar-chart').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
			datasets: [{
				label: 'Total Project',
				backgroundColor: myVarVal,
				borderColor: myVarVal,
				data: [89, 59, 76, 56, 58, 73, 59, 87, 45, 54, 59, 76, 56,],
			}, {
				label: 'On Going',
				backgroundColor: "rgba(204, 204, 204,0.2)",
				borderColor: "rgba(204, 204, 204,0.2)",
				data: [66, 59, 76, 56, 58, 65, 59, 85, 23, 32, 59, 76, 56,],
			}
			],
		},
		options: {
			tooltips: {
				displayColors: true,
			},
			barValueSpacing: 3,        // doesn't work; find another way
			barDatasetSpacing: 3,
			scales: {
				xAxes: [{
					barThickness: 3,
					categoryPercentage: 4,
					barPercentage: 4,
					stacked: true,
					display: false,
					gridLines: {
						display: false,
					}
				}],
				yAxes: [{
					stacked: true,
					ticks: {
						beginAtZero: false,
					},
					display: false,
					gridLines: {
						display: false,
					},
					type: 'linear',
					display: false,
				}]
			},
			responsive: true,
			maintainAspectRatio: false,
			legend: { position: 'bottom', display: false, },
		}
	});
}

export function forthcircle(myVarVal, hexToRgba) {
	'use strict'
  
	var c4 = $('.forth.circle');
  
	c4.circleProgress({
	  startAngle: -Math.PI / 2 * 9,
	  value: 0.5,
	  lineCap: 'round',
	  emptyFill: 'rgba(204, 204, 204,0.2)',
	  fill: { color: myVarVal },
	  lineCap: 'round'
	});
  
  
	setTimeout(function () { c4.circleProgress('value', 0.7); }, 1000);
	setTimeout(function () { c4.circleProgress('value', 1.0); }, 1100);
	setTimeout(function () { c4.circleProgress('value', 0.5); }, 2100);
  
}

export function btcchart(myVarVal, hexToRgba) {
	'use strict'
  
  
	window.Apex = {
	  chart: {
		foreColor: '#77778e',
		toolbar: {
		  show: false
		},
	  },
	  dataLabels: {
		enabled: false
	  },
	  tooltip: {
		theme: 'dark'
	  },
	  grid: {
		borderColor: "rgba(119, 119, 142, 0.2)",
		xaxis: {
		  lines: {
			show: true
		  }
		}
	  }
	};
  
	/* Apex (#candlestick) */
	var options = {
	  series: [{
		data: [{
		  x: new Date(1538778600000),
		  y: [6629.81, 6650.5, 6623.04, 6633.33]
		},
		{
		  x: new Date(1538780400000),
		  y: [6632.01, 6643.59, 6620, 6630.11]
		},
		{
		  x: new Date(1538782200000),
		  y: [6630.71, 6648.95, 6623.34, 6635.65]
		},
		{
		  x: new Date(1538784000000),
		  y: [6635.65, 6651, 6629.67, 6638.24]
		},
		{
		  x: new Date(1538785800000),
		  y: [6638.24, 6640, 6620, 6624.47]
		},
		{
		  x: new Date(1538787600000),
		  y: [6624.53, 6636.03, 6621.68, 6624.31]
		},
		{
		  x: new Date(1538789400000),
		  y: [6624.61, 6632.2, 6617, 6626.02]
		},
		{
		  x: new Date(1538791200000),
		  y: [6627, 6627.62, 6584.22, 6603.02]
		},
		{
		  x: new Date(1538793000000),
		  y: [6605, 6608.03, 6598.95, 6604.01]
		},
		{
		  x: new Date(1538794800000),
		  y: [6604.5, 6614.4, 6602.26, 6608.02]
		},
		{
		  x: new Date(1538796600000),
		  y: [6608.02, 6610.68, 6601.99, 6608.91]
		},
		{
		  x: new Date(1538798400000),
		  y: [6608.91, 6618.99, 6608.01, 6612]
		},
		{
		  x: new Date(1538800200000),
		  y: [6612, 6615.13, 6605.09, 6612]
		},
		{
		  x: new Date(1538802000000),
		  y: [6612, 6624.12, 6608.43, 6622.95]
		},
		{
		  x: new Date(1538803800000),
		  y: [6623.91, 6623.91, 6615, 6615.67]
		},
		{
		  x: new Date(1538805600000),
		  y: [6618.69, 6618.74, 6610, 6610.4]
		},
		{
		  x: new Date(1538807400000),
		  y: [6611, 6622.78, 6610.4, 6614.9]
		},
		{
		  x: new Date(1538809200000),
		  y: [6614.9, 6626.2, 6613.33, 6623.45]
		},
		{
		  x: new Date(1538811000000),
		  y: [6623.48, 6627, 6618.38, 6620.35]
		},
		{
		  x: new Date(1538812800000),
		  y: [6619.43, 6620.35, 6610.05, 6615.53]
		},
		{
		  x: new Date(1538814600000),
		  y: [6615.53, 6617.93, 6610, 6615.19]
		},
		{
		  x: new Date(1538816400000),
		  y: [6615.19, 6621.6, 6608.2, 6620]
		},
		{
		  x: new Date(1538818200000),
		  y: [6619.54, 6625.17, 6614.15, 6620]
		},
		{
		  x: new Date(1538820000000),
		  y: [6620.33, 6634.15, 6617.24, 6624.61]
		},
		{
		  x: new Date(1538821800000),
		  y: [6625.95, 6626, 6611.66, 6617.58]
		},
		{
		  x: new Date(1538823600000),
		  y: [6619, 6625.97, 6595.27, 6598.86]
		},
		{
		  x: new Date(1538825400000),
		  y: [6598.86, 6598.88, 6570, 6587.16]
		},
		{
		  x: new Date(1538827200000),
		  y: [6588.86, 6600, 6580, 6593.4]
		},
		{
		  x: new Date(1538829000000),
		  y: [6593.99, 6598.89, 6585, 6587.81]
		},
		{
		  x: new Date(1538830800000),
		  y: [6587.81, 6592.73, 6567.14, 6578]
		},
		{
		  x: new Date(1538832600000),
		  y: [6578.35, 6581.72, 6567.39, 6579]
		},
		{
		  x: new Date(1538834400000),
		  y: [6579.38, 6580.92, 6566.77, 6575.96]
		},
		{
		  x: new Date(1538836200000),
		  y: [6575.96, 6589, 6571.77, 6588.92]
		},
		{
		  x: new Date(1538838000000),
		  y: [6588.92, 6594, 6577.55, 6589.22]
		},
		{
		  x: new Date(1538839800000),
		  y: [6589.3, 6598.89, 6589.1, 6596.08]
		},
		{
		  x: new Date(1538841600000),
		  y: [6597.5, 6600, 6588.39, 6596.25]
		},
		{
		  x: new Date(1538843400000),
		  y: [6598.03, 6600, 6588.73, 6595.97]
		},
		{
		  x: new Date(1538845200000),
		  y: [6595.97, 6602.01, 6588.17, 6602]
		},
		{
		  x: new Date(1538847000000),
		  y: [6602, 6607, 6596.51, 6599.95]
		},
		{
		  x: new Date(1538848800000),
		  y: [6600.63, 6601.21, 6590.39, 6591.02]
		},
		{
		  x: new Date(1538850600000),
		  y: [6591.02, 6603.08, 6591, 6591]
		},
		{
		  x: new Date(1538852400000),
		  y: [6591, 6601.32, 6585, 6592]
		},
		{
		  x: new Date(1538854200000),
		  y: [6593.13, 6596.01, 6590, 6593.34]
		},
		{
		  x: new Date(1538856000000),
		  y: [6593.34, 6604.76, 6582.63, 6593.86]
		},
		{
		  x: new Date(1538857800000),
		  y: [6593.86, 6604.28, 6586.57, 6600.01]
		},
		{
		  x: new Date(1538859600000),
		  y: [6601.81, 6603.21, 6592.78, 6596.25]
		},
		{
		  x: new Date(1538861400000),
		  y: [6596.25, 6604.2, 6590, 6602.99]
		},
		{
		  x: new Date(1538863200000),
		  y: [6602.99, 6606, 6584.99, 6587.81]
		},
		{
		  x: new Date(1538865000000),
		  y: [6587.81, 6595, 6583.27, 6591.96]
		},
		{
		  x: new Date(1538866800000),
		  y: [6591.97, 6596.07, 6585, 6588.39]
		},
		{
		  x: new Date(1538868600000),
		  y: [6587.6, 6598.21, 6587.6, 6594.27]
		},
		{
		  x: new Date(1538870400000),
		  y: [6596.44, 6601, 6590, 6596.55]
		},
		{
		  x: new Date(1538872200000),
		  y: [6598.91, 6605, 6596.61, 6600.02]
		},
		{
		  x: new Date(1538874000000),
		  y: [6600.55, 6605, 6589.14, 6593.01]
		},
		{
		  x: new Date(1538875800000),
		  y: [6593.15, 6605, 6592, 6603.06]
		},
		{
		  x: new Date(1538877600000),
		  y: [6603.07, 6604.5, 6599.09, 6603.89]
		},
		{
		  x: new Date(1538879400000),
		  y: [6604.44, 6604.44, 6600, 6603.5]
		},
		{
		  x: new Date(1538881200000),
		  y: [6603.5, 6603.99, 6597.5, 6603.86]
		},
		{
		  x: new Date(1538883000000),
		  y: [6603.85, 6605, 6600, 6604.07]
		},
		{
		  x: new Date(1538884800000),
		  y: [6604.98, 6606, 6604.07, 6606]
		},
		]
	  }],
	  chart: {
		type: 'candlestick',
		height: 310
	  },
	  plotOptions: {
		candlestick: {
		  colors: {
			upward: myVarVal,
			downward: hexToRgba(myVarVal, 0.4)
		  }
		}
	  },
	  title: {
		align: 'left'
	  },
	  xaxis: {
		type: 'datetime'
	  },
	  yaxis: {
		tooltip: {
		  enabled: true
		}
	  }
	};
	document.querySelector('#btc_chart').innerHTML = ""
	var chart = new ApexCharts(document.querySelector("#btc_chart"), options);
	chart.render();
	/* Apex (#candlestick) closed */
  
}

export function cryptoChart2(myVarVal, hexToRgba) {
	'use strict'
  
	/* Chartjs (#cryptochart2) */
	var ctx = document.getElementById("cryptoChart2");
	ctx.height = "80";
	var myChart = new Chart(ctx, {
	  type: 'line',
	  data: {
		labels: ["1", "2", "3", "4", "5", "6", "7", "8"],
		type: 'line',
		datasets: [{
		  data: [83, 56, 85, 62, 75, 45, 86, 56],
		  label: 'Bitcon',
		  backgroundColor: 'transparent',
		  borderColor: myVarVal,
		  borderWidth: '4',
		  pointBorderColor: 'transparent',
		  pointBackgroundColor: 'transparent',
		}
		]
	  },
	  options: {
  
		maintainAspectRatio: false,
		legend: {
		  display: false
		},
		responsive: true,
		tooltips: {
		  mode: 'index',
		  titleFontSize: 12,
		  titleFontColor: '#7886a0',
		  bodyFontColor: '#7886a0',
		  backgroundColor: '#fff',
		  titleFontFamily: 'Montserrat',
		  bodyFontFamily: 'Montserrat',
		  cornerRadius: 3,
		  intersect: false,
		},
		scales: {
		  xAxes: [{
			gridLines: {
			  color: 'transparent',
			  zeroLineColor: 'transparent'
			},
			ticks: {
			  fontSize: 2,
			  fontColor: 'transparent'
			}
		  }],
		  yAxes: [{
			display: false,
			ticks: {
			  display: false,
			}
		  }]
		},
		title: {
		  display: false,
		},
		elements: {
		  line: {
			borderWidth: 1
		  },
		  point: {
			radius: 4,
			hitRadius: 10,
			hoverRadius: 4
		  }
		}
	  }
	});
	/* Chartjs (#cryptochart2) closed */
}

export function spark1(myVarVal, hexToRgba) {
	document.querySelector('#sparkline11').innerHTML = '3,4,4,7,5,9,10,6,4,4,7,5,9,10,8,7,5,9,10,6,9,4,7,5'
	$('#sparkline11').sparkline('html', {
	  width: 120,
	  height: 30,
	  lineColor: myVarVal,
	  fillColor: hexToRgba(myVarVal, 0.2)
	});
}
  
export function spark2(myVarVal, hexToRgba) {
	document.querySelector('#sparkline12').innerHTML = '3,6,6,7,4,8,10,4,6,8,3,5,6,9,2,2,5,8,10,6,8,4,6,4'
	$('#sparkline12').sparkline('html', {
	  width: 120,
	  height: 30,
	  lineColor: myVarVal,
	  fillColor: hexToRgba(myVarVal, 0.2)
	});
}
  
export function spark3(myVarVal, hexToRgba) {
	document.querySelector('#sparkline13').innerHTML = '3,4,4,7,5,9,10,6,4,4,7,5,9,10,8,7,5,9,10,6,9,4,7,5'
	$('#sparkline13').sparkline('html', {
	  width: 120,
	  height: 30,
	  lineColor: myVarVal,
	  fillColor: hexToRgba(myVarVal, 0.2)
	});
}
  
export function spark4(myVarVal, hexToRgba) {
	document.querySelector('#sparkline14').innerHTML = '3,4,4,7,5,9,10,6,4,4,7,5,9,10,8,7,5,9,10,6,9,4,7,5'
	$('#sparkline14').sparkline('html', {
	  width: 120,
	  height: 30,
	  lineColor: myVarVal,
	  fillColor: hexToRgba(myVarVal, 0.2)
	});
}

export function cryptodonut(myVarVal, hexToRgba) {
	/* Chartjs (#donut)  */
	if ($('#crypto-donut').length) {
	  var ctx = document.getElementById("crypto-donut").getContext("2d");
	  new Chart(ctx, {
		type: 'doughnut',
		data: {
		  labels: ["Bitcoin", 'Ethereum', 'Dash'],
		  datasets: [{
			data: [50, 30, 30],
			backgroundColor: [
			  myVarVal, hexToRgba(myVarVal, 0.6), hexToRgba(myVarVal, 0.4)
			],
			borderWidth: 0,
		  }]
		},
		options: {
		  responsive: true,
		  maintainAspectRatio: false,
		  legend: {
			display: false
		  },
		  cutoutPercentage: 73,
		},
  
	  });
	}
	/* Chartjs (#donut) closed */
}

export function revenuechart(myVarVal, hexToRgba) {
	/*LIne-Chart */
	var ctx = document.getElementById("revenuechart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',

		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
			datasets: [{
				label: 'Order',
				data: [30, 150, 65, 160, 70, 130, 70, 120],
				borderWidth: 3,
				backgroundColor: 'transparent',
				borderColor: 'rgba(183, 179, 220,0.5)',
				pointBackgroundColor: '#ffffff',
				pointRadius: 0,
				borderDash: [4, 3],
			},
			{
				label: 'Sale',
				data: [50, 90, 210, 90, 150, 75, 200, 70],
				borderWidth: 3,
				backgroundColor: 'transparent',
				borderColor: myVarVal,
				pointBackgroundColor: '#ffffff',
				pointRadius: 0,
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				enabled: true,
			},
			tooltips: {
				mode: 'index',
				intersect: false,
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#c8ccdb",
					},
					barPercentage: 0.7,
					display: true,
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)',
						zeroLineColor: 'rgba(119, 119, 142, 0.2)',
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#77778e",
					},
					display: true,
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)',
						zeroLineColor: 'rgba(119, 119, 142, 0.2)',
					},
					ticks: {
						min: 0,
						max: 250,
						stepSize: 50
					},
					scaleLabel: {
						display: true,
						labelString: 'Thousands',
						fontColor: 'transparent'
					}
				}]
			},
			legend: {
				display: true,
				width: 30,
				height: 30,
				borderRadius: 50,
				labels: {
					fontColor: "#77778e"
				},
			},
		}
	});
}

export function recentorders(myVarVal, hexToRgba) {
	/*--- Apex (#chart) ---*/
	var options = {
		chart: {
			height: 265,
			type: 'radialBar',
			offsetX: 0,
			offsetY: 0,
		},
		plotOptions: {
			radialBar: {
				startAngle: -135,
				endAngle: 135,
				size: 120,
				imageWidth: 50,
				imageHeight: 50,
				track: {
					strokeWidth: "80%",
					background: 'transparent',
				},
				dropShadow: {
					enabled: false,
					top: 0,
					left: 0,
					bottom: 0,
					blur: 3,
					opacity: 0.5
				},
				dataLabels: {
					name: {
						fontSize: '16px',
						color: undefined,
						offsetY: 30,
					},
					hollow: {
						size: "60%"
					},
					value: {
						offsetY: -10,
						fontSize: '22px',
						color: undefined,
						formatter: function (val) {
							return val + "%";
						}
					}
				}
			}
		},
		colors: [myVarVal],
		fill: {
			type: "gradient",
			gradient: {
				shade: "dark",
				type: "horizontal",
				shadeIntensity: .5,
				gradientToColors: [myVarVal],
				inverseColors: !0,
				opacityFrom: 1,
				opacityTo: 1,
				stops: [0, 100]
			}
		},
		stroke: {
			dashArray: 4
		},
		series: [83],
		labels: [""]
	};

  document.querySelector('#recentorders').innerHTML = ""
	var chart = new ApexCharts(document.querySelector("#recentorders"), options);
	chart.render();
	/*--- Apex (#chart)closed ---*/
}

export function vectormap(myVarVal, hexToRgba) {
	/*-- Jvector Map -- */
	document.querySelector('#world-map-markers').innerHTML = ""
	$('#world-map-markers').vectorMap({
		map: 'world_mill_en',
		scaleColors: [myVarVal, '#f0f0ff'],
		normalizeFunction: 'polynomial',
		hoverOpacity: 0.7,
		hoverColor: false,
		regionStyle: {
			initial: {
				fill: 'rgba(183, 179, 220,0.3)'
			}
		},
		markerStyle: {
			initial: {
				r: 6,
				'fill': myVarVal,
				'fill-opacity': 0.9,
				'stroke': '#fff',
				'stroke-width': 2.5,
			},

			hover: {
				'stroke': '#fff',
				'fill-opacity': 1,
				'stroke-width': 1.5
			}
		},
		backgroundColor: 'transparent',
		markers: [{
			latLng: [-23.533773, -46.625290],
			name: 'Brazil'
		}, {
			latLng: [55.751244, 37.618423],
			name: 'Russia'
		}, {
			latLng: [52.237049, 21.017532],
			name: 'Poland'
		}, {
			latLng: [51.213890, -110.005470],
			name: 'Canada'
		}, {
			latLng: [20.5937, 78.9629],
			name: 'India'
		}]
	});
	/*-- End Jvector Map -- */
}