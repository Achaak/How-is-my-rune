var runeUtility = [
    { "utility" : "Nuker", "stats" : ["SPD", "CRate", "CDmg" ] },
        { "utility" : "ATK nuker", "stats" : ["SPD", "ATK%" , "CRate"] },
        { "utility" : "ATK nuker", "stats" : ["SPD", "ATK%" , "CDmg" ] },

        { "utility" : "DEF nuker", "stats" : ["SPD", "DEF%" , "CRate"] },
        { "utility" : "DEF nuker", "stats" : ["SPD", "DEF%" , "CDmg" ] },

        { "utility" : "HP nuker", "stats" : ["SPD", "HP%"  , "CRate"] },
        { "utility" : "HP nuker", "stats" : ["SPD", "HP%"  , "CDmg" ] },

        { "utility" : "Accuracy nuker", "stats" : ["SPD", "ACC", "CRate"] },
        { "utility" : "Accuracy nuker", "stats" : ["SPD", "ACC", "CDmg" ] },



    { "utility" : "Slow nuker", "stats" : ["CRate", "CDmg"] },
        { "utility" : "Slow ATK nuker", "stats" : ["ATK%", "CRate", "CDmg"] },

        { "utility" : "Slow DEF nuker", "stats" : ["DEF%" , "CRate", "CDmg"] },

        { "utility" : "Slow HP nuker", "stats" : ["HP%"  , "CRate", "CDmg"] },

        { "utility" : "Slow accuracy nuker", "stats" : ["ACC", "CRate", "CDmg"] },
        { "utility" : "Slow accuracy nuker", "stats" : ["ACC", "ATK%" , "CDmg"] },
        { "utility" : "Slow accuracy nuker", "stats" : ["ACC", "CRate", "ATK%"] },




    { "utility" : "Healer/support", "stats" : ["SPD", "DEF%", "HP%"] },
    { "utility" : "Healer/support", "stats" : ["SPD", "DEF%", "ACC"] },
    { "utility" : "Healer/support", "stats" : ["SPD", "ACC" , "HP%"] },
    
    { "utility" : "Healer/support ATK", "stats" : ["SPD", "ATK%", "HP%"] },
    { "utility" : "Healer/support ATK", "stats" : ["SPD", "ATK%", "ACC"] },

    { "utility" : "Healer/support RES", "stats" : ["SPD", "RES", "HP%"] },
    { "utility" : "Healer/support RES", "stats" : ["SPD", "RES", "ACC"] },



    { "utility" : "Slow healer/support", "stats" : ["DEF%", "HP%", "ACC"] },



    { "utility" : "Bombers" , "stats" : ["SPD", "ATK%", "ACC"] },



    { "utility" : "Raid monster", "stats" : ["SPD", "RES", "CRate"] },
    { "utility" : "Raid monster", "stats" : ["SPD", "RES", "CDmg" ] },
    { "utility" : "Raid monster", "stats" : ["SPD", "RES", "HP%"  ] },
    { "utility" : "Raid monster", "stats" : ["SPD", "RES", "DEF%" ] },

    { "utility" : "Raid frontliners" , "stats" : ["RES", "DEF%", "HP%"] }
];

var maxValue = [{
    "SPD"      : 5,
    "ATK%"     : 10,
    "ATK flat" : 20,
    "DEF%"     : 10,
    "DEF flat" : 20,
    "HP%"      : 10,
    "HP flat"  : 300,
    "CRate"    : 10,
    "CDmg"     : 10,
    "RES"      : 10,
    "ACC"      : 10
},
{
    "SPD"      : 10,
    "ATK%"     : 15,
    "ATK flat" : 25,
    "DEF%"     : 15,
    "DEF flat" : 25,
    "HP%"      : 15,
    "HP flat"  : 525,
    "CRate"    : 15,
    "CDmg"     : 15,
    "RES"      : 15,
    "ACC"      : 15
},
{
    "SPD"      : 15,
    "ATK%"     : 25,
    "ATK flat" : 40,
    "DEF%"     : 25,
    "DEF flat" : 40,
    "HP%"      : 25,
    "HP flat"  : 825,
    "CRate"    : 15,
    "CDmg"     : 20,
    "RES"      : 20,
    "ACC"      : 20
},
{
    "SPD"      : 20,
    "ATK%"     : 30,
    "ATK flat" : 50,
    "DEF%"     : 30,
    "DEF flat" : 50,
    "HP%"      : 30,
    "HP flat"  : 1125,
    "CRate"    : 20,
    "CDmg"     : 25,
    "RES"      : 25,
    "ACC"      : 25
},
{
    "SPD"      : 25,
    "ATK%"     : 35,
    "ATK flat" : 75,
    "DEF%"     : 35,
    "DEF flat" : 75,
    "HP%"      : 35,
    "HP flat"  : 1500,
    "CRate"    : 25,
    "CDmg"     : 25,
    "RES"      : 35,
    "ACC"      : 35
},
{
    "SPD"      : 30,
    "ATK%"     : 40,
    "ATK flat" : 100,
    "DEF%"     : 40,
    "DEF flat" : 100,
    "HP%"      : 40,
    "HP flat"  : 1875,
    "CRate"    : 30,
    "CDmg"     : 35,
    "RES"      : 40,
    "ACC"      : 40
}];

