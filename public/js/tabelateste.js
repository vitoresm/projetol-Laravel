
$(document).ready(function() {
    $('#tabelaFormatada').dataTable({
        "language" : {
             "decimal": ",",
             "thousands": ",",
             "sEmptyTable": "Nenhum registro encontrado",
             "sInfo": "Mostrando  _START_ até _END_ de _TOTAL_ Resultados",
             "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
             "sInfoFiltered": "(Filtrados de MAX registros)",
             "sInfoPostFix": "",
             "sInfoThousands": ".",
             "sLengthMenu": "_MENU_ resultados por página",
             "sLoadingRecords": "Carregando...",
             "sProcessing": "Processando...",
             "sZeroRecords": "Nenhum registro encontrado",
             "sSearch": "Pesquisar",
             "oPaginate": {
                 "sNext": "Próximo",
                 "sPrevious": "Anterior",
                 "sFirst": "Primeiro",
                 "sLast": "Último"
             },
             "oAria": {
                 "sSortAscending": ": Ordenar colunas de forma ascendente",
                 "sSortDescending": ": Ordenar colunas de forma descendente"
             }
         },
         "columnDefs": [{
            "render": function(data){
               return parseFloat(data).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
            },
            "targets": [3]
         }]
        
       
     });  
} );
