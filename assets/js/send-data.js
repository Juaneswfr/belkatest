$(function() {

    /*========================================================================================
    =========================== VALIDACION DE FORMULARIO LIST MAIL ===========================
    =========================================================================================*/
    
        $("#form-home").validate({
            onfocusout: true,
            onkeyup: false,
            focusCleanup: true,
            focusInvalid: false,
            
            submitHandler: function(element) {
                var form = $(element).serialize();
                $.ajax({
                    data: form,
                    type: "POST",
                    url:"/send_data",
                    success: function(data){
                        data=JSON.parse(data); 
                        if(data.ReturnStatus == 0){
                            $("#aym_message").html('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />' + data.Msg);  
                            $(".aym_wrap_newsletter aside").addClass('aym_occult_form');
                            setTimeout(function(){ $("#aym_wrap_message").addClass('aym_show_message');  },500);
                        }else{
                            $("#aym_message").html('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />' + data.Msg);  
                            $(".aym_wrap_newsletter aside").addClass('aym_occult_form');
                            setTimeout(function(){ $("#aym_wrap_message").addClass('aym_show_message');  },500);
    
                            setTimeout(function(){ $("#aym_wrap_message").removeClass('aym_show_message');  },2000);
                            setTimeout(function(){ 	$(".aym_wrap_newsletter aside").removeClass('aym_occult_form');},2500);
                        }
                    }
                });
                return false;
            },
            
            rules:{
                email:{required:true,email:true, maxlength: 150},
                nombre:{required:true},
                apellidos:{required:true},
                celular:{required:true},
                curso:{required:true},

            },
    
            messages:{
                email:{required:"Por favor digite su Correo electrónico.",email:"Por favor digite un Correo electrónico válido.", maxlength: 'Por favor digite un Correo electrónico válido.'},
                nombre:{required:"Por favor digite su Nombre"},
                apellidos:{required:"Por favor digite su Apellido"},
                celular:{required:"Por favor digite su Número" },
                curso:{required:"Por favor seleccione un Curso" },
            },
            
            errorPlacement: function(error, element) {
                var beforeAttr = element.attr('placeholder');
                element.attr('placeholder', error.text());
                element.val('');
                
                element.on('focus', function () { element.attr('placeholder', beforeAttr); element.unbind('focus'); });
            }
        });
    
    });