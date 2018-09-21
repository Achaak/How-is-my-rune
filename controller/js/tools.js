$(document).ready(function(){
    jQuery.expr[':'].contains = function(a, i, m) {
        return jQuery(a).text().toUpperCase()
        .indexOf(m[3].toUpperCase()) >= 0;
    };


    $(".tools select").change(function(){   
        toolsDisplayRunes();
    });
});

var timerDisplayRunes = null;
var cptDisplayRunes = 0;

/* BOUCLE */
    function loopDisplayRunes() {
        cptDisplayRunes--;
        if(cptDisplayRunes == 0) {
            clearInterval(timerDisplayRunes);
            toolsDisplayRunesAfter();
            $(".div-table-list-runes .loading").removeClass('show');
        }
    }
/* END BOUCLE */

/* LANCEMENT DE LA BOUCLE */
    function toolsDisplayRunes() {
        if(cptDisplayRunes != 0)
            clearInterval(timerDisplayRunes);
            
        cptDisplayRunes = 2;
        timerDisplayRunes = setInterval(loopDisplayRunes, 1000);
        $(".div-table-list-runes .loading").addClass('show');
    }
/* END */

function toolsDisplayRunesAfter() {
    if(cptDisplayRunes == 0) {
        $("table.list-runes tr").removeClass("hidden-tools");

        /* SEARCH LOCATION */
            if($('#search-location').val() == 1)
                $("table.list-runes .location:not(:contains('inventory'))").parent().addClass("hidden-tools");
            else if($('#search-location').val() == 2)
                $("table.list-runes .location:contains('inventory')").parent().addClass("hidden-tools");
        /* END SEARCH LOCATION */

        /* SEARCH MAIN STAT */
            if($('#search-main-stat span').length > 0) {
                var main_stat_txt = "";
                for (var i = 0; i < $('#search-main-stat span').length; i++) {
                    main_stat_txt += (main_stat_txt != "" ? "," : "") + "table.list-runes .main-stat:contains('" + $("#search-main-stat span:nth-child("+(i+1)+")").text() + "')";
                }
                $("table.list-runes .main-stat").not($(main_stat_txt)).parent().addClass("hidden-tools");
            }
        /* END SEARCH MAIN STAT */

        /* SEARCH QUALITY */
            if($('#search-quality span').length > 0) {
                var quality = "";
                for (var i = 0; i < $('#search-quality span').length; i++) {
                    quality += (quality != "" ? "," : "") + "table.list-runes .quality:contains('" + $("#search-quality span:nth-child("+(i+1)+")").text() + "')";
                }
                $("table.list-runes .quality").not($(quality)).parent().addClass("hidden-tools");
            }
        /* END SEARCH QUALITY */

        /* SEARCH SET */
            if($('#search-set span').length > 0) {
                var set = "";
                for (var i = 0; i < $('#search-set span').length; i++) {
                    set += (set != "" ? "," : "") + "table.list-runes .set:contains('" + $("#search-set span:nth-child("+(i+1)+")").text() + "')";
                }
                $("table.list-runes .set").not($(set)).parent().addClass("hidden-tools");
            }
        /* END SEARCH SET */

        /* SEARCH SLOT */
            if($('#search-slot span').length > 0) {
                var slot = "";
                for (var i = 0; i < $('#search-slot span').length; i++) {
                    slot += (slot != "" ? "," : "") + "table.list-runes .slot:contains('" + $("#search-slot span:nth-child("+(i+1)+")").text() + "')";
                }
                $("table.list-runes .slot").not($(slot)).parent().addClass("hidden-tools");
            }
        /* END SEARCH SLOT */

        /* SEARCH UTILITY */
            if($('#search-utility span').length > 0) {
                var utility = "";
                for (var i = 0; i < $('#search-utility span').length; i++) {
                    utility += (utility != "" ? "," : "") + "table.list-runes .utility:contains('" + $("#search-utility span:nth-child("+(i+1)+")").text() + "')";
                }
                $("table.list-runes .utility").not($(utility)).parent().addClass("hidden-tools");
            }
        /* END SEARCH UTILITY */

        /* SEARCH GRADE */
            var grade = "";
            for (var i = minSliderGrade; i <= maxSliderGrade; i++) {
                grade += (grade != "" ? "," : "") + "table.list-runes .grade:contains('" + i + "')";
            }
            $("table.list-runes .grade").not($(grade)).parent().addClass("hidden-tools");
        /* END SEARCH GRADE */

        /* SEARCH LEVEL */
            var level = "";
            for (var i = minSliderLevel; i <= maxSliderLevel; i++) {
                level += (level != "" ? "," : "") + "table.list-runes .level:contains('" + i + "')";
            }
            $("table.list-runes .level").not($(level)).parent().addClass("hidden-tools");
        /* END SEARCH LEVEL */

        /* SEARCH SECOND STAT */
            var second_stat = $("table.list-runes tbody tr");
            for (var i = 0; i <= $('#search-second-stat span').length; i++) {
                second_stat = second_stat.not($("table.list-runes tbody tr").not($('table.list-runes tbody tr td[stat-type="'+$('#search-second-stat span:nth-child('+(i+1)+')').text()+'"]').parent()));
            }
            $("table.list-runes tbody tr").not($(second_stat)).addClass("hidden-tools");
        /* END SEARCH SECOND STAT */

        pageMyRunes();
    }
}