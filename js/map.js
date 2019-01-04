var userLatLng, map, bounds, marker, myLatlng, infoWindow, noResults, allmarkers = [],
  currentInfoWindow = !1,
  myLocationMarker = [],
  bounds = new google.maps.LatLngBounds,
  jsonURL = 'https://storage.googleapis.com/infarm-backend-public/farm_info/farm_info.json', 
  initLatLng = {
    lat: 52.530643,
    lng: 13.383066
};
var mapResultsContainer = document.getElementById('map'),
  listResultsContainer = document.getElementById('mapList'),
  noResultsSuggestion = document.getElementById('noResults'),
  showAvailableCities = document.getElementById('showAvailableCities');
mapResultsButton = document.getElementById('showMapResults'), listResultsButton = document.getElementById('showListResults'), window.mobilecheck = function () {
  var b = !1;
  return function (d) {
    (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(d) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(d.substr(0, 4))) && (b = !0)
  }(navigator.userAgent || navigator.vendor || window.opera), b
};

function initMap() {
  map = new google.maps.Map(mapResultsContainer, {
    zoom: 12,
    center: initLatLng,
    styles: [{
      elementType: 'geometry',
      stylers: [{
        color: '#f5f5f5'
      }]
    }, {
      elementType: 'labels.icon',
      stylers: [{
        visibility: 'off'
      }]
    }, {
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#616161'
      }]
    }, {
      elementType: 'labels.text.stroke',
      stylers: [{
        color: '#f5f5f5'
      }]
    }, {
      featureType: 'administrative.land_parcel',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#bdbdbd'
      }]
    }, {
      featureType: 'poi',
      elementType: 'geometry',
      stylers: [{
        color: '#eeeeee'
      }]
    }, {
      featureType: 'poi',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#757575'
      }]
    }, {
      featureType: 'poi.park',
      elementType: 'geometry',
      stylers: [{
        color: '#e5e5e5'
      }]
    }, {
      featureType: 'poi.park',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#9e9e9e'
      }]
    }, {
      featureType: 'road',
      elementType: 'geometry',
      stylers: [{
        color: '#ffffff'
      }]
    }, {
      featureType: 'road.arterial',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#757575'
      }]
    }, {
      featureType: 'road.highway',
      elementType: 'geometry',
      stylers: [{
        color: '#dadada'
      }]
    }, {
      featureType: 'road.highway',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#616161'
      }]
    }, {
      featureType: 'road.local',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#9e9e9e'
      }]
    }, {
      featureType: 'transit.line',
      elementType: 'geometry',
      stylers: [{
        color: '#e5e5e5'
      }]
    }, {
      featureType: 'transit.station',
      elementType: 'geometry',
      stylers: [{
        color: '#eeeeee'
      }]
    }, {
      featureType: 'water',
      elementType: 'geometry',
      stylers: [{
        color: '#c9c9c9'
      }]
    }, {
      featureType: 'water',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#9e9e9e'
      }]
    }]
  }), initLocationList()
}
$loader = jQuery('.results-number'), 
  jQuery(document).on({
    ajaxStart: function () {
      $loader.addClass('loading')
  },
  ajaxStop: function () {
    $loader.removeClass('loading'), $loader.addClass('loaded')
  }
});

function initLocationList() {
  jQuery.ajax({
    url: jsonURL,
    dataType: 'json',
    type: "GET",
    success: function (b) {
      sortLocationList(b)
    },
    error: function () {
      console.log('initLocationList() json error')
    }
  })
}
var assignListener = function (b, d) {
  return function () {
    currentInfoWindow && currentInfoWindow.close(), currentInfoWindow = d, d.open(map, b)
  }
};

