$(document).ready(function(){

    // Delete
    $('.content span').click(function(){
        var id = $(this).data('id');
 
        // Selecting image source
        var imgElement_src = $( '#img_'+id ).attr("src");
        
        // AJAX request
        $.ajax({
            url: 'removefile.php',
            type: 'post',
            data: {path: imgElement_src},
            success: function(response){
                
                // Changing image source when remove
                if(response == 1){
                    $("#img_" + id).attr("src","images/noimage.png");
                }
            }
        });
    });
});