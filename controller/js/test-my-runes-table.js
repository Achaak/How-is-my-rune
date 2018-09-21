$(document).ready(function(){
    $(".list-runes tr").click(function(){   
        setTimeout(function(){ pageMyRunes(); }, 100);
    });

    $(".nbRuneByPage select").change(function(){         
        elemByPage = $(this).val();

        if(elemByPage == -1) 
            elemByPage = $(".list-runes tbody tr:not(.hidden-tools)").length;
        
        pageMyRunes();
    });
});

var page = 1;
var elemByPage = 10;
function pageMyRunes() {
    $(".list-runes tbody tr").addClass("hidden-pages");
    
    $(".list-runes tbody tr:not(.hidden-tools)").slice((page-1)*elemByPage, page*elemByPage).removeClass("hidden-pages");
    
    nbPageMyRune();
}

function nbPageMyRune() {
    var nbPageMax = Math.ceil($(".list-runes tbody tr:not(.hidden-tools)").length/elemByPage);

    $(".pages").empty();

    if(page > 1)
        $(".pages").append("<span class='btn moins'>‹</span>")

    if(page > 3) {
        $(".pages").append("<span class='btn number'>1</span>")
        $(".pages").append("<span>...</span>");
    }
    for (var i = 1; i <= nbPageMax; i++) {
        if(i >= page-2 && i <= page+2)
            $(".pages").append("<span class='btn number "+(i==page ? "selected" : "")+"'>"+i+"</span>");
    }

    if(page < nbPageMax-3)
        $(".pages").append("<span>...</span>");
    if(page < nbPageMax-2)
        $(".pages").append("<span class='btn number'>"+nbPageMax+"</span>");

    if(page < nbPageMax)
        $(".pages").append("<span class='btn plus'>›</span>");



    $(".pages span.moins").click(function(){   
        if(page > 1){
            page--;
            pageMyRunes();
        }
    });
    $(".pages span.number").click(function(){   
        page = parseInt($(this).text());
        pageMyRunes();
    });
    $(".pages span.plus").click(function(){         
        if(page < Math.ceil($(".list-runes tbody tr:not(.hidden-tools)").length/elemByPage)){
            page++;
            pageMyRunes();
        }
    });
}