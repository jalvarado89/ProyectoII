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
<div id="combinar">
    <div class="container">
    <ul id="sortable">
    <h2>Nueva</h2>
        @foreach ($tasks as $rs)
            <li id="<?php echo $rs['id']; ?>">
                <span></span>            
                <div><h2><?php echo $rs['nombre']; ?></h2><h2><?php echo $rs['estado']; ?></h2></div>
            </li>
         @endforeach
    </ul>
    </div>

    <div class="container">
    <ul id="sortable">
    <h2>En Proceso</h2>
        @foreach ($tasks as $rs)
            <li id="<?php echo $rs['id']; ?>">
                <span></span>            
                <div><h2><?php echo $rs['nombre']; ?></h2><h2><?php echo $rs['estado']; ?></h2></div>
            </li>
         @endforeach
    </ul>
</div>

</div>
