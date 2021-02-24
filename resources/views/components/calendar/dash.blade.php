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
                url: '/validities/{{$validity->id}}',
                start: '{{$validity->inicio}}',
                end: '{{Carbon\Carbon::parse($validity->fin)->addDays(1)->toDateString()}}',
                className: 'bg-green'
            },
            @endforeach
            @foreach($calendar_tasks as $task)
            {
                title: 'Cumplimiento',
                url: '/tasks/{{$task->id}}',
                start: '{{$task->inicio}}',
                end: '{{Carbon\Carbon::parse($task->fin)->addDays(1)->toDateString()}}',
                className: 'bg-blue'
            },
            @endforeach
            @foreach($calendar_evaluations as $evaluation)
            {
                title: 'Matriz',
                url: '/evaluations/{{$evaluation->id}}',
                start: '{{$evaluation->inicio}}',
                end: '{{Carbon\Carbon::parse($evaluation->fin)->addDays(1)->toDateString()}}',
                className: 'bg-orange'
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