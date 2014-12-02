<h1>Tasks</h1>
{{link_to("nueva", 'New Task', $attributes = array(), $secure = null);}}
<table>
	<tr>
		<th>Id</th>
		<th>Titulo</th>
		<th>Prioridad</th>
        <th>Descripcion</th>
		<th>Userid</th>
	</tr>
	@foreach($tasks as $task)
        <tr>
        	<td>{{ $task->id }}</td>	
        	<td>{{ $task->titulo }}</td>	
        	<td>{{ $task->prioridad }}</td>
            <td>{{ $task->descripcion }}</td>
        	<td>{{ $task->usuarioid }}</td>
        	<td>
        		{{link_to("tasks/$task->id/edit", 'Editar', $attributes = array(), $secure = null);}}
        		{{link_to("tasks/$task->id/delete", 'Eliminar', $attributes = array(), $secure = null);}}
        	</td>	
        </tr>
    @endforeach
</table>
    <div class="content">
        <div class="contenido">
            <h2>Nueva</h2>
            <div id="content1" draggable="true" ondragstart="dragStarted(event)" ondragover="draggingOver(event)" ondrop="dropped(event)">
            </div>
        </div> 
        <div class="contenido">
            <h2>En Proceso</h2>
            <div id="content2" draggable="true" ondragstart="dragStarted(event)" ondragover="draggingOver(event)" ondrop="dropped(event)">
            </div>
        </div>
        <div class="contenido">
            <h2>Terminada</h2>
            <div id="content3" draggable="true" ondragstart="dragStarted(event)" ondragover="draggingOver(event)" ondrop="dropped(event)">
            </div>
        </div> 
        <div class="contenido">
            <h2>Verificada</h2>
            <div id="content4" draggable="true" ondragstart="dragStarted(event)" ondragover="draggingOver(event)" ondrop="dropped(event)">
            </div>
        </div> 
    </div>
<script type="text/javascript">
    var source;
        function dragStarted(evt){            
            //start drag
            source=evt.target;
            //set data
            evt.dataTransfer.setData("text/plain", evt.target.innerHTML);
            
            //specify allowed transfer
            evt.dataTransfer.effectAllowed = "move";
        }

        function draggingOver(evt){
            //drag over
            evt.preventDefault();
            //specify operation
            evt.dataTransfer.dropEffect = "move";
        }

        function dropped(evt){
            //drop
            evt.preventDefault();
            evt.stopPropagation();

            //update text in dragged item
            source.innerHTML = evt.target.innerHTML;    
            
            var id1 = evt.dataTransfer.getData("text/plain");
            //update text in drop target
            evt.target.innerHTML = evt.dataTransfer.getData("text/plain");
            var estado1 = evt.target.id;

            id1 = id1.substr(-27,1);
            estado1 = estado1.substr(-1,1);
            var parametros = {
                "id" : id1,
                "prioridad" : estado1
            };
            LLamadoAjax(parametros);
        }

        function LLamadoAjax(parametros){
            $.ajax({
                url: '/redibujar',                
                data: parametros,
                type: 'POST',
                dataType: 'json'
            })
            .done(function(Response) {
                console.log(Response);
                window.location = '/tareas';
            })
            .fail(function(error) {
            console.log(error);
            window.location = '/tareas';
            });
        }
</script>         