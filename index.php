<?php
	require_once "default/initial.php";
	include_once "default/doctype.php";
?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDEDQqo158NkRSDcsC3NxiOvP6xbKSE3Dg&amp;sensor=false">/* Google Maps API */</script>
<script type="text/javascript">
function checkMap (map, mapMarker) {
	google.maps.event.trigger(map, "resize");
	map.panTo(mapMarker.getPosition());
}
</script>
<?php include "default/uniform.php"; ?>
<div class="panes" id="history-pane">
	<article id="history">
		<img src="resources/images/shop.png" alt="shop" />
		<div id="hgroup">
			<h1 class="titles">The Birth of the Sound</h1>
			<h3>Established in 1971</h3>
		</div>
		<p>
			Santa Cruz Sound Company was started in the early 1970's with two partners, Charles Plate and John Bellamy.
			Together, they designed and built many custom speaker enclosures known for great sound and durability.
			Over forty years later and going strong as a family business, we remain here in Santa Cruz providing quality sound systems for sale, casual rentals, and concerts.
			We also do repairs.
			And in the spirit of Chuck and John, we will always tell it like it is.
			If we don't have the answer will try to find it for our customers.
		</p>
	</article>
</div>
<div class="panes" id="services-pane">
	<article id="services">
		<img src="resources/images/speakers.png" alt="speakers" />
		<h1 class="titles">Services</h1>
		<h3 class="lh">We provide:</h3>
		<ul>
			<li>Professional sound system rentals, sales, and repairs</li>
			<li>Microphones and accessories</li>
			<li>Guitar and bass amplifier repair</li>
			<li>Wire and cabling for most sound system connections</li>
			<li>Speaker reconing and repair</li>
			<li>Amplifier and mixer repair</li>
			<li>DJ system sales and rentals</li>
		</ul>
	</article>
</div>
<div class="panes" id="contact-pane">
	<article id="contact">
		<address>
			<strong>950 B 41st Ave. Santa Cruz, Ca. 95062</strong><br />
			(831) 475-0768<br />
			<a href="mailto:santacruzsound@gmail.com">santacruzsound@gmail.com</a>
		</address>
		<aside id="hours">
			<p>
				Tuesday-Saturday<br />
				11:00am-1:00pm<br />
				or by Appointment
			</p>
		</aside>
	</article>
</div>
<div class="panes" id="directions-pane">
	<article id="directions">
		<figure id="map">
			<script type="text/javascript">
			var figure    = document.getElementById("map");
			var mapCanvas = document.createElement("div");
			mapCanvas.id  = "google-map";
			figure.insertBefore(mapCanvas, figure.childNodes[0]);
			
			var map = new google.maps.Map(mapCanvas, {
				center: new google.maps.LatLng(36.975000,-121.976500),
				zoom: 15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});
			var mapMarker = new google.maps.Marker({
				position: new google.maps.LatLng(36.965475,-121.964787),
				map: map,
				title: "Santa Cruz Sound Co."
			});
			var mapInfoWindow = new google.maps.InfoWindow({
				content: "<?php 
					?><div id='map-info'><?php
						?><strong>Santa Cruz Sound Co.</strong><?php
						?><address>950 B 41st Ave. Santa Cruz, Ca. 95062</address><?php
						?><footer><?php
							?><a href='http://maps.google.com/maps?source=uds&q=Santa%20Cruz%20Sound%20Co.%20950%20B%2041st%20Ave.%20Santa%20Cruz%2C%20CA.%2095062'>Google Maps</a><?php
							?><span>&bull;</span><?php
							?><a href='http://maps.google.com/maps/place?hl=en&georestrict=input_srcid:7590e4ed5062d0e4'>Google Places</a><?php
						?></footer><?php
					?></div><?php
				?>"
			});
			google.maps.event.addListener(mapMarker, "click", function() {
				mapInfoWindow.open(map,mapMarker);
			});
			checkMap(map, mapMarker);
			</script>
			<noscript>
				<img id="noscript-map" src="resources/images/map.png" alt="map" />
			</noscript>
			<figcaption>
				<a href="http://www.google.com/uds/modules/elements/mapselement/iframe.html?maptype=roadmap&amp;latlng=36.965475%2C-121.964787&amp;mlatlng=36.965475%2C-121.964787&amp;maddress1=950%2041st%20Ave&amp;maddress2=Santa%20Cruz%2C%20CA%2095062&amp;zoom=15&amp;mtitle=Santa%20Cruz%20Sound%20Co.&amp;element=true">Enlarge</a>
			</figcaption>
		</figure>
		<h1 class="titles">Directions</h1>
		<h3 class="lh">From CA-17 S</h3>
		<ul>
			<li>Merge onto CA-1 S/State Route 1 S via the ramp to Watsonville/Monterey</li>
			<li>Continue 3.3 mi</li>
			<li>Take exit 438 for 41st Ave.</li>
			<li>After 0.2 mi, turn right onto 41st Ave.</li>
			<li>Turn left onto <mark>Bain St.</mark> just after Betty Burgers</li>
			<li>Destination will be immediately on the right!</li>
		</ul>
		<h3 class="lh">From CA-1 N/Cabrillo Highway</h3>
		<ul>
			<li>Take exit 438 for 41st Ave toward Capitola</li>
			<li>After 0.2 mi, turn left onto 41st Ave.</li>
			<li>Turn left onto <mark>Bain St.</mark> just after Betty Burgers</li>
			<li>Destination will be immediately on the right!</li>
		</ul>
	</article>
</div>
<?php include "default/wrapper.php"; ?>
