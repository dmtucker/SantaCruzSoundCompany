</head>
<body>
<div id="window">
	<table id="main">
		<thead>
			<tr>
				<td colspan="4"><a href="index.php"><img src="resources/images/banner.png" height="76" width="1024" alt="Santa Cruz Sound" /></a></td>
			</tr>
			<tr id="menu">
				<td><h1><a href="index.php#history">History</a></h1></td>
				<td><h1><a href="index.php#services">Services</a></h1></td>
				<td><h1><a href="index.php#contact">Contact Us</a></h1></td>
				<td><h1><a href="index.php#directions">Directions</a></h1></td>
			</tr>
			<tr>
				<td colspan="4" style="text-align:center;">
					<?php for ($i=0; $i < 12; $i++) : ?><img src="resources/images/speaker-tile.png" alt="Speaker Tile" height="85" width="85" /><?php endfor; ?>
				</td>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="4" id="footer">
					<hr style="margin-top:20px; border:3px solid #FFF;" />
					&copy;2011-<?php echo date("Y"); ?> Santa Cruz Sound. All rights reserved.<br />
					<br/>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td colspan="4" id="content">