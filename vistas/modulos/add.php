<div id="contenedor_inicio">
	<div class="div_acciones">
		<button class="btn_regresar">Regresar</button>
	</div>

	<div class="div_form">
		<h2 class="titulo">Nueva tarea</h2>

		<div class="contenedor_seccion">
			<form>
				<div>
					<label for="desc_tarea">Tarea:</label>
					<textarea name="desc_tarea" id="desc_tarea" rows="3"></textarea>
				</div>
				<div class="div_buttons">
					<button class="btn_limpiar" type="reset">Limpiar</button>
					<button class="btn_guardar" id="btn_guardar">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="vistas/js/add.js"></script>
<script>
	$(document).ready(function() {
		Sistema.Realiza.Init();
	});
</script>