$(document).ready(function(){               
    $(".input-file").change(function(e){
        $('.name-input-file').text($(this).prop('files')[0].name);
        
        var formData = new FormData();            
        var files = $(this).prop('files')[0];
        formData.append('file', files);

        $('.import-loader').show();


        var reader = new FileReader();
        reader.onload = function(){
            var json = jQuery.parseJSON(reader.result);
            setJson(json);
        };
        reader.readAsText(files);
    });


    function setJson(json) {
        for (i in json.runes) {
            var rune = json.runes[i];

            myListRunes.newRune(
                'Inventory',
                rune.extra,
                rune.set_id,
                rune.slot_no,
                rune.class,
                rune.upgrade_curr,
                rune.pri_eff,
                rune.prefix_eff,
                rune.sec_eff
            );
        }

        for (i in json.unit_list) {
            var monster = json.unit_list[i];

            for (j in monster.runes) {
                var rune = monster.runes[j];

                myListRunes.newRune(
                    searchMonsterWithID(monster.unit_master_id),
                    rune.extra,
                    rune.set_id,
                    rune.slot_no,
                    rune.class,
                    rune.upgrade_curr,
                    rune.pri_eff,
                    rune.prefix_eff,
                    rune.sec_eff
                );
            }
         }

        displayRunes();

        $('.import-loader').hide();
        
        toolsDisplayRunes();
    }
});