<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dropdowns 2: Multiple levels</title>
	<style>
		body {
			font: 15px arial, helvetica, sans-serif;
			background: #333;
			color: #fff;
		}
	
		a {
			color: #06c;
		}
	
		ul {
			padding: 0;
			margin: 0;
			background: #fff;
			float: left;
		}
	
		li {
			float: left;
			display: inline;
			position: relative;
			width: 150px;
			list-style: none;
		}
	
		ul ul {
			position: absolute;
			left: 0;
			top: 100%;
			background: #ccc;
			display: none;
		}
	
		ul ul ul {
			left: 100%;
			top: 0;
			background: #999;
		}
	
		li:hover > ul {
			display: block;
		}
	
	
		p {
			clear: left;
			padding-top: 1em;
		}
	</style>
</head>

<body>
	<nav>
		<ul>
			<li>
				<a href="">Mammals</a>
				<ul>
					<li>
						<a href="">Monotremes</a>
						<ul>
							<li><a href="">Echidnas</a></li>
							<li><a href="">Platypus</a></li>
						</ul>
					</li>
					<li>
						<a href="">Marsupials</a>
						<ul>
							<li><a href="">Opossums</a></li>
							<li><a href="">Numbats, etc.</a></li>
							<li><a href="">Bandicoots, etc.</a></li>
							<li><a href="">Kangaroos, koalas, wombats, etc.</a></li>
						</ul>
					</li>
					<li>
						<a href="">Placentals</a>
						<ul>
							<li><a href="">Primates, ungulates, etc.</a></li>
							<li><a href="">Anteaters, sloths, etc.</a></li>
							<li><a href="">Elephants, etc.</a></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
</body>
</html>