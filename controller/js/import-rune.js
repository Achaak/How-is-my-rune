$(document).ready(function(){               
    $(".input-file").change(function(e){
        $('.text-input-file').text($(this).prop('files')[0].name);
        
        var formData = new FormData();            
        var files = $(this).prop('files')[0];
        formData.append('file', files);

        $.ajax({    
            url: "model/php/read-JSON.php", 
            type: "POST",
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(results){  
                if(results.codeError == 0) {
                    var unit_list_results = results.contentJson.unit_list;

                    var unit_list = Array();
                    for (var i = 0; i < results.contentJson.unit_list.length; i++) {
                       for (var j = 0; j < list_monsters.length; j++) {
                            if(results.contentJson.unit_list[i].unit_master_id == list_monsters[j].unit_master_id) {
                                console.log(list_monsters[j].name);

                            }
                       }
                    }
                }
            }
        });
    });
});