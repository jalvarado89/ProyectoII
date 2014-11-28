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
        		{{link_to("tasks/$task->id/edit", 'Editar', $attributes = array(), $secure = null);}}
        		{{link_to("tasks/$task->id/delete", 'Eliminar', $attributes = array(), $secure = null);}}
        	</td>	
        </tr>
    @endforeach
</table>

<div>
    <ul id="sortable">
        @foreach ($tasks as $rs)
            <li id="<?php echo $rs['nombre']; ?>">
                <span></span>            
                <div><h2><?php echo $rs['id']; ?></h2><h2><?php echo $rs['estado']; ?></h2></div>
            </li>
         @endforeach
    </ul>
</div><!-- content --> 