var usu_id = $('#usu_idx').val();

function init(){
    $("estudios_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData= new FormData($("#estudios_form")[0]);
    
    $.ajax({
        url:"/Thiago/controller/estudios.php?opc=guardaryeditar",
        type:"POST",
        data:formData,
        contentType:false,
        processData:false,

        success: function(data){
            console.log(data);
            $('#estudios_data').DataTable().ajax.reload();
            $('#modalcrearRedes').modal('hide');

        FileSystemWritableFileStream.fire({
            title:'Correcto!',
            text:'Se registro Correctamente',
            icon: 'success',
            confirmButtonText:'Aceptar'
        })
        }
    })
}

$(document).ready(function(){
    $('#socialMedia').DataTable({
        "aProcessing":true,
        "aServerSide":true,
        dom: 'Bfrtip',
        buttons:[
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"/thiago/controller/social_media.php?opc=listar",
            type:"post",
            },
        "bDestroy":true,
        "responsive":true,
        "bInfo":true,
        "iDisplaylenght":15,
        "order":[[0,"desc"]],
        "languaje":{
            "sProcessing":      "Procesando...",
            "sLengthMenu":      "Mostrar _MENU_ registros",
            "sZeroRecords":     "No se encontraron resultados",
            "sEmptyTable":      "Ningún dato disponible en esta tabla",
            "sInfo":            "Mostrando registro del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":       "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":    "(filtrado de un total de _MAX_ registros",
            "sInfoPostFix":     "",
            "sSearch":          "Buscar:",
            "sUrl":             "",
            "sInfoThousands":   ",",
            "sLoadingRecords":  "Cargando...",
            "oPaginate":{
                "sFirst":       "Primero",
                "sLast":        "Ultimo",
                "sNext":        "Siguiente",
                "sPrevious":    "Anterior",
            },
            "oAria":{
                "sSortAscending":   ":Activar para ordenar la columna de manera ascendente",
                "sSortDescending":   ":Activar para ordenar la columna de manera descendente",
            }
        }
            
    })
});