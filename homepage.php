<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hackathon</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/assets/strapless/styles/strapless.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
</head>
<body>

<!-- SVGs -->
<?php get_template_part( 'partials/material', 'svg' ); ?>

<!-- TOPNAV -->
<?php get_template_part( 'partials/material', 'topnav' ); ?>

<!-- HERO -->
<?php get_template_part( 'partials/material', 'hero' ); ?>

<!-- DATES -->
<?php get_template_part( 'partials/material', 'dates' ); ?>

<!-- LOCATION -->
<?php get_template_part( 'partials/material', 'location' ); ?>

<!-- STAY UPDATED -->
<?php get_template_part( 'partials/material', 'stayUpdated' ); ?>

<!-- FAQs -->
<!-- <?php get_template_part( 'partials/material', 'faqs' ); ?> -->

<!-- HOSTS & ORGANIZERS - SPECIAL THANKS -->
<?php get_template_part( 'partials/material', 'thanks' ); ?>

<!-- LOOKIT DIS CRAZY JS OMG! -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/assets/strapless/scripts/strapless.js"></script>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) {
		Strapless.init();
	});
</script>

<!-- particleground -->
<script src="http://jnicol.github.io/particleground/js/jquery.particleground.js"></script>
<!-- <script src="./src/assets/hackathon/scripts/jquery.particleground.js"></script> -->
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
	dotColor: '#5cbdaa',
	lineColor: '#5cbdaa',
	density: 20000
  });
  var intro = document.getElementById('intro');
  intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
}, false);
</script>