function getSet(idSet) {
    var set = "";

    switch (idSet) {
        case 1 : set = "Energy";        break;
        case 2 : set = "Guard";         break;
        case 3 : set = "Swift";         break;
        case 4 : set = "Blade";         break;
        case 5 : set = "Rage";          break;
        case 6 : set = "Focus";         break;
        case 7 : set = "Endure";        break;
        case 8 : set = "Fatal";         break;
        case 10: set = "Despair";       break;
        case 11: set = "Vampire";       break;
        case 13: set = "Violent";       break;
        case 14: set = "Nemesis";       break;
        case 15: set = "Will";          break;
        case 16: set = "Shield";        break;
        case 17: set = "Revenge";       break;
        case 18: set = "Destroy";       break;
        case 19: set = "Fight";         break;
        case 20: set = "Determination"; break;
        case 21: set = "Enhance";       break;
        case 22: set = "Accuracy";      break;
        case 23: set = "Tolerance";     break;
    }

    return set;
}

function getStatType(idStatType) {
    var statType = "";

    switch (idStatType) {
        case 1 : statType = "HP flat";  break;
        case 2 : statType = "HP%";      break;
        case 3 : statType = "ATK flat"; break;
        case 4 : statType = "ATK%";     break;
        case 5 : statType = "DEF flat"; break;
        case 6 : statType = "DEF%";     break;
        case 8 : statType = "SPD";      break;
        case 9 : statType = "CRate";    break;
        case 10: statType = "CDmg";     break;
        case 11: statType = "RES";      break;
        case 12: statType = "ACC";      break;
    }

    return statType;
}

function calcEfficiency(
    innetType    , innetValue, 
    statOneType  , statOneValue, 
    statTwoType  , statTwoValue, 
    statThreeType, statThreeValue, 
    statFourType , statFourValue,
    runelevel, grade
) {
    actualEfficiency = 0;
    maxEfficiency    = 0;

    
    if(maxValue[grade-1][innetType]     != undefined)
        actualEfficiency += innetValue     / maxValue[grade-1][innetType];
    if(maxValue[grade-1][statOneType]   != undefined)
        actualEfficiency += statOneValue   / maxValue[grade-1][statOneType];
    if(maxValue[grade-1][statTwoType]   != undefined)
        actualEfficiency += statTwoValue   / maxValue[grade-1][statTwoType];
    if(maxValue[grade-1][statThreeType] != undefined)
        actualEfficiency += statThreeValue / maxValue[grade-1][statThreeType];
    if(maxValue[grade-1][statFourType]  != undefined)
        actualEfficiency += statFourValue  / maxValue[grade-1][statFourType];

    // Actual stat
        actualEfficiency = (actualEfficiency+1)/2.8;

    // max stat
        var runeLevel = (runelevel > 12 ? 12 : runelevel );
        maxEfficiency = ( (actualEfficiency*2.8) + (Math.ceil(((12-runeLevel)/3))) * 0.2 ) / 2.8;

    // On 100%
        actualEfficiency = Math.round((actualEfficiency*100)*100)/100;
        maxEfficiency = Math.round((maxEfficiency*100)*100)/100;
    

    return [actualEfficiency, maxEfficiency];
}

function getRuneUtility(mainType, statOneType, statTwoType, statThreeType, statFourType) {
    var listUtility = [];

    for (var i = 0; i < runeUtility.length; i++) {
        var cptStat = 0;
        var tmpArrStat = [];

        if(runeUtility[i].stats.indexOf(mainType)      >= 0 && tmpArrStat.indexOf(mainType)      < 0) { 
            tmpArrStat.push(mainType);      cptStat++;
        }
        if(runeUtility[i].stats.indexOf(statOneType)   >= 0 && tmpArrStat.indexOf(statOneType)   < 0) { 
            tmpArrStat.push(statOneType);   cptStat++;
        }
        if(runeUtility[i].stats.indexOf(statTwoType)   >= 0 && tmpArrStat.indexOf(statTwoType)   < 0) { 
            tmpArrStat.push(statTwoType);   cptStat++;
        }
        if(runeUtility[i].stats.indexOf(statThreeType) >= 0 && tmpArrStat.indexOf(statThreeType) < 0) { 
            tmpArrStat.push(statThreeType); cptStat++;
        }
        if(runeUtility[i].stats.indexOf(statFourType)  >= 0 && tmpArrStat.indexOf(statFourType)  < 0) { 
            tmpArrStat.push(statFourType);  cptStat++;
        }

        if(cptStat >= 3 && listUtility.indexOf(runeUtility[i].utility) < 0)
            listUtility.push(runeUtility[i].utility);
    }
    
    return listUtility;
}

function searchMonsterWithID(id) {
    var monsterName = '';

    for (var i = 0; i < list_monsters.length; i++) {
        if(list_monsters[i].unit_master_id == id) {
            monsterName = list_monsters[i].name;
            break;
        }
    }

    return monsterName;
}