function sortLocationList(b) {
  for (var d in bounds = new google.maps.LatLngBounds, b.farms)
    if (b.farms.hasOwnProperty(d) && b.farms[d].coordinates) {
      var g, f = new google.maps.LatLng(b.farms[d].coordinates.lat, b.farms[d].coordinates.lng);
      marker = new google.maps.Marker({
        animation: google.maps.Animation.DROP,
        position: f,
        map: map,
        organization: b.farms[d].organization,
        category: b.farms[d].category,
        postcode: b.farms[d].postcode,
        address: b.farms[d].line_1,
        city: b.farms[d].city,
        country: b.farms[d].country,
        icon: '/wp-content/themes/infarm-child/images/map-marker-alt-75.svg'
      });
      var h = `${b.farms[d].organization}`;
      '[' == h.substr(4, 1) && (h = h.substr(5), h = h.substr(0, h.length - 1)), g = b.farms[d].line_1 ? `<span class="map-infopanel"><strong>${b.farms[d].category} </strong> 
              <h4> ${h} </h4> 
              <p>${b.farms[d].line_1} <br>${b.farms[d].postcode}, ${b.farms[d].city}, ${b.farms[d].country}</p>
              <h5 class="map-directions" data-coordinates="${f}" onclick="showMeDirection(this)">Directions</h5></span>
              ` : `<span class="map-infopanel"><strong>${b.farms[d].category} </strong> 
              <h4>${h} </h4> 
              <h5 class="map-directions" data-coordinates="${f}" onclick="showMeDirection(this)">Directions</h5></span>
              `, infoWindow = new google.maps.InfoWindow({
        content: g
      }), marker.addListener('click', assignListener(marker, infoWindow));
      var j = new google.maps.LatLng(b.farms[d].coordinates.lat, b.farms[d].coordinates.lng);
      bounds.extend(j), map.fitBounds(bounds), map.panToBounds(bounds), allmarkers.push(marker), showNumberOfResults()
    }
}

function setBoundsNow() {
  setBounds(map)
}

function setMapOnAll(b) {
  for (var d = 0; d < allmarkers.length; d++) allmarkers[d].setMap(b)
}

function clearMarkers() {
  setMapOnAll(null)
}

function showMarkers() {
  setMapOnAll(map)
}

function deleteMarkers() {
  clearMarkers(), markers = []
}
google.maps.event.addDomListener(window, 'load', initMap);
var inputAddress = document.getElementById('location-input');
inputAddress.addEventListener('keydown', function (b) {
  13 === b.keyCode && (b.preventDefault(), checkVariable())
}), autocomplete = new google.maps.places.Autocomplete(inputAddress);
var pac_input = document.getElementById('location-input');
(function (d) {
  function f(h, j) {
    if ('keydown' == h) {
      var k = j;
      j = function (l) {
        var m = document.querySelector('.pac-item-selected');
        if (13 == l.which && null === m) {
          var n = JSON.parse(JSON.stringify(l));
          n.which = 40, n.keyCode = 40, k.apply(d, [n])
        }
        k.apply(d, [l])
      }
    }
    g.apply(d, [h, j])
  }
  var g = d.addEventListener ? d.addEventListener : d.attachEvent;
  d.addEventListener ? d.addEventListener = f : d.attachEvent && (d.attachEvent = f)
})(pac_input);

function checkVariable() {
  autocomplete.getPlace() ? runAutocomplete() : setTimeout(checkVariable, 25)
}

function runAutocomplete() {
  if (!inputAddress.value) return !1;
  var b = autocomplete.getPlace();
  lat = b.geometry.location.lat(), lng = b.geometry.location.lng(), updateMap(lat, lng)
}

function getMyLocation(b) {
  b.preventDefault(), window.location.hash = '', document.getElementById('location-getMylocation').classList.add('active'), navigator.geolocation ? navigator.geolocation.getCurrentPosition(function (g) {
    document.getElementById('location-getMylocation').classList.remove('active'), updateMap(g.coords.latitude, g.coords.longitude), window.location.hash = 'location-getMylocation'
  }, function (g) {
    console.log('Error:' + g)
  }) : mylocation.innerHTML = 'Geolocation is not supported by this browser.'
}

function updateMap(b, d) {
  if (window.location.hash = '', 0 < myLocationMarker.length)
    for (var g = 0; g < myLocationMarker.length; g++) myLocationMarker[g].setMap(null);
  userLatLng = new google.maps.LatLng(b, d), map.setZoom(11), map.setCenter(userLatLng), myLocationMarker.push(new google.maps.Marker({
    position: userLatLng,
    map: map,
    icon: '/wp-content/themes/infarm-child/images/map-pin.svg'
  })), showNumberOfResults(), noResults || (showMapResults(), noResultsSuggestion.style.display = 'none'), window.location.hash = 'location-getMylocation'
}
changePlace = function (b, d) {
  if (null != d) {
    var f = document.getElementById('sel').options[d];
    f.selected = !0, b = f.value
  }
  'STORE' === b ? showNumberOfResults(b) : 'RESTAURANT' === b ? showNumberOfResults(b) : showNumberOfResults()
};

