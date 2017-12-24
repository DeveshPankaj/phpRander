<!DOCTYPE html>
<html>
<head>
	<title>{% TITLE %}</title>
	<link rel="stylesheet" type="text/css" href="{% CSS %}">
</head>
<body>
	<header>
		<div id="header_right">
			{% HEADER %}
		</div>
	</header>


	{% BODY %}

	<footer>
		<div id="footer_right">
			{% FOOTER %}
		</div>
	</footer>
</body>
</html>