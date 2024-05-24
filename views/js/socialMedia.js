var usu_id = $('#usu_idx').val();

function init(){
    $("socialMedia_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData= new FormData($("#socialMedia_form")[0]);
    
    $.ajax({
        url:"/Thiago/controller/social_media.php?opc=guardaryeditar",
        type:"POST",
        data:FormData,
        contentType:false,
        processData:false,

        success: function(data){
            console.log(data);
            $('#socialMedia_data').DataTable().
        }
    })
}

$(document).ready(function(){

});