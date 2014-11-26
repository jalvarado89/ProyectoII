<h1>Tasks</h1>
{{link_to("nueva", 'New Task', $attributes = array(), $secure = null);}}
<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Estado</th>
		<th>userid</th>
	</tr>
	@foreach($tasks as $task)
        <tr>
        	<td>{{ $task->id }}</td>	
        	<td>{{ $task->nombre }}</td>	
        	<td>{{ $task->estado }}</td>
        	<td>{{ $task->usuarioid }}</td>
        	<td>
        		{{link_to("aviones/$avion->id/edit", 'Editar', $attributes = array(), $secure = null);}}
        		{{link_to("aviones/$avion->id/delete", 'Eliminar', $attributes = array(), $secure = null);}}
        	</td>	
        </tr>
    @endforeach
</table>