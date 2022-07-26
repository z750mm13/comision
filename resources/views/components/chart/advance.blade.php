<div class="chart">
  <canvas id="advance-chart" class="chart-canvas"></canvas>
</div>
@push('postjs')
<script>
'use strict';
//
// Doughnut chart
//
var AdvanceChart = (function() {

	// Variables
	let avance = {{$totalrequisitos/100}}*({{ $goal? $goal->porcentaje : 0 }} );
	let saltos = avance/12;
	var $chart = $('#advance-chart');
	let avanceMensual = [];
	let cumplimientos= [
		@foreach($meses as $mes)
		{{($mes->cumplimientos??0)}},
		@endforeach
	];
	let meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septriembre', 'Octubre', 'Noviembre', 'Diciembre'];

	// Methods
	function init($this) {
		// Chart data
		avanceMensual.push(saltos);
		for(let i=1; i < 11; i++){
			avanceMensual.push(avanceMensual[i-1]+saltos);
		}
		avanceMensual.push(avance);
		var data = {
			datasets: [{
            label: 'Normas cumplidas',
            data: cumplimientos
        }, {
            label: 'Meta',
            data: avanceMensual,

            // Changes this dataset to become a line
            type: 'line'
        }],
        labels: meses
		};

		// Options
		var options = {
			tooltips: {
				mode: 'index',
				intersect: false
			},
			responsive: true,
			scales: {
				xAxes: [{
					stacked: true,
				}],
				yAxes: [{
					stacked: true
				}]
			}
		}

		// Init chart
		var barMixChart = new Chart($this, {
			type: 'bar',
			data: data,
			options: options
		});

		// Save to jQuery object
		$this.data('chart', barMixChart);

  };

	// Events
	if ($chart.length) {
		init($chart);
	}

})();
</script>
@endpush