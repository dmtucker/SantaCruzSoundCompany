<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="David Tucker" />
	<meta name="google-site-verification" content="SpkhXW7kA98sFjWQa8r1NCD6Mi-yicH9wAkwom9x8wg" />
	
	<title>Santa Cruz Sound</title>
	<link rel="icon" href="favicon.ico" />
	<link rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/" />
	
	<link  type="text/css" rel="stylesheet" href="resources/skin.css"  media="all" title="default" />
	<link  type="text/css" rel="stylesheet" href="resources/style.css" media="all" title="default" />
	<style type="text/css">
	* {
		margin:  0;
		padding: 0;
	}
	html, body {
		height:100%; /* This is necessary for inheriting height by percentage. */
	}
	body {
		font-size: 100%; /* This allows the user the set the site scaling. */
	}
	</style>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js">/* the latest jQuery library */ </script>
	<!--script type="text/javascript" src="/resources/jquery.min.js">       /* a local backup of the jQuery library */ </script-->
	<script type="text/javascript" src="resources/animated-collapse.js">/* Animated Collapsible DIV v2.4- (c) Dynamic Drive DHTML code library */</script>
	<script type="text/javascript">
	function menu(that) {
		document.getElementById("history-toggle").style.color =
		document.getElementById("services-toggle").style.color =
		document.getElementById("contact-toggle").style.color =
		document.getElementById("directions-toggle").style.color = "#FFF";
		that.style.color="#06F";
	}
	$(document).ready(function () {
		document.getElementById("pane-toggle").style.display="block";
		
		/* Animated Collapse */
		<?php
		$toggler = array();
		if (isset($_GET["view"])) switch($_GET["view"]) {
			default:
			case "history":    array_push($toggler,0,1,1,1,"history-toggle");    break;
			case "services":   array_push($toggler,1,0,1,1,"services-toggle");   break;
			case "contact":    array_push($toggler,1,1,0,1,"contact-toggle");    break;
			case "directions": array_push($toggler,1,1,1,0,"directions-toggle"); break;
		}   else               array_push($toggler,0,1,1,1,"history-toggle");
		?>
		animatedcollapse.addDiv('history-pane',   'hide=<?php echo array_shift($toggler); ?>,fade=1,speed=500,group=panes');
		animatedcollapse.addDiv('services-pane',  'hide=<?php echo array_shift($toggler); ?>,fade=1,speed=500,group=panes');
		animatedcollapse.addDiv('contact-pane',   'hide=<?php echo array_shift($toggler); ?>,fade=1,speed=500,group=panes');
		animatedcollapse.addDiv('directions-pane','hide=<?php echo array_shift($toggler); ?>,fade=1,speed=500,group=panes');
		animatedcollapse.init();
		/**/
		
		menu(document.getElementById(<?php echo '"'.array_shift($toggler).'"'; ?>));
	});
	</script>
