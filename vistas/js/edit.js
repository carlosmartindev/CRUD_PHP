const Sistema = {
	Realiza: {
		Init: function () {
			_ = Sistema.Realiza;

			// Métodos
			_.Metodos.cargarTarea();
			// Eventos
			_.Eventos();
		},
		Metodos: {
			cargarTarea: function() {
				const id = $("#idEditar").val();

				var datos = new FormData();
				datos.append("cargarTarea", 1);
				// Se envía la variable con el id a eliminar
				datos.append("id", id);

				$.ajax({
					url:"ajax/index.ajax.php",
					method: "POST",
					data: datos,
					cache: false,
					contentType: false,
					processData: false,
					dataType: "json",
					success: function(respuesta){
						$("#desc_tarea").val(respuesta.task_name);
					},error: function(XMLHttpRequest, textStatus, errorThrown) {
						console.log('Ocurrió un error al cargar la tarea. Error:', errorThrown);
					}
				});
			},

			actualizarTarea: function(idEditar, tarea) {
				var datos = new FormData();
				datos.append("actualizarTarea", 1);
				// Se envía la variable con el id a eliminar
				datos.append("id", idEditar);
				datos.append("tarea", tarea);

				$.ajax({
					url:"ajax/index.ajax.php",
					method: "POST",
					data: datos,
					cache: false,
					contentType: false,
					processData: false,
					dataType: "json",
					success: function(respuesta){
						respuesta = JSON.parse(respuesta);
						
						if (respuesta.status === 'failed') {
							alert("Error al actualizar. Vuelva a intentar");
							console.log('Error al actualizar la tarea. Error:', respuesta.query);
							return;
						}

						alert("Tarea actualizada correctamente");
						$("#desc_tarea").val("");
						$(location).prop('href', './');
					},error: function(XMLHttpRequest, textStatus, errorThrown) {
						console.log('Ocurrió un error al cargar la tarea. Error:', errorThrown);
					}
				});
			}
		},
		Eventos: function () {
			$(".btn_regresar").click(function() {
				$(location).prop('href', './');
			});

			$(".btn_guardar").click(function(e) {
				e.preventDefault();

				const idTarea = $("#idEditar").val();
				const tarea = $("#desc_tarea").val();

				if (tarea === '') {
					alert("Debe introducir algún texto");
					return;
				}

				_.Metodos.actualizarTarea(idTarea, tarea);
			});
		}
	}
}