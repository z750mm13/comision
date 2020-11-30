<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

<div class="chart">
  <canvas id="chart-bar-stacked" class="chart-canvas"></canvas>
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
var BarStackedChart = (function() {

	// Variables

	var $chart = $('#chart-bar-stacked');


	// Methods

	function init($this) {
		// Chart data
		var data = {
			labels: [
        @foreach($validities as $validity)
        '{{Fecha::texto(Carbon::parse($validity->inicio))}}',
        @endforeach
      ],
			datasets: [{
				label: 'Poblemas',
				backgroundColor: Charts.colors.theme['danger'],
				data: [
					@foreach($validities as $validity)
          {{$validity->problemas}} - (({{$validity->compromisos}} - {{$validity->cumplimientos}}) + {{$validity->cumplimientos}}),
          @endforeach
				]
			}, {
				label: 'Compromisos',
				backgroundColor: Charts.colors.theme['warning'],
				data: [
					@foreach($validities as $validity)
          {{$validity->compromisos}} - {{$validity->cumplimientos}},
          @endforeach
				]
			}, {
				label: 'Cumplimientos',
				backgroundColor: Charts.colors.theme['primary'],
				data: [
					@foreach($validities as $validity)
          {{$validity->cumplimientos}},
          @endforeach
				]
			}]
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
		var barStackedChart = new Chart($this, {
			type: 'bar',
			data: data,
			options: options
		});

		// Save to jQuery object
		$this.data('chart', barStackedChart);

  };

	// Events
	if ($chart.length) {
		init($chart);
	}

})();
</script>
@endpush