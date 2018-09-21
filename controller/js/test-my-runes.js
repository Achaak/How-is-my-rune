var id_delete_rune = null;

class myRunes {
    constructor() {
        this.listRunes = Array();
    }

    newRune(location, quality, set, slot, grade, level, pri_eff, prefix_eff, sec_eff) {
        var pri_eff_type     = getStatType(pri_eff[0]);
        var pri_eff_value    = pri_eff[1];
        var prefix_eff_type  = getStatType(prefix_eff[0]);
        var prefix_eff_value = (prefix_eff[1] != 0 ? prefix_eff[1] : "");
        var sec_one_type     = (sec_eff[0] != undefined ? getStatType(sec_eff[0][0]) : '');
        var sec_one_value    = (sec_eff[0] != undefined ? [sec_eff[0][1], sec_eff[0][2], sec_eff[0][3]] : '');
        var sec_two_type     = (sec_eff[1] != undefined ? getStatType(sec_eff[1][0]) : '');
        var sec_two_value    = (sec_eff[1] != undefined ? [sec_eff[1][1], sec_eff[1][2], sec_eff[1][3]] : '');
        var sec_three_type   = (sec_eff[2] != undefined ? getStatType(sec_eff[2][0]) : '');
        var sec_three_value  = (sec_eff[2] != undefined ? [sec_eff[2][1], sec_eff[2][2], sec_eff[2][3]] : '');
        var sec_four_type    = (sec_eff[3] != undefined ? getStatType(sec_eff[3][0]) : '');
        var sec_four_value   = (sec_eff[3] != undefined ? [sec_eff[3][1], sec_eff[3][2], sec_eff[3][3]] : '');
        
        var eff = calcEfficiency(
            prefix_eff_type , prefix_eff_value, 
            sec_one_type    , (sec_one_value[0]   + sec_one_value[2]  ), 
            sec_two_type    , (sec_two_value[0]   + sec_two_value[2]  ), 
            sec_three_type  , (sec_three_value[0] + sec_three_value[2]), 
            sec_four_type   , (sec_four_value[0]  + sec_four_value[2] ),
            level, grade
        );

        var utility = getRuneUtility(pri_eff_type, sec_one_type, sec_two_type, sec_three_type, sec_four_type);

        this.listRunes.push({
            "location"         : location,
            "quality"          : quality,
            "set"              : getSet(set),
            "slot"             : slot,
            "grade"            : grade,
            "level"            : level,
            'pri_eff_type'     : pri_eff_type,
            'pri_eff_value'    : pri_eff_value,
            'prefix_eff_type'  : prefix_eff_type,
            'prefix_eff_value' : prefix_eff_value,
            'sec_one_type'     : sec_one_type,
            'sec_one_value'    : sec_one_value,
            'sec_two_type'     : sec_two_type,
            'sec_two_value'    : sec_two_value,
            'sec_three_type'   : sec_three_type,
            'sec_three_value'  : sec_three_value,
            'sec_four_type'    : sec_four_type,
            'sec_four_value'   : sec_four_value,
            'effiency'         : eff[0],
            'effiencyMax'      : eff[1],
            'utility'          : utility
        });
    }
}
var myListRunes = new myRunes();

