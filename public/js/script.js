//'use strict';
$(document).ready(function()
{
    $( '.content' ).html(function() {
            $.ajax({
                url: '/selectall',
                dataType : 'json',
                type: 'GET'
            })
            .done(function(response) {
                console.log(response);
                var html1 = '';
                var html2 = '';
                var html3 = '';
                var html4 = '';
                var block1 = document.getElementById('content1');
                var block2 = document.getElementById('content2');
                var block3 = document.getElementById('content3');
                var block4 = document.getElementById('content4');
                                                                           
                        for (var i = 0; i < response.length; i++) 
                        {                            
                            if (response[i].prioridad == 1)
                            { 
                                html1 += '<div draggable="true" ondragstart="dragStarted(event)" ondragover="draggingOver(event)" ondrop="dropped(event)">';
                                html1 += '<ul id="sortable1" draggable="true" ondragstart="dragStarted(event)" ondragover="draggingOver(event)" ondrop="dropped(event)">';
                                html1 += '<li>';                                
                                html1 += '<h1>' + response[i].titulo + '</h2>';                                
                                html1 += '<h2>' + response[i].descripcion + '</h2>';                                
                                html1 += '<a href="tasks/' + response[i].id + '/edit">Editar</a>';
                                html1 += '<br>';
                                html1 += '<a href="tasks/' + response[i].id + '/delete">Eliminar</a>';
                                html1 += '</li>';
                                html1 += '</ul>';
                                html1 += '</div>';
                                
                            }
                            else if (response[i].prioridad == 2)
                            {
                                html2 += '<div draggable="true" ondragstart="dragStarted(event)" ondragover="draggingOver(event)" ondrop="dropped(event)">';
                                html2 += '<ul id="sortable2" draggable="true" ondragstart="dragStarted(event)" ondragover="draggingOver(event)" ondrop="dropped(event)">';
                                html2 += '<li>';                                
                                html2 += '<h1>' + response[i].titulo + '</h2>';                                
                                html2 += '<h2>' + response[i].descripcion + '</h2>';                                
                                html2 += '<a href="tasks/' + response[i].id + '/edit">Editar</a>';
                                html2 += '<br>';
                                html2 += '<a href="tasks/' + response[i].id + '/delete">Eliminar</a>';
                                html2 += '</li>';
                                html2 += '</ul>';
                                html2 += '</div>';
                            }
                            else if (response[i].prioridad == 3)
                            {     
                                html3 += '<div draggable="true" ondragstart="dragStarted(event)" ondragover="draggingOver(event)" ondrop="dropped(event)">';
                                html3 += '<ul id="sortable3" draggable="true" ondragstart="dragStarted(event)" ondragover="draggingOver(event)" ondrop="dropped(event)">';
                                html3 += '<li>';                                
                                html3 += '<h1>' + response[i].titulo + '</h2>';                                
                                html3 += '<h2>' + response[i].descripcion + '</h2>';                               
                                html3 += '<a href="tasks/' + response[i].id + '/edit">Editar</a>';
                                html3 += '<br>';
                                html3 += '<a href="tasks/' + response[i].id + '/delete">Eliminar</a>';
                                html3 += '</li>';
                                html3 += '</ul>';
                                html3 += '</div>';
                            }    
                            else if (response[i].prioridad == 4)
                            {                     
                                html4 += '<div draggable="true" ondragstart="dragStarted(event)" ondragover="draggingOver(event)" ondrop="dropped(event)">';
                                html4 += '<ul id="sortable4" draggable="true" ondragstart="dragStarted(event)" ondragover="draggingOver(event)" ondrop="dropped(event)">';
                                html4 += '<li>';                                
                                html4 += '<h1>' + response[i].titulo + '</h2>';                                
                                html4 += '<h2>' + response[i].descripcion + '</h2>';                                
                                html4 += '<a href="tasks/' + response[i].id + '/edit">Editar</a>';
                                html4 += '<br>';
                                html4 += '<a href="tasks/' + response[i].id + '/delete">Eliminar</a>';
                                html4 += '</li>';
                                html4 += '</ul>';
                                html4 += '</div>';
                            }
                        }
                block1.innerHTML += html1;
                block2.innerHTML += html2;
                block3.innerHTML += html3;
                block4.innerHTML += html4;
            })

            .fail(function(error) {
            console.log(error);
            alert("error"); 
            });        
    });

});