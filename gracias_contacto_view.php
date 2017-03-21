
<!DOCTYPE html>
<html lang="es" xml:lang="es" class="gracias">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Vives por ella</title>
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0">
		<link rel="icon" href="favicon.ico">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/other-styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body class="">
	<header class="header">
	  <div class="header-Container">
	    <div class="header-Menu">
	      <img class="menu" src="img/menu.svg" alt="">
	      <nav class="header-Menu-Nav">
	        <ul>
	          <li><a href="http://www.vivesporella.com">EL PROYECTO</a></li>
	          <li><a href="">SUSCRIBETE</a></li>
	        </ul>
	      </nav>
	      <div class="logo">
	        <a href="http://www.vivesporella.com">EL PROYECTO</a>
	        <a href="http://www.vivesporella.com"><img src="img/logo-vives-por-ella.png" alt="Vives por ella"></a>
	        <a href="http://www.vivesporella.com" class="ancla">SUSCRIBETE</a>
	        <img src="img/universal.png" alt="" class="universal">
	      </div>
	    </div>
	  </div>
	</header>
		<div class="wrapper">
			<div class="back-Star">
				
			</div>
			<section class="video">
		    <div class="video-Container">

		    <div class="text">
	        <center>
	            <h1>MENSAJE RECIVIDO</h1>
	        </center>
	        <h2>NOS PONDREMOS EN CONTACTO <br> CONTIGO LO ANTES POSIBLE. <br> ¡GRACIAS!</h2>
		    </div>
			</section>
		<script src="js/app.min.js"></script>
		<script src="js/addscripts.js"></script>
		<script>
		 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		 ga('create', 'UA-90255021-1', 'auto');
		 ga('send', 'pageview');
		</script>
	</body>
<footer class="footer">
  <div class="container">
  <div class="social">
    <a href="https://www.facebook.com/vivesporella/" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com/vivesporella?lang=es" target="_blank"><i class="fa fa-twitter"></i></a>
    <a href="https://www.instagram.com/vivesporella/" target="_blank"><i class="fa fa-instagram"></i></a>
    <a href="https://www.youtube.com/channel/UCLq6aNqDX1DiTTSxdFk9nHA" target="_blank"><i class="fa fa-youtube"></i></a>
  </div>
    <div class="site-Map">
      <ul><li>Vives-Por-Ella 2016 ©</li> | <li><a href="">Política de privacidad</a></li> | <li><a href="">Contacto</a></li> | <li><a href="">Suscríbete</a></li></ul>
    </div>
    <div class="mundo">
      <img src="img/fondo-mundo.png" alt="">
    </div>
  </div>
</footer>
<div class="rowUp"><img src="img/row-up.svg" alt=""></div>
<script>
	$( document ).ready(function() {
		$("body").on("click", ".social .fa", function(b){
		var indbtn = $('.fa').index(this);
		var clasesbtn = $(this).attr("class");
		if ((indbtn == 9) || (indbtn == 10) || (indbtn == 11) || (indbtn == 12))
		{
		  b.preventDefault();
		  var urlRRSS = '';
		  var nombreRRSS = '';
		  console.log('ID: ' + clasesbtn);
		  switch(clasesbtn) {
			case 9: nombreRRSS = 'Facebook'; urlRRSS = 'https://www.facebook.com/vivesporella/'; break;
			case 10: nombreRRSS = 'Twitter'; urlRRSS = 'https://twitter.com/vivesporella?lang=es'; break;
			case 11: nombreRRSS = 'Instagram'; urlRRSS = 'https://www.instagram.com/vivesporella/'; break;
			case 12: nombreRRSS = 'YouTube'; urlRRSS = 'https://www.youtube.com/channel/UCLq6aNqDX1DiTTSxdFk9nHA'; break;
		  }
		  ga('send', 'event', 'vivesporella.com', 'Click ver ' + nombreRRSS, nombreRRSS);
		  window.open(urlRRSS);
		 }
		});
	});
	</script>
</html>