function displayRunes() {
    $(".list-runes tbody").empty();

    for (var i = 0; i < myListRunes.listRunes.length; i++) {
        var rune = myListRunes.listRunes[i];

        /* STATS RUNE */
            var listValType = ['HP%', 'HP flat', 'ATK%', 'ATK flat', 'DEF%', 'DEF flat', 'SPD', 'CRate', 'CDmg', 'RES', 'ACC'];
            var tdStatSec = "";

            for (var j = 0; j < listValType.length; j++) {
                var value = 0;
                var grind = 0;

                if     (rune.sec_one_type   == listValType[j]) {
                    value = rune.sec_one_value[0];
                    grind = rune.sec_one_value[2];
                }
                else if(rune.sec_two_type   == listValType[j]) {
                    value = rune.sec_two_value[0];
                    grind = rune.sec_two_value[2];
                }
                else if(rune.sec_three_type == listValType[j]) {
                    value = rune.sec_three_value[0];
                    grind = rune.sec_three_value[2];
                }
                else if(rune.sec_four_type  == listValType[j]) {
                    value = rune.sec_four_value[0];
                    grind = rune.sec_four_value[2];
                }

                tdStatSec +=    "<td data-sort-value='" + (value+grind) + "' class='" + (grind == 0 ? "" : "grind") + "' stat-type='"+ ((value+grind) == 0 ? "" : listValType[j])+"'>" + 
                                    ((value+grind) == 0 ? "" : (value+grind)) + (grind == 0 ? "" : " (" + grind + ")") +
                                "</td>";
            }
        /* END STATS RUNE */

        /* UTILITIES RUNE */
            var utility = '';
            for (var j = 0; j < rune.utility.length; j++) {
                utility += '<li>' + rune.utility[j] + '</li>';
            }
            utility = '<ul class="utilities">' + utility + '</ul>';
        /* END UTILITIES RUNE */

        /* COLOR QUALITY RUNE */
            var idRuneQuality = (Math.round((rune.level/3))+1 == 6 ? 5 : Math.round((rune.level/3))+1);
            if(rune.quality > idRuneQuality) idRuneQuality = rune.quality;
            
            var qualityColor = "";
            switch (idRuneQuality) {
                case 1: qualityColor = 'normal';    break;
                case 2: qualityColor = 'magic';     break;
                case 3: qualityColor = 'rare';      break;
                case 4: qualityColor = 'hero';      break;
                case 5: qualityColor = 'legendary'; break;
            }
        /* END COLOR QUALITY RUNE */

        /* QUALITY RUNE */
            var quality = "";
            switch (rune.quality) {
                case 0: quality = 'Unknown';   break;
                case 1: quality = 'Normal';    break;
                case 2: quality = 'Magic';     break;
                case 3: quality = 'Rare';      break;
                case 4: quality = 'Hero';      break;
                case 5: quality = 'Legendary'; break;
            }
        /* END QUALITY RUNE */


        $(".list-runes tbody").append(
            "<tr id-rune='"+i+"'>" +
                "<td data-sort-value='" + rune.quality  + "' class='" + qualityColor + "'></td>" + 
                "<td data-sort-value='" + rune.location + "' class='location'>" + rune.location + "</td>" +
                "<td class='set'>"       + rune.set              + "</td>" +
                "<td class='slot'>"      + rune.slot             + "</td>" +
                "<td class='grade'>"     + rune.grade            + "</td>" +
                "<td class='level'>"     + rune.level            + "</td>" +
                "<td class='quality'>"   + quality               + "</td>" +
                "<td class='main-stat'>" + rune.pri_eff_type     + "</td>" +
                "<td>" + rune.pri_eff_value    + "</td>" +
                "<td>" + rune.prefix_eff_type  + "</td>" +
                "<td data-sort-value='" + (rune.prefix_eff_value == '' ? 0 : rune.prefix_eff_value) + "'>" + rune.prefix_eff_value + "</td>" +
                tdStatSec +
                "<td data-sort-value='" + rune.effiency    + "'>" + rune.effiency    + "%</td>" +
                "<td data-sort-value='" + rune.effiencyMax + "'>" + rune.effiencyMax + "%</td>" +
                "<td class='utility'>" + utility + "</td>" +
                "<td><ul class='rune-btn'><li class='delete'></li></ul></td>" +
            "</tr>"
        );        
    }
    
        
    /* DELETE RUNE */
        $(document).ready(function(){        
            $(".rune-btn .delete").click(function(e){              
                $('.modal-delete-rune').show("fade", 200);
                id_delete_rune = $(e.target).parent().parent().parent().attr('id-rune');
            });
        });
    /* END DELETE RUNE */

    pageMyRunes();
}