$(function() {

    /*========================================================================================
    =========================== VALIDACION DE FORMULARIO LIST MAIL ===========================
    =========================================================================================*/
    
        $("#form-home").validate({
            onfocusout: false,
            onkeyup: false,
            focusCleanup: true,
            focusInvalid: false,
            
            submitHandler: function(element) {
                var form = $(element).serialize();
                var icon = '';
                $.ajax({
                    data: form,
                    type: "POST",
                    url:"/send_data",
                    beforeSend: function() {
                        $('#loader').show();
                     },
                     complete: function(){
                        $('#loader').hide();
                     },
                    success: function(data){
                        data=JSON.parse(data); 
                        $("#modalAlertContent").html( data.Msg);    
                        if(data.ReturnStatus > 0){
                            icon = '<i class="fas fa-exclamation-triangle mr-2"></i>'
                        }else{
                            $('#form-home').trigger("reset");
                            icon = '<i class="fas fa-check-circle"></i>'
                        }
                        $("#modalAlertIcon").html(  icon);      
                        $("#modalAlertTitle").html( data.Title);      
                        $('#modalAlert').modal('show')                
                    }
                });
                return false;
            },
            
            rules:{
                email:{required:true,email:true, maxlength: 150},
                nombre:{required:true },
                apellidos:{required:true},
                celular:{required:true, min:7},
                curso:{required:true},

            },
    
            messages:{
                email:{required:"Por favor digite su Correo electr??nico.",email:"Por favor digite un Correo electr??nico v??lido.", maxlength: 'Por favor digite un Correo electr??nico v??lido.'},
                nombre:{required:"Por favor digite su Nombre", },
                apellidos:{required:"Por favor digite su Apellido",},
                celular:{required:"Por favor digite su N??mero" , min:"Min??mo 7 Digitos"},
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