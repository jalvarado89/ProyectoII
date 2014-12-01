'use strict';
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
                                html1 += '<ul id="sortable1" draggable="true" ondragstart="drag(event)">';                                
                                html1 += '<li>';
                                html1 += '<span></span>';
                                html1 += '<div>';
                                html1 += '<h2>' + response[i].titulo + '</h2>';                                
                                html1 += '<h2>' + response[i].descripcion + '</h2>';
                                html1 += '<a href="tasks/' + response[i].id + '/edit">Editar</a>';
                                html1 += '<br>';
                                html1 += '<a href="tasks/' + response[i].id + '/delete">Eliminar</a>';
                                html1 += '</div>';
                                html1 += '</li>';
                                html1 += '</ul>';
                                
                            }
                            else if (response[i].prioridad == 2)
                            {                                          
                                html2 += '<ul id="sortable2" draggable="true" ondragstart="drag(event)">';                                            
                                html2 += '<li>';
                                html2 += '<span></span>';
                                html2 += '<div>';
                                html2 += '<h2>' + response[i].titulo + '</h2>';                                
                                html2 += '<h2>' + response[i].descripcion + '</h2>';
                                html2 += '<a href="tasks/' + response[i].id + '/edit">Editar</a>';
                                html2 += '<br>';
                                html2 += '<a href="tasks/' + response[i].id + '/delete">Eliminar</a>';
                                html2 += '</div>';
                                html2 += '</li>';
                                html2 += '</ul>';                                 
                            }
                            else if (response[i].prioridad == 3)
                            {                                       
                                html3 += '<ul id="sortable3" draggable="true" ondragstart="drag(event)">';                            
                                html3 += '<li>';
                                html3 += '<span></span>';
                                html3 += '<div>';
                                html3 += '<h2>' + response[i].titulo + '</h2>';                                
                                html3 += '<h2>' + response[i].descripcion + '</h2>';
                                html3 += '<a href="tasks/' + response[i].id + '/edit">Editar</a>';
                                html3 += '<br>';
                                html3 += '<a href="tasks/' + response[i].id + '/delete">Eliminar</a>';
                                html3 += '</div>';
                                html3 += '</li>';
                                html3 += '</ul>';                                
                            }    
                            else if (response[i].prioridad == 4)
                            {                                       
                                html4 += '<ul id="sortable4" draggable="true" ondragstart="drag(event)">';                                
                                html4 += '<li>';
                                html4 += '<span></span>';
                                html4 += '<div>';
                                html4 += '<h2>' + response[i].titulo + '</h2>';                                
                                html4 += '<h2>' + response[i].descripcion + '</h2>';
                                html4 += '<a href="tasks/' + response[i].id + '/edit">Editar</a>';
                                html4 += '<br>';
                                html4 += '<a href="tasks/' + response[i].id + '/delete">Eliminar</a>';
                                html4 += '</div>';
                                html4 += '</li>';
                                html4 += '</ul>';                                
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
        $("#content1").on("dragover",function(e){
            e.preventDefault();
        });
        $("#content2").on("dragover",function(e){
            e.preventDefault();
        });
        $("#content3").on("dragover",function(e){
            e.preventDefault();
        });
        $("#content4").on("dragover",function(e){
            e.preventDefault();
        });


        $("#sortable1").on("dragstart",function(e){
            e.originalEvent.dataTransfer.setData("Text",e.target.id);
        });
        $("#sortable2").on("dragstart",function(e){
            e.originalEvent.dataTransfer.setData("Text",e.target.id);
        });
        $("#sortable3").on("dragstart",function(e){
            e.originalEvent.dataTransfer.setData("Text",e.target.id);
        });
        $("#sortable4").on("dragstart",function(e){
            e.originalEvent.dataTransfer.setData("Text",e.target.id);
        });



        $("#content1").on("drop",function(e){
            e.preventDefault();
            var data=e.originalEvent.dataTransfer.getData("Text");
            e.target.appendChild(document.getElementById(data));
        });
        $("#content2").on("drop",function(e){
            e.preventDefault();
            var data=e.originalEvent.dataTransfer.getData("Text");
            e.target.appendChild(document.getElementById(data));
        });
        $("#content3").on("drop",function(e){
            e.preventDefault();
            var data=e.originalEvent.dataTransfer.getData("Text");
            e.target.appendChild(document.getElementById(data));
        });
        $("#content4").on("drop",function(e){
            e.preventDefault();
            var data=e.originalEvent.dataTransfer.getData("Text");
            e.target.appendChild(document.getElementById(data));
        });

});