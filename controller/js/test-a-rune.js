$(document).ready(function(){
    var actualEfficiency = 0;
    var maxEfficiency    = 0;

    $(".stat-type, .rune-level, .rune-grade").change(function(e){                    
        var result = calcEfficiency(
            $('tr.stat.innate-stat').find('.stat-type').val(), $('tr.stat.innate-stat').find('.stat-value').val(),
            $('tr.stat.stat-one'   ).find('.stat-type').val(), $('tr.stat.stat-one'   ).find('.stat-value').val(),
            $('tr.stat.stat-two'   ).find('.stat-type').val(), $('tr.stat.stat-two'   ).find('.stat-value').val(),
            $('tr.stat.stat-three' ).find('.stat-type').val(), $('tr.stat.stat-three' ).find('.stat-value').val(),
            $('tr.stat.stat-four'  ).find('.stat-type').val(), $('tr.stat.stat-four'  ).find('.stat-value').val(),
            $('.rune-level').val(),
            $('.rune-grade').val()
        );

        displayEfficiency(result[0], result[1]);
        displayUtility();
    });
    $(".stat-value").keyup(function(e){       
        var result = calcEfficiency(
            $('tr.stat.innate-stat').find('.stat-type').val(), $('tr.stat.innate-stat').find('.stat-value').val(),
            $('tr.stat.stat-one'   ).find('.stat-type').val(), $('tr.stat.stat-one'   ).find('.stat-value').val(),
            $('tr.stat.stat-two'   ).find('.stat-type').val(), $('tr.stat.stat-two'   ).find('.stat-value').val(),
            $('tr.stat.stat-three' ).find('.stat-type').val(), $('tr.stat.stat-three' ).find('.stat-value').val(),
            $('tr.stat.stat-four'  ).find('.stat-type').val(), $('tr.stat.stat-four'  ).find('.stat-value').val(),
            $('.rune-level').val(),
            $('.rune-grade').val()
        );

        displayEfficiency(result[0], result[1]);
        displayUtility();
    });

    function displayEfficiency(actualEfficiency, maxEfficiency) {
        // rune-a 100 -> inf : vert
        // rune-b 80  -> 100 : jaune
        // rune-c 65  -> 80  : orange
        // rune-d 0   -> 65  : rouge

        $('.result-rune-tester .efficiency').removeClass('rune-a');
        $('.result-rune-tester .efficiency').removeClass('rune-b');
        $('.result-rune-tester .efficiency').removeClass('rune-c');
        $('.result-rune-tester .efficiency').removeClass('rune-d');

        $('.result-rune-tester.actual-efficiency').find('.number').html(actualEfficiency);
        $('.result-rune-tester.max-efficiency').find('.number').html(maxEfficiency);

        if     (actualEfficiency >= 100)
            $('.result-rune-tester.actual-efficiency').find('.efficiency').addClass('rune-a');
        else if(actualEfficiency >= 80 && actualEfficiency < 100)
            $('.result-rune-tester.actual-efficiency').find('.efficiency').addClass('rune-b');
        else if(actualEfficiency >= 65 && actualEfficiency <80)
            $('.result-rune-tester.actual-efficiency').find('.efficiency').addClass('rune-c');
        else if(actualEfficiency < 65)
            $('.result-rune-tester.actual-efficiency').find('.efficiency').addClass('rune-d');

        if     (maxEfficiency >= 100)
            $('.result-rune-tester.max-efficiency').find('.efficiency').addClass('rune-a');
        else if(maxEfficiency >= 80 && maxEfficiency < 100)
            $('.result-rune-tester.max-efficiency').find('.efficiency').addClass('rune-b');
        else if(maxEfficiency >= 65 && maxEfficiency <80)
            $('.result-rune-tester.max-efficiency').find('.efficiency').addClass('rune-c');
        else if(maxEfficiency < 65)
            $('.result-rune-tester.max-efficiency').find('.efficiency').addClass('rune-d');
    }

    function displayUtility() {
        $('.result-rune-tester.utility').find('.type-utility').empty();

        var listUtility = getRuneUtility(
            $(".main-stat .stat-type").val(),
            $(".stat-one .stat-type").val(),
            $(".stat-two .stat-type").val(),
            $(".stat-three .stat-type").val(),
            $(".stat-four .stat-type").val()
        )

        for (var i = 0; i < listUtility.length; i++) {
            $('.result-rune-tester.utility').find('.type-utility').append("<li>"+listUtility[i]+"</li>");
        }
        
        if(listUtility.length == 0)
            $('.result-rune-tester.utility').find('.type-utility').append("<li>---</li>");
    }
});