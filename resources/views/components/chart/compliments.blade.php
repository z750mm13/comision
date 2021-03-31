<div class="chart">
  <canvas id="compliments-chart" class="chart-canvas"></canvas>
</div>
@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
@push('postjs')
<script>
'use strict';
//
// Doughnut chart
//
var AdvanceChart = (function() {

	// Variables
	let problemas = [
		@for($i = 12; $i > 0; $i--)
		<?php
			$elemento = $problemas->pop();
		?>
		@if(isset($elemento)&&$elemento->mes == $i)
		{{$elemento->total}},
		@else
		<?php
		$problemas->push($elemento);
		?>
		0,
		@endif
		@endfor
	];
	problemas.reverse();
	
	let cumplimientos = [
		@for($i = 12; $i > 0; $i--)
		<?php
			$elemento = $cumplimientos->pop();
		?>
		@if(isset($elemento)&&$elemento->mes == $i)
		{{$elemento->total}},
		@else
		<?php
		$cumplimientos->push($elemento);
		?>
		0,
		@endif
		@endfor
	];
	cumplimientos.reverse();
	
	let meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septriembre', 'Octubre', 'Noviembre', 'Diciembre'];

	var $chart = $('#compliments-chart');
	// Methods
	function init($this) {
		// Chart data
		var data = {
			datasets: [{
            label: 'Problemas',
            data: problemas
        }, {
            label: 'Arreglo de problemas',
            data: cumplimientos,

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