const Sistema = {
	Realiza: {
		Init: function () {
			_ = Sistema.Realiza;

			// Métodos

			// Eventos
			_.Eventos();
		},
		Metodos: {
			// Método para agregar una tarea nueva
			agregarTarea: function(tarea) {
				var datos = new FormData();
				datos.append("agregarTarea", 1);
				// Se envía la variable con la tarea a guardar
				datos.append("txtTarea", tarea);

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
							alert("Error al guardar. Vuelva a intentar");
							console.log('Error al guardar la tarea. Error:', respuesta.query);
							return;
						}

						alert("Tarea guardada correctamente");
						$("#desc_tarea").val("");
						$(location).prop('href', './');
					},error: function(XMLHttpRequest, textStatus, errorThrown) {
						console.log('Ocurrió un error al guardar la tarea. Error:', errorThrown);
					}
				});
			},
		},
		Eventos: function () {
			$(".btn_regresar").click(function() {
				$(location).prop('href', './');
			});

			$("#btn_guardar").click(function(e) {
				e.preventDefault();
				const tarea = $("#desc_tarea").val();

				if (tarea === '') {
					alert("Debe introducir algún texto");
					return;
				}

				_.Metodos.agregarTarea(tarea);
			});
		}
	}
}