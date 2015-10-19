/*Registro*/
$(document).ready(function(){
    $('#reg_principal').show();
    $('#test_need').hide();
    $('#reg_need').hide();
    $('#reg_test').hide();
    $('#cancelar').hide();
    
    $('#test_ls').click(function(){
       $('#reg_principal').hide();
       $('#reg_need').hide();
       $('#reg_test').show();
       $('#cancelar').show();
       window.location.href= "#reg_test";
    });
    
    $('#test_need').click(function(){
       $('#reg_principal').hide();
       $('#reg_need').show();
       $('#cancelar').show();
       $('#reg_test').hide();
       window.location.href= "#reg_need";
    });
    
    $('#cancelar').click(function(){
        $('#cancelar').hide();
        $('#reg_principal').show();
        $('#reg_need').hide();
        $('#reg_test').hide();
        window.location.href= "#info_educativa";
    });
    
    $('.ver_need').click(function(){
        if($('input:radio[name=need]:checked').val() == 'Si'){
            $('#test_need').show();
        }else{
            $('#test_need').hide();
        }
    });
    $('input[name="tipo_need[]"]').click(function(){
        var a = $('input[name="tipo_need[]"]').serializeArray();
        alert($('input:checkbox[name=tipo_need[]]:checked').val());
        
        /*if($('.tipo_need').is(':checked')){
            alert('Hola');
        }*/
    });
});

