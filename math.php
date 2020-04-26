<html>
	<head>
		<title>joburrell.com</title>
       <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
	</head>

	<body>
    <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Welcome to joburrell.com!</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="wp1.html">Webpage 1</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
          </ul>
        </div>
      </nav>
		<h3>Let's do some math!</h3>
            
        <form action="compute.php" method="POST">
            <label for="sr">Square Root This Number!</label>
            <br>
            <input type="text" name="sr">
            <br>
            <input type="checkbox" name="showdetails"> Show Details
            <br>
            <input type="submit" value="Compute">
        </form>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>

</html>
