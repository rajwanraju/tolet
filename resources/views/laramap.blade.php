@extends('layouts.master')

@section('content')
@extends('frontEnd.master')
@section('title')

  To-Let Sheba

@endsection

@section('mainContent')
<div class="container text-center">
    
    <div id="map">
    </div>
    <br>
        {!! Form::open(['url'=>'/getLocationCoords','id'=>'search']) !!}

        {!! Form::label('SubArea','SubArea') !!}

         {{-- {!!Form::select('SubArea', $SubAreas,null,['id'=>'SubArea']) !!} --}}
        <select id="locationSelect" name="location" style="width: 150px">
        </select>
        <div id="city">
        </div>

        {!! Form::close() !!}
  </br>
  <br>
@foreach ($SubAreas as $SubArea)
  <input type="text" name="SubArea" value="{{$SubArea->SubArea}}">
  @endforeach

        <script src="https://maps.googleapis.com/maps/api/js"></script>
<input type="button" id="routebtn" value="route" />
<div id="map-canvas"></div>
        
    </br>
</div>





<script >


var myLatLng;
$(document).ready(function() {
    geoLocationInit();
});
    function geoLocationInit() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(success, fail);
        } else {
            alert("Browser not supported");
        }
    }

    function success(position) {
        console.log(position);
        var latval = position.coords.latitude;
        var lngval = position.coords.longitude;
        myLatLng = new google.maps.LatLng(latval, lngval);
        createMap(myLatLng);
        // nearbySearch(myLatLng, "school");
        //searchGirls(latval,lngval);
    }






 function mapLocation() {
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;

    function initialize() {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var location = mirpur 1


        var mapOptions = {
            zoom: 7,
            center: mirpur 1
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        directionsDisplay.setMap(map);
        google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);
    }

    function calcRoute() {
        var start = new google.maps.LatLng(38.334818, -181.814886);
        var end = new google.maps.LatLng(38.334818, -181.884886);
       // var end = mirpur 1;

        var bounds = new google.maps.LatLngBounds();
        bounds.extend(start);
        bounds.extend(end);
        map.fitBounds(bounds);
        var request = {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.DRIVING
        };
        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
                directionsDisplay.setMap(map);
            } else {
                alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}
mapLocation();
</script>










@endsection

@section('js')



<script>
    $(document).ready(function(){
        $('#locationSelect').select2({
            placeholder:"Select and Search",
            ajax:{
                url:"PostController@getLocation",
                type:"POST",
                dataType:"json",
                delay:250,
                data:function(params){
                    return{
                    locationVal:params.term,
                };
                },

                processResults:function(data){
                    return{
                        results:$.map(data.items,function(val,i){
                            return {id:i, text:val};
                        })
                    };
                }

            }


        });

        $('#locationSelect').on('select2:select',function(e){
                var val=$('#locationSelect').val();
        $.post('http://localhost/api/getLocationCoords',{val:val},function(match){

            var myLatLng = new google.maps.LatLng(match[0],match[1]);
            createMap(myLatLng);
            searchGirls(match[0],match[1]);
        });
        });
    });
</script>
@endsection
