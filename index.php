<?php error_reporting(0); ?>
<!DOCTYPE html>
<html class="loadingPage">
<head>
	<title>Custodia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		/*
		COLOURS Light / Dark
		GREEN
		#39e47e = rgb(57, 228, 126)
		#207f46 = rgb(32, 127, 70)

		ORANGE
		#e49939 = rgb(228, 153, 57)
		#7f4c20

		RED
		#e43939 = rgb(228, 57, 57)
		#7f2020

		PURPLE
		#8839e4 = rgb(136, 57, 228)
		#44207f
		*/
		/*--- Main ---*/

		.loadingPage body{
			opacity: 0;
		}

		.loadingPage{
			height: 100%;
		    overflow-y: hidden;
			background-color: white;
		}

		.pageLoaded body{
			opacity: 1;
			overflow-y: show;
			-webkit-transition: all 0.8s ease;
			-moz-transition: 	all 0.8s ease;
			-ms-transition: 	all 0.8s ease;
			-o-transition: 		all 0.8s ease;
			transition: 		all 0.8s ease;
		}

		*{
			padding: 0;
			margin: 0;
			font-family: Verdana, Geneva, sans-serif;
			color: black;
			-webkit-touch-callout: none;
			  -webkit-user-select: none;
			   -khtml-user-select: none;
			     -moz-user-select: none;
			      -ms-user-select: none;
			          user-select: none;
		}

		a{
		}

		a:hover{
			text-decoration: none;
		}

		header{
			margin: 2em 0 0 0;
			display: flex;
			justify-content: center;
			width: 100%;
		}

		.mobHeader{
			display: none;
		}

		.typewriter h1{
			font-size: 4em;
			text-align: center;
			font-weight: bold;
			overflow: hidden;
			border-right: .12em solid #39e47e;
			white-space: nowrap;
			margin: 0 auto;
			letter-spacing: .15em;
			line-height: 1em;
			animation: 
				typing 2s steps(30, end),
				cursor .8s step-end infinite;
		}

		main{
			margin: 5em 0;
		}

		.webGallery{
			display: flex;
			justify-content: space-between;
			flex-wrap: wrap;
		}

		.webCard{
			width: 20rem;
			border: 2px solid black;
			margin: 1em;
			-webkit-transition: all 0.2s ease;
			-moz-transition: 	all 0.2s ease;
			-ms-transition: 	all 0.2s ease;
			-o-transition: 		all 0.2s ease;
			transition: 		all 0.2s ease;
		}

		.webCard:hover{
			background-color: #39e47e;
		}

		.webCard p{
			font-size: 2em;
			text-align: center;
			padding: 1em 0;
			margin: 0;
		}

		/* Animation */

		@keyframes typing {
			from { width: 0 }
			to { width: 100% }
		}

		@keyframes cursor {
			from, to { border-color: transparent }
			50% { border-color: #39e47e }
		}

		/* Media query */

		@media only screen and (max-width: 575.98px) {

			.webGallery{
				display: flex;
				justify-content: center;
			}			

			.webCard{
				margin: 1em 0;
			}

			.typewriter h1{
				font-size: 3em;
			}

			.mobHeader{
				display: block;
			}

			.pcHeader{
				display: none;
			}
		}
	</style>
	<script type="text/javascript">

		function loaded(){
			document.documentElement.className = "pageLoaded";
		}
	</script>
</head>
<body onload="loaded()">
	<header>
		<div class="typewriter">
			<h1 class="mobHeader">Welcome<br>To<br>Custodia</h1>
			<h1 class="pcHeader">Welcome To Custodia</h1>
		</div>
	</header>
	<main>
		<div class="webGallery">
			<?php
				$ignoreList = array(
					"index.php",
					"Passwords",
					"josh",
					"error.php",
					"pika.png",
					"__devnull"
				);

				$root = __DIR__;
				foreach (glob($root.'/*') as $file) {
				    $file = realpath($file);
				    $link = substr($file, strlen($root) + 1);
					if (!(in_array($link, $ignoreList))) {
						echo '<a href="'.urlencode($link).'/"><div class="webCard"><p>'.basename($file).'</p></div></a>';
					}
				}
			?>
		</div>
	</main>

</body>
</html>