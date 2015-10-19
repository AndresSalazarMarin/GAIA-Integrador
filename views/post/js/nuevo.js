$(document).ready(function(){
   $('#form1').validate({
    rules:{
        nombre:{
            required: true
        },
        usuario:{
            required: true
        },
        codigo:{
            required: true
        }
    },
    messages:{
        nombre:{
            required:"Debe introducir el nombre"
        },
        usuario:{
            required:"Debe introducir el usuario"
        },
        codigo:{
            required:"Debe introducir el codigo"
        }
    }
   });
});


