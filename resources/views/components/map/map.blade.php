<div id="{{$unidad}}" class="map map-big"></div>


@push('css')
<link href="{{ asset('material') }}/css/material-dashboard.min.css" rel="stylesheet" />
@endpush

@push('js')
  <script src="{{ asset('argon') }}/vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
  <script src="assets/jquery-jvectormap-{{$unidad}}-es-mx.js"></script>
<script>
    $(document).ready(function() {
      var nombres = {
        @foreach($subareas as $subarea)
          "{{$subarea->id}}":{nombre:"{{$subarea->nombre}}",area:"{{$subarea->area->nombre}}"},
        @endforeach
      }
      
      var map = new jvm.Map({
        container: $('#{{$unidad}}'),
        map: '{{$unidad}}',
        zoomOnScroll: false,
        backgroundColor: "#F8FAFC",
        series: {
          regions: [{
            values: {
              @foreach($subareas as $subarea)
                "{{$subarea->id}}":{{$subarea->area->id}},
              @endforeach
            },
            scale: {
              @foreach($areas as $area)
                "{{$area->id}}":"{{$area->color}}",
              @endforeach
            }
          }]
        },

        onMarkerTipShow: function(event, tip, index){
          tip.html(tip.html()+'');
        },
        onMarkerOver: function(event, index){
          console.log('marker-over', index);
        },
        onMarkerOut: function(event, index){
          console.log('marker-out', index);
        },
        onMarkerClick: function(event, index){
          console.log('marker-click', index);
        },
        onMarkerSelected: function(event, index, isSelected, selectedMarkers){
          console.log('marker-select', index, isSelected, selectedMarkers);
          if (window.localStorage) {
            window.localStorage.setItem(
              'jvectormap-selected-markers',
              JSON.stringify(selectedMarkers)
            );
          }
        },

        //Funcion de notas del área
        onRegionTipShow: function(event, tip, code){
          let element = nombres[code];
          tip.html(element.nombre+" ("+element.area+")");
        },
        //Función de accion del clic
        onRegionClick: function(event, code){
          console.log('region-click', code);
          
          location.replace('/subareas/'+code)
        },
        onViewportChange: function(e, scale, transX, transY){
            console.log('viewportChange', scale, transX, transY);
        }
      });

      $('.list-markers :checkbox').change(function(){
        var index = $(this).closest('li').attr('data-marker-index');

        if ($(this).prop('checked')) {
          map.addMarker( index, markers[index], [values3[index]] );
        } else {
          map.removeMarkers( [index] );
        }
      });
      $('.button-add-all').click(function(){
        $('.list-markers :checkbox').prop('checked', true);
        map.addMarkers(markers, [values3]);
      });
      $('.button-remove-all').click(function(){
        $('.list-markers :checkbox').prop('checked', false);
        map.removeAllMarkers();
      });
      $('.button-clear-selected-regions').click(function(){
        map.clearSelectedRegions();
      });
      $('.button-clear-selected-markers').click(function(){
        map.clearSelectedMarkers();
      });
      $('.button-remove-map').click(function(){
        map.remove();
      });
      $('.button-reset-map').click(function(){
        map.reset();
      });
    });
</script>
@endpush