<!-- google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=&extension=.js"></script>
<script src="https://cdn.mapkit.io/v1/infobox.js"></script>
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet"> -->
<link href="https://cdn.mapkit.io/v1/infobox.css" rel="stylesheet" >
<script>
	google.maps.event.addDomListener(window, 'load', init);
	var map, markersArray = [];

	function bindInfoWindow(marker, map, location) {
		google.maps.event.addListener(marker, 'click', function() {
			function close(location) {
				location.ib.close();
				location.infoWindowVisible = false;
				location.ib = null;
			}

			if (location.infoWindowVisible === true) {
				close(location);
			} else {
				markersArray.forEach(function(loc, index){
					if (loc.ib && loc.ib !== null) {
						close(loc);
					}
				});

				var boxText = document.createElement('div');
				boxText.style.cssText = 'background: #fff;';
				boxText.classList.add('md-whiteframe-2dp');

				function buildPieces(location, el, part, icon) {
					if (location[part] === '') {
						return '';
					} else if (location.iw[part]) {
						switch(el){
							case 'photo':
								if (location.photo){
									return '<div class="iw-photo" style="background-image: url(' + location.photo + ');"></div>';
								 } else {
									return '';
								}
								break;
							case 'iw-toolbar':
								return '<div class="iw-toolbar"><h3 class="md-subhead">' + location.title + '</h3></div>';
								break;
							case 'div':
								switch(part){
									case 'email':
										return '<div class="iw-details"><i class="material-icons" style="color:#4285f4;"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><span><a href="mailto:' + location.email + '" target="_blank">' + location.email + '</a></span></div>';
										break;
									case 'web':
										return '<div class="iw-details"><i class="material-icons" style="color:#4285f4;"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><span><a href="' + location.web + '" target="_blank">' + location.web_formatted + '</a></span></div>';
										break;
									case 'desc':
										return '<label class="iw-desc" for="cb_details"><input type="checkbox" id="cb_details"/><h3 class="iw-x-details">Details</h3><i class="material-icons toggle-open-details"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><p class="iw-x-details">' + location.desc + '</p></label>';
										break;
									default:
										return '<div class="iw-details"><i class="material-icons"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><span>' + location[part] + '</span></div>';
									break;
								}
								break;
							case 'open_hours':
								var items = '';
								if (location.open_hours.length > 0){
									for (var i = 0; i < location.open_hours.length; ++i) {
										if (i !== 0){
											items += '<li><strong>' + location.open_hours[i].day + '</strong><strong>' + location.open_hours[i].hours +'</strong></li>';
										}
										var first = '<li><label for="cb_hours"><input type="checkbox" id="cb_hours"/><strong>' + location.open_hours[0].day + '</strong><strong>' + location.open_hours[0].hours +'</strong><i class="material-icons toggle-open-hours"><img src="//cdn.mapkit.io/v1/icons/keyboard_arrow_down.svg"/></i><ul>' + items + '</ul></label></li>';
									}
									return '<div class="iw-list"><i class="material-icons first-material-icons" style="color:#4285f4;"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><ul>' + first + '</ul></div>';
								 } else {
									return '';
								}
								break;
						 }
					} else {
						return '';
					}
				}

				boxText.innerHTML =
					buildPieces(location, 'photo', 'photo', '') +
					buildPieces(location, 'iw-toolbar', 'title', '') +
					buildPieces(location, 'div', 'address', 'location_on') +
					buildPieces(location, 'div', 'web', 'public') +
					buildPieces(location, 'div', 'email', 'email') +
					buildPieces(location, 'div', 'tel', 'phone') +
					buildPieces(location, 'div', 'int_tel', 'phone') +
					buildPieces(location, 'open_hours', 'open_hours', 'access_time') +
					buildPieces(location, 'div', 'desc', 'keyboard_arrow_down');

				var myOptions = {
					alignBottom: true,
					content: boxText,
					disableAutoPan: true,
					maxWidth: 0,
					pixelOffset: new google.maps.Size(-140, -40),
					zIndex: null,
					boxStyle: {
						opacity: 1,
						width: '280px'
					},
					closeBoxMargin: '0px 0px 0px 0px',
					infoBoxClearance: new google.maps.Size(1, 1),
					isHidden: false,
					pane: 'floatPane',
					enableEventPropagation: false
				};

				location.ib = new InfoBox(myOptions);
				location.ib.open(map, marker);
				location.infoWindowVisible = true;
			}
		});
	}

	function init() {
		var mapOptions = {
			center: new google.maps.LatLng(40.26214709131416,-76.88079966878662),
			zoom: 15,
			gestureHandling: 'auto',
			fullscreenControl: false,
			zoomControl: true,
			disableDoubleClickZoom: true,
			mapTypeControl: true,
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
			},
			scaleControl: false,
			scrollwheel: false,
			streetViewControl: false,
			draggable : true,
			clickableIcons: false,
			zoomControlOptions: {
				position: google.maps.ControlPosition.LEFT_TOP
			},
			mapTypeControlOptions: {
				position: google.maps.ControlPosition.TOP_LEFT
			},
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#004358"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#1f8a70"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#1f8a70"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#fd7400"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#1f8a70"},{"lightness":-20}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#1f8a70"},{"lightness":-17}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"visibility":"on"},{"weight":0.9}]},{"elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#1f8a70"},{"lightness":-10}]},{},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#1f8a70"},{"weight":0.7}]}]
		}
		var mapElement = document.getElementById('map4code4pa');
		var map = new google.maps.Map(mapElement, mapOptions);
		var locations = [
			{"title":"Harrisburg University of Science & Technology","address":"326 Market St, Harrisburg, PA 17101, USA","desc":"","tel":"(717) 901-5100","int_tel":"+1 717-901-5100","email":"","web":"","web_formatted":"","open":"","time":"","lat":40.26195060000001,"lng":-76.88032759999999,"vicinity":"326 Market Street, Harrisburg","open_hours":"","marker":{"url":"https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png","scaledSize":{"width":25,"height":42,"j":"px","f":"px"},"origin":{"x":0,"y":0},"anchor":{"x":12,"y":42}},"iw":{"address":true,"desc":true,"email":true,"enable":true,"int_tel":true,"open":true,"open_hours":true,"photo":true,"tel":true,"title":true,"web":true}},{"title":"Hilton Harrisburg","address":"1 N 2nd St, Harrisburg, PA 17101, USA","desc":"","tel":"(717) 233-6000","int_tel":"+1 717-233-6000","email":"","web":"","web_formatted":"","open":"","time":"1516","lat":40.260284,"lng":-76.88181099999997,"vicinity":"1 North 2nd Street, Harrisburg","open_hours":[{"day":"Monday","hours":"open24hours"},{"day":"Tuesday","hours":"open24hours"},{"day":"Wednesday","hours":"open24hours"},{"day":"Thursday","hours":"open24hours"},{"day":"Friday","hours":"open24hours"},{"day":"Saturday","hours":"open24hours"},{"day":"Sunday","hours":"open24hours"}],"marker":{"url":"https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png","scaledSize":{"width":25,"height":42,"j":"px","f":"px"},"origin":{"x":0,"y":0},"anchor":{"x":12,"y":42}},"iw":{"address":true,"desc":true,"email":true,"enable":true,"int_tel":true,"open":true,"open_hours":true,"photo":true,"tel":true,"title":true,"web":true}},{"title":"Commonwealth of Pennsylvania Capitol Complex","address":"501 N 3rd St, Harrisburg, PA 17120, United States","desc":"","tel":"","int_tel":"","email":"","web":"","web_formatted":"","open":"","time":"","lat":40.2642873,"lng":-76.8839587,"vicinity":"501 N 3rd St, Harrisburg, PA 17120, United States","open_hours":[],"marker":{"url":"https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png","scaledSize":{"width":25,"height":42,"j":"px","f":"px"},"origin":{"x":0,"y":0},"anchor":{"x":12,"y":42}},"iw":{"address":true,"desc":true,"email":true,"enable":true,"int_tel":true,"open":true,"open_hours":true,"photo":true,"tel":true,"title":true,"web":true}}
		];
		for (i = 0; i < locations.length; i++) {
			marker = new google.maps.Marker({
				icon: locations[i].marker,
				position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
				map: map,
				title: locations[i].title,
				address: locations[i].address,
				desc: locations[i].desc,
				tel: locations[i].tel,
				int_tel: locations[i].int_tel,
				vicinity: locations[i].vicinity,
				open: locations[i].open,
				open_hours: locations[i].open_hours,
				photo: locations[i].photo,
				time: locations[i].time,
				email: locations[i].email,
				web: locations[i].web,
				iw: locations[i].iw
			});
			markersArray.push(marker);

			if (locations[i].iw.enable === true){
				bindInfoWindow(marker, map, locations[i]);
			}
		}
		var shapes = [{"uuid":"6920beae-c850-e45a-cd37-e65f26f16a29","type":"circle","center":{"lat":40.261958327311056,"lng":-76.88028573885998},"radius":75.16017033259858,"strokeColor":"#fffafa","strokeOpacity":0.2,"strokeWeight":8,"fillColor":"#15397f","fillOpacity":0.5}];
		function checkAttr(shape, name){
			if (shape !== null && name !== null) {
				return shape[name];
			} else {
				switch(shape[name]) {
					case 'strokeColor':
						return '#000';
						break;
					case 'strokeOpacity':
						return 0.8;
						break;
					case 'strokeWeight':
						return 2;
						break;
					case 'fillColor':
						return '#000';
						break;
					case 'fillOpacity':
						return 0.35;
						break;
					default: null
				}
			}
		}
		for (var i = 0; i < shapes.length; ++i) {
			switch(shapes[i].type) {
				case 'polygon':
					var pathArray = [];
					shapes[i].path.forEach(function(shapePath){
						var latitude = shapePath[Object.keys(shapePath)[0]];
						var longitude = shapePath[Object.keys(shapePath)[1]];
						pathArray.push({
							lat: latitude,
							lng: longitude,
						});
					});
					var newShape = new google.maps.Polygon({
						path: pathArray,
						strokeColor: checkAttr(shapes[i], 'strokeColor'),
						strokeOpacity: checkAttr(shapes[i], 'strokeOpacity'),
						strokeWeight: checkAttr(shapes[i], 'strokeWeight'),
						fillColor: checkAttr(shapes[i], 'fillColor'),
						fillOpacity: checkAttr(shapes[i], 'fillOpacity'),
						uuid: shapes[i].uuid,
						type: shapes[i].type
					});
					break;
				case 'polyline':
					var pathArray = [];
					shapes[i].path.forEach(function(shapePath){
						var latitude = shapePath[Object.keys(shapePath)[0]];
						var longitude = shapePath[Object.keys(shapePath)[1]];
						pathArray.push({
							lat: latitude,
							lng: longitude,
						});
					});
					var newShape = new google.maps.Polyline({
						path: pathArray,
						strokeColor: checkAttr(shapes[i], 'strokeColor'),
						strokeOpacity: checkAttr(shapes[i], 'strokeOpacity'),
						strokeWeight: checkAttr(shapes[i], 'strokeWeight'),
						uuid: shapes[i].uuid,
						type: shapes[i].type
					});
					break;
				case 'circle':
					var latitude = shapes[i].center[Object.keys(shapes[i].center)[0]];
					var longitude = shapes[i].center[Object.keys(shapes[i].center)[1]];
					var pathArray = {
						lat: latitude,
						lng: longitude
					}
					var newShape = new google.maps.Circle({
						center: pathArray,
						radius: parseInt(shapes[i].radius),
						strokeColor: checkAttr(shapes[i], 'strokeColor'),
						strokeOpacity: checkAttr(shapes[i], 'strokeOpacity'),
						strokeWeight: checkAttr(shapes[i], 'strokeWeight'),
						fillColor: checkAttr(shapes[i], 'fillColor'),
						fillOpacity: checkAttr(shapes[i], 'fillOpacity'),
						uuid: shapes[i].uuid,
						type: shapes[i].type
					});
					break;
			}
			newShape.setMap(map);
		}
	}
</script>

</body>
</html>
