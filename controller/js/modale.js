$(document).ready(function(){
    $(".modal-btn").click(function(e){              
        $('.modal-info').show("fade", 200);
    });

    $(".modal-info .close").click(function(e){            
        $('.modal-info').hide("fade", 200);   
    });
});