$(document).ready(function(){
    $(".modal-btn").click(function(e){              
        $('.modal-info').show("fade", 200);
    });

    $(".modal-info .close").click(function(e){            
        $('.modal-info').hide("fade", 200);   
    });
});



/* DELETE RUNE */
    $(document).ready(function(){        
        $(".modal-delete-rune .cancel").click(function(e){              
            $('.modal-delete-rune').hide("fade", 200);
        });
        
        $(".modal-delete-rune .delete").click(function(e){              
            $('.list-runes tr[id-rune="'+id_delete_rune+'"]').remove();   
            
            myListRunes.listRunes.splice(id_delete_rune, 1)

            $('.modal-delete-rune').hide("fade", 200);

            $('.list-runes tr:nth('+elemByPage+')').removeClass('hidden-pages');
        });
    });
/* END DELETE RUNE */