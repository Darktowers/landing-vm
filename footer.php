</div>


<script src="js/app.min.js"></script>
<script src="js/addscripts.js"></script>
<script type="text/javascript" src="js/skrollr.min.js"></script>

<!--[if lt IE 9]>
	<script type="text/javascript" src="js/skrollr.ie.min.js"></script>
	<![endif]-->

<script type="text/javascript">
	var s = skrollr.init({
		edgeStrategy: 'set',
		easing: {
			WTF: Math.random,
			inverted: function (p) {
				return 1 - p;
			}
		}
	});

</script>
</body>
<footer class="footer">
	<img src="img/pencil.svg" alt="" class="pencil">
	<div class="footer-Container wrap-principal">
		<div class="footer-header">
			<img src="img/plants.svg" alt="" class="plants">
			<div class="title">
				<h3>QUIERO PERTENECER O INFORMARME SOBRE LAS SOCIEDADES DEL BRITÁNICO</h3>
			</div>
			<div class="img">
				<img src="img/planet.svg" alt="">
			</div>
		</div>
		<form action="">
			<div class="footer-form">

				<div class="col">
					<input type="text" name="name" placeholder="NOMBRE">
					<input type="text" name="lastname" placeholder="APELLIDO">
					<input type="email" name="email" placeholder="EMAIL">
					<input type="text" name="phone" placeholder="TELEFONO">
					<label for="">AÑO DE SALIDA DEL COLEGIO</label>
					<input type="text" name="year" placeholder="AÑO">
				</div>
				<div class="col">
					<label>ESTOY INTERESADO EN:</label>
					<div class="control">
						<div class="required">
							<div class="check">
								<input type="checkbox" name="SPORTS" checked="checked">
								<label for=""></label>
							</div>
							<p>SPORTS</p>
						</div>
						<div class="required">
							<div class="check">
								<input type="checkbox" name="ARTS" checked="checked">
								<label for=""></label>
							</div>
							<p>ARTS & MUSIC</p>
						</div>
						<div class="required">
							<div class="check">
								<input type="checkbox" name="HUMANITIES" checked="checked">
								<label for=""></label>
							</div>
							<p>HUMANITIES</p>
						</div>
						<div class="required">
							<div class="check">
								<input type="checkbox" name="SCIENCES" checked="checked">
								<label for=""></label>
							</div>
							<p>SCIENCES</p>
						</div>
						<div class="required">
							<div class="check">
								<input type="checkbox" name="COMMUNITY" checked="checked">
								<label for=""></label>
							</div>
							<p>COMMUNITY SERVICE</p>
						</div>
					</div>
				</div>
				<div class="col">
					<label for="">PROPUESTAS:</label>
					<textarea name="" id="" cols="30" rows="10"></textarea>
				</div>

			</div>
			
			<div class="footer-footer">
				
				<div class="col">
					<div class="footer-fix">
						<div class="refix">
							<div class="check">
								<input type="checkbox" name="required" checked="checked">
								<label for=""></label>
							</div>
							<p><small>En cumplimiento con la normativa española sobre Protección de Datos le informamos que los datos personales que nos facilite serán incluidos en ﬁcheros responsabilidad de la Delegación en España de la Fundación British Council para hacerle llegar información de su interés sobre eventos y acciones similares. Puede ejercer sus derechos escribiendo a data.protection@britishcouncil.es. Por favor, marque la siguiente casilla si no desea recibir información del British Council School.</small></p>
						</div>
						<div class="col">
							<input type="submit" value="JOIN US" class="block-Button btn-large">
						</div>
					</div>

				</div>

			</div>
		</form>
	</div>
	<div class="post-footer">
		<div class="wrap-principal">
			<div class="foo logo-footer">
				<img src="img/logo-footer.svg" alt="">
			</div>
			<div class="foo social">
				<a href="" class="linkedin"><i class="fa fa-linkedin"></i>Las Sociedades del Britanico</a>
				<a href="" class="enveloper"><i class="fa fa-envelope-o"></i>SchoolAlumni@britishcouncil.es</a>
			</div>
			<div class="foo up">
				<img src="img/up.svg" alt="" class="goUp">
			</div>
		</div>
	</div>
</footer>

</html>