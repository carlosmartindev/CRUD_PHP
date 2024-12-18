const Sistema = {
	Realiza: {
		Init: function () {
			_ = Sistema.Realiza;

			// Métodos
			_.Metodos.listarTareas();
			// Eventos
			_.Eventos();
		},
		Metodos: {
			// Método para mostrar las tareas guardadas
			listarTareas: function() {
				var datos = new FormData();
				datos.append("listarTareas", 1);
				
				$.ajax({
					url:"ajax/index.ajax.php",
					method: "POST",
					data: datos,
					cache: false,
					contentType: false,
					processData: false,
					dataType: "json",
					success: function(respuesta){
						let content = "";
						// Se realiza la iteración sobre las tareas guardadas
						$.each(respuesta, function(index, element) {
							// Por cada tarea se genera un elemento en la lista con sus botones de Editar y Eliminar y se concatena a la variable "content"
							content += `<li>
								<div>
									<p>${element.id}</p>
									<p><strong>${element.task_name}</strong></p>
									<p>Creado en: ${element.created_at}</p>
								</div>
								<div class="btns_group">
									<a href="#" class="btnLista btnEditar" data-id="${element.id}"><i class="fa fa-pencil"></i> Editar</a>
									<a href="#" class="btnLista btnEliminar" data-id="${element.id}"><i class="fa fa-trash"></i> Eliminar</a>
								</div>
							</li>`;
						});

						// Al final, todas las tareas contenidas en la variable "content" se incluyen en "ul_tasks"
						$("#ul_tasks").html(content);
					},error: function(XMLHttpRequest, textStatus, errorThrown) {
						console.log('Ocurrió un error al listar las tareas. Error:', errorThrown);
					}
				});
			},

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
						_.Metodos.listarTareas();
					},error: function(XMLHttpRequest, textStatus, errorThrown) {
						console.log('Ocurrió un error al guardar la tarea. Error:', errorThrown);
					}
				});
			}
		},
		Eventos: function () {
			$("#btn_nt").click(function(e) {
				e.preventDefault();
				$(location).prop('href', 'add');
			});

			$("#btn_nt_self").click(function(e) {
				e.preventDefault();
				if ($("#btn_nt_self").hasClass("visible")) {
					$("#div_form").slideUp('slow');
					$("#btn_nt_self").removeClass("visible");
				} else {
					$("#div_form").slideDown('slow');
					$("#btn_nt_self").addClass("visible");
				}
			});

			$(".btnEditar").click(function(e) {
				e.preventDefault();
				const id = $(this).data('id');
				$("#idEditar").val(id);
				$("#formEdit").submit();
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

			$("#formEdit").delegate(".btnEditar", "click", function(e) {
				e.preventDefault();
				const id = $(this).data('id');

				$("#idEditar").val(id);
				$("#formEdit").submit();
			});
		}
	}
}