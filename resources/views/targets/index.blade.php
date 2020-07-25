@extends('layouts.app')

@section('title', 'Requisitos de areas')

@section('content')
<div class="jumbotron">
  <h1 class="display-4">Tipos de área</h1>
  <p class="lead">Los tipos de área son en otras palabras las características de cada subárea. estos tipos tienen asignados un grupo o conjunto de preguntas para su evaluación basados en la normas.</p>
  <hr class="my-4">
  <p>En este apartado se podrá tener el control de las asignaciónes de tipos para todas las áreas la institución. Para asignar un tipo al área presione el sigiente botón o el botón <b>+</b> de cada área.</p>
  <a class="mb-3 btn btn-primary btn-lg" href="/targets/create" role="button">Asignar tipo a zona</a>
  
  <div class="row">
    <div class="col-3">
      <div class="list-group " id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Unidad Alarcón</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Unidad Santa Gertrudis</a>
      </div>
    </div>
    <div class="col-9">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><div id="worldMap" class="map map-big shadow-sm"></div></div>
        <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><div id="mapa" class="map map-big shadow-sm"></div></div>
      </div>
    </div>
  </div>
</div>

</div>
<div class="container">
@foreach($subareas as $subarea)
<div id="{{$subarea->id}}" class="col-md-12" style="display: none;">
<div class="col-md-12">
<h1>{{$subarea->nombre}}</h1>
</div>
<div class="card-deck">
  @foreach ($subarea->targets as $target)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-header">
      <h5 class="card-title"><a class="stretched-link" href="/targets/{{$target->id}}" >{{$target->questionnaire->tipo}}</a></h5>
    </div>
    <div class="card-body"> <!-- Texto primario -->
      <h6 class="card-subtitle mb-2 text-muted">Descripcion del requisito</h6>
      <p class="card-text">{{substr($target->questionnaire->descripcion, 0, 37)."..."}}</p>
    </div>
  </div>
  </div>
  @endforeach
</div>
<div class="col-md-12">
<a class="col-md-12 btn btn-light btn-lg" href="/targets/create/{{$subarea->id}}" role="button"><i class="fas fa-plus"></i></a>
</div>
</div>

@endforeach
</div>

@endsection

@push('js')
  <script src="assets/jquery-1.8.2.js"></script>
  <script src="jquery-jvectormap.js"></script>
  <script src="lib/jquery-mousewheel.js"></script>

  <script src="src/jvectormap.js"></script>

  <script src="src/abstract-element.js"></script>
  <script src="src/abstract-canvas-element.js"></script>
  <script src="src/abstract-shape-element.js"></script>

  <script src="src/svg-element.js"></script>
  <script src="src/svg-group-element.js"></script>
  <script src="src/svg-canvas-element.js"></script>
  <script src="src/svg-shape-element.js"></script>
  <script src="src/svg-path-element.js"></script>
  <script src="src/svg-circle-element.js"></script>
  <script src="src/svg-image-element.js"></script>
  <script src="src/svg-text-element.js"></script>

  <script src="src/vml-element.js"></script>
  <script src="src/vml-group-element.js"></script>
  <script src="src/vml-canvas-element.js"></script>
  <script src="src/vml-shape-element.js"></script>
  <script src="src/vml-path-element.js"></script>
  <script src="src/vml-circle-element.js"></script>
  <script src="src/vml-image-element.js"></script>

  <script src="src/map-object.js"></script>
  <script src="src/region.js"></script>
  <script src="src/marker.js"></script>

  <script src="src/vector-canvas.js"></script>
  <script src="src/simple-scale.js"></script>
  <script src="src/ordinal-scale.js"></script>
  <script src="src/numeric-scale.js"></script>
  <script src="src/color-scale.js"></script>
  <script src="src/legend.js"></script>
  <script src="src/data-series.js"></script>
  <script src="src/proj.js"></script>
  <script src="src/map.js"></script>
  <script src="assets/jquery-jvectormap-alarcon-es-mx.js"></script>
  <script src="assets/jquery-jvectormap-gertrudis-es-mx.js"></script>

<script>
    $(document).ready(function() {
      len = {{$subareas->count()}};
      var nombres = {
        @foreach($subareas as $subarea)
          "{{$subarea->id}}":{id:"{{$subarea->id}}", nombre:"{{$subarea->nombre}}",area:"{{$subarea->area->nombre}}"},
        @endforeach
      }

      let subarea = $("#"+nombres[1].id);
      subarea.show();

      var map = new jvm.Map({
        container: $('#worldMap'),
        map: 'alarcon',
        zoomOnScroll: false,
        backgroundColor: "#ffffff",
        //regionsSelectable: true,
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

        onRegionTipShow: function(event, tip, code){
          let element = nombres[code];
          tip.html(element.nombre+" ("+element.area+")");
        },
        onRegionClick: function(event, code){
          console.log('region-click', code);
          subarea.hide();
          subarea = $("#"+nombres[code].id);
          subarea.show();
          //location.replace("/targets/create/"+code)
        },
        onViewportChange: function(e, scale, transX, transY){
            console.log('viewportChange', scale, transX, transY);
        }
      });//
      
      var map2 = new jvm.Map({
        container: $('#mapa'),
        map: 'gertrudis',
        zoomOnScroll: false,
        backgroundColor: "#ffffff",
        //regionsSelectable: true,
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

        onRegionTipShow: function(event, tip, code){
          let element = nombres[code];
          tip.html(element.nombre+" ("+element.area+")");
        },
        onRegionClick: function(event, code){
          console.log('region-click', code);
          subarea.hide();
          subarea = $("#"+nombres[code].id);
          subarea.show();
          //location.replace("/targets/create/"+code)
        },
        onViewportChange: function(e, scale, transX, transY){
            console.log('viewportChange', scale, transX, transY);
        }
      });//

      $('#list-profile').removeClass("show active");
    });
</script>
@endpush