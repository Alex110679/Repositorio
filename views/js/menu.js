var usu_id = $('#usu_idx').val();

function init(){
    $("#menu_form").on("submit",function(e){ /* se agrego la # ojo*/
        guardaryeditar(e);
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData= new FormData($("#menu_form")[0]);
    
    $.ajax({
        url:"/Thiago/controller/menu.php?opc=guardaryeditar",
        type:"POST",
        data:formData,
        contentType:false,
        processData:false,

        success: function(data){
            console.log(data);
            $('#menu_data').DataTable().ajax.reload();
            $('#Modalmenu').modal('hide');

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
    $('#menu_data').DataTable({
        "aProcessing":true,
        "aServerSide":true,
        dom: 'Bfrtip',
        buttons:[
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"/thiago/controller/menu.php?opc=listar",
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
    $('#titulo_modal').html('Nuevo Menu');
    //$('#menu_form')[0].reset();
    $('#Modalmenu').modal('show');
}

function editar (idmenu){
    $.post("/thiago/controller/menu.php?opc=mostrar",{idmenu:idmenu},function (data){
        data = JSON.parse(data);
        console.log(data)
        $('#idmenu').val (data.idmenu);
        $('#opcion').val (data.opcion);
        $('#url').val (data.url);
    });
    $('#titulo_modal').html('Editar menu');
    $('#Modalmenu').modal('show');
}

function eliminar(idmenu){
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
            $.post("/thiago/controller/menu.php?opc=eliminar",{idmenu:idmenu},function(data){
                $('#menu_data').DataTable().ajax.reload();
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