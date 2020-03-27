			const appendChild = Element.prototype.appendChild;
			const urlCatchers = [
				"/AuthenticationService.Authenticate?",
				"/QuotaService.RecordEvent?"
			];
	
			Element.prototype.appendChild = function (element) {
				const isGMapScript = element.tagName === 'SCRIPT' && /maps\.googleapis\.com/i.test(element.src);
				const isGMapAccessScript = isGMapScript && urlCatchers.some(url => element.src.includes(url));
		
				if (!isGMapAccessScript) {
					return appendChild.call(this, element);
				}
		
				return element;
			};
	
			var map, cities;
			var cities = [
				[01, 'Москва', 55.64, 37.6174943],
				[02, 'Минск', 53.8, 27.55645752],
				[03, 'Варшава, Польша', 52.1, 21.0067265],
				[04, 'Киев', 50.3, 30.55],
				[05, 'Нур-Султан', 51, 71.43885952],
			];
	
			function initMap(){
				var map = new google.maps.Map(document.getElementById('map'), {
					center: {lat: 55.5472807, lng: 42.1270752},
					zoom: 5,
					zoomControl: false,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					rotateControl: false,
					fullscreenControl: false,
					scrollwheel: true,
                    styles: [{
						"featureType": "all",
						"elementType": "labels.text.fill",
						"stylers": [{
							"saturation": 36
						},{
							"color": "#000000"
						},{
							"lightness": 0
						}]
					},{
						"featureType": "all",
						"elementType": "labels.text.stroke",
						"stylers": [{
							"visibility": "on"
						},{
							"color": "#ffffff"
						},{
							"lightness": 16
						}]
					},/*{
						"featureType": "all",
						"elementType": "labels.icon",
						"stylers": [{
							"visibility": "off"
						}]
					},*/{
						"featureType": "administrative",
						"elementType": "geometry.fill",
						"stylers": [{
							"color": "#ffffff"
						},{
							"lightness": 20
						}]
					},{
						"featureType": "administrative",
						"elementType": "geometry.stroke",
						"stylers": [{
							"color": "#9c9c9c"
						},{
							"lightness": 17
						},{
							"weight": 1.2
						}]
					},{
						"featureType": "landscape",
						"elementType": "geometry",
						"stylers": [{
							"color": "#e1e1e1"
						},{
							"lightness": 0
						}]
					},{
						"featureType": "landscape.man_made",
						"elementType": "geometry",
						"stylers": [{
							"color": "#e6e6e6"
						}]
					},{
						"featureType": "poi",
						"elementType": "geometry",
						"stylers": [{
							"color": "#f5f5f5"
						},{
							"lightness": 21
						}]
					},{
						"featureType": "poi.park",
						"elementType": "geometry",
						"stylers": [{
							"color": "#dadada"
						}]
					},{
						"featureType": "road",
						"elementType": "all",
						"stylers": [{
							"visibility": "off"
						}]
					},{
						"featureType": "water",
						"elementType": "geometry",
						"stylers": [{
							"color": "#d0d0d0"
						},{
							"lightness": 0
						}]
					}]
				});
		
				function placeMarker(city){
					var marker = new RichMarker({
						map: map,
						position: new google.maps.LatLng(city[2], city[3]),
						anchor: RichMarkerPosition.BOTTOM_LEFT,
						draggable: false,
						flat: true,
						content: '<div class="marker">&nbsp;</div>',
						zIndex: 1,
					});
					google.maps.event.addListener(marker, 'mouseover', function(){
						this.setOptions({zIndex:10});
					});
					google.maps.event.addListener(marker, 'mouseout', function() {
						this.setOptions({zIndex:1});
					});
				}
				for(var i=0; i<cities.length; i++){
					placeMarker(cities[i]);
				}
			}
			google.maps.event.addDomListener(window, 'load', initMap);