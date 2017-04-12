/**
 * Created by khmai on 27/03/2017.
 */

/**
 * checkbox and date
 */
var test;

function calculePrix(distance) {
//distance id input distance
//price id input distance

    var prix =distance / 125 * 8 ;
var prixslider = document.getElementById("esprit_userbundle_annonce_prix");

    prixslider.value = prix ;
    alert("Nous avons calculé le meilleur prix par personne pour vous, vous pouvez le changer si vous le souhaitez");
}

$(document).ready(function () {
    /* document.getElementById('switch4').addEventListener('click', changeCrit4);
     document.getElementById('switch3').addEventListener('click', changeCrit3);
     document.getElementById('switch2').addEventListener('click', changeCrit2);
     document.getElementById('switch1').addEventListener('click', changeCrit1);*/
//esprit_userbundle_annonce_critere

    /*$(function () {
        $('#datetimepicker1').datetimepicker({
            autoclose: true,
            todayBtn: true,
            startDate: new Date(),
            minuteStep: 10
        });
    });*/
});

$(function () {
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
});

function testing() {
    test = '';
    changeCrit1();
    changeCrit2();
    changeCrit3();
    changeCrit4();

    document.getElementById('esprit_userbundle_annonce_critere').value = test;

}
function changeCrit4() {

    if( document.getElementById('switch4').checked){
        test += ';music';

    }else test += ';nomusic';
}
function changeCrit3() {
    if( document.getElementById('switch3').checked){
        test += ';animal';
    }else test += ';noanimal';
}
function changeCrit2() {
    if( document.getElementById('switch2').checked){
        test += ';smoking';
    }else test += ';nosmoking';
}
function changeCrit1() {
    if( document.getElementById('switch1').checked){
        test += ';fun_talking';
    }else test += ';littletalking';
}
$(document).ready(function() {
    $('select').material_select();
});

/* $(".form_datetime").datetimepicker({
 format: "dd MM yyyy - hh:ii",
 autoclose: true,
 todayBtn: true,
 startDate: "2013-02-14 10:00",
 minuteStep: 10
 });*/
/*  var slider = document.getElementById('nbrPersonne');
 noUiSlider.create(slider, {
 start: [20, 80],
 step: 1,
 default: 1,
 range: {
 'min': 0,
 'max': 4
 },
 format: wNumb({
 decimals: 0
 })
 });
 $('.timepicker').pickatime({

 });
 $('.datepicker').pickadate({
 // Creates a dropdown of current and next date
 selectTime: true,
 min: new Date()
 });*/
/////////////////////

/**
 *map code
 **/

// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        mapTypeControl: false,
        center: {lat: 35.6253169, lng: 10.5415953},


        zoom: 6
    });
    if(document.getElementById('esprit_userbundle_annonce_lieuArrive').value!= "" || document.getElementById('esprit_userbundle_annonce_lieuDepart').value!= "") {
        {
            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;
            directionsDisplay.setMap(map);

            var from = document.getElementById('esprit_userbundle_annonce_lieuDepart').value;
            var to = document.getElementById('esprit_userbundle_annonce_lieuArrive').value;
            directionsService.route({
                origin: from,
                destination: to,
                travelMode: 'DRIVING'
            }, function(response, status) {
                if (status === 'OK') {
                    directionsDisplay.setDirections(response);

                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }
    }
   else new AutocompleteDirectionsHandler(map);



}



/**
 * @constructor
 */
function AutocompleteDirectionsHandler(map) {
    this.map = map;
     this.originPlaceId = null;
    this.destinationPlaceId = null;
    this.travelMode = 'DRIVING';
    var originInput = document.getElementById('esprit_userbundle_annonce_lieuDepart');

    var destinationInput = document.getElementById('esprit_userbundle_annonce_lieuArrive');
    var modeSelector = document.getElementById('mode-selector');
    this.directionsService = new google.maps.DirectionsService;
    this.directionsDisplay = new google.maps.DirectionsRenderer;
    this.directionsDisplay.setMap(map);


    var originAutocomplete = new google.maps.places.Autocomplete(
        originInput, {placeIdOnly: true});
    var destinationAutocomplete = new google.maps.places.Autocomplete(
        destinationInput, {placeIdOnly: true});



    this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
    this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');


}





AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
    var me = this;
    autocomplete.bindTo('bounds', this.map);
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        if (!place.place_id) {
            window.alert("Please select an option from the dropdown list.");
            return;
        }
        if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;

        } else {
            me.destinationPlaceId = place.place_id;
        }
        me.route();
    });

};

AutocompleteDirectionsHandler.prototype.route = function() {



    if (!this.originPlaceId || !this.destinationPlaceId) {
        return;


        var me = this;

        this.directionsService.route({
            origin: {'placeId': this.originPlaceId},
            destination: {'placeId': this.destinationPlaceId},
            travelMode: this.travelMode
        }, function(response, status) {
            if (status === 'OK') {
                me.directionsDisplay.setDirections(response);

                document.getElementById('esprit_userbundle_annonce_distance').value =
                    response.routes[0].legs[0].distance.value/1000 + " Km";
                calculePrix(response.routes[0].legs[0].distance.value/1000);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }
    var me = this;

    this.directionsService.route({
        origin: {'placeId': this.originPlaceId},
        destination: {'placeId': this.destinationPlaceId},
        travelMode: this.travelMode
    }, function(response, status) {
        if (status === 'OK') {
            me.directionsDisplay.setDirections(response);

            document.getElementById('esprit_userbundle_annonce_distance').value =
                response.routes[0].legs[0].distance.value/1000 + " Km";
            calculePrix(response.routes[0].legs[0].distance.value/1000);

        } else {
            window.alert('Directions request failed due to ' + status);
        }
    });
};
