var usu_id = $('#usu_idx').val();

function init(){
    /*$("#informacion_personal_form").on("submit",function(e){ 
        guardaryeditar(e);
    });*/
}

function guardaryeditar(e){

    e.preventDefault();
    var formData= new FormData($("#informacion_personal_form")[0]);
    
    $.ajax({
        url:"/thiago/controller/informacion_personal.php?opc=guardaryeditar",
        type:"POST",
        data:formData,
        contentType:false,
        processData:false,

        success: function(data){
            console.log(data);
            $('#informacion_personal_data').DataTable().ajax.reload();
            $('#Modalinformacion_personal').modal('hide');

            Swal.fire({
                title:'Correcto!',
                text:'Se registro Correctamente',
                icon: 'success',
                confirmButtonText:'Aceptar'
            })
        }
    });
}

$(document).ready(function(){
    $('#informacion_personal_data').DataTable({
        "aProcessing":true,
        "aServerSide":true,
        dom: 'Bfrtip',
        buttons:[
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"/thiago/controller/informacion_personal.php?opc=listar",
            type:"post",
        },
        "bDestroy":true,
        "responsive":true,
        "bInfo":true,
        "iDisplaylength":15,
        "order":[[0,"desc"]],
        "language":{
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
        },
            
    });
});
function nuevo(){
    $('#titulo_modal').html('Nueva Informacion');
    //$('#socialMedia_form')[0].reset();
    $('#Modalinformacion_personal').modal('show');
}

function editar (idinformacion_personal){
    $.post("/thiago/controller/informacion_personal.php?opc=mostrar",{idinformacion_personal:idinformacion_personal},function (data){
        data = JSON.parse(data);
        
        $('#idinformacion_personal').val (data.idinformacion_personal);
        $('#info_nacimiento').val (data.info_nacimiento);
        $('#info_celular').val (data.info_celular);
        $('#info_email').val (data.info_email);
        $('#info_direccion').val (data.info_direccion);
        $('#info_ocupacion').val (data.info_ocupacion);
    });
    $('#titulo_modal').html('Editar Informacion');
    $('#Modalinformacion_personal').modal('show');
}

function eliminar(idinformacion_personal){
    Swal.fire({
        title:'Eliminar!',
        text:'Desea eliminar el Registro?',
        icon:'error',
        showCancelButton:true,
        /*ShowCancelButton:true,*/
        confirmButtonText:'Aceptar',
        cancelButtonText:'Cancelar',
    }).then((result)=>{
        if(result.value){
            $.post("/thiago/controller/informacion_personal.php?opc=eliminar",{idinformacion_personal:idinformacion_personal},function(data){
                $('#informacion_personal_data').DataTable().ajax.reload();
                Swal.fire({
                    title:'Correcto!',
                    text:'Se elimino Correctamente',
                    icon:'success',
                    confirmButtonText:'Aceptar'
                })
            });
        }
    });
}