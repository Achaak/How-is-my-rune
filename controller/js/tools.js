$(document).ready(function(){
    jQuery.expr[':'].contains = function(a, i, m) {
        return jQuery(a).text().toUpperCase()
        .indexOf(m[3].toUpperCase()) >= 0;
    };


    $(".tools select").change(function(){   
        toolsDisplayRunes();
    });

    function toolsDisplayRunes() {
        $("table.list-runes tr").removeClass("hidden-tools");

        if($('#search-location').val() == 1)
            $("table.list-runes .location:not(:contains('inventory'))").parent().addClass("hidden-tools");
        else if($('#search-location').val() == 2)
            $("table.list-runes .location:contains('inventory')").parent().addClass("hidden-tools");

        pageMyRunes();
    }
});