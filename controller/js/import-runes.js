$(document).ready(function(){               
    $(".input-file").change(function(e){
        $('.name-input-file').text($(this).prop('files')[0].name);
        
        var formData = new FormData();            
        var files = $(this).prop('files')[0];
        formData.append('file', files);

        $('.import-loader').show();

        $.ajax({    
            url: "model/php/read-JSON.php", 
            type: "POST",
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(results){  
                if(results.codeError == 0) {
                   for (i in results.contentJson.runes) {
                        var rune = results.contentJson.runes[i];

                        myListRunes.newRune(
                            rune.set_id,
                            rune.slot_no,
                            rune.class,
                            rune.upgrade_curr,
                            rune.pri_eff,
                            rune.prefix_eff,
                            rune.sec_eff
                        );
                    }

                    displayRunes();

                    $('.import-loader').hide();
                }
            }
        });
    });
});