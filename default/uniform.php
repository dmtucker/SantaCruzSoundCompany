</head>
<body>
	<div id="footer-adhesive">
		<header id="header">
			<img src="/resources/images/banner.png" alt="Santa Cruz Sound" />
			<nav id="pane-toggle">
				<ul>
					<li><a id="history-toggle"    onclick="menu(this);" href="javascript:animatedcollapse.show('history-pane');">History</a></li>
					<li><a id="services-toggle"   onclick="menu(this);" href="javascript:animatedcollapse.show('services-pane');">Services</a></li>
					<li><a id="contact-toggle"    onclick="menu(this);" href="javascript:animatedcollapse.show('contact-pane');">Contact</a></li>
					<li><a id="directions-toggle" onclick="menu(this);" href="javascript:animatedcollapse.show('directions-pane'); checkMap(map,mapMarker);">Directions</a></li>
				</ul>
			</nav>
			<div id="speaker-box">
				<?php for ($speakeri=0; $speakeri < 12; ++$speakeri) : ?><img src="/resources/images/speaker-tile.png" alt="" /><?php endfor; ?>
			</div>
		</header>
		<div id="content">