function showNumberOfResults(b) {
  var d = map.getBounds(),
    f = 0;
  listResultsContainer.innerHTML = '', deleteMarkers();
  for (var g = 0; g < allmarkers.length; g++)
    if (allmarkers[g].category === b) {
      allmarkers[g].setMap(map);
      var h = allmarkers[g],
        j = `${allmarkers[g].organization}`;
      '[' == j.substr(4, 1) && (j = j.substr(5), j = j.substr(0, j.length - 1)), listResultsContainer.innerHTML += `
            <div class="container-fluid info info-${g+1}">
                <div class="row">
                    <div><span>${allmarkers[g].category}</span></div>
                    <div class="col-1-of-4"><h4>${j}</h4></div>
                    <div class="col-2-of-4"><p>${allmarkers[g].address}, ${allmarkers[g].postcode}, ${allmarkers[g].city}, ${allmarkers[g].country}</p></div>
                    <div class="col-1-of-4"><h5 data-coordinates="${allmarkers[g].position}" onclick="showMeDirection(this)">Directions</h5></div>
                </div>
            </div>
              `, infoPanel = jQuery('.info-' + (g + 1)), !0 === d.contains(h.getPosition()) ? (infoPanel.show(), f++) : infoPanel.hide()
    } if (!b)
    for (var g = 0; g < allmarkers.length; g++) {
      allmarkers[g].setMap(map);
      var h = allmarkers[g],
        j = `${allmarkers[g].organization}`;
      '[' == j.substr(4, 1) && (j = j.substr(5), j = j.substr(0, j.length - 1)), listResultsContainer.innerHTML += `
          <div class="container-fluid info info-${g+1}">
              <div class="row">
                  <div><span>${allmarkers[g].category}</span></div>
                  <div class="col-1-of-4"><h4>${j}</h4></div>
                  <div class="col-2-of-4"><p>${allmarkers[g].address}, ${allmarkers[g].postcode}, ${allmarkers[g].city}, ${allmarkers[g].country}</p></div>
                  <div class="col-1-of-4"><h5 data-coordinates="${allmarkers[g].position}" onclick="showMeDirection(this)">Directions</h5></div>
              </div>
          </div>
            `, infoPanel = jQuery('.info-' + (g + 1)), !0 === d.contains(h.getPosition()) ? (infoPanel.show(), f++) : infoPanel.hide()
    }
  0 == f ? (showNoResultsMsg(f), noResults = !0) : noResults = !1, document.getElementById('results-number').innerHTML = f
}

function showNoResultsMsg() {
  for (var d in listResultsContainer.innerHTML = '', showAvailableCities.innerHTML = '', mapResultsContainer.style.display = 'none', noResultsSuggestion.style.display = 'block', uniqueCities = [...new Set(allmarkers.map(f => f.country))], uniqueCities) void 0 !== uniqueCities[d] && (showAvailableCities.innerHTML += `<span onclick="showSuggestedCity('${uniqueCities[d]}')">${uniqueCities[d]}<span> `)
}

function showSuggestedCity(b) {
  var f = new google.maps.Geocoder;
  f.geocode({
    address: b
  }, function (g, h) {
    if (h == google.maps.GeocoderStatus.OK) {
      var j = g[0].geometry.location.lat(),
        k = g[0].geometry.location.lng();
      updateMap(j, k), userLatLng = new google.maps.LatLng(j, k), map.setZoom(7), map.setCenter(userLatLng), myLocationMarker.push(new google.maps.Marker({
        position: userLatLng,
        map: map,
        icon: '/wp-content/themes/infarm-child/images/map-pin.svg'
      })), listResultsContainer.style.display = 'none', noResultsSuggestion.style.display = 'none', mapResultsContainer.style.display = 'block', showNumberOfResults()
    } else console.log('Something went wrong ' + h)
  })
}

function showListResults() {
  mapResultsContainer.style.display = 'none', mapResultsContainer.classList.remove('active'), listResultsContainer.style.display = 'block', listResultsContainer.classList.add('active'), listResultsButton.classList.add('active'), mapResultsButton.classList.remove('active')
}

function showMapResults() {
  listResultsContainer.style.display = 'none', listResultsContainer.classList.remove('active'), mapResultsContainer.style.display = 'block', mapResultsContainer.classList.add('active'), mapResultsButton.classList.add('active'), listResultsButton.classList.remove('active')
}

function showMeDirection(b) {
  var d = b.getAttribute('data-coordinates').replace(/[(\)]/g, '');
  window.open(`https://www.google.com/maps/dir/?api=1&destination=${d}`)
}