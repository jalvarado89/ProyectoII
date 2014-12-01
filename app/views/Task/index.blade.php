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
        <div id="content1" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Nueva</h2>
        </div> 
        <div id="content2" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>En Proceso</h2>
        </div>
        <div id="content3" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Terminada</h2>
        </div> 
        <div id="content4" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Verificada</h2>
        </div> 
    </div>
            