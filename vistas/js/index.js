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
								<div>
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
			}
		},
		Eventos: function () {
			
		}
	}
}