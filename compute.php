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
        <h3>Here are the results!</h3>
        <?php

        function fibo($n) {
            if ($n <= 1)
                return $n;
            else
                return(fibo($n-1) + fibo($n-2));
        } 

        $num = $_POST["sr"];
        $num = intval($num);
        ?>
    
        <h3>Fibonacci of <?php echo $num; ?> is <?php echo fibo($num); ?></h3>

        <h2>The square of <?php echo $num; ?> is <?php echo $num * $num; ?></h2>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>

</html>
