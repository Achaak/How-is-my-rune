$(document).ready(function(){
    var maxValue = {
        "SPD"      : 30,
        "ATK%"     : 40,
        "ATK flat" : 80,
        "DEF%"     : 40,
        "DEF flat" : 85,
        "HP%"      : 40,
        "HP flat"  : 1775,
        "CRate"    : 30,
        "CDmg"     : 35,
        "RES"      : 40,
        "ACC"      : 40
    };
    var actualEfficiency = 0;
    var maxEfficiency    = 0;

    $(".stat-type, .rune-level").change(function(e){                    
        calcEfficiency();
    });
    $(".stat-value").keyup(function(e){       
        calcEfficiency();
    });

    function calcEfficiency() {
        actualEfficiency = 0;
        maxEfficiency    = 0;

        for (var i = 0; i < $('tr.stat').length; i++) {
            var trStat = $('tr.stat')[i];

            if(maxValue[$(trStat).find('.stat-type').val()] != undefined) {
                actualEfficiency += $(trStat).find('.stat-value').val()/maxValue[$(trStat).find('.stat-type').val()];
            }
        }

        // Actual stat
            actualEfficiency = (actualEfficiency+1)/2.8;

        // max stat
            var runLevel = ($('.rune-level').val() > 12 ? 12 : $('.rune-level').val() );
            maxEfficiency = ( (actualEfficiency*2.8) + (Math.round(((12-runLevel)/3))) * 0.2 ) / 2.8;

        // On 100%
            actualEfficiency = Math.round((actualEfficiency*100)*100)/100;
            maxEfficiency = Math.round((maxEfficiency*100)*100)/100;
        

        displayEfficiency(actualEfficiency, maxEfficiency);

        displayUtility();
    }

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
        var main_stat   = $(".main-stat .stat-type").val();
        var innate_stat = $(".innate-stat .stat-type").val();
        var stat_one    = $(".stat-one .stat-type").val();
        var stat_two    = $(".stat-two .stat-type").val();
        var stat_three  = $(".stat-three .stat-type").val();
        var stat_four   = $(".stat-four .stat-type").val();

        $('.result-rune-tester.utility').find('.type-utility').empty();
   
        for (var i = 0; i < runeUtility.length; i++) {
            var cptStat = 0;
            var tmpArrStat = [];

            if(runeUtility[i].stats.indexOf(main_stat)  >= 0 && tmpArrStat.indexOf(main_stat)  < 0) { 
                tmpArrStat.push(main_stat);  cptStat++;
            }
            if(runeUtility[i].stats.indexOf(stat_one)   >= 0 && tmpArrStat.indexOf(stat_one)   < 0) { 
                tmpArrStat.push(stat_one);   cptStat++;
            }
            if(runeUtility[i].stats.indexOf(stat_two)   >= 0 && tmpArrStat.indexOf(stat_two)   < 0) { 
                tmpArrStat.push(stat_two);   cptStat++;
            }
            if(runeUtility[i].stats.indexOf(stat_three) >= 0 && tmpArrStat.indexOf(stat_three) < 0) { 
                tmpArrStat.push(stat_three); cptStat++;
            }
            if(runeUtility[i].stats.indexOf(stat_four)  >= 0 && tmpArrStat.indexOf(stat_four)  < 0) { 
                tmpArrStat.push(stat_four);  cptStat++;
            }
            console.log(tmpArrStat);

            if(cptStat >= 3)
                $('.result-rune-tester.utility').find('.type-utility').append("<li>"+runeUtility[i].utility+"</li>");
        }
        
        if($('.result-rune-tester.utility').find('.type-utility li').length == 0)
            $('.result-rune-tester.utility').find('.type-utility').append("<li>---</li>");
    }
});