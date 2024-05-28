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
            $('#Modalestudios').modal('hide');

        /*FileSystemWritableFileStream.fire({*/
        Swal.fire({
            title:'Correcto!',
            text:'Se registro Correctamente',
            icon: 'success',
            confirmButtonText:'Aceptar'
        })
        }
    })
}

$(document).ready(function(){
    $('#estudios_data').DataTable({
        "aProcessing":true,
        "aServerSide":true,
        dom: 'Bfrtip',
        buttons:[
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"/thiago/controller/estudios.php?opc=listar",
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
        }
            
    })
});
function nuevo(){
    $('#titulo_modal').html('Nueva Red Social');
    //$('#socialMedia_form')[0].reset();
    $('#Modalestudios').modal('show');
}

function editar (idestudios){
    $.post("/thiago/controller/estudios.php?opc=mostrar",{idestudios:idestudios},function (data){
        data = JSON.parse(data);
        //console.log(data)
        $('#idestudios').val (data.idestudios);
        $('#est_titulo').val (data.est_titulo);
        $('#est_lugar').val (data.est_lugar);
        $('#est_anno').val (data.est_anno);
        $('#est_tipo').val (data.est_tipo);
    });
    $('#titulo_modal').html('Editar red');
    $('#Modalestudios').modal('show');
}

function eliminar(idestudios){
    Swal.fire({
        title:'Eliminar!',
        text:'Desea eliminar el Registro?',
        icon:'error',
        ShowCancelButton:true,
        confirmButtonText:'Aceptar',
        cancelButtonText:'Cancelar',
    }).then((result)=>{
        if(result.value){
            $.post("/thiago/controller/estudios.php?opc=eliminar",{idestudios:idestudios},function(data){
                $('#estudios_data').DataTable().ajax.reload();
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