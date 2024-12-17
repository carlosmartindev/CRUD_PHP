<div id="contenedor_inicio">
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