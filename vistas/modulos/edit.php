<div id="contenedor_inicio">
	<div class="div_acciones">
		<button class="btn_regresar">Regresar</button>
	</div>
	
	<div class="div_form">
		<h2 class="titulo">Nueva tarea</h2>

		<div class="contenedor_seccion">
			<form method="POST" id="formEdit">
				<div>
					<label for="desc_tarea">Tarea:</label>
					<input type="hidden" id="idEditar" value="<?php echo $_POST['idEditar'] ?>" />
					<textarea name="desc_tarea" id="desc_tarea" rows="3"></textarea>
				</div>
				<div class="div_buttons">
					<button class="btn_limpiar" type="reset">Reiniciar</button>
					<button class="btn_guardar" type="submit">Actualizar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="vistas/js/edit.js"></script>
<script>
	$(document).ready(function() {
		Sistema.Realiza.Init();
	});
</script>