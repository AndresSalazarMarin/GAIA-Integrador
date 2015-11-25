/*APP*/
$(document).ready(function(){
    //alert($('#tipo').val());
    $('#tipo').click(function(){
        if($('#tipo').val() == 4){
            $('#seg_tip').hide();
        }else{
            $('#seg_tip').show();
        }
    });
});