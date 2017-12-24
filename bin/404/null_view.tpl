<!DOCTYPE html>
<html>
<head>
	<title>{% TITLE %}</title>
	<link rel="stylesheet" type="text/css" href="{% CSS %}">
</head>
<body>
	<header>
		<!-- <center> -->
			<form action="logout.php" method="post">
			<button type="submit" value="logout" >
				logout
			</button>
			</form>
			<div id="header_center">
				{% HEADER %}
			</div>
<!-- 		</center> -->
	</header>

	<content>
	<div id="left" class="left">
		[% PROFILE %]
	</div>

	<div id="center" class="center">
		[% FRIENDS %]
	</div>

	<div id="right" class="right">
		[% ONLINE %]
	</div>
	</content>

	<footer>
		<center>
			<div id="footer_center">
			{% FOOTER %}
			</div>
		</center>
	</footer>
</body>
</html>