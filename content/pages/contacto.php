<?php include("head.php");?>
<body>
	<?php include("header.php");?>
	<section class="gray row">
		<div class="col-sm-6" id="contactus">
			<h3>Contáctanos</h3>
			<form>
				<p>¿Eres asociación civil?</p>
				<select name="ac" id="ac">
					<option value="1">Si</option>
					<option value="0" selected>No</option>
				</select>
				<p>¿En qué programa civil estás interesado?</p>
				<select name="ac" id="programa">
					<option value="1">Uno</option>
					<option value="2">Dos</option>
				</select>
				<p>Nombre</p>
				<input type="text" id="nombre" name="nombre" required />
				<p>Teléfono</p>
				<input type="text" id="telefono" name="telefono" required />
				<p>Celular</p>
				<input type="text" id="celular" name="celular" required />
				<p>E-mail</p>
				<input type="text" id="email" name="email" required />
				<button type="submit">Enviar</button>
			</form>
		</div>
		<div class="col-sm-6">
			<div id="contactbox" class="image-box"></div>
		</div>
	</section>
	<?php include("footer.php");?>
</body>
</html>