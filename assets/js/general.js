$('.select2').select2({
    minimumResultsForSearch: -1
});


let closeMenuFooter = false;

if ($(window).width() <= 990) {
    $('#wrap_info_footer .collapse ').removeClass('show');
    closeMenuFooter = true
}

$(document).ready(function() {
    


    $(window).on('resize', function(){
        var win = $(this); //this = window
        if (win.width() <= 990) {
            if(closeMenuFooter == false){
                $('#wrap_info_footer .collapse ').removeClass('show');
                closeMenuFooter = true
            }

        }
    });


});