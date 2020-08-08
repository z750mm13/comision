<div data-toggle="widget-calendar"></div>

@push('js')
  <script src="{{ asset('argon') }}/vendor/moment/min/moment.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/moment/locale/es.js"></script>
  <script src="{{ asset('argon') }}/vendor/fullcalendar/dist/fullcalendar.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/fullcalendar/dist/locale/es.js"></script>
  <script>
    $(document).ready(function() {
      if($('[data-toggle="widget-calendar"]')[0]) {
    $('[data-toggle="widget-calendar"]').fullCalendar({
				contentHeight: 'auto',
				lang: 'es',
        theme: false,
        buttonIcons: {
            prev: ' ni ni-bold-left',
            next: ' ni ni-bold-right'
        },
        header: {
            right: 'next',
            center: 'title, ',
            left: 'prev'
        },
        editable: true,
        events: [
            @foreach($calendar_validities as $validity)
            {
                title: 'Evaluación',
                start: '{{$validity->inicio}}',
                end: '{{Carbon\Carbon::parse($validity->fin)->addDays(1)->toDateString()}}',
                className: 'bg-green'
            },
            @endforeach
        ]
		});
		//Display Current Date as Calendar widget header
    var mYear = moment().format('YYYY');
    var mDay = moment().format('dddd, D MMM');
    $('.widget-calendar-year').html(mYear);
    $('.widget-calendar-day').html(mDay);
}
    });
  </script>
@endpush

@push('css')
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/fullcalendar/dist/fullcalendar.min.css">
@endpush