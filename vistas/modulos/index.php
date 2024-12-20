<div id="contenedor_inicio">
	<div class="div_acciones">
		<button class="btn_nuevo" id="btn_nt">Nueva tarea</button>
		<button class="btn_nuevo" id="btn_nt_self">Nueva tarea +</button>
	</div>
	
	<div class="div_form" id="div_form" style="display: none;">
		<h2 class="titulo">Nueva tarea</h2>

		<div class="contenedor_seccion">
			<form method="POST">
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

	<h2 class="titulo">Lista de Tareas</h2>
	<div class="contenedor_seccion">
		<form method="POST" action="edit" id="formEdit">
			<input type="hidden" id="idEditar" name="idEditar">
			<ul id="ul_tasks"></ul>
		</form>
	</div>
</div>

<script src="vistas/js/index.js"></script>
<script>
	$(document).ready(function() {
		Sistema.Realiza.Init();
	});
</script>