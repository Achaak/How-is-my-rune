class myRunes {
    constructor() {
        this.listRunes = Array();
    }

    newRune(set, slot, grade, level, pri_eff, prefix_eff, sec_eff) {
        this.listRunes.push({
            "set"              : getSet(set),
            "slot"             : slot,
            "grade"            : grade,
            "level"            : level,
            'pri_eff_type'     : getStatType(pri_eff[0]),
            'pri_eff_value'    : pri_eff[1],
            'prefix_eff_type'  : getStatType(prefix_eff[0]),
            'prefix_eff_value' : prefix_eff[1],
            'sec_one_type'     : '',
            'sec_one_value'    : '',
            'sec_two_type'     : '',
            'sec_two_value'    : '',
            'sec_three_type'   : '',
            'sec_three_value'  : '',
            'sec_four_type'    : '',
            'sec_four_value'   : ''
        });
    }
}
var myListRunes = new myRunes();

function displayRunes() {
    for (var i = 0; i < myListRunes.listRunes.length; i++) {
        var rune = myListRunes.listRunes[i];

        $(".list-runes").append(
            "<tr>" +
                "<td>" + rune.set              + "</td>" +
                "<td>" + rune.slot             + "</td>" +
                "<td>" + rune.grade            + "</td>" +
                "<td>" + rune.level            + "</td>" +
                "<td>" + rune.pri_eff_type     + "</td>" +
                "<td>" + rune.pri_eff_value    + "</td>" +
                "<td>" + rune.prefix_eff_type  + "</td>" +
                "<td>" + rune.prefix_eff_value + "</td>" +
                "<td></td>" +
                "<td></td>" +
                "<td></td>" +
                "<td></td>" +
                "<td></td>" +
                "<td></td>" +
                "<td></td>" +
                "<td></td>" +
                "<td></td>" +
                "<td></td>" +
                "<td></td>" +
                "<td></td>" +
                "<td></td>" +
                "<td></td>" +
            "</tr>"
        );
        
    }
}